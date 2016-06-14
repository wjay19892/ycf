<?php
/**
 * setting
 */
if($_POST['Submit']) {
	$ice_ali_partner        = trim($_POST['ice_ali_partner']);
	$ice_ali_security_code  = trim($_POST['ice_ali_security_code']);
	$ice_ali_seller_email   = trim($_POST['ice_ali_seller_email']);
	$ice_ali_money_site     = trim($_POST['ice_ali_money_site']);
	$ice_payapl_api_uid     = trim($_POST['ice_payapl_api_uid']);
	$ice_payapl_api_pwd     = trim($_POST['ice_payapl_api_pwd']);
	$ice_payapl_api_md5     = trim($_POST['ice_payapl_api_md5']);
	$ice_payapl_api_rmb     = trim($_POST['ice_payapl_api_rmb']);
	if(!is_numeric($ice_ali_money_site))
	{
		wp_die('手续费必须是数字');
	}
	$ice_ali_seller_name    = $_POST['ice_ali_seller_name'];
	$update_ice_ali_queries = array();
	$update_ice_ali_text    = array();
	//
	$update_ice_ali_queries[] = update_option('ice_fun_partner', trim($_POST['ice_fun_partner']));
	$update_ice_ali_queries[] = update_option('ice_fun_security_code', trim($_POST['ice_fun_security_code']));
	$update_ice_ali_queries[] = update_option('ice_fun_seller_email', trim($_POST['ice_fun_seller_email']));
	$update_ice_ali_queries[] = update_option('ice_fun_seller_name', trim($_POST['ice_fun_seller_name']));
	//
	$update_ice_ali_queries[] = update_option('ice_ali_partner', $ice_ali_partner);
	$update_ice_ali_queries[] = update_option('ice_ali_security_code', $ice_ali_security_code);
	$update_ice_ali_queries[] = update_option('ice_ali_seller_email', $ice_ali_seller_email);
	$update_ice_ali_queries[] = update_option('ice_ali_seller_name', $ice_ali_seller_name);
	$update_ice_ali_queries[] = update_option('ice_ali_money_site', $ice_ali_money_site);
	$update_ice_ali_queries[] = update_option('ice_payapl_api_uid', $ice_payapl_api_uid);
	$update_ice_ali_queries[] = update_option('ice_payapl_api_pwd', $ice_payapl_api_pwd);
	$update_ice_ali_queries[] = update_option('ice_payapl_api_md5', $ice_payapl_api_md5);
	$update_ice_ali_queries[] = update_option('ice_payapl_api_rmb', $ice_payapl_api_rmb);
	$update_ice_ali_queries[] = update_option('ice_china_bank_uid', trim($_POST['ice_china_bank_uid']));
	$update_ice_ali_queries[] = update_option('ice_china_bank_pwd', trim($_POST['ice_china_bank_pwd']));
	$update_ice_ali_text[] = '双功能接口-合作者身份(Partner ID)';
	$update_ice_ali_text[] = '双功能接口-安全校验码(Key)';
	$update_ice_ali_text[] = '双功能接口-支付宝收款账号';
	$update_ice_ali_text[] = '双功能接口-收款方名称';
	$update_ice_ali_text[] = '合作者身份(Partner ID)';
	$update_ice_ali_text[] = '安全校验码(Key)';
	$update_ice_ali_text[] = '支付宝收款账号';
	$update_ice_ali_text[] = '收款方名称';
	$update_ice_ali_text[] = '手续费';
	$update_ice_ali_text[] = 'payapl帐号';
	$update_ice_ali_text[] = 'paypal密码';
	$update_ice_ali_text[] = 'payapl签名';
	$update_ice_ali_text[] = '美元汇率';
	$update_ice_ali_text[] = '银联帐号';
	$update_ice_ali_text[] = '银联MD5-KEY';
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
$ice_fun_partner       = get_option('ice_fun_partner');
$ice_fun_security_code = get_option('ice_fun_security_code');
$ice_fun_seller_email  = get_option('ice_fun_seller_email');
$ice_fun_seller_name   = get_option('ice_fun_seller_name');
//
$ice_ali_partner       = get_option('ice_ali_partner');
$ice_ali_security_code = get_option('ice_ali_security_code');
$ice_ali_seller_email  = get_option('ice_ali_seller_email');
$ice_ali_seller_name   = get_option('ice_ali_seller_name');
$ice_ali_money_site    = get_option('ice_ali_money_site');
$ice_payapl_api_uid    = get_option('ice_payapl_api_uid');
$ice_payapl_api_pwd    = get_option('ice_payapl_api_pwd');
$ice_payapl_api_md5    = get_option('ice_payapl_api_md5');
$ice_payapl_api_rmb    = get_option('ice_payapl_api_rmb');
$ice_china_bank_uid  = get_option('ice_china_bank_uid');
$ice_china_bank_pwd  = get_option('ice_china_bank_pwd');
?>
<div class="wrap">
<?php if(!empty($text))
{
	echo '<div id="message">'.$text.'</div>'; 
} ?>
<form method="post" action="<?php echo admin_url('admin.php?page='.plugin_basename(__FILE__)); ?>" style="width:70%;float:left;">

        <h2>支付设置</h2>
        <h3>支付宝设置</h3>
        <table class="form-table">
            <tr>
                <td valign="top" width="30%"><strong>合作者身份(Partner ID)</strong><br />
                </td>
                <td>
                <input type="text" id="ice_ali_partner" name="ice_ali_partner" value="<?php echo $ice_ali_partner ; ?>" maxlength="50" size="50" />
                </td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>安全校验码(Key)</strong><br />
                </td>
                <td>
                <input type="text" id="ice_ali_security_code" name="ice_ali_security_code" value="<?php echo $ice_ali_security_code; ?>" maxlength="50" size="50" />
                </td>
            </tr>
                        <tr>
                <td valign="top" width="30%"><strong>支付宝收款账号</strong><br />
                </td>
                <td>
                <input type="text" id="ice_ali_seller_email" name="ice_ali_seller_email" value="<?php echo $ice_ali_seller_email; ?>" maxlength="100" size="50" />
                </td>
            </tr>
                                    <tr>
                <td valign="top" width="30%"><strong>收款方名称</strong><br />
                </td>
                <td>
                <input type="text" id="ice_ali_seller_name" name="ice_ali_seller_name" value="<?php echo $ice_ali_seller_name; ?>" maxlength="100" size="50" />
                </td>
            </tr>
			 <tr>
                <td valign="top" width="30%"><strong>手续费</strong><br />
                </td>
                <td>
                <input type="text" id="ice_ali_money_site" name="ice_ali_money_site" value="<?php echo $ice_ali_money_site; ?>" maxlength="100" size="50" />%
                </td>
            </tr>
    </table>
        <br />
                <h3>支付宝双功能接口设置</h3>
        <table class="form-table">
            <tr>
                <td valign="top" width="30%">合作者身份(Partner ID)<br />
                </td>
                <td>
                <input type="text" id="ice_fun_partner" name="ice_fun_partner" value="<?php echo $ice_fun_partner ; ?>" maxlength="50" size="50" />
                </td>
            </tr>
            <tr>
                <td valign="top" width="30%">安全校验码(Key)<br />
                </td>
                <td>
                <input type="text" id="ice_fun_security_code" name="ice_fun_security_code" value="<?php echo $ice_fun_security_code; ?>" maxlength="50" size="50" />
                </td>
            </tr>
                        <tr>
                <td valign="top" width="30%">支付宝收款账号<br />
                </td>
                <td>
                <input type="text" id="ice_fun_seller_email" name="ice_fun_seller_email" value="<?php echo $ice_fun_seller_email; ?>" maxlength="100" size="50" />
                </td>
            </tr>
                                    <tr>
                <td valign="top" width="30%">收款方名称<br />
                </td>
                <td>
                <input type="text" id="ice_fun_seller_name" name="ice_fun_seller_name" value="<?php echo $ice_fun_seller_name; ?>" maxlength="100" size="50" />
                </td>
            </tr>
    </table>
        <br/>
		        <h3>PayPal设置</h3>
        <table class="form-table">
            <tr>
                <td valign="top" width="30%"><strong>API帐号</strong><br />
                </td>
                <td>
                <input type="text" id="ice_payapl_api_uid" name="ice_payapl_api_uid" value="<?php echo $ice_payapl_api_uid ; ?>" maxlength="50" size="50" />
                </td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>API密码</strong><br />
                </td>
                <td>
                <input type="text" id="ice_payapl_api_pwd" name="ice_payapl_api_pwd" value="<?php echo $ice_payapl_api_pwd; ?>" maxlength="50" size="50" />
                </td>
            </tr>
                        <tr>
                <td valign="top" width="30%"><strong>API签名</strong><br />
                </td>
                <td>
                <input type="text" id="ice_payapl_api_md5" name="ice_payapl_api_md5" value="<?php echo $ice_payapl_api_md5; ?>" maxlength="100" size="50" />
                </td>
            </tr>
			 <tr>
                <td valign="top" width="30%"><strong>汇率</strong><br />
                </td>
                <td>
                <input type="text" id="ice_payapl_api_rmb" name="ice_payapl_api_rmb" value="<?php echo $ice_payapl_api_rmb; ?>" maxlength="100" size="50" />
                </td>
            </tr>
    </table>
    <br />
		        <h3>银联帐号设置</h3>
        <table class="form-table">
            <tr>
                <td valign="top" width="30%"><strong>商户号</strong><br />
                </td>
                <td>
                <input type="text" id="ice_china_bank_uid" name="ice_china_bank_uid" value="<?php echo $ice_china_bank_uid ; ?>" maxlength="50" size="50" />
                </td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>MD5密钥</strong><br />
                </td>
                <td>
                <input type="text" id="ice_china_bank_pwd" name="ice_china_bank_pwd" value="<?php echo $ice_china_bank_pwd; ?>" maxlength="50" size="50" />
                </td>
            </tr>
    </table>
<p class="submit">
            <input type="submit" name="Submit" value="保存设置" class="button-primary"/>
            </p>      
</form>

			</div>