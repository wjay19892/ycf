<?php
header("Content-type:text/html;character=utf-8");
require_once('../../../wp-config.php');
require_once(CIPHPDOWN.'/alipay_fun.php');
$ciphpDownFunAlipay=new ciphpDownFunAlipay();
$ciphpDownFunAlipay->funReturnUrl();
