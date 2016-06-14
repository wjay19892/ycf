<?php
require_once('../../../wp-config.php');
require_once plugin_dir_path(__FILE__).'myfun.php';
if(!is_user_logged_in())
{
	showMsg('请先登录系统');
}
$user_info=wp_get_current_user();
$filename=$_GET['filename'];
$md5key=$_GET['md5key'];
$times=$_GET['times'];
$session_name=$_GET['session_name'];
if(abs(time()-$times) < 100)
{
	$md5my=md5($user_info->ID.'ciphpdown'.$filename.$times);
	if($md5key==$md5my)
	{
		$enstr = new enstr();
		$file = $enstr->destrhex($session_name,'ciphpdown');
		$info=download(ABSPATH.'/'.$file);
		if(!$info)
		{
			showMsg('file not exists!');
			exit;
		}
	}
}
exit('404 not found');
?>
