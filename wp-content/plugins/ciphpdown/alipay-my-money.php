<?php
if ( !defined('ABSPATH') ) {exit;}
$user_Info   = wp_get_current_user();
$userMoney=$wpdb->get_row("select * from ".$wpdb->iceinfo." where ice_user_id=".$user_Info->ID);
if(!$userMoney)
{
	$okMoney=0;
}
else 
{
	$okMoney=$userMoney->ice_have_money - $userMoney->ice_get_money;
}
?>
<div class="wrap">

        <h2>我的资产</h2>
        <table class="form-table">
            <tr>
                <td valign="top" width="30%"><strong>收入+充值:</strong><br />
                </td>
                <td>
               ￥  <?php echo sprintf("%.2f",$userMoney->ice_have_money)?>
                </td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>已消费：</strong><br />
                </td>
                <td>
               ￥  <?php echo sprintf("%.2f",$userMoney->ice_get_money)?>
                </td>
            </tr>
            <tr>
                <td valign="top" width="30%"><strong>可用金额：</strong><br />
                </td>
                <td>
                ￥ <?php echo sprintf("%.2f",$okMoney)?>
                </td>
            </tr>
    </table>
        <br /> <br />
			</div>