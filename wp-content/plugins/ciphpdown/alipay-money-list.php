<?php
if ( !defined('ABSPATH') ) {exit;}
if(!is_user_logged_in())
{
	wp_die('请先登录系统');
}
$action=isset($_GET['action']) ?$_GET['action'] :false;
$id=isset($_GET['id']) && is_numeric($_GET['id']) ?intval($_GET['id']) :0;
if($action=="save" && current_user_can('administrator'))
{
	$result = isset($_POST['result']) && is_numeric($_POST['result']) ?intval($_POST['result']) :0;
	$note   = isset($_POST['note']) ?$_POST['note'] :'';
	$ok=mysql_query("update ".$wpdb->iceget." set ice_success=".$result.",ice_note='".$note."',ice_success_time='".date("Y-m-d H:i:s")."' where ice_id=".$id);
	if(!$ok)
	{
		echo "<font color='red'>系统更错处理失败</font>";
	}
	else 
	{
		$info=$wpdb->get_row("select * from ".$wpdb->iceget." where ice_id=".$id);
		$a=mysql_query("update ".$wpdb->iceinfo." set ice_get_money=ice_get_money+".$info->ice_money.' where ice_user_id='.$info->ice_user_id);
		if(!$a)
		{
			wp_die('扣除用户可提现额度失败!');
		}
		else 
		{
			echo "<font color='green'>更新成功!</font>";
		}
	}
	unset($id);
}
if($id && current_user_can('administrator'))
{
	$info=$wpdb->get_row("select * from ".$wpdb->iceget." where ice_id=".$id);
	if(!$info->ice_id)
	{
		echo "<font color='red'>错误的ID</font>";
		exit;
	}
	$userMoney=$wpdb->get_row("select * from ".$wpdb->iceinfo." where ice_user_id=".$info->ice_user_id);
	?>
	<div class="wrap">
<form method="post" action="<?php echo admin_url('admin.php?page='.plugin_basename(__FILE__).'&action=save&id='.$id); ?>" style="width:70%;float:left;">

        <h2>处理提现申请</h2>
        <table class="form-table">
            <tr>
                <td valign="top" width="30%"><strong>支付宝帐号</strong><br />
                </td>
                <td><?php echo $info->ice_alipay?></td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>支付宝姓名</strong><br />
                </td>
                <td><?php echo $info->ice_name?></td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>提现金额</strong><br />
                </td>
                <td><?php echo $info->ice_money?>(可提现金额:￥<?php echo $userMoney->ice_have_money - $userMoney->ice_get_money ?>)
                </td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>处理结果</strong><br />
                </td>
                <td><input type="radio" name="result" id="res1" value="1" <?php if($info->ice_success==1) echo "checked";?>/>已支付,
                <input type="radio" name="result" id="res1" value="0" <?php if($info->ice_success==0) echo "checked";?>/>未处理
                </td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>手续费</strong><br />
                </td>
                <td><?php echo  $info->ice_money*(get_option("ice_ali_money_site"))/100?>
                </td>
            </tr>
			<tr>
                <td valign="top" width="30%"><strong>实际转账</strong><br />
                </td>
                <td><?php echo  $info->ice_money*(100-get_option("ice_ali_money_site"))/100?>
                </td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>处理时间</strong><br />
                </td>
                <td><?php echo $info->ice_success_time?>
                </td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>备注</strong><br />
                </td>
                <td>
                <input type="text" name="note" id="note" value="<?php echo $info->ice_note ?>" />
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
	<?php
	exit;
}
//统计数据
$total_money=0;
if(current_user_can('administrator'))
{
	$sql     = "SELECT SUM(ice_money) FROM $wpdb->iceget";
	$listSql = "SELECT * FROM $wpdb->iceget order by ice_time DESC";
}
else 
{
	$user_Info = wp_get_current_user();
	$sql       = "SELECT SUM(ice_money) FROM $wpdb->iceget WHERE ice_user_id=".$user_Info->ID;
	$listSql   = "SELECT * FROM $wpdb->iceget where ice_user_id=".$user_Info->ID." order by ice_time DESC";
}
$total_money = $wpdb->get_var($sql);
$list        = $wpdb->get_results($listSql);

$lv=get_option("ice_ali_money_site");
?>
<div class="wrap">
	<h2>提现列表</h2>
	<p><?php printf(("共申请提现<strong>%.2f</strong>"), $total_money); ?>---<a href="<?php echo admin_url('admin.php?page=ciphpdown/alipay-money.php')?>">申请提现</a></p>
	<table class="widefat">
		<thead>
			<tr>
				<th width="15%">申请时间</th>
				<th width="15%">金额</th>
				<th width="15%">到帐金额</th>
				<th width="17%">支付状态</th>
				<th width="15%">备注</th>
				<?php if(current_user_can('administrator')){?><th>管理</th><?php }?>		
			</tr>
		</thead>
		<tbody>
	<?php
		if($list) {
			foreach($list as $value)
			{
				$result=$value->ice_success==1?'已支付':'--';
				echo "<tr>\n";
				echo "<td>$value->ice_time</td>\n";
				echo "<td>$value->ice_money</td>\n";
				echo "<td>".sprintf("%.2f",(((100-$lv)*$value->ice_money)/100))."</td>\n";
				echo "<td>$result</td>\n";
				echo "<td>$value->ice_note</td>\n";
				if(current_user_can('administrator')){echo "<td><a href='".admin_url('admin.php?page=ciphpdown/alipay-money-list.php&id='.$value->ice_id)."'>操作</a></td>";}
				echo "</tr>";
			}
		}
		else
		{
			echo '<tr><td colspan="4" align="center"><strong>没有交易记录</strong></td></tr>';
		}
	?>
	</tbody>
	</table>
</div>
