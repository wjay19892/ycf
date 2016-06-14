<?php
/*
Plugin Name: 收费下载插件
Plugin URI: http://jspok.com/ciphpdown-plugin-alipay
Description: 支持在线支付(支付宝，银联)，提现，发布收费下载,下载地址加密,VIP会员的插件
Version: 5.0.1
Author: iceweb
Author URI: http://www.ciphp.com/
*/
global $wpdb;
$wpdb->icealipay = $wpdb->prefix.'ice_download';//下载表
$wpdb->icemoney  = $wpdb->prefix.'ice_money';//充值表
$wpdb->iceinfo  = $wpdb->prefix.'ice_info';//资产表
$wpdb->iceget  = $wpdb->prefix.'ice_get_money';//取现表
$wpdb->vip  = $wpdb->prefix.'ice_vip';//VIP订单表
define("CIPHPDOWN",plugin_dir_path(__FILE__));
add_action('admin_menu', 'alipay_menu');
function alipay_menu() {
	if (function_exists('add_menu_page')) {
		add_menu_page('alipay', '支付中心', 'administrator', 'ciphpdown/alipay-settings.php', '','');
	}
	if (function_exists('add_submenu_page')) {
		add_submenu_page('ciphpdown/alipay-settings.php', '账号设置','账号设置', 'administrator', 'ciphpdown/alipay-settings.php');
		add_submenu_page('ciphpdown/alipay-settings.php', 'VIP订单','VIP订单',0, 'ciphpdown/vip-items.php');
		add_submenu_page('ciphpdown/alipay-settings.php', '会员服务','会员服务',0, 'ciphpdown/member-settings.php');
		add_submenu_page('ciphpdown/alipay-settings.php', '订单查询', '订单查询', 0, 'ciphpdown/alipay-items.php');
		add_submenu_page('ciphpdown/alipay-settings.php', '取现列表', '取现列表', 0, 'ciphpdown/alipay-money-list.php');
		add_submenu_page('ciphpdown/alipay-settings.php','申请取现', '申请取现', 0, 'ciphpdown/alipay-money.php');
		add_submenu_page('ciphpdown/alipay-settings.php','我要充值', '我要充值', 0, 'ciphpdown/alipay-add-money.php');
		add_submenu_page('ciphpdown/alipay-settings.php', '消费清单', '消费清单', 0, 'ciphpdown/alipay-get-items.php');
		add_submenu_page('ciphpdown/alipay-settings.php', '我的资产', '我的资产', 0, 'ciphpdown/alipay-my-money.php');
		add_submenu_page('ciphpdown/alipay-settings.php', '给用户充值', '给用户充值', 'administrator', 'ciphpdown/ciphp-add-money.php');
	}
}
?>
<?php
function ice_alipay_style() {
	echo'<link rel="stylesheet" href="'.get_bloginfo('wpurl').'/wp-content/plugins/ciphpdown/css/icealipay.css" type="text/css" />';
}
add_action('wp_head', 'ice_alipay_style');
//create
add_action('activate_ciphpdown/ciphpdown.php', 'create_ciphpdown_table');
function create_ciphpdown_table() {
	global $wpdb;
	if(@is_file(ABSPATH.'/wp-admin/upgrade-functions.php')){
		include_once(ABSPATH.'/wp-admin/upgrade-functions.php');
	} elseif(@is_file(ABSPATH.'/wp-admin/includes/upgrade.php')) {
		include_once(ABSPATH.'/wp-admin/includes/upgrade.php');
	} else {
		die('We have problem finding your \'/wp-admin/upgrade-functions.php\' and \'/wp-admin/includes/upgrade.php\'');
	}
	$table_charset = '';
	if($wpdb->supports_collation()) {
		if(!empty($wpdb->charset)) {
			$table_charset = "DEFAULT CHARACTER SET $wpdb->charset";
		}
		if(!empty($wpdb->collate)) {
			$table_charset .= " COLLATE $wpdb->collate";
		}
	}
	//sql
	$create_ice_alipay_sql = "CREATE TABLE $wpdb->icealipay (".
			"ice_id int(11) NOT NULL auto_increment,".
			"ice_num int(11) NOT NULL,".
			"ice_title varchar(100) NOT NULL,".
			"ice_post int(11) NOT NULL,".
			"ice_price double(10,2) NOT NULL,".
			"ice_url varchar(32) NOT NULL,".
			"ice_user_id int(11) NOT NULL,".
			"ice_time datetime NOT NULL,".
			"ice_data text NOT NULL ,".
			"ice_success int(11) NOT NULL,".
			"ice_author int(11) NOT NULL,".
			"PRIMARY KEY (ice_id)) $table_charset;";
	maybe_create_table($wpdb->icealipay, $create_ice_alipay_sql);
	
	$create_ice_money_sql="CREATE TABLE $wpdb->icemoney (".
			"ice_id int(11) NOT NULL auto_increment,".
			"ice_num int(11) NOT NULL,".
			"ice_money double(10,2) NOT NULL,".
			"ice_user_id int(11) NOT NULL,".
			"ice_time datetime NOT NULL,".
			"ice_success int(10) NOT NULL,".
			"ice_note varchar(50)NOT NULL,".
			"ice_success_time datetime NOT NULL,".
			"ice_alipay varchar(50) NOT NULL,".
			"PRIMARY KEY (ice_id)) $table_charset;";
	maybe_create_table($wpdb->icemoney, $create_ice_money_sql);
	
	$create_money_info_sql="CREATE TABLE $wpdb->iceinfo (".
			"ice_id int(11) NOT NULL auto_increment,".
			"ice_have_money double(10,2) NOT NULL,".
			"ice_user_id int(11) NOT NULL,".
			"ice_get_money double(10,2) NOT NULL,".
			"PRIMARY KEY (ice_id)) $table_charset;";
	maybe_create_table($wpdb->iceinfo, $create_money_info_sql);
	
	$create_get_money_sql="CREATE TABLE $wpdb->iceget (".
			"ice_id int(11) NOT NULL auto_increment,".
			"ice_alipay varchar(100) NOT NULL,".
			"ice_name varchar(30) NOT NULL,".
			"ice_user_id int(11) NOT NULL,".
			"ice_money double(10,2) NOT NULL,".
			"ice_time datetime NOT NULL,".
			"ice_success int(10) NOT NULL,".
			"ice_note varchar(50)NOT NULL,".
			"ice_success_time datetime NOT NULL,".
			"PRIMARY KEY (ice_id)) $table_charset;";
	maybe_create_table($wpdb->iceget, $create_get_money_sql);
	//update to 3.0
	$up2to3="ALTER TABLE `".$wpdb->iceinfo."` ADD  `userType` TINYINT( 4 ) NOT NULL DEFAULT  '0',ADD `endTime` DATE NOT NULL DEFAULT  '1000-01-01'";
	$wpdb->query($up2to3);
	//3.0
	$create_ice_vip_sql = "CREATE TABLE $wpdb->vip (".
			"ice_id int(11) NOT NULL auto_increment,".
			"ice_price double(10,2) NOT NULL,".
			"ice_user_id int(11) NOT NULL,".
			"ice_user_type tinyint(4) NOT NULL default 0,".
			"ice_time datetime NOT NULL,".
			"PRIMARY KEY (ice_id)) $table_charset;";
	maybe_create_table($wpdb->vip, $create_ice_vip_sql);
}
require_once plugin_dir_path(__FILE__).'myfun.php';
require_once plugin_dir_path(__FILE__).'/class/ciphp.smtp.php';
function ice_content_show_down($content)
{
	if(is_single())
	{
		//wp_get_current_user()
		$start_down=get_post_meta(get_the_ID(), 'start_down', true);
		$price=get_post_meta(get_the_ID(), 'down_price', true);
		$url=get_post_meta(get_the_ID(), 'down_url', true);
		$memberDown=get_post_meta(get_the_ID(), 'member_down',TRUE);
		$hidden=get_post_meta(get_the_ID(), 'hidden_content', true);
		if(($url || $hidden)&& is_numeric($price))
		{
			$content.='下载信息：';
			if(is_user_logged_in())
			{
				if($start_down)
				{
					if($hidden)
					{
						$content.="隐藏内容：******,付款后系统将自动通过邮件发送给您!";
					}
					$content.='<br/>价格：￥'.$price.'&nbsp;';
					//played
					global $wpdb;
					$user_info=wp_get_current_user();
					$userType=getUsreMemberType();
					if($memberDown > 1 && $userType==false)
					{
						$content.='<br/>亲，<strong>这是VIP会员下载通道</strong>，您还没成为VIP会员，<a href="'.get_bloginfo('wpurl').'/wp-admin/admin.php?page=ciphpdown/member-settings.php">请到这里成为会员</a><br/>';
					}
					if($memberDown==4 && $userType==FALSE)
					{
						$content.='只有VIP会员可以下载此资源!';
					}
					else 
					{
						if($userType && $memberDown > 1)
						{
							$msg='<br/>地址：&nbsp;';
							if($memberDown==3 || $memberDown==4)
							{
								$msg.='您是VIP会员，可以免费下载此资源!';
								$content.=$msg."<a href=".get_bloginfo('wpurl').'/wp-content/plugins/ciphpdown/download.php?postid='.get_the_ID()." target=_'blank'>进入下载页面</a>";
							}
							elseif ($memberDown==2)
							{
								$msg.='这是VIP会员下载通道，您是VIP会员，可以5折（价格为：￥'.($price*0.5).'）下载此资源!';
								$content.=$msg.'<a href='.get_bloginfo('wpurl').
							'/wp-content/plugins/ciphpdown/icealipay-pay-center.php?postid='.get_the_ID().' target=_\'blank\'>进入下载页面</a>';
							}
						}
						else 
						{
							$down_info=$wpdb->get_row("select * from ".$wpdb->icealipay." where ice_post='".get_the_ID()."' and ice_success=1 and ice_user_id=".$user_info->ID);
							if($down_info)
							{
								$content.='<a class=\'icealipay\' href='.get_bloginfo('wpurl').
							'/wp-admin/admin.php?page=ciphpdown/alipay-get-items.php>您已成功购买过，可以直接进入下载页面</a>';
							}
							else 
							{
								$content.='<a class=\'icealipay\' href='.get_bloginfo('wpurl').
							'/wp-content/plugins/ciphpdown/icealipay-pay-center.php?postid='.get_the_ID().'>亲，<strong>这是普通用户下载通道</strong>，请点击赞助（价格为：￥'.$price.'）</a>';
							}
						}
					}
				}
				else 
				{
					$content.="<a href=".get_bloginfo('wpurl').'/wp-content/plugins/ciphpdown/download.php?postid='.get_the_ID()." target=_'blank'>进入下载页面</a>";
				}
			}
			else {$content.='<a href="'.get_bloginfo('wpurl').'/wp-login.php">请先登录系统，或者注册帐号</a>';}
		}
	}
	return $content;
}
add_action('the_content','ice_content_show_down');
?>
<?php include('meta-box.php'); ?>