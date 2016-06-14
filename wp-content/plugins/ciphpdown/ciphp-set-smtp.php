<?php
/**
 * setting
 */
if($_POST['Submit']) {
	$ciphp_smtp_server= trim($_POST['ciphp_smtp_server']);
	$ciphp_smtp_user  = trim($_POST['ciphp_smtp_user']);
	$ciphp_smtp_pwd   = trim($_POST['ciphp_smtp_pwd']);
	$update_ice_ali_queries = array();
	$update_ice_ali_text    = array();
	$update_ice_ali_queries[] = update_option('ciphp_smtp_server', $ciphp_smtp_server);
	$update_ice_ali_queries[] = update_option('ciphp_smtp_user', $ciphp_smtp_user);
	$update_ice_ali_queries[] = update_option('ciphp_smtp_pwd', $ciphp_smtp_pwd);
	$update_ice_ali_text[] = 'SMTP服务器';
	$update_ice_ali_text[] = 'SMTP用户名';
	$update_ice_ali_text[] = 'SMTP密码';
	$update_ice_ali_text[] = '收款方名称';

	$text = '';
	foreach($update_ice_ali_queries as $k=>$v)
	{
		if($v)
		{
			$text .= '<font color="green">'.$update_ice_ali_text[$k].' 更新成功！</font><br />';
		}
	}
	if(empty($text))
	{
		$text = '<font color="red">没有更新任何信息</font>';
	}

}
$ciphp_smtp_server = get_option('ciphp_smtp_server');
$ciphp_smtp_user   = get_option('ciphp_smtp_user');
$ciphp_smtp_pwd    = get_option('ciphp_smtp_pwd');
?>
<div class="wrap">
<?php if(!empty($text))
{
	echo '<div id="message">'.$text.'</div>'; 
} ?>
<form method="post" action="<?php echo admin_url('admin.php?page='.plugin_basename(__FILE__)); ?>" style="width:70%;float:left;">

        <h3>SMTP帐号设置</h3>
        <table class="form-table">
            <tr>
                <td valign="top" width="30%"><strong>SMTP服务器</strong><br />
                </td>
                <td>
                <input type="text" id="ciphp_smtp_server" name="ciphp_smtp_server" value="<?php echo $ciphp_smtp_server ; ?>" maxlength="50" size="50" />
                </td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>帐号</strong><br />
                </td>
                <td>
                <input type="text" id="ciphp_smtp_user" name="ciphp_smtp_user" value="<?php echo $ciphp_smtp_user; ?>" maxlength="50" size="50" />
                </td>
            </tr>
                        <tr>
                <td valign="top" width="30%"><strong>密码</strong><br />
                </td>
                <td>
                <input type="text" id="ciphp_smtp_pwd" name="ciphp_smtp_pwd" value="<?php echo $ciphp_smtp_pwd; ?>" maxlength="100" size="50" />
                </td>
            </tr>
    </table>
        <table> <tr>
        <td><p class="submit">
            <input type="submit" name="Submit" value="保存设置" class="button-primary"/>
            </p>
        </td>

        </tr> </table>

</form>
			</div>