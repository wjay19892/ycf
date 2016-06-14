<?php
require_once '../../../wp-config.php';
get_header();
require_once plugin_dir_path(__FILE__).'myfun.php';
if(!is_user_logged_in())
{
	wp_die('请先登录系统');
}
?>
 <div id="main" class="clearfix">
            <?php get_sidebar(); ?>
            <div id="content" class="filter-posts">
            <div data-id="post-<?php the_ID(); ?>" data-type="<?php $categories = get_the_category(); foreach($categories as $category) {	echo str_replace('-', '', $category->slug); } ?>" class="post-<?php the_ID(); ?> <?php $categories = get_the_category(); foreach($categories as $category) {	echo str_replace('-', '', $category->slug).' '; } ?>post clearfix project">
<div class="box">
	<div class="shadow clearfix">
		<div class="frame">
<?php
$postid=isset($_GET['postid']) && is_numeric($_GET['postid']) ?intval($_GET['postid']) :false;
if($postid)
{
	$user_info=wp_get_current_user();
	if($user_info->ID)
	{
		//检查用户是否已经购买过
		$downInfo=$wpdb->get_row("select * from ".$wpdb->icealipay." where ice_user_id=".$user_info->ID ." and ice_post=".$postid." and ice_success=1");
		if($downInfo)
		{
			?>
				<a href="<?php echo get_bloginfo('wpurl')?>/wp-content/plugins/ciphpdown/download.php?url=<?php echo $downInfo->ice_url?>">
				您已经赞助过，点击直接下载最新版本!</a>	
			<?php
		}
		else 
		{
			$data=get_post_meta($postid, 'down_url', true);
			$price=get_post_meta($postid, 'down_price', true);
			$hidden=get_post_meta($postid, 'hidden_content', true);
			if(($data || $hidden) && $price)
			{
			$okMoney=ciphpGetUserOkMoney();
			//vip
			$vip=false;
			$memberDown=get_post_meta($postid, 'member_down',TRUE);
			$userType=getUsreMemberType();
			if($memberDown==4 && $userType==false)
			{
				echo "access error";exit;
			}
			if($userType && $memberDown==2)
			{
				$vip=TRUE;
				$price=$price*0.5;
			}
			?>
           
			<table id="paycenter" class="box" width="600" align="center">
			<tr>
				<td width="300">商品名称：<?php echo get_post($postid)->post_title?></td>
				<td>商品价格：￥<?php echo sprintf("%.2f",$price)?><?php echo  $vip==TRUE?'(原价:'.sprintf("%.2f",$price+$price).')' :''?></td>
			</tr>
			<tr>
				<td>账户余额: ￥<?php echo sprintf("%.2f",$okMoney)?></td>
			</tr>
			<tr>
				<td>
				<?php if($okMoney >= $price) {?>
				<a href="<?php echo get_bloginfo('wpurl').'/wp-content/plugins/ciphpdown/checkout.php?postid='.$postid?>"
				 onclick="return confirm('确认用余额付款')" target="_blank">使用余额支付</a>
				 <?php }else{echo "余额不足完成此次付款，<a href=\"".get_bloginfo('wpurl').'/wp-admin/admin.php?page=ciphpdown/alipay-add-money.php'."\">点击充值</a>";}?>
				 </td>
				</tr>
				<tr>
				</tr>
			</table>
			<?php
			}
			else 
			{
				echo "获取文章信息出错!";
			}
		}
	}
	else 
	{
		echo "用户信息获取失败";
	}
}
else
{
	echo "文章ID错误";
}
?>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
<?php
get_footer();