<?php
if ( !defined('ABSPATH') ) {exit;}
$fee=get_option("ice_ali_money_site");
$fee=isset($fee) ?$fee :100;
$user_Info   = wp_get_current_user();
$userMoney=$wpdb->get_row("select * from ".$wpdb->iceinfo." where ice_user_id=".$user_Info->ID);
if(!$userMoney)
{
	$okMoney=0;
}
else 
{
	$okMoney=$userMoney->ice_have_money - $userMoney->ice_get_money;
}
if($_POST['Submit']) {
	$getinfo=$wpdb->get_row("select * from ".$wpdb->iceget." where ice_user_id=".$user_Info->ID." and ice_success=0");
	if($getinfo)
	{
		wp_die('您已经申请提现，请等待管理员处理!');
	}
	$check7day=$wpdb->get_row("select * from ".$wpdb->iceget." where ice_user_id=".$user_Info->ID."  order by ice_id desc");
	if($check7day && (time()-strtotime($check7day->ice_time) < 7*24*3600))
	{
		wp_die('您好，7天内只能申请一次提现!上次申请提现时间：'.$check7day->ice_time);
	}
	$ice_alipay = $_POST['ice_alipay'];
	$ice_name   = $_POST['ice_name'];
	$ice_money  = isset($_POST['ice_money']) && is_numeric($_POST['ice_money']) ?$_POST['ice_money'] :0;
	if($ice_money<5)
	{
		echo "<font color='red'>提现金额必须大于￥5.00</font>";
	}
	elseif(empty($ice_name) || empty($ice_alipay))
	{
		echo "<font color='red'>请输入支付宝帐号和姓名</font>";
	}
	elseif($ice_money > $okMoney)
	{
		echo "<font color='red'>提现金额大于可提现金额".$okMoney."</font>";
	}
	else
	{
		$sql="insert into ".$wpdb->iceget."(ice_money,ice_user_id,ice_time,ice_success,ice_success_time,ice_note,ice_name,ice_alipay)values
			('".$ice_money."','".$user_Info->ID."','".date("Y-m-d H:i:s")."',0,'','','$ice_name','$ice_alipay')";
		if(mysql_query($sql))
		{
			echo "<font color='red'>申请成功！等待管理员处理!</font>";
		}
		else
		{
			echo "<font color='red'>系统错误请稍后重试</font>";
		}
	}
}
?>
<div class="wrap">
<form method="post" action="<?php echo admin_url('admin.php?page='.plugin_basename(__FILE__)); ?>" style="width:70%;float:left;">

        <h2>提现申请</h2>
        <table class="form-table">
            <tr>
                <td valign="top" width="30%"><strong>支付宝帐号</strong><br />
                </td>
                <td>
                <input type="text" id="ice_alipay" name="ice_alipay" maxlength="50" size="50" />
                </td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>支付宝姓名</strong><br />
                </td>
                <td>
                <input type="text" id="ice_name" name="ice_name" maxlength="50" size="50" />
                </td>
            </tr>
             <tr>
                <td valign="top" width="30%"><strong>手续费</strong><br />
                </td>
                <td>
                <?php echo get_option("ice_ali_money_site")?>%
                </td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>提现金额</strong><br />
                </td>
                <td>
                <input type="text" id="ice_money" name="ice_money" maxlength="50" size="50" />(总金额:￥<?php echo sprintf("%.2f",$okMoney)?>
                <!--最多可提现：￥<?php echo sprintf("%.2f",$okMoney*(100-$fee)/100)?>-->)
                </td>
            </tr>
    </table>
        <br /> <br />
        <table> <tr>
        <td><p class="submit">
            <input type="submit" name="Submit" value="保存设置" class="button-primary"/>
            </p>
        </td>

        </tr> </table>

</form>
			</div>