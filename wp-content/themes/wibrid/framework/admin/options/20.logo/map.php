<?php

$logoPage = new QodeAdminPage("_logo", "标志", "fa fa-coffee");
$qodeFramework->qodeOptions->addAdminPage("logo",$logoPage);

$panel1 = new QodePanel("Logo", "logo");
$logoPage->addChild("panel1",$panel1);

	$logo_image = new QodeField("image","logo_image",QODE_ROOT."/img/logo.png","标志图像 - 正常","Choose a default logo image to display ");
	$panel1->addChild("logo_image",$logo_image);
	
	$logo_image_light = new QodeField("image","logo_image_light",QODE_ROOT."/img/logo_white.png","标志图像 - 白",'Choose a logo image to display for "Light" header skin');
	$panel1->addChild("logo_image_light",$logo_image_light);
	
	$logo_image_dark = new QodeField("image","logo_image_dark",QODE_ROOT."/img/logo_black.png","标志图像 - 黑",'Choose a logo image to display for "Dark" header skin');
	$panel1->addChild("logo_image_dark",$logo_image_dark);
	
	$logo_image_sticky = new QodeField("image","logo_image_sticky",QODE_ROOT."/img/logo_black.png","标志图像 - 置顶头部",'Choose a logo image to display for "Sticky" header type');
	$panel1->addChild("logo_image_sticky",$logo_image_sticky);
	
	$logo_image_fixed_hidden = new QodeField("image","logo_image_fixed_hidden","","标志图像 - 固定高级头部",'Choose a logo image to display for "Fixed Advanced" header type');
	$panel1->addChild("logo_image_fixed_hidden",$logo_image_fixed_hidden);

	$logo_image_mobile = new QodeField("image","logo_image_mobile","","标志图像 - 移动端页眉",'Choose a logo image to display for "Mobile" header type');
	$panel1->addChild("logo_image_mobile",$logo_image_mobile);
	
	$vertical_logo_bottom = new QodeField("image","vertical_logo_bottom","","标志图像 - 侧边菜单区域底部", 'Choose a logo image to display on the bottom of side menu area for "Initially Hidden" side menu area type');
	$panel1->addChild("vertical_logo_bottom", $vertical_logo_bottom);

	$logo_mobile_header_height = new QodeField("text","logo_mobile_header_height","","移动端页眉标志高度 (px)","Define logo height for mobile header");
    $panel1->addChild("logo_mobile_header_height",$logo_mobile_header_height);

	$logo_mobile_height = new QodeField("text","logo_mobile_height","","移动端标志高度 (px)","Define logo height for mobile devices");
    $panel1->addChild("logo_mobile_height",$logo_mobile_height);