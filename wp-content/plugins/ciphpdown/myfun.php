<?php
date_default_timezone_set('Asia/Chongqing');
function sendMailToUser($tomail,$content,$postid)
{
	$ciphp_smtp_server = get_option('ciphp_smtp_server');
	$ciphp_smtp_user   = get_option('ciphp_smtp_user');
	$ciphp_smtp_pwd    = get_option('ciphp_smtp_pwd');
	$info=get_postdata($postid);
	$mailbody="来自：".$info['Title'].'的隐藏内容<br/>隐藏字段：'.$content;
	$mailsubject="来自：".$info['Title'].'的隐藏内容';
	$mailcfg['server'] = $ciphp_smtp_server;
	$mailcfg['port'] = '25';
	$mailcfg['auth'] = 1;
	$mailcfg['from'] = $ciphp_smtp_user; //
	$mailcfg['auth_username'] = $ciphp_smtp_user; //
	$mailcfg['auth_password'] = $ciphp_smtp_pwd;//
	$stmp=new stmp($mailcfg);
	$mail=array('to'=>$tomail,'subject'=>$mailsubject,'content'=>$mailbody);
	if(!$stmp->send($mail))
	{
		return $stmp->get_error();
	}
}
function showMsgNotice($msg,$color=FALSE)
{
	$color=$color?'green' :'red';
	echo '<font color="'.$color.'">'.$msg.'</font>';
}

function addVipLog($price,$userType)
{
	global $wpdb;
	$user_info = wp_get_current_user();
	$sql="insert into $wpdb->vip(ice_price,ice_user_id,ice_user_type,ice_time)values('".$price."','".$user_info->ID."','".$userType."','".date("Y-m-d H:i:s")."')";
	$wpdb->query($sql);
}

function getUsreMemberType()
{
	global $wpdb;
	$user_info = wp_get_current_user();
	$userTypeInfo=$wpdb->get_row("select * from  ".$wpdb->iceinfo." where ice_user_id=".$user_info->ID);
	if($userTypeInfo)
	{
		if(time() > strtotime($userTypeInfo->endTime) +24*3600)
		{
			$wpdb->query("update $wpdb->iceinfo set userType=0,endTime='1000-01-01' where ice_user_id=".$user_info->ID);
			return 0;
		}
		return $userTypeInfo->userType;
	}
	return FALSE;
}

function getUsreMemberTypeEndTime()
{
	global $wpdb;
	$user_info = wp_get_current_user();
	$userTypeInfo=$wpdb->get_row("select * from  ".$wpdb->iceinfo." where ice_user_id=".$user_info->ID);
	if($userTypeInfo)
	{
		return $userTypeInfo->endTime;
	}
	return FALSE;
}

function checkUsreMemberType()
{
	global $wpdb;
	$user_info = wp_get_current_user();
	$sql="select * from  ".$wpdb->iceinfo." where ice_user_id=".$user_info->ID;
	$info=$wpdb->get_row($sql);
	if(!$info)
	{
		showMsgNotice("您的账户余额不足，请先充值!");
		return FALSE;
	}
	if($info->userType)
	{
		showMsgNotice("您已经购买过会员服务，请勿重复购买!");
		return FALSE;
	}
	return true;
}

function userPayMemberSetData($userType)
{
	global $wpdb;
	$user_info = wp_get_current_user();
	$endTime=date("Y-m-d");
	if($userType==7)
	{
		$endTime=date("Y-m-d",strtotime("+1 month"));
	}
	elseif ($userType==8)
	{
		$endTime=date("Y-m-d",strtotime("+3 month"));
	}
	elseif ($userType==9)
	{
		$endTime=date("Y-m-d",strtotime("+1 year"));
	}
	$sql="update ".$wpdb->iceinfo." set userType=".$userType.",endTime='".$endTime."' where ice_user_id=".$user_info->ID;
	if($wpdb->query($sql))
	{
		return true;
	}
	return FALSE;
}

function ciphpSetUserOrderIsSuccess($orderNum,$money)
{
	global $wpdb;
	$row=$wpdb->get_row("select * from ".$wpdb->icemoney." where ice_num='".$orderNum."'");
	{
		if($row->ice_success)
		{
			return true;
		}
		else
		{
			$updatOrder=mysql_query("update $wpdb->icemoney set ice_success=1 where ice_num=".$orderNum);
			if($updatOrder)
			{
				addUserMoney($row->ice_user_id,$money);
			}
			return false;
		}
	}
}
function ciphpCheckAlipayReturnNum($orderNum,$money)
{
	global $wpdb;
	$row=$wpdb->get_row("select * from ".$wpdb->icemoney." where ice_num='".$orderNum."'");
	if($row)
	{
		if($row->ice_money == $money)
		{
			return true;
		}
	}
	return false;
}
function ciphpAddDownload($subject,$postid,$price,$success,$data,$postUserId)
{
	global $wpdb;
	$user_info = wp_get_current_user();
	$url       = md5(date("YmdHis").$postid.mt_rand(1000000, 9999999));
	$orderNum  = date("d").mt_rand(10000, 99999).mt_rand(10,99);
	$sql       = "INSERT INTO $wpdb->icealipay (ice_num,ice_title,ice_post,ice_price,ice_success,ice_url,ice_user_id,ice_time,ice_data,
	ice_author)VALUES ('$orderNum','$subject','$postid','$price','$success','$url','".$user_info->ID."','".date("Y-m-d H:i:s")."','".$data."','$postUserId')";
	if(mysql_query($sql))
	{
		return $url;
	}
	return false;
}
function ciphpSetUserMoneyXiaoFei($num)
{
	global $wpdb;
	$user_info=wp_get_current_user();
	return mysql_query("update $wpdb->iceinfo set ice_get_money=ice_get_money+".$num." where ice_user_id=".$user_info->ID);
}
function ciphpGetUserOkMoney()
{
	global $wpdb;
	$user_info=wp_get_current_user();
	if($user_info)
	{
		$userMoney=$wpdb->get_row("select * from ".$wpdb->iceinfo." where ice_user_id=".$user_info->ID);
		return $userMoney==false ?0:($userMoney->ice_have_money - $userMoney->ice_get_money);
	}
	return 0;
}

function showMsg($msg)
{
	get_header();
	echo "<h2>文件下载系统信息提示</h2>";
	echo "<div class='msg' style='height:100px;width:600px;margin:0 auto;padding-top:50px;align-text:center'>".$msg."</div>";
	get_footer();
	exit;
}

function addUserMoney($userId,$money)
{
	global $wpdb;
	$myinfo=$wpdb->get_row("select * from ".$wpdb->iceinfo." where ice_user_id=".$userId);
	if(!$myinfo)
	{
		return mysql_query("insert into $wpdb->iceinfo(ice_have_money,ice_user_id,ice_get_money)values('$money','$userId',0)");
	}
	else
	{
		return mysql_query("update $wpdb->iceinfo set ice_have_money=ice_have_money+".$money." where ice_user_id=".$userId);
	}
}

function createCheckTemplate()
{
	$path=getNowTheme();
	$fileName=$path.'/ice-checkout-page.php';
	if(!file_exists($fileName))
	{
		$content="<?php \r\n/*\r\nTemplate Name: ice-checkout-page\r\n*/\r\nget_header();\r\nget_footer();\r\n?>";
		file_put_contents($fileName, $content);
	}
	iceCreatePage();
}

function iceCreatePage()
{
	$_p = array();
	$_p['post_title'] = '支付页面';
	$_p['post_content'] = "结算页面。不要删除!";
	$_p['post_status'] = 'publish';
	$_p['post_type'] = 'page';
	$_p['comment_status'] = 'closed';
	$_p['ping_status'] = 'closed';
	$_p['page_template'] = "ice-checkout-page.php"; // the default 'Uncatrgorised'
	$the_page_id = wp_insert_post($_p);
	file_put_contents(ABSPATH.'wp-content/plugins/ciphpdown/check-out.ice',$the_page_id);
}

function getNowTheme()
{
	$path=get_bloginfo('template_url');
	return ABSPATH.'wp-content/themes/'.end(explode("/",$path));
}


class enstr {
    public function enstrhex($str,$key) {
        /* 开启加密算法/ */
        $td = mcrypt_module_open('twofish', '', 'ecb', '');
        /* 建立 IV，并检测 key 的长度 */
        $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
        $ks = mcrypt_enc_get_key_size($td);
        /* 生成 key */
        $keystr = substr(md5($key), 0, $ks);
        /* 初始化加密程序 */
        mcrypt_generic_init($td, $keystr, $iv);
        /* 加密, $encrypted 保存的是已经加密后的数据 */
        $encrypted = mcrypt_generic($td, $str);
        /* 检测解密句柄，并关闭模块 */
        mcrypt_module_close($td);
        /* 转化为16进制 */
        $hexdata = bin2hex($encrypted);
        //返回
        return $hexdata;
    }
   
    public function destrhex($str,$key) {
        /* 开启加密算法/ */
        $td = mcrypt_module_open('twofish', '', 'ecb', '');
        /* 建立 IV，并检测 key 的长度 */
        $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
        $ks = mcrypt_enc_get_key_size($td);
        /* 生成 key */
        $keystr = substr(md5($key), 0, $ks);
        /* 初始化加密模块，用以解密 */
        mcrypt_generic_init($td, $keystr, $iv);
        /* 解密 */
        $encrypted = pack( "H*", $str);
        $decrypted = mdecrypt_generic($td, $encrypted);
        /* 检测解密句柄，并关闭模块 */
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        /* 返回原始字符串 */
        return $decrypted;
    }
}

//参数说明：
//file_dir:文件所在目录
//file_name:文件名
function download($file_dir)
{
	$file_dir=chop($file_dir);
	if(!file_exists($file_dir))
	{
		return false;
	}
	$temp=explode("/",$file_dir);

	// http headers for zip downloads
	header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Cache-Control: public");
	header("Content-Description: File Transfer");
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=\"".end($temp)."\"");
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: ".filesize($file_dir));
	ob_end_flush();
	@readfile($file_dir);
}