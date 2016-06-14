<?php
if ( !defined('ABSPATH') ) {exit;}
$user_info=wp_get_current_user();
if(current_user_can('administrator'))
{
	//统计数据
	$total_trade   = $wpdb->get_var("SELECT COUNT(ice_id) FROM $wpdb->vip");
	$total_success = $wpdb->get_var("SELECT sum(ice_price) FROM $wpdb->vip");
}
else 
{
	$total_trade   = $wpdb->get_var("SELECT COUNT(ice_id) FROM $wpdb->vip where ice_user_id=".$user_info->ID);
	$total_success = $wpdb->get_var("SELECT sum(ice_price) FROM $wpdb->vip where ice_user_id=".$user_info->ID);
}
//分页计算
$ice_perpage = 20;
$pages = ceil($total_trade / $ice_perpage);
$page=isset($_GET['p']) ?intval($_GET['p']) :1;
$offset = $ice_perpage*($page-1);
if(current_user_can('administrator'))
{
	$list = $wpdb->get_results("SELECT * FROM $wpdb->vip order by ice_time DESC limit $offset,$ice_perpage");
}
else 
{
	$list = $wpdb->get_results("SELECT * FROM $wpdb->vip where ice_user_id=".$user_info->ID." order by ice_time DESC limit $offset,$ice_perpage");
}
?>
<div class="wrap">
	<h2>VIP订单查询</h2>
	<p><?php printf(('共有<strong>%s</strong>笔交易，总金额：<strong>%s</strong>'), $total_trade, $total_success); ?></p>
	<table class="widefat">
		<thead>
			<tr>
				<th width="15%">用户ID</th>
				<th width="15%">VIP类型</th>
				<th width="5%">价格</th>
				<th width="15%">交易时间</th>			
			</tr>
		</thead>
		<tbody>
	<?php
		if($list) {
			foreach($list as $value)
			{
				$typeName=$value->ice_user_type==7 ?'包月' :($value->ice_user_type==8 ?'包季' :'包年');
				echo "<tr>\n";
				echo "<td>$value->ice_user_id</td>\n";
				echo "<td>$typeName</td>\n";
				echo "<td>$value->ice_price</td>\n";
				echo "<td>$value->ice_time</td>\n";
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
    <div class="pages">共有<?php echo $pages ?>页(<?php echo $page ?>/<?php echo $pages ?>)
	<?php 
	for($i=1;$i<$pages+1;$i++) {?>
    <span><a href='<?php echo admin_url('admin.php?page='.plugin_basename(__FILE__)).'&p='.$i?>'><?php echo $i ?></a> 
	<?php } ?>
	</span> 
　　</div>
</div>
