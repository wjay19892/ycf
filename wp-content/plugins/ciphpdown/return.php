<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
/*
 *功能：付完款后跳转的页面（页面跳转同步通知页面）
 *版本：3.1
 *日期：2010-10-29
    '说明：
    '以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
    '该代码仅供学习和研究支付宝接口使用，只是提供一个参考。
    
 */
///////////页面功能说明///////////////
//该页面可在本机电脑测试
//该页面称作"页面跳转同步通知页面"，是由支付宝服务器同步调用，可当作是支付完成后的提示信息页，如"您的某某某订单，多少金额已支付成功"。
//可放入HTML等美化页面的代码和订单交易完成后的数据库更新程序代码
//该页面可以使用PHP开发工具调试，也可以使用写文本函数log_result进行调试，该函数已被默认关闭，见alipay_notify.php中的函数return_verify
//TRADE_FINISHED(表示交易已经成功结束，为普通即时到帐的交易状态成功标识);
//TRADE_SUCCESS(表示交易已经成功结束，为高级即时到帐的交易状态成功标识);
///////////////////////////////////

require_once("class/alipay_notify.php");
require_once("alipay_config.php");

//构造通知函数信息
$alipay = new alipay_notify($partner, $key, $sign_type, $_input_charset, $transport);
//计算得出通知验证结果
$verify_result = $alipay->return_verify();

?>
        <title><?php echo get_option(blogname); ?></title>
        <style type="text/css">
<style> 
	html{background:#F2F2F2;}body{background:#fff;color:#333;font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;margin:2em auto;width:700px;padding:1em 2em;-moz-border-radius:11px;-khtml-border-radius:11px;-webkit-border-radius:11px;border-radius:14px;border:1px solid #dfdfdf;text-shadow: 1px 2px 3px rgba(0,0,0,0.5);}a{color:#2583ad;text-decoration:none;}a:hover{color:#d54e21;}h1{ text-align: center;border-bottom:1px solid #dadada;clear:both;font:26px Georgia,"Times New Roman",Times,serif;margin:5px 0 0 -4px;padding:0;padding-bottom:7px;font-weight:bold;}h2{color:#FF0080;font-size:16px;}p{padding-bottom:2px;font-size:14px;line-height:18px;}#logo{text-align:left;}.clear { clear:both; font-size:0; height:1px; }li{ background:url(images/li.gif) no-repeat 0 4px !important; padding:0 0 0 20px; ;list-style-type: none;}
h3{
    background: none repeat scroll 0 0 #F2F2F2;
    border: 1px solid #BFBFBF;
    color: #666666;
    font-size: 15px;
    margin: 15px 0 10px;
    padding: 2px 5px;
}
.time {
	float: left;
	margin: 0 10px 0 0;
	}

	div{font-size:13px;}
.header{padding: 0;text-align:left; }
.list{
    background: none repeat scroll 0 0 #F2F2F2;
    border: 1px solid #BFBFBF;
    color: #666666;
    font-size: 15px;
    height: 30px;
    margin: 15px 0 10px;
    padding: 10px 0 0 10px;
}
.sm{
    background: none repeat scroll 0 0 #F2F2F2;
    border: 1px solid #BFBFBF;
    color: #666666;
    font-size: 15px;
    margin: 15px 0 10px;
    padding: 10px 0 0 10px;
}
</style>
   </head>
    <body>
<div class="list">
<div style="text-align: center">
<?php
if($verify_result)
{//验证成功
	$trade_no  = $_GET['out_trade_no']; //获取订单号
	$trade_fee = $_GET['trade_fee'];
	if($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS')
	{
		//查询订单号
		if(ciphpCheckAlipayReturnNum($trade_no, $trade_fee))
		{
			ciphpSetUserOrderIsSuccess($trade_no, $trade_fee);//更新充值订单为完成，并增加总资产
			echo "充值成功!";
		}
		else 
		{
			echo "<div>订单金额检验失败!联系管理员!</div>";
		}
	}
	else
	{
		echo "trade_status=" . $_GET['trade_status'];
	}
}
else
{
	//验证失败
	echo "";
}
?>
</div>
</div>
<div style="text-align: center">Copyright © <?php echo date('Y'); ?> <a href="<?php echo get_option(siteurl); ?>/"><?php echo get_option(blogname); ?></a>
版权所有.
</div>
    </body>
</html>