<?php
if ( !defined('ABSPATH') ) {exit;}
if(current_user_can('administrator'))
{
	//统计数据
	$total_trade   = $wpdb->get_var("SELECT COUNT(ice_id) FROM $wpdb->icealipay");
	$total_success = $wpdb->get_var("SELECT COUNT(ice_id) FROM $wpdb->icealipay WHERE ice_success>0");
	$total_money   = $wpdb->get_var("SELECT SUM(ice_price) FROM $wpdb->icealipay WHERE ice_success>0");
}
else 
{
	$user_info=wp_get_current_user();
	$total_trade   = $wpdb->get_var("SELECT COUNT(ice_id) FROM $wpdb->icealipay where ice_author=".$user_info->ID);
	$total_success = $wpdb->get_var("SELECT COUNT(ice_id) FROM $wpdb->icealipay WHERE ice_success>0 and ice_author=".$user_info->ID);
	$total_money   = $wpdb->get_var("SELECT SUM(ice_price) FROM $wpdb->icealipay WHERE ice_success>0 and ice_author=".$user_info->ID);
}
//分页计算
$ice_perpage = 20;
$pages = ceil($total_trade / $ice_perpage);
$page=isset($_GET['p']) ?intval($_GET['p']) :1;
$offset = $ice_perpage*($page-1);

if(current_user_can('administrator'))
{
	$list = $wpdb->get_results("SELECT * FROM $wpdb->icealipay order by ice_time DESC limit $offset,$ice_perpage");
}
else 
{
	$list = $wpdb->get_results("SELECT * FROM $wpdb->icealipay where ice_author= ".$user_info->ID." order by ice_time DESC limit $offset,$ice_perpage");
}
?>
<div class="wrap">
	<h2>订单查询</h2>
	<p><?php printf(('共有<strong>%s</strong>笔交易，其中<strong>%s</strong>笔交易完成了付款.总金额：<strong>%s</strong>'), 
	number_format_i18n($total_trade), number_format_i18n($total_success),$total_money); ?></p>
	<table class="widefat">
		<thead>
			<tr>
				<th width="8%">订单号</th>
				<th width="25%">商品名称</th>
				<th width="5%">价格</th>
				<th width="15%">交易时间</th>			
				<th width="8%">交易状态</th>			
			</tr>
		</thead>
		<tbody>
	<?php
		if($list) {
			foreach($list as $value)
			{
				$result=$value->ice_success?'成功':'未完成';
				echo "<tr>\n";
				echo "<td>$value->ice_num</td>\n";
				echo "<td>$value->ice_title</td>\n";
				echo "<td>$value->ice_price</td>\n";
				echo "<td>$value->ice_time</td>\n";
				echo "<td>$result</td>\n";
				echo "</tr>";
			}
		}
		else
		{
			echo '<tr><td colspan="5" align="center"><strong>没有交易记录</strong></td></tr>';
		}
	?>
	</tbody>
	</table>
    <div class="pages">共有<?php echo $pages ?>页(<?php echo $page ?>/<?php echo $pages ?>) <?php for($i=1;$i<$pages+1;$i++) {?>
    <span><a href='<?php echo admin_url('admin.php?page='.plugin_basename(__FILE__)).'&p='.$i?>'><?php echo $i ?></a> <?php } ?></span> 
　　</div>
</div>
