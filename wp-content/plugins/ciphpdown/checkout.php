<?php
header("Content-type:text/html;character=utf-8");
require_once('../../../wp-config.php');
require_once plugin_dir_path(__FILE__).'myfun.php';
if(!is_user_logged_in())
{
	wp_die('请先登录系统');
}
$postid=isset($_GET['postid']) && is_numeric($_GET['postid']) ?intval($_GET['postid']) :false;
if($postid)
{
	$data=get_post_meta($postid, 'down_url', true);
	$price=get_post_meta($postid, 'down_price', true);
	$memberDown=get_post_meta($postid, 'member_down',TRUE);
	$hidden=get_post_meta($postid, 'hidden_content', true);
	if($price==FALSE || ($data==false &&  $hidden==false))
	{
		wp_die('商品价格错误');
	}
	$user_info=wp_get_current_user();
	$okMoney=ciphpGetUserOkMoney();//判断余额
	//vip
	$userType=getUsreMemberType();
	if($memberDown==4 && $userType==false)
	{
		echo "access error";exit;
	}
	if($userType && $memberDown==2)
	{
		$price=sprintf("%.2f",$price*0.5);
	}
	if($okMoney >= $price && $okMoney)
	{
		if(ciphpSetUserMoneyXiaoFei($price))//扣钱
		{
			$subject   = get_post($postid)->post_title;
			$postUserId=get_post($postid)->post_author;
			if($hidden)
			{
				ciphpAddDownload($subject, $postid, $price,1, '', $postUserId);
				$message="来自：".$subject.'的隐藏内容<br/>隐藏字段：'.$hidden;
				$title="来自：".$subject.'的隐藏内容';
				wp_mail($user_info->user_email, $title, $message);
			}
			if(!empty($data))
			{
				$result=ciphpAddDownload($subject, $postid, $price,1, $data, $postUserId);//写入下载表
				if($result)
				{
					//写入卖家
					addUserMoney($postUserId,$price);
					header("Location:".get_bloginfo('wpurl').'/wp-content/plugins/ciphpdown/download.php?url='.$result);
					exit;
				}
				else
				{
					mysql_query("update $wpdb->iceinfo set ice_get_money=ice_get_money-".$price ." where ice_user_id=".$user_info->ID);//写入下载表失败 把钱退回来
					wp_die('系统发生错误,请稍候重试!');
					exit;
				}
			}
			header("Location:".get_bloginfo('wpurl').'/wp-content/plugins/ciphpdown/sendmail.php');
		}
		else 
		{
			wp_die('系统错误');
		}
	}
	else 
	{
		wp_die('余额不足完成此次交易!');
	}
}