<?php
if ( !defined('ABSPATH') ) {exit;}
if(!is_user_logged_in())
{
	wp_die('请登录系统');
}
?>
<?php 
if($_POST)
{
	$paytype=intval($_POST['paytype']);
	if(isset($_POST['paytype']) && $paytype==4)
	{
		$url=get_bloginfo('url')."/wp-content/plugins/ciphpdown/alipay_fun.php?ice_money=".$_POST['ice_money'];
	}
	elseif(isset($_POST['paytype']) && $paytype==3)
	{
		$url=get_bloginfo('url')."/wp-content/plugins/ciphpdown/chinabank.php?ice_money=".$_POST['ice_money'];
	}
	elseif(isset($_POST['paytype']) && $paytype==1)
	{
		$url=get_bloginfo('url')."/wp-content/plugins/ciphpdown/chong.php?ice_money=".$_POST['ice_money'];
	}
	else
	{
		$url=get_bloginfo('url')."/wp-content/plugins/ciphpdown/paypal.php?ice_money=".$_POST['ice_money'];
	}
	echo "<script>location.href='".$url."'</script>";
	exit;
}
?>
<div class="wrap">
<script type="text/javascript">
function checkFm()
{
	if(document.getElementById("ice_money").value=="")
	{
		alert('请输入金额');
		return false;
	}
}
</script>
<form action="" method="post" target="blank" onsubmit="return checkFm();">

        <h2>充值</h2>
        <table class="form-table">
            <tr>
                <td valign="top" width="30%"><strong>充值金额</strong><br />
                </td>
                <td>
                <input type="text" id="ice_money" name="ice_money" maxlength="50" size="50" />(请输入一个整数)
                </td>
            </tr>
                        <tr>
                <td valign="top" width="30%"><strong>充值方式</strong><br />
                </td>
                <td>
                <?php 
                if(get_option('ice_fun_partner'))
                {
                ?>
                <input type="radio" id="paytype4" class="paytype" checked name="paytype" value="4"/>支付宝(￥人民币)&nbsp;
                <?php }?>
                <?php if(get_option('ice_ali_partner')){?>
                <input type="radio" id="paytype1" class="paytype" checked name="paytype" value="1"/>支付宝(￥人民币)&nbsp;
                <?php }?>
                 <input type="radio" id="paytype3" class="paytype" name="paytype" value="3"/>银联支付(￥人民币)&nbsp;
                 <input type="radio" id="paytype2" class="paytype" name="paytype" value="2"/>PayPal($美元)汇率：
                 (<?php echo get_option('ice_payapl_api_rmb')?>)&nbsp;
                </td>
            </tr>
    </table>
        <br /> <br />
        <table> <tr>
        <td><p class="submit">
            <input type="submit" name="Submit" value="充值" class="button-primary" onclick="return confirm('确认充值?');"/>
            </p>
        </td>

        </tr> </table>

</form>
			</div>