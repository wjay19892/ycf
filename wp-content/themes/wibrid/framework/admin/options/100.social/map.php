<?php

$socialPage = new QodeAdminPage("_social", "社交", "fa fa-share-alt");
$qodeFramework->qodeOptions->addAdminPage("socialPage",$socialPage);

//Social Share

$panel1 = new QodePanel("社交分享","social_sharing_panel");
$socialPage->addChild("panel1",$panel1);

	$enable_social_share = new QodeField("yesno","enable_social_share","no","启用社交分享","Enabling this option will allow social share on networks of your choice", array(),
		array("dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_facebook_share_panel,#qodef_twitter_share_panel,#qodef_google_share_panel,#qodef_linked_share_panel,#qodef_tumblr_share_panel,#qodef_pinterest_share_panel,#qodef_vk_share_panel,#qodef_show_social_share_panel"));
	$panel1->addChild("enable_social_share",$enable_social_share);

//Show Social Share

$panel9 = new QodePanel("社交分享","show_social_share_panel","enable_social_share","no");
$socialPage->addChild("panel9",$panel9);

	$post_types_names_post = new QodeField("flagpost","post_types_names_post","","文章","Show Social Share on Blog Posts");
	$panel9->addChild("post_types_names_post",$post_types_names_post);

	$post_types_names_page = new QodeField("flagpage","post_types_names_page","","页面","Show Social Share on Pages");
	$panel9->addChild("post_types_names_page",$post_types_names_page);

	$post_types_names_attachment = new QodeField("flagmedia","post_types_names_attachment","","媒体","Show Social Share for Images and Videos");
	$panel9->addChild("post_types_names_attachment",$post_types_names_attachment);

	$post_types_names_portfolio_page = new QodeField("flagportfolio","post_types_names_portfolio_page","","作品条目","Show Social Share for Portfolio Items");
	$panel9->addChild("post_types_names_portfolio_page",$post_types_names_portfolio_page);

	if(qode_is_woocommerce_installed()){
		$post_types_names_product = new QodeField("flagproduct","post_types_names_product","","产品","Show Social Share for Product Items");
		$panel9->addChild("post_types_names_product",$post_types_names_product);
	}

//Facebook

$panel2 = new QodePanel("Facebook 分享选项","facebook_share_panel","enable_social_share","no");
$socialPage->addChild("panel2",$panel2);

	$enable_facebook_share = new QodeField("yesno","enable_facebook_share","no","启用分享","启用此选项将允许用户通过Facebook分享", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_facebook_share_container"));
	$panel2->addChild("enable_facebook_share",$enable_facebook_share);
	$enable_facebook_share_container = new QodeContainer("enable_facebook_share_container","enable_facebook_share","no");
	$panel2->addChild("enable_facebook_share_container",$enable_facebook_share_container);
		$facebook_icon = new QodeField("image","facebook_icon","","图标","上传 Facebook 图标");
		$enable_facebook_share_container->addChild("facebook_icon",$facebook_icon);

//Twitter

$panel3 = new QodePanel("Twitter 分享选项","twitter_share_panel","enable_social_share","no");
$socialPage->addChild("panel3",$panel3);

	$enable_twitter_share = new QodeField("yesno","enable_twitter_share","no","启用分享","启用此选项将用户允许通过Twitter分享", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_twitter_share_container"));
	$panel3->addChild("enable_twitter_share",$enable_twitter_share);
	$enable_twitter_share_container = new QodeContainer("enable_twitter_share_container","enable_twitter_share","no");

$panel3->addChild("enable_twitter_share_container",$enable_twitter_share_container);
		$twitter_icon = new QodeField("image","twitter_icon","","图标","上传 Twitter 图标");
		$enable_twitter_share_container->addChild("twitter_icon",$twitter_icon);
		$twitter_via = new QodeField("text","twitter_via","","Via","");
		$enable_twitter_share_container->addChild("twitter_via",$twitter_via);

//Google Plus

$panel4 = new QodePanel("谷歌加分享选项","google_share_panel","enable_social_share","no");
$socialPage->addChild("panel4",$panel4);

	$enable_google_plus = new QodeField("yesno","enable_google_plus","no","启用分享","启用此选项将允许用户通过谷歌加分享", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_google_plus_container"));
	$panel4->addChild("enable_google_plus",$enable_google_plus);
	$enable_google_plus_container = new QodeContainer("enable_google_plus_container","enable_google_plus","no");
	$panel4->addChild("enable_google_plus_container",$enable_google_plus_container);
		$google_plus_icon = new QodeField("image","google_plus_icon","","图标","上传谷歌加图标");
		$enable_google_plus_container->addChild("google_plus_icon",$google_plus_icon);

//LinkedIn

$panel5 = new QodePanel("LinkedIn 分享选项","linked_share_panel","enable_social_share","no");
$socialPage->addChild("panel5",$panel5);

	$enable_linkedin = new QodeField("yesno","enable_linkedin","no","启用分享","启用此选项将允许用户通过LinkedIn分享", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_linkedin_container"));
	$panel5->addChild("enable_linkedin",$enable_linkedin);
	$enable_linkedin_container = new QodeContainer("enable_linkedin_container","enable_linkedin","no");
	$panel5->addChild("enable_linkedin_container",$enable_linkedin_container);
		$linkedin_icon = new QodeField("image","linkedin_icon","","图标","上传 LinkedIn 图标");
		$enable_linkedin_container->addChild("linkedin_icon",$linkedin_icon);

//Tumblr

$panel6 = new QodePanel("Tumblr 分享选项","tumblr_share_panel","enable_social_share","no");
$socialPage->addChild("panel6",$panel6);

	$enable_tumblr = new QodeField("yesno","enable_tumblr","no","启用分享","启用此选项将允许用户通过tumblr分享", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_tumblr_container"));
	$panel6->addChild("enable_tumblr",$enable_tumblr);
	$enable_tumblr_container = new QodeContainer("enable_tumblr_container","enable_tumblr","no");
	$panel6->addChild("enable_tumblr_container",$enable_tumblr_container);
		$tumblr_icon = new QodeField("image","tumblr_icon","","图标","上传 Tumblr 图标");
		$enable_tumblr_container->addChild("tumblr_icon",$tumblr_icon);

// Pinterest

$panel7 = new QodePanel("Pinterest 分享选项","pinterest_share_panel","enable_social_share","no");
$socialPage->addChild("panel7",$panel7);

	$enable_pinterest = new QodeField("yesno","enable_pinterest","no","启用分享","启用此选项将允许用户通过tumblr分享", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_pinterest_container"));
	$panel7->addChild("enable_pinterest",$enable_pinterest);
	$enable_pinterest_container = new QodeContainer("enable_pinterest_container","enable_pinterest","no");
	$panel7->addChild("enable_pinterest_container",$enable_pinterest_container);
		$pinterest_icon = new QodeField("image","pinterest_icon","","图标","上传 Pinterest 图标");
		$enable_pinterest_container->addChild("pinterest_icon",$pinterest_icon);

//VK

$panel8 = new QodePanel("VK 分享图标","vk_share_panel","enable_social_share","no");
$socialPage->addChild("panel8",$panel8);

	$enable_vk = new QodeField("yesno","enable_vk","no","启用分享","启用此选项将允用户许通过VK共享", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_vk_container"));
	$panel8->addChild("enable_vk",$enable_vk);
	$enable_vk_container = new QodeContainer("enable_vk_container","enable_vk","no");
	$panel8->addChild("enable_vk_container",$enable_vk_container);
		$vk_icon = new QodeField("image","vk_icon","","图标","上传 VK 图标");
		$enable_vk_container->addChild("vk_icon",$vk_icon);