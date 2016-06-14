<?php

//Carousels

$qodeCarousels = new QodeMetaBox("carousels", "Qode 轮播");
$qodeFramework->qodeMetaBoxes->addMetaBox("carousels",$qodeCarousels);

	$qode_carousel_image = new QodeMetaField("image","qode_carousel-image","","轮播图像","选择轮播图像 (最小宽度必需220px)");
	$qodeCarousels->addChild("qode_carousel-image",$qode_carousel_image);

	$qode_carousel_hover_image = new QodeMetaField("image","qode_carousel-hover-image","","轮播悬停图像","选择轮播悬停图像 (最小宽度必需 220px)");
	$qodeCarousels->addChild("qode_carousel-hover-image",$qode_carousel_hover_image);

	$qode_carousel_item_link = new QodeMetaField("text","qode_carousel-item-link","","链接","附加 URL 链接到图像 (e.g. http://www.example.com)");
	$qodeCarousels->addChild("qode_carousel-item-link",$qode_carousel_item_link);

	$qode_carousel_item_target = new QodeMetaField("selectblank","qode_carousel-item-target","","目标","目标链接打开方式", array(
        "_self" => "当前",
        "_blank" => "新开"
    ));
	$qodeCarousels->addChild("qode_carousel-item-target",$qode_carousel_item_target);