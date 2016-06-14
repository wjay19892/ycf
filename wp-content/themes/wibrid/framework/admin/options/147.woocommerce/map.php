<?php

$woocommerce_page = new QodeAdminPage("_woocommerce", "WooCommerce", "fa fa-shopping-cart");

$qodeFramework->qodeOptions->addAdminPage("woocommerce", $woocommerce_page);

$product_list_panel = new QodePanel("产品列表", "product_list_panel");
$woocommerce_page->addChild($product_list_panel->name, $product_list_panel);

$woo_products_list_number = new QodeField("select","woo_products_list_number","columns-3","产品列表和相关产品列数","Choose number of columns for product listing and related products on single product", array(
    "columns-3" => "3 列 (2 带侧边栏)",
    "columns-4" => "4 列 (3 带侧边栏)"
));

$product_list_panel->addChild("woo_products_list_number", $woo_products_list_number);

$product_info_box_color = new QodeField('color', 'woo_product_info_box_color', '', '产品信息框背景颜色', 'Set background color of the box that holds product information');
$product_list_panel->addChild('woo_product_info_box_color', $product_info_box_color);

//Title Separator
$product_title_show_sep = new QodeField(
    'yesno',
    'woo_products_show_title_sep',
    'no',
    '产品标题后显示分隔符 ',
    'Enabling this option will display small separator after product title',
    array(),
    array(
        "dependence" => true,
        "dependence_hide_on_yes" => "",
        "dependence_show_on_yes" => "#qodef_woo_products_title_sep_container"
    )
);

$product_list_panel->addChild('woo_products_show_title_sep', $product_title_show_sep);

$product_title_sep_container = new QodeContainer('woo_products_title_sep_container', 'woo_products_show_title_sep', 'no');
$product_list_panel->addChild('woo_products_title_sep_container', $product_title_sep_container);

$group10 = new QodeGroup("分隔符样式","Define style for product title separator ");
$product_title_sep_container->addChild("group10",$group10);

$row1 = new QodeRow();
$group10->addChild("row1",$row1);

$woo_products_title_separator_color = new QodeField("colorsimple","woo_products_title_separator_color","","颜色","This is some description");
$row1->addChild("woo_products_title_separator_color",$woo_products_title_separator_color);

$woo_products_title_separator_thickness = new QodeField("textsimple","woo_products_title_separator_thickness", "", "厚度 (px)");
$row1->addChild("woo_products_title_separator_thickness",$woo_products_title_separator_thickness);

$woo_products_title_separator_margin_top = new QodeField("textsimple","woo_products_title_separator_margin_top","","外边距顶部 (px)","This is some description");
$row1->addChild("woo_products_title_separator_margin_top",$woo_products_title_separator_margin_top);

$woo_products_title_separator_margin_bottom = new QodeField("textsimple","woo_products_title_separator_margin_bottom","","外边距底部 (px)","This is some description");
$row1->addChild("woo_products_title_separator_margin_bottom",$woo_products_title_separator_margin_bottom);


//Product Title
$group3 = new QodeGroup("产品标题","Define product title text style");
$product_list_panel->addChild("group3",$group3);

$row1 = new QodeRow();
$group3->addChild("row1",$row1);

$woo_products_title_color = new QodeField("colorsimple", "woo_products_title_color", "","文字颜色");
$row1->addChild("woo_products_title_color", $woo_products_title_color);

$woo_products_title_font_size = new QodeField("textsimple" ,"woo_products_title_font_size" ,"" ,"文字大小 (px)");
$row1->addChild("woo_products_title_font_size", $woo_products_title_font_size);

$woo_products_title_line_height = new QodeField("textsimple", "woo_products_title_line_height", "", "行高 (px)");
$row1->addChild("woo_products_title_line_height", $woo_products_title_line_height);

$woo_products_title_text_transform = new QodeField("selectblanksimple", "woo_products_title_text_transform", "", "文本转换", "", $options_texttransform);
$row1->addChild("woo_products_title_text_transform", $woo_products_title_text_transform);

$row2 = new QodeRow(true);
$group3->addChild("row2",$row2);

$woo_products_title_font_family = new QodeField("fontsimple", "woo_products_title_font_family", "-1", "字体系列", "This is some description");
$row2->addChild("woo_products_title_font_family",$woo_products_title_font_family);

$woo_products_title_font_style = new QodeField("selectblanksimple", "woo_products_title_font_style", "", "字体样式", "This is some description", $options_fontstyle);
$row2->addChild("woo_products_title_font_style", $woo_products_title_font_style);

$woo_products_title_font_weight = new QodeField("selectblanksimple", "woo_products_title_font_weight", "","字体重量", "This is some description", $options_fontweight);
$row2->addChild("woo_products_title_font_weight", $woo_products_title_font_weight);

$woo_products_title_letter_spacing = new QodeField("textsimple", "woo_products_title_letter_spacing", "", "字母间距 (px)", "This is some description");
$row2->addChild("woo_products_title_letter_spacing", $woo_products_title_letter_spacing);

$row3 = new QodeRow(true);
$group3->addChild("row3", $row3);

$woo_products_title_hover_color = new QodeField("colorsimple", "woo_products_title_hover_color", "", "悬停文字颜色", "This is some description");
$row3->addChild("woo_products_title_hover_color", $woo_products_title_hover_color);

$woo_products_title_line_margin_bottom = new QodeField("textsimple", "woo_products_title_line_margin_bottom", "", "边距底部(px)", "This is some description");
$row3->addChild("woo_products_title_line_margin_bottom", $woo_products_title_line_margin_bottom);

$woo_products_title_text_align = new QodeField("selectblanksimple", "woo_products_title_text_align", "", "文本对齐", "This is some description",array(
	"center" => "中",
	"left" => "左",
	"right" => "右"
	));
$row3->addChild("woo_products_title_text_align", $woo_products_title_text_align);


//Product price
$group4 = new QodeGroup("产品价格","Define product price text style");
$product_list_panel->addChild("group4",$group4);

$row1 = new QodeRow();
$group4->addChild("row1",$row1);

$woo_products_price_color = new QodeField("colorsimple","woo_products_price_color","","文字颜色","This is some description");
$row1->addChild("woo_products_price_color",$woo_products_price_color);

$woo_products_price_font_size = new QodeField("textsimple","woo_products_price_font_size","","文字大小 (px)","This is some description");
$row1->addChild("woo_products_price_font_size",$woo_products_price_font_size);

$woo_products_price_line_height = new QodeField("textsimple","woo_products_price_line_height","","行高 (px)","This is some description");
$row1->addChild("woo_products_price_line_height",$woo_products_price_line_height);

$woo_products_price_text_transform = new QodeField("selectblanksimple","woo_products_price_text_transform","","文本转换","This is some description",$options_texttransform);
$row1->addChild("woo_products_price_text_transform",$woo_products_price_text_transform);

$row2 = new QodeRow(true);
$group4->addChild("row2",$row2);

$woo_products_price_font_family = new QodeField("fontsimple","woo_products_price_font_family","-1","字体系列","This is some description");
$row2->addChild("woo_products_price_font_family",$woo_products_price_font_family);

$woo_products_price_font_style = new QodeField("selectblanksimple","woo_products_price_font_style","","字体样式","This is some description",$options_fontstyle);
$row2->addChild("woo_products_price_font_style",$woo_products_price_font_style);

$woo_products_price_font_weight = new QodeField("selectblanksimple","woo_products_price_font_weight","","字体重量","This is some description",$options_fontweight);
$row2->addChild("woo_products_price_font_weight",$woo_products_price_font_weight);

$woo_products_price_letter_spacing = new QodeField("textsimple","woo_products_price_letter_spacing","","字母间距 (px)","This is some description");
$row2->addChild("woo_products_price_letter_spacing",$woo_products_price_letter_spacing);

$row3 = new QodeRow(true);
$group4->addChild("row3",$row3);

$woo_products_price_old_font_size = new QodeField("textsimple","woo_products_price_old_font_size","","原价格字体风格 (px)","This is some description");
$row3->addChild("woo_products_price_old_font_size",$woo_products_price_old_font_size);

$woo_products_price_old_color = new QodeField("colorsimple","woo_products_price_old_color","","原价格颜色","This is some description");
$row3->addChild("woo_products_price_old_color",$woo_products_price_old_color);

$woo_products_price_text_align = new QodeField("selectblanksimple", "woo_products_price_text_align", "", "文本对齐", "This is some description",array(
	"center" => "中",
	"left" => "左",
	"right" => "右"
	));
$row3->addChild("woo_products_price_text_align", $woo_products_price_text_align);

//Product sale
$group5 = new QodeGroup("产品促销","Define product sale text style");
$product_list_panel->addChild("group5",$group5);

$row1 = new QodeRow();
$group5->addChild("row1",$row1);

$woo_products_sale_color = new QodeField("colorsimple","woo_products_sale_color","","文字颜色","This is some description");
$row1->addChild("woo_products_sale_color",$woo_products_sale_color);

$woo_products_sale_font_size = new QodeField("textsimple","woo_products_sale_font_size","","文字大小 (px)","This is some description");
$row1->addChild("woo_products_sale_font_size",$woo_products_sale_font_size);

$woo_products_sale_text_transform = new QodeField("selectblanksimple","woo_products_sale_text_transform","","文本转换","This is some description",$options_texttransform);
$row1->addChild("woo_products_sale_text_transform",$woo_products_sale_text_transform);

$woo_products_sale_letter_spacing = new QodeField("textsimple","woo_products_sale_letter_spacing","","字母间距 (px)","This is some description");
$row1->addChild("woo_products_sale_letter_spacing",$woo_products_sale_letter_spacing);

$row2 = new QodeRow(true);
$group5->addChild("row2",$row2);

$woo_products_sale_font_family = new QodeField("fontsimple","woo_products_sale_font_family","-1","字体系列","This is some description");
$row2->addChild("woo_products_sale_font_family",$woo_products_sale_font_family);

$woo_products_sale_font_style = new QodeField("selectblanksimple","woo_products_sale_font_style","","字体风格","This is some description",$options_fontstyle);
$row2->addChild("woo_products_sale_font_style",$woo_products_sale_font_style);

$woo_products_sale_font_weight = new QodeField("selectblanksimple","woo_products_sale_font_weight","","字体重量","This is some description",$options_fontweight);
$row2->addChild("woo_products_sale_font_weight",$woo_products_sale_font_weight);

$woo_products_sale_border_radius = new QodeField("textsimple","woo_products_sale_border_radius","","边框圆角 (px)","This is some description");
$row2->addChild("woo_products_sale_border_radius",$woo_products_sale_border_radius);

$row3 = new QodeRow(true);
$group5->addChild("row3",$row3);

$woo_products_sale_background_color = new QodeField("colorsimple","woo_products_sale_background_color","","背景颜色","This is some description");
$row3->addChild("woo_products_sale_background_color",$woo_products_sale_background_color);



$woo_products_sale_width = new QodeField("textsimple","woo_products_sale_width","","宽度 (px)","This is some description");
$row3->addChild("woo_products_sale_width",$woo_products_sale_width);

$woo_products_sale_height = new QodeField("textsimple","woo_products_sale_height","","高度 (px)","This is some description");
$row3->addChild("woo_products_sale_height",$woo_products_sale_height);

$woo_products_sale_show_sep = new QodeField("yesnosimple","woo_products_sale_show_sep","yes","显示分隔符");
$row3->addChild("woo_products_sale_show_sep" ,$woo_products_sale_show_sep);

//Product out of stock

$group6 = new QodeGroup('产品 "缺货"',"Define 'Out Of Stock' text style");
$product_list_panel->addChild("group6",$group6);

$row1 = new QodeRow();
$group6->addChild("row1",$row1);

$woo_products_out_of_stock_color = new QodeField("colorsimple","woo_products_out_of_stock_color","","文字颜色","This is some description");
$row1->addChild("woo_products_out_of_stock_color",$woo_products_out_of_stock_color);

$woo_products_out_of_stock_font_size = new QodeField("textsimple","woo_products_out_of_stock_font_size","","文字大小 (px)","This is some description");
$row1->addChild("woo_products_out_of_stock_font_size",$woo_products_out_of_stock_font_size);

$woo_products_out_of_stock_text_transform = new QodeField("selectblanksimple","woo_products_out_of_stock_text_transform","","文本转换","This is some description",$options_texttransform);
$row1->addChild("woo_products_out_of_stock_text_transform",$woo_products_out_of_stock_text_transform);

$woo_products_out_of_stock_letter_spacing = new QodeField("textsimple","woo_products_out_of_stock_letter_spacing","","字母间距 (px)","This is some description");
$row1->addChild("woo_products_out_of_stock_letter_spacing",$woo_products_out_of_stock_letter_spacing);

$row2 = new QodeRow(true);
$group6->addChild("row2",$row2);

$woo_products_out_of_stock_font_family = new QodeField("fontsimple","woo_products_out_of_stock_font_family","-1","字体系列","This is some description");
$row2->addChild("woo_products_out_of_stock_font_family",$woo_products_out_of_stock_font_family);

$woo_products_out_of_stock_font_style = new QodeField("selectblanksimple","woo_products_out_of_stock_font_style","","字体样式","This is some description",$options_fontstyle);
$row2->addChild("woo_products_out_of_stock_font_style",$woo_products_out_of_stock_font_style);

$woo_products_out_of_stock_font_weight = new QodeField("selectblanksimple","woo_products_out_of_stock_font_weight","","字体重量","This is some description",$options_fontweight);
$row2->addChild("woo_products_out_of_stock_font_weight",$woo_products_out_of_stock_font_weight);

$woo_products_out_of_stock_border_radius = new QodeField("textsimple","woo_products_out_of_stock_border_radius","","边框圆角 (px)","This is some description");
$row2->addChild("woo_products_out_of_stock_border_radius",$woo_products_out_of_stock_border_radius);

$row3 = new QodeRow(true);
$group6->addChild("row3",$row3);

$woo_products_out_of_stock_background_color = new QodeField("colorsimple","woo_products_out_of_stock_background_color","","背景颜色","This is some description");
$row3->addChild("woo_products_out_of_stock_background_color",$woo_products_out_of_stock_background_color);

$woo_products_out_of_stock_width = new QodeField("textsimple","woo_products_out_of_stock_width","","宽度 (px)","This is some description");
$row3->addChild("woo_products_out_of_stock_width",$woo_products_out_of_stock_width);

$woo_products_out_of_stock_height = new QodeField("textsimple","woo_products_out_of_stock_height","","高度 (px)","This is some description");
$row3->addChild("woo_products_out_of_stock_height",$woo_products_out_of_stock_height);

//Product add to cart
$products_add_to_cart_subtitle = new QodeGroup('"Add to cart" button', 'Define styles for add to cart button');
$product_list_panel->addChild("products_add_to_cart_subtitle", $products_add_to_cart_subtitle);

$row1 = new QodeRow();
$products_add_to_cart_subtitle->addChild("row1",$row1);

$woo_products_add_to_cart_color = new QodeField("colorsimple","woo_products_add_to_cart_color","","文字颜色","This is some description");
$row1->addChild("woo_products_add_to_cart_color",$woo_products_add_to_cart_color);

$woo_products_add_to_cart_hover_color = new QodeField("colorsimple","woo_products_add_to_cart_hover_color","","悬停文字颜色","This is some description");
$row1->addChild("woo_products_add_to_cart_hover_color",$woo_products_add_to_cart_hover_color);

$woo_products_add_to_cart_font_size = new QodeField("textsimple","woo_products_add_to_cart_font_size","","文字大小 (px)","This is some description");
$row1->addChild("woo_products_add_to_cart_font_size",$woo_products_add_to_cart_font_size);

$woo_products_add_to_cart_line_height = new QodeField("textsimple","woo_products_add_to_cart_line_height","","行高 (px)","This is some description");
$row1->addChild("woo_products_add_to_cart_line_height",$woo_products_add_to_cart_line_height);

$row2 = new QodeRow(true);
$products_add_to_cart_subtitle->addChild("row2",$row2);

$woo_products_add_to_cart_text_transform = new QodeField("selectblanksimple","woo_products_add_to_cart_text_transform","","文本转换","This is some description",$options_texttransform);
$row2->addChild("woo_products_add_to_cart_text_transform",$woo_products_add_to_cart_text_transform);

$woo_products_add_to_cart_font_family = new QodeField("fontsimple","woo_products_add_to_cart_font_family","-1","字体系列","This is some description");
$row2->addChild("woo_products_add_to_cart_font_family",$woo_products_add_to_cart_font_family);

$woo_products_add_to_cart_font_style = new QodeField("selectblanksimple","woo_products_add_to_cart_font_style","","字体样式","This is some description",$options_fontstyle);
$row2->addChild("woo_products_add_to_cart_font_style",$woo_products_add_to_cart_font_style);

$woo_products_add_to_cart_font_weight = new QodeField("selectblanksimple","woo_products_add_to_cart_font_weight","","字体重量","This is some description",$options_fontweight);
$row2->addChild("woo_products_add_to_cart_font_weight",$woo_products_add_to_cart_font_weight);

$row3 = new QodeRow(true);
$products_add_to_cart_subtitle->addChild("row3",$row3);

$woo_products_add_to_cart_letter_spacing = new QodeField("textsimple","woo_products_add_to_cart_letter_spacing","","字母间距 (px)","This is some description");
$row3->addChild("woo_products_add_to_cart_letter_spacing",$woo_products_add_to_cart_letter_spacing);

$woo_products_add_to_cart_background_color = new QodeField("colorsimple","woo_products_add_to_cart_background_color","","背景颜色","This is some description");
$row3->addChild("woo_products_add_to_cart_background_color",$woo_products_add_to_cart_background_color);

$woo_products_add_to_cart_background_hover_color = new QodeField("colorsimple","woo_products_add_to_cart_background_hover_color","","悬停背景颜色","This is some description");
$row3->addChild("woo_products_add_to_cart_background_hover_color",$woo_products_add_to_cart_background_hover_color);

$woo_products_add_to_cart_border_radius = new QodeField("textsimple","woo_products_add_to_cart_border_radius","","边框圆角 (px)","This is some description");
$row3->addChild("woo_products_add_to_cart_border_radius",$woo_products_add_to_cart_border_radius);

$row4 = new QodeRow();
$products_add_to_cart_subtitle->addChild("row4",$row4);

$woo_products_add_to_cart_border_color = new QodeField("colorsimple","woo_products_add_to_cart_border_color","","边框颜色","This is some description");
$row4->addChild("woo_products_add_to_cart_border_color",$woo_products_add_to_cart_border_color);

$woo_products_add_to_cart_border_hover_color = new QodeField("colorsimple","woo_products_add_to_cart_border_hover_color","","边框悬停颜色","This is some description");
$row4->addChild("woo_products_add_to_cart_border_hover_color",$woo_products_add_to_cart_border_hover_color);

$woo_products_add_to_cart_border_width = new QodeField("textsimple","woo_products_add_to_cart_border_width","","边框宽度 (px)","This is some description");
$row4->addChild("woo_products_add_to_cart_border_width",$woo_products_add_to_cart_border_width);


//Product single
$product_single_panel = new QodePanel('产品内页', 'product_single_panel');

$woocommerce_page->addChild('product_single_panel', $product_single_panel);

//Product single title
$group3 = new QodeGroup("产品标题","Define product title text style");
$product_single_panel->addChild("group3",$group3);

$row1 = new QodeRow();
$group3->addChild("row1",$row1);

$woo_product_single_title_color = new QodeField("colorsimple", "woo_product_single_title_color", "","文字颜色");
$row1->addChild("woo_product_single_title_color", $woo_product_single_title_color);

$woo_product_single_title_font_size = new QodeField("textsimple" ,"woo_product_single_title_font_size" ,"" ,"文字大小 (px)");
$row1->addChild("woo_product_single_title_font_size", $woo_product_single_title_font_size);

$woo_product_single_title_line_height = new QodeField("textsimple", "woo_product_single_title_line_height", "", "行高 (px)");
$row1->addChild("woo_product_single_title_line_height", $woo_product_single_title_line_height);

$woo_product_single_title_text_transform = new QodeField("selectblanksimple", "woo_product_single_title_text_transform", "", "文本转换", "", $options_texttransform);
$row1->addChild("woo_product_single_title_text_transform", $woo_product_single_title_text_transform);

$row2 = new QodeRow(true);
$group3->addChild("row2",$row2);

$woo_product_single_title_font_family = new QodeField("fontsimple", "woo_product_single_title_font_family", "-1", "字体系列", "This is some description");
$row2->addChild("woo_product_single_title_font_family",$woo_product_single_title_font_family);

$woo_product_single_title_font_style = new QodeField("selectblanksimple", "woo_product_single_title_font_style", "", "字体样式", "This is some description", $options_fontstyle);
$row2->addChild("woo_product_single_title_font_style", $woo_product_single_title_font_style);

$woo_product_single_title_font_weight = new QodeField("selectblanksimple", "woo_product_single_title_font_weight", "","字体重量", "This is some description", $options_fontweight);
$row2->addChild("woo_product_single_title_font_weight", $woo_product_single_title_font_weight);

$woo_product_single_title_letter_spacing = new QodeField("textsimple", "woo_product_single_title_letter_spacing", "", "字母间距 (px)", "This is some description");
$row2->addChild("woo_product_single_title_letter_spacing", $woo_product_single_title_letter_spacing);

$row3 = new QodeRow(true);
$group3->addChild("row3", $row3);

$woo_product_single_title_line_margin_bottom = new QodeField("textsimple", "woo_product_single_title_line_margin_bottom", "", "边距底部 (px)", "This is some description");
$row3->addChild("woo_product_single_title_line_margin_bottom", $woo_product_single_title_line_margin_bottom);

//Product single price
$group4 = new QodeGroup("产品价格","Define product price text style");
$product_single_panel->addChild("group4",$group4);

$row1 = new QodeRow();
$group4->addChild("row1",$row1);

$woo_product_single_price_color = new QodeField("colorsimple","woo_product_single_price_color","","文字颜色","This is some description");
$row1->addChild("woo_product_single_price_color",$woo_product_single_price_color);

$woo_product_single_price_font_size = new QodeField("textsimple","woo_product_single_price_font_size","","文字大小 (px)","This is some description");
$row1->addChild("woo_product_single_price_font_size",$woo_product_single_price_font_size);

$woo_product_single_price_line_height = new QodeField("textsimple","woo_product_single_price_line_height","","行高 (px)","This is some description");
$row1->addChild("woo_product_single_price_line_height",$woo_product_single_price_line_height);

$woo_product_single_price_text_transform = new QodeField("selectblanksimple","woo_product_single_price_text_transform","","文本转换","This is some description",$options_texttransform);
$row1->addChild("woo_product_single_price_text_transform",$woo_product_single_price_text_transform);

$row2 = new QodeRow(true);
$group4->addChild("row2",$row2);

$woo_product_single_price_font_family = new QodeField("fontsimple","woo_product_single_price_font_family","-1","字体系列","This is some description");
$row2->addChild("woo_product_single_price_font_family",$woo_product_single_price_font_family);

$woo_product_single_price_font_style = new QodeField("selectblanksimple","woo_product_single_price_font_style","","字体样式","This is some description",$options_fontstyle);
$row2->addChild("woo_product_single_price_font_style",$woo_product_single_price_font_style);

$woo_product_single_price_font_weight = new QodeField("selectblanksimple","woo_product_single_price_font_weight","","字体重量","This is some description",$options_fontweight);
$row2->addChild("woo_product_single_price_font_weight",$woo_product_single_price_font_weight);

$woo_product_single_price_letter_spacing = new QodeField("textsimple","woo_product_single_price_letter_spacing","","字母间距 (px)","This is some description");
$row2->addChild("woo_product_single_price_letter_spacing",$woo_product_single_price_letter_spacing);

$row3 = new QodeRow(true);
$group4->addChild("row3",$row3);

$woo_product_single_price_old_font_size = new QodeField("textsimple","woo_product_single_price_old_font_size","","原价格字体尺寸 (px)","This is some description");
$row3->addChild("woo_product_single_price_old_font_size",$woo_product_single_price_old_font_size);

$woo_product_single_price_old_color = new QodeField("colorsimple","woo_product_single_price_old_color","","原价格颜色","This is some description");
$row3->addChild("woo_product_single_price_old_color",$woo_product_single_price_old_color);

//Quantiti buttons
$quantity_buttons_group = new QodeGroup('数量按钮', 'Define styles for quantity buttons');
$product_single_panel->addChild('quantity_buttons_group', $quantity_buttons_group);

$quantity_button_background_color = new QodeField('colorsimple', 'quantity_button_background_color', '', '背景颜色');
$quantity_buttons_group->addChild('quantity_button_background_color', $quantity_button_background_color);

$quantity_button_hover_background_color = new QodeField('colorsimple', 'quantity_hover_button_background_color', '', '悬停背景颜色');
$quantity_buttons_group->addChild('quantity_hover_button_background_color', $quantity_button_hover_background_color);

$quantity_button_icon_color = new QodeField('colorsimple', 'quantity_button_icon_color', '', '图标颜色');
$quantity_buttons_group->addChild('quantity_button_icon_color', $quantity_button_icon_color);

$quantity_button_icon_hover_color = new QodeField('colorsimple', 'quantity_button_icon_hover_color', '', '图标悬停颜色');
$quantity_buttons_group->addChild('quantity_button_icon_hover_color', $quantity_button_icon_hover_color);

//Cart page
$panel_cart_page = new QodePanel('购物车页面', 'panel_cart_page');
$woocommerce_page->addChild('panel_cart_page', $panel_cart_page);

$cart_title_size = new QodeField('text', 'woo_cart_title_size', '', '标题尺寸(px)', 'Define size for titles that are displayed on cart page', '', array('col_width' => 3));
$panel_cart_page->addChild('woo_cart_title_size', $cart_title_size);

$cart_title_line_height = new QodeField('text', 'woo_cart_title_line_height', '', '行高 (px)', 'Define line height for titles that are displayed on cart page', '', array('col_width' => 3));
$panel_cart_page->addChild('woo_cart_title_line_height', $cart_title_line_height);

$cart_title_letter_spacing = new QodeField('text', 'woo_cart_title_letter_spacing', '', '字母间距(px)', 'Define letter spacing for titles that are displayed on cart page', '', array('col_width' => 3));
$panel_cart_page->addChild('woo_cart_title_letter_spacing', $cart_title_letter_spacing);