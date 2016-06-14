<?php

$parallaxPage = new QodeAdminPage("_parallax", "视差", "fa fa-arrows-v");
$qodeFramework->qodeOptions->addAdminPage("视差",$parallaxPage);

//Parallax Settings

$panel1 = new QodePanel("视差设置","parallax_settings_panel");
$parallaxPage->addChild("panel1",$panel1);

	$parallax_onoff = new QodeField("onoff","parallax_onoff","on","触摸设备视差","Enabling this option will allow parallax on touch devices");
	$panel1->addChild("parallax_onoff",$parallax_onoff);

	$parallax_minheight = new QodeField("text","parallax_minheight","400","视差最小高度 (px)","Set a minimum height for parallax images on small displays (phones, tablets, etc.)");
	$panel1->addChild("parallax_minheight",$parallax_minheight);