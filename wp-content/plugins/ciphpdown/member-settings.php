<div class="wrap">
<?php
require_once plugin_dir_path(__FILE__).'myfun.php';
if($_POST['Submit'] && current_user_can('administrator') && $_POST['Submit']=='保存设置')
{
	$ciphp_year_price    = trim($_POST['year_price']);
	$ciphp_quarter_price = trim($_POST['quarter_price']);
	$ciphp_month_price   = trim($_POST['month_price']);
	if(!is_numeric($ciphp_year_price) || !is_numeric($ciphp_quarter_price) || !is_numeric($ciphp_month_price))
	{
		wp_die('价格必须是数字');
	}
	$update_text=array('包年价格','包季价格','包月价格');
	$update_ciphp_price[] = update_option('ciphp_year_price', $ciphp_year_price);
	$update_ciphp_price[] = update_option('ciphp_quarter_price', $ciphp_quarter_price);
	$update_ciphp_price[] = update_option('ciphp_month_price', $ciphp_month_price);
	foreach($update_ciphp_price as $k=>$v)
	{
		if($v)
		{
			$text .= '<font color="green">'.$update_text[$k].' 更新成功！</font><br />';
		}
	}
	if(empty($text))
	{
		$text = '<font color="red">没有更新任何信息</font>';
	}

}
elseif($_POST['Submit'] && $_POST['Submit']=='确认购买')
{
	//check
	if(!checkUsreMemberType())
	{
		return false;
	}
	$userType=isset($_POST['userType']) && is_numeric($_POST['userType']) ?intval($_POST['userType']) :0;
	if($userType >6 && $userType < 10)
	{
		$okMoney=ciphpGetUserOkMoney();
		$priceArr=array('7'=>'ciphp_month_price','8'=>'ciphp_quarter_price','9'=>'ciphp_year_price');
		$priceType=$priceArr[$userType];
		$price=get_option($priceType);
		if(empty($price) || $price<1)
		{
			showMsgNotice("此类型的会员价格错误，请稍候重试!");
		}
		elseif($okMoney < $price)
		{
			showMsgNotice("当前可用余额不足完成此次交易！请充值后重试!");
		}
		elseif($okMoney >=$price)
		{
			if(ciphpSetUserMoneyXiaoFei($price))//扣钱
			{
				if(userPayMemberSetData($userType))
				{
					addVipLog($price, $userType);
					showMsgNotice("购买成功，您即可享受高级会员服务!",TRUE);
				}
				else
				{
					showMsgNotice("系统发生错误，请联系管理员!");
				}
			}
			else
			{
				showMsgNotice("系统发生错误，请稍候重试!");
			}
		}
		else
		{
			showMsgNotice("未定义的操作!");
		}
	}
	else
	{
		showMsgNotice("会员类型错误");
	}
}

$ciphp_year_price    = get_option('ciphp_year_price');
$ciphp_quarter_price = get_option('ciphp_quarter_price');
$ciphp_month_price  = get_option('ciphp_month_price');
if(current_user_can('administrator'))
{
	?>

<?php if(!empty($text))
{
	echo '<div id="message">'.$text.'</div>';
} ?>
	<form method="post"
		action="<?php echo admin_url('admin.php?page='.plugin_basename(__FILE__)); ?>"
		style="width: 70%; float: left;">

		<h2>会员价格设置</h2>
		<table class="form-table">
			<tr>
				<td valign="top" width="30%"><strong>包年会员</strong><br />
				</td>
				<td><input type="text" id="year_price" name="year_price"
					value="<?php echo $ciphp_year_price ; ?>" maxlength="50" size="50" />
				</td>
			</tr>
			<tr>
				<td valign="top" width="30%"><strong>包季会员</strong><br />
				</td>
				<td><input type="text" id="" name="quarter_price"
					value="<?php echo $ciphp_quarter_price; ?>" maxlength="50"
					size="50" />
				</td>
			</tr>
			<tr>
				<td valign="top" width="30%"><strong>包月会员</strong><br />
				</td>
				<td><input type="text" id="month_price" name="month_price"
					value="<?php echo $ciphp_month_price; ?>" maxlength="100" size="50" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p class="submit">
						<input type="submit" name="Submit" value="保存设置"
							class="button-primary" />
					</p>
				</td>
			</tr>
		</table>
	</form>
</div>
<?php }else{
	$okMoney=ciphpGetUserOkMoney();//判断余额
	?>
<form method="post"
	action="<?php echo admin_url('admin.php?page='.plugin_basename(__FILE__)); ?>"
	style="width: 70%; float: left;">

	<h2>购买VIP服务</h2>
	<table class="form-table">
		<tr>
			<td valign="top" width="30%"><strong>当前类型</strong><br /></td>
			<td><?php 
			$userTypeId=getUsreMemberType();
			if($userTypeId==7)
			{
				echo "包月会员";
			}
			elseif ($userTypeId==8)
			{
				echo "包季会员";
			}
			elseif ($userTypeId==9)
			{
				echo "包年会员";
			}
			else 
			{
				echo '未购买任何会员服务';
			}
			?>,&nbsp;&nbsp;&nbsp;到期时间：<?php echo $userTypeId>0 ?getUsreMemberTypeEndTime() :''?></td>
		</tr>
		<tr>
			<td valign="top" width="30%"><strong>VIP类型</strong><br />
			</td>
			<td><input type="radio" id="userType" name="userType" value="9"
				checked />包年会员 --- ￥<?php echo $ciphp_year_price?><br /> <input
				type="radio" id="userType" name="userType" value="8" />包季会员 --- ￥<?php echo $ciphp_quarter_price?><br />
				<input type="radio" id="userType" name="userType" value="7" />包月会员
				--- ￥<?php echo $ciphp_month_price?>
			</td>
		</tr>
		<tr>
			<td valign="top" width="30%"><strong>可用余额</strong><br />
			</td>
			<td>￥<?php echo sprintf("%.2f",$okMoney)?>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="Submit" value="确认购买"
				onclick="return confirm('确认购买?')" class="button-primary" />
			</td>
		</tr>
	</table>
</form>
</div>
	<?php }?>