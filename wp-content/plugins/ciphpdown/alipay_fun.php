<?php
header("Content-type:text/html;character=utf-8");
require_once('../../../wp-config.php');
$ciphpDownFunAlipay=new ciphpDownFunAlipay();
$price   = isset($_GET['ice_money']) && is_numeric($_GET['ice_money']) ?$_GET['ice_money'] :0;
if($price)
{
	echo "<html>
	<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
	<title>正在前往支付宝...</title>
	</head>
	<body>";
	// 将传入的数据写入数据库
	global $wpdb;
	$subject = get_bloginfo().'充值订单';  //订单名称，显示在支付宝收银台里的"商品名称"里，显示在支付宝的交易管理的"商品名称"的列表里。
	/*以下参数是需要通过下单时的订单数据传入进来获得*/
	//必填参数
	$alipay_no = date("ymd").mt_rand(10, 99).mt_rand(10,99);		//请与贵网站订单系统中的唯一订单号匹配
	$time      = date('Y-m-d H:i:s');
	if(!empty($price))
	{
		$user_Info   = wp_get_current_user();
		$sql="INSERT INTO $wpdb->icemoney (ice_money,ice_num,ice_user_id,ice_time,ice_success,ice_note,ice_success_time,ice_alipay)
		VALUES ('$price','$alipay_no','".$user_Info->ID."','".date("Y-m-d H:i:s")."',0,'','','')";
		$a=mysql_query($sql);
		if(!$a)
		{
			wp_die('系统发生错误，请稍后重试!');
		}
	}
	else
	{
		wp_die('请输入您要充值的金额');
	}
	echo $ciphpDownFunAlipay->gotoAlipay($alipay_no, $price, $subject);
	exit;
}
class ciphpDownFunAlipay
{

	public static function funReturnUrl()
	{
		if(stripos($_SERVER['REQUEST_URI'],'alipaydualfun_return_url') === false)
		{
			return true;
		}
		global $wpdb;
		include_once CIPHPDOWN.'/alipaydualfun/alipay.config.php';
		include_once CIPHPDOWN.'/alipaydualfun/lib/alipay_notify.class.php';
		require_once(CIPHPDOWN."myfun.php");
		echo '<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
		//计算得出通知验证结果
		$alipayNotify= new AlipayNotify($aliapy_config);
		$verify_result= $alipayNotify->verifyReturn();
		if($verify_result)
		{//验证成功
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//请在这里加上商户的业务逻辑程序代码

		//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
		//获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表
			$out_trade_no= $_GET['out_trade_no']; //获取订单号
			$trade_no= $_GET['trade_no']; //获取支付宝交易号
			$total_fee= $_GET['total_fee']; //获取总价格
			$orerNum=$out_trade_no;
			if($_GET['trade_status'] == 'WAIT_SELLER_SEND_GOODS')
			{
				//判断该笔订单是否在商户网站中已经做过处理（可参考“集成教程”中“3.4返回数据处理”）
				//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
				//如果有做过处理，不执行商户的业务程序
				$money_info=$wpdb->get_row("select * from ".$wpdb->icemoney." where ice_num=".$orerNum);
				if($money_info)
				{
					if(!$money_info->ice_success)
					{
						$user_info=wp_get_current_user();
						addUserMoney($user_info->ID, $total_fee);
					}
					mysql_query("UPDATE $wpdb->icealipay SET ice_success=1 WHERE ice_num = '$orerNum'");
					mysql_query("UPDATE $wpdb->icemoney SET ice_alipay='".$_GET['buyer_email']."', ice_money = '$total_fee',ice_success=1, ice_success_time = '".date("Y-m-d H:i:s")."' WHERE ice_num = '$orerNum'");
				}
			}
			else if($_GET['trade_status'] == 'TRADE_FINISHED')
			{
				//判断该笔订单是否在商户网站中已经做过处理（可参考“集成教程”中“3.4返回数据处理”）
				//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
				//如果有做过处理，不执行商户的业务程序
				$money_info=$wpdb->get_row("select * from ".$wpdb->icemoney." where ice_num=".$orerNum);
		    	if($money_info)
		        {
		        	if(!$money_info->ice_success)
		        	{
		        		$user_info=wp_get_current_user();
		        		addUserMoney($user_info->ID, $total_fee);
		        	}
		        	mysql_query("UPDATE $wpdb->icealipay SET ice_success=1 WHERE ice_num = '$orerNum'");
		        	mysql_query("UPDATE $wpdb->icemoney SET ice_alipay='".$_GET['buyer_email']."', ice_money = '$total_fee',ice_success=1, ice_success_time = '".date("Y-m-d H:i:s")."' WHERE ice_num = '$orerNum'");
		        }
			}
			else
			{
				echo "trade_status=".$_GET['trade_status'];
			}
			//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
		}
		else
		{
			//验证失败
			//如要调试，请看alipay_notify.php页面的verifyReturn函数，比对sign和mysign的值是否相等，或者检查$responseTxt有没有返回true
			wp_die('错误的请求！如果您已经完成付款，请联系管理员!');
    		exit;
		}
		echo '<title>支付宝支付结果</title>
        <style type="text/css">
            .font_title{
                font-family:"宋体";
                font-size:16px;
                color:#FF0000;
                font-weight:bold;
            }
            table{
                border: 1px solid #CCCCCC;
            }
        </style></head>
    <body>

        <table align="center" width="350" cellpadding="5" cellspacing="0">
            <tr>
                <td align="center" class="font_title" colspan="2">充值成功</td>
            </tr>
            <tr>
                <td class="font_content" align="left">金额:'.$total_fee.'</td>
            </tr>
        </table>
    </body>
</html>';
		exit;
	}
	public static function gotoAlipay($order_id,$price,$subject)
	{
		include_once CIPHPDOWN.'/alipaydualfun/alipay.config.php';
		include_once CIPHPDOWN.'/alipaydualfun/lib/alipay_service.class.php';
		//必填参数//

		$out_trade_no= $order_id; //请与贵网站订单系统中的唯一订单号匹配
		$subject= $subject; //订单名称，显示在支付宝收银台里的“商品名称”里，显示在支付宝的交易管理的“商品名称”的列表里。
		$body= $subject; //订单描述、订单详细、订单备注，显示在支付宝收银台里的“商品描述”里
		$price= $price; //订单总金额，显示在支付宝收银台里的“应付总额”里

		$logistics_fee= "0.00"; //物流费用，即运费。
		$logistics_type= "EXPRESS"; //物流类型，三个值可选：EXPRESS（快递）、POST（平邮）、EMS（EMS）
		$logistics_payment= "SELLER_PAY"; //物流支付方式，两个值可选：SELLER_PAY（卖家承担运费）、BUYER_PAY（买家承担运费）

		$quantity= "1"; //商品数量，建议默认为1，不改变值，把一次交易看成是一次下订单而非购买一件商品。

		//选填参数//

		//买家收货信息（推荐作为必填）
		//该功能作用在于买家已经在商户网站的下单流程中填过一次收货信息，而不需要买家在支付宝的付款流程中再次填写收货信息。
		//若要使用该功能，请至少保证receive_name、receive_address有值
		//收货信息格式请严格按照姓名、地址、邮编、电话、手机的格式填写
		$receive_name= ""; //收货人姓名，如：张三
		$receive_address= ""; //收货人地址，如：XX省XXX市XXX区XXX路XXX小区XXX栋XXX单元XXX号
		$receive_zip= ""; //收货人邮编，如：123456
		$receive_phone= ""; //收货人电话号码，如：0571-81234567
		$receive_mobile= ""; //收货人手机号码，如：13312341234

		//网站商品的展示地址，不允许加?id=123这类自定义参数
		$show_url= home_url();

		/************************************************************/

		//构造要请求的参数数组
		$parameter= array("service" => "trade_create_by_buyer", "payment_type" => "1", "partner" => trim($aliapy_config['partner']),
				"_input_charset" => trim(strtolower($aliapy_config['input_charset'])), "seller_email" => trim($aliapy_config['seller_email']),
				"return_url" => trim($aliapy_config['return_url']), "notify_url" => trim($aliapy_config['notify_url']),
				"out_trade_no" => $out_trade_no, "subject" => $subject, "body" => $body, "price" => $price, "quantity" => $quantity,
				"logistics_fee" => $logistics_fee, "logistics_type" => $logistics_type, "logistics_payment" => $logistics_payment,
				"receive_name" => $receive_name, "receive_address" => $receive_address, "receive_zip" => $receive_zip,
				"receive_phone" => $receive_phone, "receive_mobile" => $receive_mobile, "show_url" => $show_url);
		//构造标准双接口
		$alipayService= new AlipayService($aliapy_config);
		$html_text= $alipayService->trade_create_by_buyer($parameter);
		echo $html_text;
	}
}
