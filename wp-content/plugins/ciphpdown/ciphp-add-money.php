<?php
if ( !defined('ABSPATH') ) {exit;}
if(!is_user_logged_in())
{
	wp_die('请登录系统');
}
?>
<?php 
if($_POST)
{
	$money=$_POST['ice_money'];
	$user_name=$_POST['user_id'];
	$user_info=get_user_by('login', $user_name);
	if($user_info)
	{
		$user_id=$user_info->ID;
		if(addUserMoney($user_id, $money))
		{
			$sql="INSERT INTO $wpdb->icemoney (ice_money,ice_num,ice_user_id,ice_time,ice_success,ice_note,ice_success_time,ice_alipay)
			VALUES ('$money','".date("y").mt_rand(10000000,99999999)."','".$user_id."','".date("Y-m-d H:i:s")."',1,'','','')";
			mysql_query($sql);
		}
		echo "<font color='green'>充值成功!</font>";
	}
	else
	{
		echo "不存在的用户";
	}
}
?>
<div class="wrap">
<script type="text/javascript">
function checkFm()
{
	if(document.getElementById("ice_money").value=="")
	{
		alert('请输入金额');
		return false;
	}
}
</script>
<form action="" method="post" onsubmit="return checkFm();">

        <h2>给用户充值</h2>
        <table class="form-table">
            <tr>
                <td valign="top" width="30%"><strong>充值金额</strong><br />
                </td>
                <td>
                <input type="text" id="ice_money" name="ice_money" maxlength="50" size="50" />(请输入一个整数)
                </td>
            </tr>
                        <tr>
                <td valign="top" width="30%"><strong>用户名</strong><br />
                </td>
                <td>
                 <input type="text" id="user_id" name="user_id" maxlength="50" size="50" />
                </td>
            </tr>
    </table>
        <br /> <br />
        <table> <tr>
        <td><p class="submit">
            <input type="submit" name="Submit" value="充值" class="button-primary" onclick="return confirm('确认充值?');"/>
            </p>
        </td>

        </tr> </table>

</form>
			</div>