<?php

$error404Page = new QodeAdminPage("_404", "404 错误页面", "fa fa-times-circle-o");
$qodeFramework->qodeOptions->addAdminPage("error404Page",$error404Page);

//404 Page Options

$panel1 = new QodePanel("404 页面选项","page_error_options_panel");
$error404Page->addChild("panel1",$panel1);

	$title_404 = new QodeField("text","404_title","","标题","Enter title for 404 page");
	$panel1->addChild("404_title",$title_404);

	$subtitle_404 = new QodeField("text","404_subtitle","","子标题","Enter subtitle for 404 page");
	$panel1->addChild("404_subtitle",$subtitle_404);

	$text_404 = new QodeField("text","404_text","","文字","Enter text for 404 page");
	$panel1->addChild("404_text",$text_404);

	$backlabel_404 = new QodeField("text","404_backlabel","","返回首页按钮标签",'Enter label for "Back to Home" button ');
	$panel1->addChild("404_backlabel",$backlabel_404);

