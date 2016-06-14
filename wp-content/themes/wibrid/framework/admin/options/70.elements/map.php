<?php

$elementsPage = new QodeAdminPage("_elements", "元素", "fa fa-flag-o");
$qodeFramework->qodeOptions->addAdminPage("elementsPage",$elementsPage);

//Separators

$panel2 = new QodePanel("分隔符","separators_panel");
$elementsPage->addChild("panel2",$panel2);

	$group1 = new QodeGroup("默认",'Define styles for separator of type "Normal"');
	$panel2->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$separator_color = new QodeField("colorsimple","separator_color","","文字颜色","This is some description");
			$row1->addChild("separator_color",$separator_color);
			$separator_color_transparency = new QodeField("textsimple","separator_color_transparency","","透明度","This is some description");
			$row1->addChild("separator_color_transparency",$separator_color_transparency);
		$row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);
			$separator_thickness = new QodeField("textsimple","separator_thickness","","厚度 (px)","This is some description");
			$row2->addChild("separator_thickness",$separator_thickness);
			$separator_topmargin = new QodeField("textsimple","separator_topmargin","","顶部外边距 (px)","This is some description");
			$row2->addChild("separator_topmargin",$separator_topmargin);
			$separator_bottommargin = new QodeField("textsimple","separator_bottommargin","","底部外边距 (px)","This is some description");
			$row2->addChild("separator_bottommargin",$separator_bottommargin);

	$group2 = new QodeGroup("小",'Define styles for separator of type "Small"');
	$panel2->addChild("group2",$group2);
		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);
			$separator_small_color = new QodeField("colorsimple","separator_small_color","","文字颜色","This is some description");
			$row1->addChild("separator_small_color",$separator_small_color);
			$separator_small_color_transparency = new QodeField("textsimple","separator_small_color_transparency","","透明度","This is some description");
			$row1->addChild("separator_small_color_transparency",$separator_small_color_transparency);
		$row2 = new QodeRow(true);
		$group2->addChild("row2",$row2);
			$separator_small_thickness = new QodeField("textsimple","separator_small_thickness","","厚度 (px)","This is some description");
			$row2->addChild("separator_small_thickness",$separator_small_thickness);
			$separator_small_width = new QodeField("textsimple","separator_small_width","","宽度 (px)","This is some description");
			$row2->addChild("separator_small_width",$separator_small_width);
			$separator_small_topmargin = new QodeField("textsimple","separator_small_topmargin","","顶部外边距 (px)","This is some description");
			$row2->addChild("separator_small_topmargin",$separator_small_topmargin);
			$separator_small_bottommargin = new QodeField("textsimple","separator_small_bottommargin","","底部外边距 (px)","This is some description");
			$row2->addChild("separator_small_bottommargin",$separator_small_bottommargin);

    $group3 = new QodeGroup("带图标分隔符",'Define styles for separator with icon');
    $panel2->addChild("group3",$group3);
        $row1 = new QodeRow();
        $group3->addChild("row1",$row1);
            $separator_small_color = new QodeField("colorsimple","separator_with_icon_color","","颜色","This is some description");
            $row1->addChild("separator_with_icon_color",$separator_small_color);
            $separator_small_color_transparency = new QodeField("textsimple","separator_with_icon_transparency","","透明度","This is some description");
            $row1->addChild("separator_with_icon_transparency",$separator_small_color_transparency);
        $row2 = new QodeRow(true);
        $group3->addChild("row2",$row2);
            $separator_small_thickness = new QodeField("textsimple","separator_with_icon_thickness","","厚度 (px)","This is some description");
            $row2->addChild("separator_with_icon_thickness",$separator_small_thickness);
            $separator_small_width = new QodeField("textsimple","separator_with_icon_width","","宽度 (px)","This is some description");
            $row2->addChild("separator_with_icon_width",$separator_small_width);
            $separator_small_topmargin = new QodeField("textsimple","separator_with_icon_topmargin","","顶部外边距 (px)","This is some description");
            $row2->addChild("separator_with_icon_topmargin",$separator_small_topmargin);
            $separator_small_bottommargin = new QodeField("textsimple","separator_with_icon_bottommargin","","底部外边距 (px)","This is some description");
            $row2->addChild("separator_with_icon_bottommargin",$separator_small_bottommargin);

//Buttons

$panel3 = new QodePanel("按钮","buttons_panel");
$elementsPage->addChild("panel3",$panel3);

	$group1 = new QodeGroup("默认按钮",'Define styles for "Default" Button');
	$panel3->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$button_title_color = new QodeField("colorsimple","button_title_color","","文字颜色","This is some description");
			$row1->addChild("button_title_color",$button_title_color);
			$button_title_hovercolor = new QodeField("colorsimple","button_title_hovercolor","","悬停颜色","This is some description");
			$row1->addChild("button_title_hovercolor",$button_title_hovercolor);
		$row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);
			$button_title_google_fonts = new QodeField("Fontsimple","button_title_google_fonts","-1","字体系列","This is some description");
			$row2->addChild("button_title_google_fonts",$button_title_google_fonts);
			$button_title_fontsize = new QodeField("textsimple","button_title_fontsize","","字体大小 (px)","This is some description");
			$row2->addChild("button_title_fontsize",$button_title_fontsize);
			$button_title_lineheight = new QodeField("textsimple","button_title_lineheight","","行高 (px)","This is some description");
			$row2->addChild("button_title_lineheight",$button_title_lineheight);
		$row3 = new QodeRow(true);
		$group1->addChild("row3",$row3);
			$button_title_fontstyle = new QodeField("selectblanksimple","button_title_fontstyle","","字体风格","This is some description",$options_fontstyle);
			$row3->addChild("button_title_fontstyle",$button_title_fontstyle);
			$button_title_fontweight = new QodeField("selectblanksimple","button_title_fontweight","","字体粗细","This is some description",$options_fontweight);
			$row3->addChild("button_title_fontweight",$button_title_fontweight);
			$button_title_letter_spacing = new QodeField("textsimple","button_title_letter_spacing","","字母间距 (px)","This is some description");
			$row3->addChild("button_title_letter_spacing",$button_title_letter_spacing);
			$button_title_text_transform = new QodeField("selectblanksimple","button_title_text_transform","","文本转换","This is some description",$options_texttransform);
			$row3->addChild("button_title_text_transform",$button_title_text_transform);
		$row4 = new QodeRow(true);
		$group1->addChild("row4",$row4);
			$button_backgroundcolor = new QodeField("colorsimple","button_backgroundcolor","","背景颜色","This is some description");
			$row4->addChild("button_backgroundcolor",$button_backgroundcolor);
			$button_backgroundcolor_hover = new QodeField("colorsimple","button_backgroundcolor_hover","","悬停背景颜色","This is some description");
			$row4->addChild("button_backgroundcolor_hover",$button_backgroundcolor_hover);
			$button_border_color = new QodeField("colorsimple","button_border_color","","边框颜色","This is some description");
			$row4->addChild("button_border_color",$button_border_color);
			$button_border_hover_color = new QodeField("colorsimple","button_border_hover_color","","边框悬停颜色","This is some description");
			$row4->addChild("button_border_hover_color",$button_border_hover_color);
		$row5 = new QodeRow(true);
		$group1->addChild("row5",$row5);
			$button_border_width = new QodeField("textsimple","button_border_width","","边框宽度 (px)","This is some description");
			$row5->addChild("button_border_width",$button_border_width);
			$button_border_radius = new QodeField("textsimple","button_border_radius","","边框圆角 (px)","This is some description");
			$row5->addChild("button_border_radius",$button_border_radius);
			$button_padding_leftright = new QodeField("textsimple","button_padding_leftright","","内边距左/右 (px)","This is some description");
			$row5->addChild("button_padding_leftright",$button_padding_leftright);

	$group2 = new QodeGroup("白按钮",'Define styles for "White" Button');
	$panel3->addChild("group2",$group2);
		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);
			$button_white_text_color = new QodeField("colorsimple","button_white_text_color","","文字颜色","This is some description");
			$row1->addChild("button_white_text_color",$button_white_text_color);
			$button_white_text_color_hover = new QodeField("colorsimple","button_white_text_color_hover","","悬停颜色","This is some description");
			$row1->addChild("button_white_text_color_hover",$button_white_text_color_hover);
		$row2 = new QodeRow(true);
		$group2->addChild("row2",$row2);
			$button_white_background_color = new QodeField("colorsimple","button_white_background_color","","背景颜色","This is some description");
			$row2->addChild("button_white_background_color",$button_white_background_color);
			$button_white_background_color_hover = new QodeField("colorsimple","button_white_background_color_hover","","悬停背景颜色","This is some description");
			$row2->addChild("button_white_background_color_hover",$button_white_background_color_hover);
			$button_white_border_color = new QodeField("colorsimple","button_white_border_color","","边框颜色","This is some description");
			$row2->addChild("button_white_border_color",$button_white_border_color);
			$button_white_border_color_hover = new QodeField("colorsimple","button_white_border_color_hover","","边框悬停颜色","This is some description");
			$row2->addChild("button_white_border_color_hover",$button_white_border_color_hover);

	$group3 = new QodeGroup("小按钮",'Define Styles for "Small" Button');
	$panel3->addChild("group3",$group3);
		$row1 = new QodeRow();
		$group3->addChild("row1",$row1);
			$small_button_lineheight = new QodeField("textsimple","small_button_lineheight","","行高 (px)","This is some description");
			$row1->addChild("small_button_lineheight",$small_button_lineheight);
			$small_button_fontsize = new QodeField("textsimple","small_button_fontsize","","字体大小 (px)","This is some description");
			$row1->addChild("small_button_fontsize",$small_button_fontsize);
		$row2 = new QodeRow(true);
		$group3->addChild("row2",$row2);
			$small_button_fontweight = new QodeField("selectblanksimple","small_button_fontweight","","字体粗细","This is some description",$options_fontweight);
			$row2->addChild("small_button_fontweight",$small_button_fontweight);
			$small_button_padding = new QodeField("textsimple","small_button_padding","","内边距左/右 (px)","This is some description");
			$row2->addChild("small_button_padding",$small_button_padding);
			$small_button_border_radius = new QodeField("textsimple","small_button_border_radius","","边框圆角 (px)","This is some description");
			$row2->addChild("small_button_border_radius",$small_button_border_radius);

	$group4 = new QodeGroup("大按钮",'Define styles for "Large" Button');
	$panel3->addChild("group4",$group4);
		$row1 = new QodeRow();
		$group4->addChild("row1",$row1);
			$large_button_lineheight = new QodeField("textsimple","large_button_lineheight","","行高 (px)","This is some description");
			$row1->addChild("large_button_lineheight",$large_button_lineheight);
			$large_button_fontsize = new QodeField("textsimple","large_button_fontsize","","字体大小 (px)","This is some description");
			$row1->addChild("large_button_fontsize",$large_button_fontsize);
		$row2 = new QodeRow(true);
		$group4->addChild("row2",$row2);
			$large_button_fontweight = new QodeField("selectblanksimple","large_button_fontweight","","字体粗细","This is some description",$options_fontweight);
			$row2->addChild("large_button_fontweight",$large_button_fontweight);
			$large_button_padding = new QodeField("textsimple","large_button_padding","","内边距左/右 (px)","This is some description");
			$row2->addChild("large_button_padding",$large_button_padding);
			$large_button_border_radius = new QodeField("textsimple","large_button_border_radius","","边框圆角 (px)","This is some description");
			$row2->addChild("large_button_border_radius",$large_button_border_radius);

	$group5 = new QodeGroup("额外大按钮",'Define styles for "Extra Large" Button');
	$panel3->addChild("group5",$group5);
		$row1 = new QodeRow();
		$group5->addChild("row1",$row1);
			$big_large_button_lineheight = new QodeField("textsimple","big_large_button_lineheight","","行高 (px)","This is some description");
			$row1->addChild("big_large_button_lineheight",$big_large_button_lineheight);
			$big_large_button_fontsize = new QodeField("textsimple","big_large_button_fontsize","","字体大小 (px)","This is some description");
			$row1->addChild("big_large_button_fontsize",$big_large_button_fontsize);
		$row2 = new QodeRow(true);
		$group5->addChild("row2",$row2);
			$big_large_button_fontweight = new QodeField("selectblanksimple","big_large_button_fontweight","","字体粗细","This is some description",$options_fontweight);
			$row2->addChild("big_large_button_fontweight",$big_large_button_fontweight);
			$big_large_button_padding = new QodeField("textsimple","big_large_button_padding","","内边距左/右 (px)","This is some description");
			$row2->addChild("big_large_button_padding",$big_large_button_padding);
			$big_large_button_border_radius = new QodeField("textsimple","big_large_button_border_radius","","边框圆角 (px)","This is some description");
			$row2->addChild("big_large_button_border_radius",$big_large_button_border_radius);

//Message Boxes

$panel4 = new QodePanel("信息框", "message_boxes_panel");
$elementsPage->addChild("panel4",$panel4);

	$group1 = new QodeGroup("信息框风格","Define Message Box style");
	$panel4->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$message_title_color = new QodeField("colorsimple","message_title_color","","文字颜色","This is some description");
			$row1->addChild("message_title_color",$message_title_color);
			$message_backgroundcolor = new QodeField("colorsimple","message_backgroundcolor","","背景颜色","This is some description");
			$row1->addChild("message_backgroundcolor",$message_backgroundcolor);
		$row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);
			$message_title_google_fonts = new QodeField("Fontsimple","message_title_google_fonts","-1","字体系列","This is some description");
			$row2->addChild("message_title_google_fonts",$message_title_google_fonts);
			$message_title_fontsize = new QodeField("textsimple","message_title_fontsize","","字体大小 (px)","This is some description");
			$row2->addChild("message_title_fontsize",$message_title_fontsize);
			$message_title_lineheight = new QodeField("textsimple","message_title_lineheight","","行高 (px)","This is some description");
			$row2->addChild("message_title_lineheight",$message_title_lineheight);
		$row3 = new QodeRow(true);
		$group1->addChild("row3",$row3);
			$message_title_fontstyle = new QodeField("selectblanksimple","message_title_fontstyle","","字体风格","This is some description",$options_fontstyle);
			$row3->addChild("message_title_fontstyle",$message_title_fontstyle);
			$message_title_fontweight = new QodeField("selectblanksimple","message_title_fontweight","","字体粗细","This is some description",$options_fontweight);
			$row3->addChild("message_title_fontweight",$message_title_fontweight);
			
	$group2 = new QodeGroup("信息图标风格","Define Message Box icon style");
	$panel4->addChild("group2",$group2);
		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);
			$message_icon_color = new QodeField("colorsimple","message_icon_color","","文字颜色","This is some description");
			$row1->addChild("message_icon_color",$message_icon_color);
			$message_icon_fontsize = new QodeField("textsimple","message_icon_fontsize","","字体大小 (px)","This is some description");
			$row1->addChild("message_icon_fontsize",$message_icon_fontsize);

//Blockquotes

$panel5 = new QodePanel("引用","blockquote_panel");
$elementsPage->addChild("panel5",$panel5);

	$group1 = new QodeGroup("引用风格","Define Blockquote style");
	$panel5->addChild("group1",$group1);
        $row1 = new QodeRow(true);
        $group1->addChild("row1",$row1);
            $quote_link_blockqoute_fontsize = new QodeField("textsimple","quote_link_blockqoute_fontsize","","字体大小 (px)","This is some description");
            $row1->addChild("quote_link_blockqoute_fontsize",$quote_link_blockqoute_fontsize);
            $quote_link_blockqoute_lineheight = new QodeField("textsimple","quote_link_blockqoute_lineheight","","行高 (px)","This is some description");
            $row1->addChild("quote_link_blockqoute_lineheight",$quote_link_blockqoute_lineheight);
			$quote_link_blockqoute_letterspacing = new QodeField("textsimple","quote_link_blockqoute_letterspacing","","字母间距 (px)","This is some description");
			$row1->addChild("quote_link_blockqoute_letterspacing",$quote_link_blockqoute_letterspacing);
			$quote_link_blockqoute_texttransform = new QodeField("selectblanksimple","quote_link_blockqoute_texttransform","","文本转换","This is some description",$options_texttransform);
			$row1->addChild("quote_link_blockqoute_texttransform",$quote_link_blockqoute_texttransform);

		$row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);
			$quote_link_blockqoute_fontfamily = new QodeField("fontsimple","quote_link_blockqoute_fontfamily","-1","字体系列","This is some description");
			$row2->addChild("quote_link_blockqoute_fontfamily",$quote_link_blockqoute_fontfamily);
			$quote_link_blockqoute_fontstyle = new QodeField("selectblanksimple","quote_link_blockqoute_fontstyle","","字体样式","This is some description",$options_fontstyle);
			$row2->addChild("quote_link_blockqoute_fontstyle",$quote_link_blockqoute_fontstyle);
			$quote_link_blockqoute_fontweight = new QodeField("selectblanksimple","quote_link_blockqoute_fontweight","","字体重量","This is some description",$options_fontweight);
			$row2->addChild("quote_link_blockqoute_fontweight",$quote_link_blockqoute_fontweight);


        $row3 = new QodeRow(true);
		$group1->addChild("row3",$row3);
			$blockquote_font_color = new QodeField("colorsimple","blockquote_font_color","","文字颜色","This is some description");
            $row3->addChild("blockquote_font_color",$blockquote_font_color);
			$blockquote_background_color = new QodeField("colorsimple","blockquote_background_color","","背景颜色","This is some description");
            $row3->addChild("blockquote_background_color",$blockquote_background_color);
			$blockquote_border_color = new QodeField("colorsimple","blockquote_border_color","","边框颜色","This is some description");
            $row3->addChild("blockquote_border_color",$blockquote_border_color);
			$blockquote_quote_icon_color = new QodeField("colorsimple","blockquote_quote_icon_color","","引用图标颜色","This is some description");
            $row3->addChild("blockquote_quote_icon_color",$blockquote_quote_icon_color);

//Social Icon

$panel6 = new QodePanel("社交图标", "social_icon_panel");
$elementsPage->addChild("panel6",$panel6);

	$group1 = new QodeGroup("社交图标风格","Define Social Icons style");
	$panel6->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$social_icon_color = new QodeField("colorsimple","social_icon_color","","图标颜色","This is some description");
			$row1->addChild("social_icon_color",$social_icon_color);
			$social_icon_background_color = new QodeField("colorsimple","social_icon_background_color","","图标背景颜色","This is some description");
			$row1->addChild("social_icon_background_color",$social_icon_background_color);
			$social_icon_border_color = new QodeField("colorsimple","social_icon_border_color","","图标边框颜色","This is some description");
			$row1->addChild("social_icon_border_color",$social_icon_border_color);

//Testimonials

$panel7 = new QodePanel("评价","testimonials_panel");
$elementsPage->addChild("panel7",$panel7);

	$group1 = new QodeGroup("评价样式","Define Testimonials style");
	$panel7->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$testimonaials_navigation_border_radius = new QodeField("textsimple","testimonaials_navigation_border_radius","","导航边框圆角 (px)","This is some description");
			$row1->addChild("testimonaials_navigation_border_radius",$testimonaials_navigation_border_radius);

	$group2 = new QodeGroup("见证文字风格","Define Testimonials text style");
	$panel7->addChild("group2",$group2);
		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);

			$testimonials_text_color = new QodeField("colorsimple","testimonials_text_color","","文字颜色","This is some description");
			$row1->addChild("testimonials_text_color",$testimonials_text_color);
			$testimonaials_font_size = new QodeField("textsimple","testimonaials_font_size","","字体大小 (px)","This is some description");
			$row1->addChild("testimonaials_font_size",$testimonaials_font_size);
			$testimonials_text_line_height = new QodeField("textsimple","testimonials_text_line_height","","行高 (px)","This is some description");
			$row1->addChild("testimonials_text_line_height",$testimonials_text_line_height);
			$testimonials_text_text_transform = new QodeField("selectblanksimple","testimonials_text_text_transform","","文本转换","This is some description",$options_texttransform);
			$row1->addChild("testimonials_text_text_transform",$testimonials_text_text_transform);

		$row2 = new QodeRow(true);
		$group2->addChild("row2",$row2);

			$testimonials_text_font_family = new QodeField("fontsimple","testimonials_text_font_family","-1","字体系列","This is some description");
			$row2->addChild("testimonials_text_font_family",$testimonials_text_font_family);
			$testimonials_text_font_style = new QodeField("selectblanksimple","testimonials_text_font_style","","文字样式","This is some description",$options_fontstyle);
			$row2->addChild("testimonials_text_font_style",$testimonials_text_font_style);
			$testimonials_text_font_weight = new QodeField("selectblanksimple","testimonials_text_font_weight","","文字重量","This is some description",$options_fontweight);
			$row2->addChild("testimonials_text_font_weight",$testimonials_text_font_weight);
			$testimonials_text_letter_spacing = new QodeField("textsimple","testimonials_text_letter_spacing","","字母间距 (px)","This is some description");
			$row2->addChild("testimonials_text_letter_spacing",$testimonials_text_letter_spacing);

	$group3 = new QodeGroup("见证作者样式","Define Testimonials author style");
	$panel7->addChild("group3",$group3);
		$row1 = new QodeRow();
		$group3->addChild("row1",$row1);

			$testimonials_author_color = new QodeField("colorsimple","testimonials_author_color","","文本颜色","This is some description");
			$row1->addChild("testimonials_author_color",$testimonials_author_color);
			$testimonials_author_font_size = new QodeField("textsimple","testimonials_author_font_size","","字体样式 (px)","This is some description");
			$row1->addChild("testimonials_author_font_size",$testimonials_author_font_size);
			$testimonials_author_line_height = new QodeField("textsimple","testimonials_author_line_height","","行高 (px)","This is some description");
			$row1->addChild("testimonials_author_line_height",$testimonials_author_line_height);
			$testimonials_author_text_transform = new QodeField("selectblanksimple","testimonials_author_text_transform","","文本转换","This is some description",$options_texttransform);
			$row1->addChild("testimonials_author_text_transform",$testimonials_author_text_transform);

		$row2 = new QodeRow(true);
		$group3->addChild("row2",$row2);

			$testimonials_author_font_family = new QodeField("fontsimple","testimonials_author_font_family","-1","字体系列","This is some description");
			$row2->addChild("testimonials_author_font_family",$testimonials_author_font_family);
			$testimonials_author_font_style = new QodeField("selectblanksimple","testimonials_author_font_style","","字体风格","This is some description",$options_fontstyle);
			$row2->addChild("testimonials_author_font_style",$testimonials_author_font_style);
			$testimonials_author_font_weight = new QodeField("selectblanksimple","testimonials_author_font_weight","","字体重量","This is some description",$options_fontweight);
			$row2->addChild("testimonials_author_font_weight",$testimonials_author_font_weight);
			$testimonials_author_letter_spacing = new QodeField("textsimple","testimonials_author_letter_spacing","","字母间距 (px)","This is some description");
			$row2->addChild("testimonials_author_letter_spacing",$testimonials_author_letter_spacing);
//Counters

$panel8 = new QodePanel("计数器","counters_panel");
$elementsPage->addChild("panel8",$panel8);

	$group1 = new QodeGroup("计数器风格","Define styles for Counters");
	$panel8->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$counter_color = new QodeField("colorsimple","counter_color","","数字色彩","This is some description");
			$row1->addChild("counter_color",$counter_color);
			$counter_text_color = new QodeField("colorsimple","counter_text_color","","文字颜色","This is some description");
			$row1->addChild("counter_text_color",$counter_text_color);
			$counter_separator_color = new QodeField("colorsimple","counter_separator_color","","分隔符颜色","This is some description");
			$row1->addChild("counter_separator_color",$counter_separator_color);
		$row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);
			$counters_font_size = new QodeField("textsimple","counters_font_size","","数字字体大小 (px)","This is some description");
			$row2->addChild("counters_font_size",$counters_font_size);
			$counters_font_family = new QodeField("Fontsimple","counters_font_family","-1","数字字体系列","This is some description");
			$row2->addChild("counters_font_family",$counters_font_family);
			$counters_fontweight = new QodeField("selectblanksimple","counters_fontweight","","数字字体粗细","This is some description",$options_fontweight);
			$row2->addChild("counters_fontweight",$counters_fontweight);
		$row3 = new QodeRow(true);
		$group1->addChild("row3",$row3);
			$counters_text_font_size = new QodeField("textsimple","counters_text_font_size","","文字字体尺寸 (px)","This is some description");
			$row3->addChild("counters_text_font_size",$counters_text_font_size);
			$counters_text_font_family = new QodeField("Fontsimple","counters_text_font_family","-1","文字字体系列","This is some description");
			$row3->addChild("counters_text_font_family",$counters_text_font_family);
			$counters_text_fontweight = new QodeField("selectblanksimple","counters_text_fontweight","","文字字体粗细","This is some description",$options_fontweight);
			$row3->addChild("counters_text_fontweight",$counters_text_fontweight);
			$counters_text_texttransform = new QodeField("selectblanksimple","counters_text_texttransform","","文本转换","This is some description",$options_texttransform);
			$row3->addChild("counters_text_texttransform",$counters_text_texttransform);
		$row4 = new QodeRow(true);
		$group1->addChild("row4",$row4);
			$counters_text_letterspacing = new QodeField("textsimple","counters_text_letterspacing","","文本字母间距 (px)","This is some description");
			$row4->addChild("counters_text_letterspacing",$counters_text_letterspacing);

//Horizontal Progress Bars

$panel9 = new QodePanel("水平进度条", "horizontal_progress_bars_panel");
$elementsPage->addChild("panel9",$panel9);
	
	$group1 = new QodeGroup("进度条风格","Define styles for Horizontal Progress Bars");
	$panel9->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$progress_bar_horizontal_fontsize = new QodeField("textsimple","progress_bar_horizontal_fontsize","","字体大小 (px)","This is some description");
			$row1->addChild("progress_bar_horizontal_fontsize",$progress_bar_horizontal_fontsize);
			$progress_bar_horizontal_fontweight = new QodeField("selectblanksimple","progress_bar_horizontal_fontweight","","文本字体粗细","This is some description",$options_fontweight);
			$row1->addChild("progress_bar_horizontal_fontweight",$progress_bar_horizontal_fontweight);

//Pie Charts

$panel10 = new QodePanel("饼形图","pie_charts_panel");
$elementsPage->addChild("panel10",$panel10);

	$group1 = new QodeGroup("饼形图风格","Define styles for Pie Charts");
	$panel10->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$pie_charts_fontsize = new QodeField("textsimple","pie_charts_fontsize","","字体大小 (px)","This is some description");
			$row1->addChild("pie_charts_fontsize",$pie_charts_fontsize);
			$pie_charts_fontweight = new QodeField("selectblanksimple","pie_charts_fontweight","","文本字体粗细","This is some description",$options_fontweight);
			$row1->addChild("pie_charts_fontweight",$pie_charts_fontweight);

//Tabs Panel

$panel11 = new QodePanel("切换卡", "tabs_panel");
$elementsPage->addChild("panel11",$panel11);

	$group1 = new QodeGroup("文字风格","Define text styles for Process shortcode");
	$panel11->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$tabs_text_size = new QodeField("textsimple","tabs_text_size","","字体大小 (px)","This is some description");
			$row1->addChild("tabs_text_size",$tabs_text_size);
			$tabs_fontweight = new QodeField("selectblanksimple","tabs_fontweight","","文本字体粗细","This is some description",$options_fontweight);
			$row1->addChild("tabs_fontweight",$tabs_fontweight);
	$group2 = new QodeGroup("边框风格","Define border styles for Tabs");
	$panel11->addChild("group2",$group2);
		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);
			$tabs_border_color = new QodeField("colorsimple","tabs_border_color","","边框颜色","This is some description");
			$row1->addChild("tabs_border_color",$tabs_border_color);
			$tabs_border_radius = new QodeField("textsimple","tabs_border_radius","","边框圆角 (px)","This is some description");
			$row1->addChild("tabs_border_radius",$tabs_border_radius);
			$tabs_border_width = new QodeField("textsimple","tabs_border_width","","边框宽度 (px)","This is some description");
			$row1->addChild("button_border_width",$tabs_border_width);


//Tags

$panel18 = new QodePanel("标签", "tags_panel");
$elementsPage->addChild("panel18",$panel18);

	$group1 = new QodeGroup("标签样式","Define Tags style");
	$panel18->addChild("group1",$group1);
			$row1 = new QodeRow();
			$group1->addChild("row1",$row1);

					$tags_color = new QodeField("colorsimple","tags_color","","文字颜色","This is some description");
					$row1->addChild("tags_color",$tags_color);

					$tags_font_size = new QodeField("textsimple","tags_font_size","","文字尺寸 (px)","This is some description");
					$row1->addChild("tags_font_size",$tags_font_size);

					$tags_line_height = new QodeField("textsimple","tags_line_height","","文字行高 (px)","This is some description");
					$row1->addChild("tags_line_height",$tags_line_height);

					$tags_text_transform = new QodeField("selectblanksimple","tags_text_transform","","文本转换","This is some description",$options_texttransform);
					$row1->addChild("tags_text_transform",$tags_text_transform);

			$row2 = new QodeRow(true);
			$group1->addChild("row2",$row2);

					$tags_font_family = new QodeField("fontsimple","tags_font_family","-1","字体系列","This is some description");
					$row2->addChild("tags_font_family",$tags_font_family);

					$tags_font_style = new QodeField("selectblanksimple","tags_font_style","","文字样式","This is some description",$options_fontstyle);
					$row2->addChild("tags_font_style",$tags_font_style);

					$tags_font_weight = new QodeField("selectblanksimple","tags_font_weight","","文字重量","This is some description",$options_fontweight);
					$row2->addChild("tags_font_weight",$tags_font_weight);

					$tags_letter_spacing = new QodeField("textsimple","tags_letter_spacing","","字母间距 (px)","This is some description");
					$row2->addChild("tags_letter_spacing",$tags_letter_spacing);

			$row3 = new QodeRow(true);
			$group1->addChild("row3",$row3);

					$tags_hover_color = new QodeField("colorsimple","tags_hover_color","","悬停文字颜色","This is some description");
					$row3->addChild("tags_hover_color",$tags_hover_color);

					$tags_background_color = new QodeField("colorsimple","tags_background_color","","背景颜色","This is some description");
					$row3->addChild("tags_background_color",$tags_background_color);

					$tags_background_hover_color = new QodeField("colorsimple","tags_background_hover_color","","悬停背景颜色","This is some description");
					$row3->addChild("tags_background_hover_color",$tags_background_hover_color);

					$tags_border_radius = new QodeField("textsimple","tags_border_radius","","边框圆角 (px)","This is some description");
					$row3->addChild("tags_border_radius",$tags_border_radius);

			$row4 = new QodeRow(true);
			$group1->addChild("row4",$row4);

					$tags_border_color = new QodeField("colorsimple","tags_border_color","","边框颜色","This is some description");
					$row4->addChild("tags_border_color",$tags_border_color);

					$tags_border_hover_color = new QodeField("colorsimple","tags_border_hover_color","","边框悬停颜色","This is some description");
					$row4->addChild("tags_border_hover_color",$tags_border_hover_color);

					$tags_border_width = new QodeField("textsimple","tags_border_width","","边框宽度 (px)","This is some description");
					$row4->addChild("tags_border_width",$tags_border_width);

					$tags_border_style = new QodeField("selectblanksimple","tags_border_style","","边框样式","This is some description",array(
						"solid" => "实线",
						"dotted" => "点线",
						"dashed" => "虚线"
					));
					$row4->addChild("tags_border_style",$tags_border_style);

			$row5 = new QodeRow(true);
			$group1->addChild("row5",$row5);

					$tags_left_right_padding = new QodeField("textsimple","tags_left_right_padding","","左/右内边距 (px)","This is some description");
					$row5->addChild("tags_left_right_padding",$tags_left_right_padding);

			
//Process

$panel12 = new QodePanel("流程", "process_panel");
$elementsPage->addChild("panel12",$panel12);

	$process_circle_hover_background_color = new QodeField("color","process_circle_hover_background_color","","圈背景悬停颜色","Set Process circles background color on hover");
	$panel12->addChild("process_circle_hover_background_color",$process_circle_hover_background_color);
	
	$group1 = new QodeGroup("圈文字",'Define styles for "Text in Process" type Process');
	$panel12->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$process_text_in_circle_font_weight = new QodeField("selectblanksimple","process_text_in_circle_font_weight","","字体粗细","This is some description",$options_fontweight);
			$row1->addChild("process_text_in_circle_font_weight",$process_text_in_circle_font_weight);
			$process_text_hover_color = new QodeField("colorsimple","process_text_hover_color","","文字悬停颜色","This is some description");
			$row1->addChild("process_text_hover_color",$process_text_hover_color);

//Input Fields

$panel13 = new QodePanel("输入字段","input_fields_panel");
$elementsPage->addChild("panel13",$panel13);

	$group1 = new QodeGroup("输入字段风格","Define styles for text Input Fields");
	$panel13->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$input_background_color = new QodeField("colorsimple","input_background_color","","背景颜色","This is some description");
			$row1->addChild("input_background_color",$input_background_color);
			$input_border_color = new QodeField("colorsimple","input_border_color","","边框颜色","This is some description");
			$row1->addChild("input_border_color",$input_border_color);
			$input_text_color = new QodeField("colorsimple","input_text_color","","文字颜色","This is some description");
			$row1->addChild("input_text_color",$input_text_color);

//Highlights

$panel1 = new QodePanel("高亮","highlight_panel");
$elementsPage->addChild("panel1",$panel1);
	$highlight_color = new QodeField("color","highlight_color","","高亮颜色","Set color for highlighted text");
	$panel1->addChild("highlight_color",$highlight_color);

//Toggle
$panel_toggle_accordion = new QodePanel('切换手风琴', 'toggle_accordion_panel');
$elementsPage->addChild('toggle_accordion_panel', $panel_toggle_accordion);

$toggle_title_group = new QodeGroup('选项卡标题', 'Define styles for toggle title');
$panel_toggle_accordion->addChild('toggle_title_group', $toggle_title_group);

$toggle_title_bg_color = new QodeField('colorsimple', 'toggle_title_background_color', '', '背景颜色');
$toggle_title_group->addChild('toggle_title_background_color', $toggle_title_bg_color);

$toggle_hover_title_bg_color = new QodeField('colorsimple', 'toggle_title_hover_background_color', '', '悬停背景颜色');
$toggle_title_group->addChild('toggle_title_hover_background_color', $toggle_hover_title_bg_color);

$toggle_title_text_color = new QodeField('colorsimple', 'toggle_title_text_background_color', '', '文字颜色');
$toggle_title_group->addChild('toggle_title_text_background_color', $toggle_title_text_color);

$toggle_hover_title_text_color = new QodeField('colorsimple', 'toggle_title_hover_text_background_color', '', '悬停文字颜色');
$toggle_title_group->addChild('toggle_title_hover_text_background_color', $toggle_hover_title_text_color);

$panel14 = new QodePanel("回顶部按钮","back_to_top_panel");
$elementsPage->addChild("panel14",$panel14);

	$group1 = new QodeGroup("图标样式","Define style for Back to Top icon");
	$panel14->addChild("group1",$group1);

		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);

			$back_to_top_icon_color = new QodeField("colorsimple","back_to_top_icon_color","","图标颜色","This is some description");
			$row1->addChild("back_to_top_icon_color",$back_to_top_icon_color);

			$back_to_top_icon_hover_color = new QodeField("colorsimple","back_to_top_icon_hover_color","","图标悬停颜色","This is some description");
			$row1->addChild("back_to_top_icon_hover_color",$back_to_top_icon_hover_color);

	$group2 = new QodeGroup("背景","Define background for Back to Top");
	$panel14->addChild("group2",$group2);

		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);

			$back_to_top_background_color = new QodeField("colorsimple","back_to_top_background_color","","背景颜色","This is some description");
			$row1->addChild("back_to_top_background_color",$back_to_top_background_color);

			$back_to_top_background_hover_color = new QodeField("colorsimple","back_to_top_background_hover_color","","背景悬停颜色","This is some description");
			$row1->addChild("back_to_top_background_hover_color",$back_to_top_background_hover_color);

			$back_to_top_background_transparency = new QodeField("textsimple","back_to_top_background_transparency","","背景透明度 (0-1)","This is some description");
			$row1->addChild("back_to_top_background_transparency",$back_to_top_background_transparency);

			$back_to_top_background_hover_transparency = new QodeField("textsimple","back_to_top_background_hover_transparency","","背景悬停透明度 (0-1)","This is some description");
			$row1->addChild("back_to_top_background_hover_transparency",$back_to_top_background_hover_transparency);

	$group3 = new QodeGroup("边框","Choose Border style for Back to Top");
	$panel14->addChild("group3",$group3);

		$row1 = new QodeRow();
		$group3->addChild("row1",$row1);

			$back_to_top_border_color = new QodeField("colorsimple","back_to_top_border_color","","边框颜色","This is some description");
			$row1->addChild("back_to_top_border_color",$back_to_top_border_color);

			$back_to_top_border_hover_color = new QodeField("colorsimple","back_to_top_border_hover_color","","边框悬停颜色","This is some description");
			$row1->addChild("back_to_top_border_hover_color",$back_to_top_border_hover_color);

			$back_to_top_border_width = new QodeField("textsimple","back_to_top_border_width","","边框宽度 (px)","This is some description");
			$row1->addChild("back_to_top_border_width",$back_to_top_border_width);

			$back_to_top_border_radius = new QodeField("textsimple","back_to_top_border_radius","","边框圆角 (px)","This is some description");
			$row1->addChild("back_to_top_border_radius",$back_to_top_border_radius);

		$row2 = new QodeRow();
		$group3->addChild("row2",$row2);

			$back_to_top_border_transparency = new QodeField("textsimple","back_to_top_border_transparency","","边框透明度(0-1)","This is some description");
			$row2->addChild("back_to_top_border_transparency",$back_to_top_border_transparency);

			$back_to_top_border_hover_transparency = new QodeField("textsimple","back_to_top_border_hover_transparency","","边框悬停透明度 (0-1)","This is some description");
			$row2->addChild("back_to_top_border_hover_transparency",$back_to_top_border_hover_transparency);

	$group4 = new QodeGroup("按钮尺寸",'Choose Size for "Back to Top" button');
	$panel14->addChild("group4",$group4);

		$row1 = new QodeRow();
		$group4->addChild("row1",$row1);

			$back_to_top_height = new QodeField("textsimple","back_to_top_height","","高度 (px)","This is some description");
			$row1->addChild("back_to_top_height",$back_to_top_height);

			$back_to_top_width = new QodeField("textsimple","back_to_top_width","","宽度 (px)","This is some description");
			$row1->addChild("back_to_top_width",$back_to_top_width);

	$group5 = new QodeGroup("按钮位置",'Define button position from right and/or bottom edge of the screen');
	$panel14->addChild("group5",$group5);

		$row1 = new QodeRow();
		$group5->addChild("row1",$row1);

			$back_to_top_right_pos = new QodeField("textsimple","back_to_top_right_pos","","从右 (px)","This is some description");
			$row1->addChild("back_to_top_right_pos",$back_to_top_right_pos);

			$back_to_top_bottom_pos = new QodeField("textsimple","back_to_top_bottom_pos","","从左 (px)","This is some description");
			$row1->addChild("back_to_top_bottom_pos",$back_to_top_bottom_pos);


//Slider Navigation Interface

$panel15 = new QodePanel("滑块导航接口","navigation_panel");
$elementsPage->addChild("panel15",$panel15);

$navigation_slider_horizontal_section = new QodeTitle("navigation_slider_horizontal_section","Qode 幻灯片");
$panel15->addChild("navigation_slider_horizontal_section",$navigation_slider_horizontal_section);

	$group1 = new QodeGroup("导航按钮尺寸","Define navigation button size");
	$panel15->addChild("group1",$group1);

		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);

			$navigation_button_width = new QodeField("textsimple","navigation_button_width","","宽度 (px)","This is some description");
			$row1->addChild("navigation_button_width",$navigation_button_width);

			$navigation_button_height = new QodeField("textsimple","navigation_button_height","","高度 (px)","This is some description");
			$row1->addChild("navigation_button_height",$navigation_button_height);

	$group9 = new QodeGroup("导航按钮位置","Enter the amount of pixels you would like to move the navigation buttons from the edges of the slider");
	$panel15->addChild("group9",$group9);

		$row1 = new QodeRow();
		$group9->addChild("row1",$row1);

			$navigation_button_position = new QodeField("textsimple","navigation_button_position","","位置 (px)","This is some description");
			$row1->addChild("navigation_button_position",$navigation_button_position);

	$group2 = new QodeGroup("图标箭头样式","Define arrow navigation style");
	$panel15->addChild("group2",$group2);

		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);

			$navigation_arrow_color = new QodeField("colorsimple","navigation_arrow_color","","箭头颜色","This is some description");
			$row1->addChild("navigation_arrow_color",$navigation_arrow_color);

			$navigation_arrow_transparency = new QodeField("textsimple","navigation_arrow_transparency","","箭头透明度 (0-1)","This is some description");
			$row1->addChild("navigation_arrow_transparency",$navigation_arrow_transparency);

			$navigation_arrow_hover_color = new QodeField("colorsimple","navigation_arrow_hover_color","","箭头悬停颜色","This is some description");
			$row1->addChild("navigation_arrow_hover_color",$navigation_arrow_hover_color);

			$navigation_arrow_hover_transparency = new QodeField("textsimple","navigation_arrow_hover_transparency","","箭头悬停透明度 (0-1)","This is some description");
			$row1->addChild("navigation_arrow_hover_transparency",$navigation_arrow_hover_transparency);

		$row2 = new QodeRow();
		$group2->addChild("row2",$row2);

			$navigation_arrow_size = new QodeField("textsimple","navigation_arrow_size","","箭头尺寸 (px)","Default value is 14    ");
			$row2->addChild("navigation_arrow_size",$navigation_arrow_size);

	$group3 = new QodeGroup("导航按钮背景","Define navigation button background");
	$panel15->addChild("group3",$group3);

		$row1 = new QodeRow();
		$group3->addChild("row1",$row1);

			$navigation_background_color = new QodeField("colorsimple","navigation_background_color","","背景颜色","This is some description");
			$row1->addChild("navigation_background_color",$navigation_background_color);

			$navigation_background_transparency = new QodeField("textsimple","navigation_background_transparency","","背景透明度 (0-1)","This is some description");
			$row1->addChild("navigation_background_transparency",$navigation_background_transparency);

			$navigation_background_hover_color = new QodeField("colorsimple","navigation_background_hover_color","","背景悬停颜色","This is some description");
			$row1->addChild("navigation_background_hover_color",$navigation_background_hover_color);

			$navigation_background_hover_transparency = new QodeField("textsimple","navigation_background_hover_transparency","","背景悬停透明度 (0-1)","This is some description");
			$row1->addChild("navigation_background_hover_transparency",$navigation_background_hover_transparency);

	$group4 = new QodeGroup("导航按钮边框","Define border style");
	$panel15->addChild("group4",$group4);

		$row1 = new QodeRow();
		$group4->addChild("row1",$row1);

			$navigation_border_color = new QodeField("colorsimple","navigation_border_color","","边框颜色","This is some description");
			$row1->addChild("navigation_border_color",$navigation_border_color);

			$navigation_border_transparency = new QodeField("textsimple","navigation_border_transparency","","边框透明度(0-1)","This is some description");
			$row1->addChild("navigation_border_transparency",$navigation_border_transparency);

			$navigation_border_hover_color = new QodeField("colorsimple","navigation_border_hover_color","","边框悬停颜色","This is some description");
			$row1->addChild("navigation_border_hover_color",$navigation_border_hover_color);

			$navigation_border_hover_transparency = new QodeField("textsimple","navigation_border_hover_transparency","","边框悬停透明度 (0-1)","This is some description");
			$row1->addChild("navigation_border_hover_transparency",$navigation_border_hover_transparency);

		$row2 = new QodeRow();
		$group4->addChild("row2",$row2);

			$navigation_border_width = new QodeField("textsimple","navigation_border_width","","边框宽度 (px)","");
			$row2->addChild("navigation_border_width",$navigation_border_width);

			$navigation_border_radius = new QodeField("textsimple","navigation_border_radius","","边框圆角 (px)","This is some description");
			$row2->addChild("navigation_border_radius",$navigation_border_radius);

$navigation_carousels_slider = new QodeTitle("navigation_carousels_slider","轮播幻灯片");
$panel15->addChild("navigation_carousels_slider",$navigation_carousels_slider);

	$group16 = new QodeGroup("导航按钮尺寸","Define navigation button size");
	$panel15->addChild("group16",$group16);

		$row1 = new QodeRow();
		$group16->addChild("row1",$row1);

			$carousel_navigation_button_width = new QodeField("textsimple","carousel_navigation_button_width","","宽度 (px)","This is some description");
			$row1->addChild("carousel_navigation_button_width",$carousel_navigation_button_width);

			$carousel_navigation_button_height = new QodeField("textsimple","carousel_navigation_button_height","","高度 (px)","This is some description");
			$row1->addChild("carousel_navigation_button_height",$carousel_navigation_button_height);

	$group17 = new QodeGroup("导航按钮位置","Enter the amount of pixels you would like to move the navigation buttons from the edges of the slider");
	$panel15->addChild("group17",$group17);

		$row1 = new QodeRow();
		$group17->addChild("row1",$row1);

			$carousel_navigation_button_position = new QodeField("textsimple","carousel_navigation_button_position","","位置 (px)","This is some description");
			$row1->addChild("carousel_navigation_button_position",$carousel_navigation_button_position);


	$group18 = new QodeGroup("图标箭头样式","Define arrow navigation style");
	$panel15->addChild("group18",$group18);

		$row1 = new QodeRow();
		$group18->addChild("row1",$row1);

			$carousel_navigation_arrow_color = new QodeField("colorsimple","carousel_navigation_arrow_color","","箭头颜色","This is some description");
			$row1->addChild("carousel_navigation_arrow_color",$carousel_navigation_arrow_color);

			$carousel_navigation_arrow_transparency = new QodeField("textsimple","carousel_navigation_arrow_transparency","","箭头透明度 (0-1)","This is some description");
			$row1->addChild("carousel_navigation_arrow_transparency",$carousel_navigation_arrow_transparency);

			$carousel_navigation_arrow_hover_color = new QodeField("colorsimple","carousel_navigation_arrow_hover_color","","箭头悬停颜色","This is some description");
			$row1->addChild("carousel_navigation_arrow_hover_color",$carousel_navigation_arrow_hover_color);

			$carousel_navigation_arrow_hover_transparency = new QodeField("textsimple","carousel_navigation_arrow_hover_transparency","","箭头悬停透明度 (0-1)","This is some description");
			$row1->addChild("carousel_navigation_arrow_hover_transparency",$carousel_navigation_arrow_hover_transparency);

		$row2 = new QodeRow();
		$group18->addChild("row2",$row2);

			$carousel_navigation_arrow_size = new QodeField("textsimple","carousel_navigation_arrow_size","","箭头尺寸 (px)","Default value is 14    ");
			$row2->addChild("carousel_navigation_arrow_size",$carousel_navigation_arrow_size);

	$group19 = new QodeGroup("导航按钮背景","Define navigation button background");
	$panel15->addChild("group19",$group19);

		$row1 = new QodeRow();
		$group19->addChild("row1",$row1);

			$carousel_navigation_background_color = new QodeField("colorsimple","carousel_navigation_background_color","","背景颜色","This is some description");
			$row1->addChild("carousel_navigation_background_color",$carousel_navigation_background_color);

			$carousel_navigation_background_transparency = new QodeField("textsimple","carousel_navigation_background_transparency","","背景透明度 (0-1)","This is some description");
			$row1->addChild("carousel_navigation_background_transparency",$carousel_navigation_background_transparency);

			$carousel_navigation_background_hover_color = new QodeField("colorsimple","carousel_navigation_background_hover_color","","背景悬停颜色","This is some description");
			$row1->addChild("carousel_navigation_background_hover_color",$carousel_navigation_background_hover_color);

			$carousel_navigation_background_hover_transparency = new QodeField("textsimple","carousel_navigation_background_hover_transparency","","背景悬停透明度 (0-1)","This is some description");
			$row1->addChild("carousel_navigation_background_hover_transparency",$carousel_navigation_background_hover_transparency);

	$group10 = new QodeGroup("导航按钮边框","Define border style");
	$panel15->addChild("group10",$group10);

		$row1 = new QodeRow();
		$group10->addChild("row1",$row1);

			$carousel_navigation_border_color = new QodeField("colorsimple","carousel_navigation_border_color","","边框颜色","This is some description");
			$row1->addChild("carousel_navigation_border_color",$carousel_navigation_border_color);

			$carousel_navigation_border_transparency = new QodeField("textsimple","carousel_navigation_border_transparency","","边框透明度(0-1)","This is some description");
			$row1->addChild("carousel_navigation_border_transparency",$carousel_navigation_border_transparency);

			$carousel_navigation_border_hover_color = new QodeField("colorsimple","carousel_navigation_border_hover_color","","边框悬停颜色","This is some description");
			$row1->addChild("carousel_navigation_border_hover_color",$carousel_navigation_border_hover_color);

			$carousel_navigation_border_hover_transparency = new QodeField("textsimple","carousel_navigation_border_hover_transparency","","边框悬停透明度 (0-1)","This is some description");
			$row1->addChild("carousel_navigation_border_hover_transparency",$carousel_navigation_border_hover_transparency);

		$row2 = new QodeRow();
		$group10->addChild("row2",$row2);

			$carousel_navigation_border_width = new QodeField("textsimple","carousel_navigation_border_width","","边框宽度 (px)","");
			$row2->addChild("carousel_navigation_border_width",$carousel_navigation_border_width);

			$carousel_navigation_border_radius = new QodeField("textsimple","carousel_navigation_border_radius","","边框圆角 (px)","This is some description");
			$row2->addChild("carousel_navigation_border_radius",$carousel_navigation_border_radius);

$navigation_single_sliders_slider = new QodeTitle("navigation_single_sliders_slider","Flex Sliders");
$panel15->addChild("navigation_single_sliders_slider",$navigation_single_sliders_slider);

	$group11 = new QodeGroup("导航按钮尺寸","Define navigation button size");
	$panel15->addChild("group11",$group11);

		$row1 = new QodeRow();
		$group11->addChild("row1",$row1);

			$single_slider_navigation_button_width = new QodeField("textsimple","single_slider_navigation_button_width","","宽度 (px)","This is some description");
			$row1->addChild("single_slider_navigation_button_width",$single_slider_navigation_button_width);

			$single_slider_navigation_button_height = new QodeField("textsimple","single_slider_navigation_button_height","","高度 (px)","This is some description");
			$row1->addChild("single_slider_navigation_button_height",$single_slider_navigation_button_height);

	$group12 = new QodeGroup("导航按钮位置","Enter the amount of pixels you would like to move the navigation buttons from the edges of the slider");
	$panel15->addChild("group12",$group12);

		$row1 = new QodeRow();
		$group12->addChild("row1",$row1);
                        
			$single_slider_navigation_button_position = new QodeField("textsimple","single_slider_navigation_button_position","","位置 (px)","This is some description");
			$row1->addChild("single_slider_navigation_button_position",$single_slider_navigation_button_position);

	$group13 = new QodeGroup("图标箭头样式","Define arrow navigation style");
	$panel15->addChild("group13",$group13);

		$row1 = new QodeRow();
		$group13->addChild("row1",$row1);

			$single_slider_navigation_arrow_color = new QodeField("colorsimple","single_slider_navigation_arrow_color","","箭头颜色","This is some description");
			$row1->addChild("single_slider_navigation_arrow_color",$single_slider_navigation_arrow_color);

			$single_slider_navigation_arrow_transparency = new QodeField("textsimple","single_slider_navigation_arrow_transparency","","箭头透明度 (0-1)","This is some description");
			$row1->addChild("single_slider_navigation_arrow_transparency",$single_slider_navigation_arrow_transparency);

			$single_slider_navigation_arrow_hover_color = new QodeField("colorsimple","single_slider_navigation_arrow_hover_color","","箭头悬停颜色","This is some description");
			$row1->addChild("single_slider_navigation_arrow_hover_color",$single_slider_navigation_arrow_hover_color);

			$single_slider_navigation_arrow_hover_transparency = new QodeField("textsimple","single_slider_navigation_arrow_hover_transparency","","箭头悬停透明度 (0-1)","This is some description");
			$row1->addChild("single_slider_navigation_arrow_hover_transparency",$single_slider_navigation_arrow_hover_transparency);

		$row2 = new QodeRow();
		$group13->addChild("row2",$row2);

			$single_slider_navigation_arrow_size = new QodeField("textsimple","single_slider_navigation_arrow_size","","箭头尺寸 (px)","Default value is 14    ");
			$row2->addChild("single_slider_navigation_arrow_size",$single_slider_navigation_arrow_size);

	$group14 = new QodeGroup("导航按钮背景","Define navigation button background");
	$panel15->addChild("group14",$group14);

		$row1 = new QodeRow();
		$group14->addChild("row1",$row1);

			$single_slider_navigation_background_color = new QodeField("colorsimple","single_slider_navigation_background_color","","背景颜色","This is some description");
			$row1->addChild("single_slider_navigation_background_color",$single_slider_navigation_background_color);

			$single_slider_navigation_background_transparency = new QodeField("textsimple","single_slider_navigation_background_transparency","","背景透明度 (0-1)","This is some description");
			$row1->addChild("single_slider_navigation_background_transparency",$single_slider_navigation_background_transparency);

			$single_slider_navigation_background_hover_color = new QodeField("colorsimple","single_slider_navigation_background_hover_color","","背景悬停颜色","This is some description");
			$row1->addChild("single_slider_navigation_background_hover_color",$single_slider_navigation_background_hover_color);

			$single_slider_navigation_background_hover_transparency = new QodeField("textsimple","single_slider_navigation_background_hover_transparency","","背景悬停透明度 (0-1)","This is some description");
			$row1->addChild("single_slider_navigation_background_hover_transparency",$single_slider_navigation_background_hover_transparency);

	$group15 = new QodeGroup("导航按钮边框","Define border style");
	$panel15->addChild("group15",$group15);

		$row1 = new QodeRow();
		$group15->addChild("row1",$row1);

			$single_slider_navigation_border_color = new QodeField("colorsimple","single_slider_navigation_border_color","","边框颜色","This is some description");
			$row1->addChild("single_slider_navigation_border_color",$single_slider_navigation_border_color);

			$single_slider_navigation_border_transparency = new QodeField("textsimple","single_slider_navigation_border_transparency","","边框透明度(0-1)","This is some description");
			$row1->addChild("single_slider_navigation_border_transparency",$single_slider_navigation_border_transparency);

			$single_slider_navigation_border_hover_color = new QodeField("colorsimple","single_slider_navigation_border_hover_color","","边框悬停颜色","This is some description");
			$row1->addChild("single_slider_navigation_border_hover_color",$single_slider_navigation_border_hover_color);

			$single_slider_navigation_border_hover_transparency = new QodeField("textsimple","single_slider_navigation_border_hover_transparency","","边框悬停透明度 (0-1)","This is some description");
			$row1->addChild("single_slider_navigation_border_hover_transparency",$single_slider_navigation_border_hover_transparency);

		$row2 = new QodeRow();
		$group15->addChild("row2",$row2);

			$single_slider_navigation_border_width = new QodeField("textsimple","single_slider_navigation_border_width","","边框宽度 (px)","");
			$row2->addChild("single_slider_navigation_border_width",$single_slider_navigation_border_width);

			$single_slider_navigation_border_radius = new QodeField("textsimple","single_slider_navigation_border_radius","","边框圆角 (px)","This is some description");
			$row2->addChild("single_slider_navigation_border_radius",$single_slider_navigation_border_radius);

$slider_circle_navigation = new QodeTitle("slider_circle_navigation","Bullet Navigation");
$panel15->addChild("slider_circle_navigation",$slider_circle_navigation);

	$group20 = new QodeGroup("导航位置","Enter the distance (in percentages) that you would like to move the navigation from the bottom of the slider");
	$panel15->addChild("group20",$group20);

		$row1 = new QodeRow();
		$group20->addChild("row1",$row1);

			$slider_circle_navigation_position = new QodeField("textsimple","slider_circle_navigation_position","","位置 (%)","This is some description");
			$row1->addChild("slider_circle_navigation_position",$slider_circle_navigation_position);

	$group8 = new QodeGroup("Navigation Controls","Define navigation controls style");
	$panel15->addChild("group8",$group8);

		$row1 = new QodeRow();
		$group8->addChild("row1",$row1);

			$button_navigation_color = new QodeField("colorsimple","button_navigation_color","","颜色","This is some description");
			$row1->addChild("button_navigation_color",$button_navigation_color);

			$button_navigation_active_color = new QodeField("colorsimple","button_navigation_active_color","","激活颜色","This is some description");
			$row1->addChild("button_navigation_active_color",$button_navigation_active_color);

			$button_navigation_size = new QodeField("textsimple","button_navigation_size","","尺寸 (px)","This is some description");
			$row1->addChild("button_navigation_size",$button_navigation_size);

			$button_navigation_border_radius = new QodeField("textsimple","button_navigation_border_radius","","边框圆角 (px)","This is some description");
			$row1->addChild("button_navigation_border_radius",$button_navigation_border_radius);

		$row2 = new QodeRow();
		$group8->addChild("row2",$row2);

			$button_navigation_border_color = new QodeField("colorsimple","button_navigation_border_color","","边框颜色","This is some description");
			$row2->addChild("button_navigation_border_color",$button_navigation_border_color);

			$button_navigation_active_border_color = new QodeField("colorsimple","button_navigation_active_border_color","","激活边框颜色","This is some description");
			$row2->addChild("button_navigation_active_border_color",$button_navigation_active_border_color);


					 
//Masonry Gallery
$panel17 = new QodePanel('瀑布流相册', 'masonry_gallery_panel');
$elementsPage->addChild('panel17', $panel17);

	$masonry_gallery_space = new QodeField("text","masonry_gallery_space","","2个之间的距离 (px)","Define a space between items in the Masonry Gallery", array(), array("col_width" => 3));
	$panel17->addChild("masonry_gallery_space",$masonry_gallery_space);

	//Square Big
	$masonry_gallery_square_big_title = new QodeTitle('masonry_gallery_square_big_title', '方正大');
	$panel17->addChild('masonry_gallery_square_big_title', $masonry_gallery_square_big_title);

	$group1 = new QodeGroup('标题样式', 'Define Square Big Title Style');
	$panel17->addChild('group1', $group1);

		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);

			$masonry_gallery_square_big_title_color = new QodeField('colorsimple','masonry_gallery_square_big_title_color', '', '标题颜色');
			$row1->addChild('masonry_gallery_square_big_title_color', $masonry_gallery_square_big_title_color);

			$masonry_gallery_square_big_title_font_size = new QodeField('textsimple', 'masonry_gallery_square_big_title_font_size', '', '字体尺寸 (px)');
			$row1->addChild('masonry_gallery_square_big_title_font_size', $masonry_gallery_square_big_title_font_size);

			$masonry_gallery_square_big_title_line_height = new QodeField('textsimple', 'masonry_gallery_square_big_title_line_height', '', '行高 (px)');
			$row1->addChild('masonry_gallery_square_big_title_line_height', $masonry_gallery_square_big_title_line_height);

			$masonry_gallery_square_big_title_text_transform = new QodeField('selectblanksimple', 'masonry_gallery_square_big_title_text_transform', '', '文本转换', '', $options_texttransform);
			$row1->addChild('masonry_gallery_square_big_title_text_transform', $masonry_gallery_square_big_title_text_transform);

		$row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);

			$masonry_gallery_square_big_title_font_family = new QodeField('fontsimple', 'masonry_gallery_square_big_title_font_family', '-1', '字体系列');
			$row2->addChild('masonry_gallery_square_big_title_font_family', $masonry_gallery_square_big_title_font_family);

			$masonry_gallery_square_big_title_font_style = new QodeField('selectblanksimple', 'masonry_gallery_square_big_title_font_style', '', '字体风格', '', $options_fontstyle);
			$row2->addChild('masonry_gallery_square_big_title_font_style', $masonry_gallery_square_big_title_font_style);

			$masonry_gallery_square_big_title_font_weight = new QodeField('selectblanksimple', 'masonry_gallery_square_big_title_font_weight', '', '字体重量', '', $options_fontweight);
			$row2->addChild('masonry_gallery_square_big_title_font_weight', $masonry_gallery_square_big_title_font_weight);

			$masonry_gallery_square_big_title_letter_spacing = new QodeField('textsimple', 'masonry_gallery_square_big_title_letter_spacing', '', '字母间距');
			$row2->addChild('masonry_gallery_square_big_title_letter_spacing', $masonry_gallery_square_big_title_letter_spacing);

		$row3 = new QodeRow(true);
		$group1->addChild("row3",$row3);	

			$masonry_gallery_square_big_title_margin_bottom = new QodeField('textsimple', 'masonry_gallery_square_big_title_margin_bottom', '', '边距底部');
			$row3->addChild('masonry_gallery_square_big_title_margin_bottom', $masonry_gallery_square_big_title_margin_bottom);

	$group2 = new QodeGroup('文字风格', 'Define Square Big Text Style');
	$panel17->addChild('group2', $group2);

		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);

			$masonry_gallery_square_big_text_color = new QodeField('colorsimple','masonry_gallery_square_big_text_color', '', '文字颜色');
			$row1->addChild('masonry_gallery_square_big_text_color', $masonry_gallery_square_big_text_color);

			$masonry_gallery_square_big_text_font_size = new QodeField('textsimple', 'masonry_gallery_square_big_text_font_size', '', '字体尺寸 (px)');
			$row1->addChild('masonry_gallery_square_big_text_font_size', $masonry_gallery_square_big_text_font_size);

			$masonry_gallery_square_big_text_line_height = new QodeField('textsimple', 'masonry_gallery_square_big_text_line_height', '', '行高 (px)');
			$row1->addChild('masonry_gallery_square_big_text_line_height', $masonry_gallery_square_big_text_line_height);

			$masonry_gallery_square_big_text_text_transform = new QodeField('selectblanksimple', 'masonry_gallery_square_big_text_text_transform', '', '文本转换', '', $options_texttransform);
			$row1->addChild('masonry_gallery_square_big_text_text_transform', $masonry_gallery_square_big_text_text_transform);

		$row2 = new QodeRow(true);
		$group2->addChild("row2",$row2);

			$masonry_gallery_square_big_text_font_family = new QodeField('fontsimple', 'masonry_gallery_square_big_text_font_family', '-1', '字体系列');
			$row2->addChild('masonry_gallery_square_big_text_font_family', $masonry_gallery_square_big_text_font_family);

			$masonry_gallery_square_big_text_font_style = new QodeField('selectblanksimple', 'masonry_gallery_square_big_text_font_style', '', '字体风格', '', $options_fontstyle);
			$row2->addChild('masonry_gallery_square_big_text_font_style', $masonry_gallery_square_big_text_font_style);

			$masonry_gallery_square_big_text_font_weight = new QodeField('selectblanksimple', 'masonry_gallery_square_big_text_font_weight', '', '字体重量', '', $options_fontweight);
			$row2->addChild('masonry_gallery_square_big_text_font_weight', $masonry_gallery_square_big_text_font_weight);

			$masonry_gallery_square_big_text_letter_spacing = new QodeField('textsimple', 'masonry_gallery_square_big_text_letter_spacing', '', '字母间距');
			$row2->addChild('masonry_gallery_square_big_text_letter_spacing', $masonry_gallery_square_big_text_letter_spacing);

	$group3 = new QodeGroup('按钮样式', 'Define Square Big Button Style');
	$panel17->addChild('group3', $group3);

		$row1 = new QodeRow();
		$group3->addChild('row1', $row1);

			$masonry_gallery_square_big_button_font_family = new QodeField('fontsimple', 'masonry_gallery_square_big_button_font_family', '-1', '字体系列');
			$row1->addChild('masonry_gallery_square_big_button_font_family', $masonry_gallery_square_big_button_font_family);

			$masonry_gallery_square_big_button_font_style = new QodeField('selectblanksimple', 'masonry_gallery_square_big_button_font_style', '', '字体风格', '', $options_fontstyle);
			$row1->addChild('masonry_gallery_square_big_button_font_style', $masonry_gallery_square_big_button_font_style);

			$masonry_gallery_square_big_button_font_weight = new QodeField('selectblanksimple', 'masonry_gallery_square_big_button_font_weight', '', '字体重量', '', $options_fontweight);
			$row1->addChild('masonry_gallery_square_big_button_font_weight', $masonry_gallery_square_big_button_font_weight);

			$masonry_gallery_square_big_button_text_transform = new QodeField('selectblanksimple', 'masonry_gallery_square_big_button_text_transform', '', '文本转换', '', $options_texttransform);
			$row1->addChild('masonry_gallery_square_big_button_text_transform', $masonry_gallery_square_big_button_text_transform);

		$row2 = new QodeRow(true);
		$group3->addChild('row2', $row2);

			$masonry_gallery_square_big_button_font_size = new QodeField('textsimple', 'masonry_gallery_square_big_button_font_size', '', '字体大小 (px)');
			$row2->addChild('masonry_gallery_square_big_button_font_size', $masonry_gallery_square_big_button_font_size);

			$masonry_gallery_square_big_button_line_height = new QodeField('textsimple', 'masonry_gallery_square_big_button_line_height', '', '行高 (px)');
			$row2->addChild('masonry_gallery_square_big_button_line_height', $masonry_gallery_square_big_button_line_height);

			$masonry_gallery_square_big_button_letter_spacing = new QodeField('textsimple', 'masonry_gallery_square_big_button_letter_spacing', '', '字母间距 (px)');
			$row2->addChild('masonry_gallery_square_big_button_letter_spacing', $masonry_gallery_square_big_button_letter_spacing);		

		$row3 = new QodeRow(true);
		$group3->addChild('row3', $row3);

			$masonry_gallery_square_big_button_text_color = new QodeField('colorsimple', 'masonry_gallery_square_big_button_text_color', '', '文字颜色');
			$row3->addChild('masonry_gallery_square_big_button_text_color', $masonry_gallery_square_big_button_text_color);

			$masonry_gallery_square_big_button_hover_text_color = new QodeField('colorsimple', 'masonry_gallery_square_big_button_hover_text_color', '', '悬停文字颜色');
			$row3->addChild('masonry_gallery_square_big_button_hover_text_color', $masonry_gallery_square_big_button_hover_text_color);

			$masonry_gallery_square_big_button_background_color = new QodeField('colorsimple', 'masonry_gallery_square_big_button_background_color', '', '背景颜色');
			$row3->addChild('masonry_gallery_square_big_button_background_color', $masonry_gallery_square_big_button_background_color);

			$masonry_gallery_square_big_button_hover_background_color = new QodeField('colorsimple', 'masonry_gallery_square_big_button_hover_background_color', '', '悬停背景颜色');
			$row3->addChild('masonry_gallery_square_big_button_hover_background_color', $masonry_gallery_square_big_button_hover_background_color);

		$row4 = new QodeRow(true);
		$group3->addChild('row4', $row4);

			$masonry_gallery_square_big_button_border_color = new QodeField('colorsimple', 'masonry_gallery_square_big_button_border_color', '', '边框颜色');
			$row4->addChild('masonry_gallery_square_big_button_border_color', $masonry_gallery_square_big_button_border_color);

			$masonry_gallery_square_big_button_hover_border_color = new QodeField('colorsimple', 'masonry_gallery_square_big_button_hover_border_color', '', '悬停边框颜色');
			$row4->addChild('masonry_gallery_square_big_button_hover_border_color', $masonry_gallery_square_big_button_hover_border_color);

			$masonry_gallery_square_big_button_border_width = new QodeField('textsimple', 'masonry_gallery_square_big_button_border_width', '', '边框宽度 (px)');
			$row4->addChild('masonry_gallery_square_big_button_border_width', $masonry_gallery_square_big_button_border_width);

			$masonry_gallery_square_big_button_border_radius = new QodeField('textsimple', 'masonry_gallery_square_big_button_border_radius', '', '边框圆角 (px)');
			$row4->addChild('masonry_gallery_square_big_button_border_radius', $masonry_gallery_square_big_button_border_radius);

		$row5 = new QodeRow(true);
		$group3->addChild('row5', $row5);

			$masonry_gallery_square_big_button_padding_left = new QodeField('textsimple', 'masonry_gallery_square_big_button_padding_left', '', '内边距左 (px)');
			$row5->addChild('masonry_gallery_square_big_button_padding_left', $masonry_gallery_square_big_button_padding_left);

			$masonry_gallery_square_big_button_padding_right = new QodeField('textsimple', 'masonry_gallery_square_big_button_padding_right', '', '内边距右 (px)');
			$row5->addChild('masonry_gallery_square_big_button_padding_right', $masonry_gallery_square_big_button_padding_right);

			$masonry_gallery_square_big_button_margin_top = new QodeField('textsimple', 'masonry_gallery_square_big_button_margin_top', '', '外边距上');
			$row5->addChild('masonry_gallery_square_big_button_margin_top', $masonry_gallery_square_big_button_margin_top);	

	$group4 = new QodeGroup('图标风格', 'Define Square Big Icon Style');
	$panel17->addChild('group4', $group4);

		$row1 = new QodeRow();
		$group4->addChild('row1', $row1);

			$masonry_gallery_square_big_icon_color = new QodeField('colorsimple', 'masonry_gallery_square_big_icon_color', '', '图标颜色');
			$row1->addChild('masonry_gallery_square_big_icon_color', $masonry_gallery_square_big_icon_color);

			$masonry_gallery_square_big_icon_hover_color = new QodeField('colorsimple', 'masonry_gallery_square_big_icon_hover_color', '', '图标悬停颜色');
			$row1->addChild('masonry_gallery_square_big_icon_hover_color', $masonry_gallery_square_big_icon_hover_color);

			$masonry_gallery_square_big_icon_size = new QodeField('textsimple', 'masonry_gallery_square_big_icon_size', '', '图标尺寸 (px)');
			$row1->addChild('masonry_gallery_square_big_icon_size', $masonry_gallery_square_big_icon_size);

			$masonry_gallery_square_big_icon_margin_bottom = new QodeField('textsimple', 'masonry_gallery_square_big_icon_margin_bottom', '', '边距底部');
			$row1->addChild('masonry_gallery_square_big_icon_margin_bottom', $masonry_gallery_square_big_icon_margin_bottom);

	$group5 = new QodeGroup('覆盖样式', 'Define Square Big Overlay Style');
	$panel17->addChild('group5', $group5);

		$row1 = new QodeRow();
		$group5->addChild('row1', $row1);

			$masonry_gallery_square_big_overlay_color = new QodeField('colorsimple', 'masonry_gallery_square_big_overlay_color', '', '颜色');
			$row1->addChild('masonry_gallery_square_big_overlay_color', $masonry_gallery_square_big_overlay_color);

			$masonry_gallery_square_big_overlay_transparency = new QodeField('textsimple', 'masonry_gallery_square_big_overlay_transparency', '', '透明度 (0=透明 - 1=不透明)');
			$row1->addChild('masonry_gallery_square_big_overlay_transparency', $masonry_gallery_square_big_overlay_transparency);

	$group6 = new QodeGroup('文本对齐', 'Define Text Alignment');
	$panel17->addChild('group6', $group6);	

		$row1 = new QodeRow();
		$group6->addChild('row1', $row1);
			
			$masonry_gallery_square_big_text_align = new QodeField("selectsimple","masonry_gallery_square_big_text_align","center","Text Alignment","Choose text position",array(
			"center" => "中",
			"left" => "左",
			"right" => "右"
			));

			$row1->addChild("masonry_gallery_square_big_text_align",$masonry_gallery_square_big_text_align);

	$group7 = new QodeGroup('内容内边距', 'Please insert padding in px(or %) i.e. 5px (or 5%)');
	$panel17->addChild('group7', $group7);	
		
		$row1 = new QodeRow();
		$group7->addChild('row1', $row1);

			$masonry_gallery_square_big_padding_left = new QodeField("textsimple","masonry_gallery_square_big_padding_left","","内边距左","Please insert padding in px(or %) i.e. 5px(or 5%)", array(), array("col_width" => 3));
			$row1->addChild("masonry_gallery_square_big_padding_left",$masonry_gallery_square_big_padding_left);

			$masonry_gallery_square_big_padding_right = new QodeField("textsimple","masonry_gallery_square_big_padding_right","","内边距右","Please insert padding in px(or %) i.e. 5px(or 5%)", array(), array("col_width" => 3));
			$row1->addChild("masonry_gallery_square_big_padding_right",$masonry_gallery_square_big_padding_right);


	//Square Small
	$masonry_gallery_square_small_title = new QodeTitle('masonry_gallery_square_small_title', '方正小');
	$panel17->addChild('masonry_gallery_square_small_title', $masonry_gallery_square_small_title);

	$group8 = new QodeGroup('标题样式', 'Define Square Small Title Style');
	$panel17->addChild('group8', $group8);

		$row1 = new QodeRow();
		$group8->addChild("row1",$row1);

			$masonry_gallery_square_small_title_color = new QodeField('colorsimple','masonry_gallery_square_small_title_color', '', '标题颜色');
			$row1->addChild('masonry_gallery_square_small_title_color', $masonry_gallery_square_small_title_color);

			$masonry_gallery_square_small_title_font_size = new QodeField('textsimple', 'masonry_gallery_square_small_title_font_size', '', '字体尺寸 (px)');
			$row1->addChild('masonry_gallery_square_small_title_font_size', $masonry_gallery_square_small_title_font_size);

			$masonry_gallery_square_small_title_line_height = new QodeField('textsimple', 'masonry_gallery_square_small_title_line_height', '', '行高 (px)');
			$row1->addChild('masonry_gallery_square_small_title_line_height', $masonry_gallery_square_small_title_line_height);

			$masonry_gallery_square_small_title_text_transform = new QodeField('selectblanksimple', 'masonry_gallery_square_small_title_text_transform', '', '文本转换', '', $options_texttransform);
			$row1->addChild('masonry_gallery_square_small_title_text_transform', $masonry_gallery_square_small_title_text_transform);

		$row2 = new QodeRow(true);
		$group8->addChild("row2",$row2);

			$masonry_gallery_square_small_title_font_family = new QodeField('fontsimple', 'masonry_gallery_square_small_title_font_family', '-1', '字体系列');
			$row2->addChild('masonry_gallery_square_small_title_font_family', $masonry_gallery_square_small_title_font_family);

			$masonry_gallery_square_small_title_font_style = new QodeField('selectblanksimple', 'masonry_gallery_square_small_title_font_style', '', '字体风格', '', $options_fontstyle);
			$row2->addChild('masonry_gallery_square_small_title_font_style', $masonry_gallery_square_small_title_font_style);

			$masonry_gallery_square_small_title_font_weight = new QodeField('selectblanksimple', 'masonry_gallery_square_small_title_font_weight', '', '字体重量', '', $options_fontweight);
			$row2->addChild('masonry_gallery_square_small_title_font_weight', $masonry_gallery_square_small_title_font_weight);

			$masonry_gallery_square_small_title_letter_spacing = new QodeField('textsimple', 'masonry_gallery_square_small_title_letter_spacing', '', '字母间距');
			$row2->addChild('masonry_gallery_square_small_title_letter_spacing', $masonry_gallery_square_small_title_letter_spacing);

		$row3 = new QodeRow(true);
		$group8->addChild("row3",$row3);	

			$masonry_gallery_square_small_title_margin_bottom = new QodeField('textsimple', 'masonry_gallery_square_small_title_margin_bottom', '', '边距底部');
			$row3->addChild('masonry_gallery_square_small_title_margin_bottom', $masonry_gallery_square_small_title_margin_bottom);

	$group9 = new QodeGroup('文字风格', 'Define Square Small Text Style');
	$panel17->addChild('group9', $group9);

		$row1 = new QodeRow();
		$group9->addChild("row1",$row1);

			$masonry_gallery_square_small_text_color = new QodeField('colorsimple','masonry_gallery_square_small_text_color', '', '文字颜色');
			$row1->addChild('masonry_gallery_square_small_text_color', $masonry_gallery_square_small_text_color);

			$masonry_gallery_square_small_text_font_size = new QodeField('textsimple', 'masonry_gallery_square_small_text_font_size', '', '字体尺寸 (px)');
			$row1->addChild('masonry_gallery_square_small_text_font_size', $masonry_gallery_square_small_text_font_size);

			$masonry_gallery_square_small_text_line_height = new QodeField('textsimple', 'masonry_gallery_square_small_text_line_height', '', '行高 (px)');
			$row1->addChild('masonry_gallery_square_small_text_line_height', $masonry_gallery_square_small_text_line_height);

			$masonry_gallery_square_small_text_text_transform = new QodeField('selectblanksimple', 'masonry_gallery_square_small_text_text_transform', '', '文本转换', '', $options_texttransform);
			$row1->addChild('masonry_gallery_square_small_text_text_transform', $masonry_gallery_square_small_text_text_transform);

		$row2 = new QodeRow(true);
		$group9->addChild("row2",$row2);

			$masonry_gallery_square_small_text_font_family = new QodeField('fontsimple', 'masonry_gallery_square_small_text_font_family', '-1', '字体系列');
			$row2->addChild('masonry_gallery_square_small_text_font_family', $masonry_gallery_square_small_text_font_family);

			$masonry_gallery_square_small_text_font_style = new QodeField('selectblanksimple', 'masonry_gallery_square_small_text_font_style', '', '字体风格', '', $options_fontstyle);
			$row2->addChild('masonry_gallery_square_small_text_font_style', $masonry_gallery_square_small_text_font_style);

			$masonry_gallery_square_small_text_font_weight = new QodeField('selectblanksimple', 'masonry_gallery_square_small_text_font_weight', '', '字体重量', '', $options_fontweight);
			$row2->addChild('masonry_gallery_square_small_text_font_weight', $masonry_gallery_square_small_text_font_weight);

			$masonry_gallery_square_small_text_letter_spacing = new QodeField('textsimple', 'masonry_gallery_square_small_text_letter_spacing', '', '字母间距');
			$row2->addChild('masonry_gallery_square_small_text_letter_spacing', $masonry_gallery_square_small_text_letter_spacing);

	$group10 = new QodeGroup('按钮样式', 'Define Square Small Button Style');
	$panel17->addChild('group10', $group10);

		$row1 = new QodeRow();
		$group10->addChild('row1', $row1);

			$masonry_gallery_square_small_button_font_family = new QodeField('fontsimple', 'masonry_gallery_square_small_button_font_family', '-1', '字体系列');
			$row1->addChild('masonry_gallery_square_small_button_font_family', $masonry_gallery_square_small_button_font_family);

			$masonry_gallery_square_small_button_font_style = new QodeField('selectblanksimple', 'masonry_gallery_square_small_button_font_style', '', '字体风格', '', $options_fontstyle);
			$row1->addChild('masonry_gallery_square_small_button_font_style', $masonry_gallery_square_small_button_font_style);

			$masonry_gallery_square_small_button_font_weight = new QodeField('selectblanksimple', 'masonry_gallery_square_small_button_font_weight', '', '字体重量', '', $options_fontweight);
			$row1->addChild('masonry_gallery_square_small_button_font_weight', $masonry_gallery_square_small_button_font_weight);

			$masonry_gallery_square_small_button_text_transform = new QodeField('selectblanksimple', 'masonry_gallery_square_small_button_text_transform', '', '文本转换', '', $options_texttransform);
			$row1->addChild('masonry_gallery_square_small_button_text_transform', $masonry_gallery_square_small_button_text_transform);

		$row2 = new QodeRow(true);
		$group10->addChild('row2', $row2);

			$masonry_gallery_square_small_button_font_size = new QodeField('textsimple', 'masonry_gallery_square_small_button_font_size', '', '字体大小 (px)');
			$row2->addChild('masonry_gallery_square_small_button_font_size', $masonry_gallery_square_small_button_font_size);

			$masonry_gallery_square_small_button_line_height = new QodeField('textsimple', 'masonry_gallery_square_small_button_line_height', '', '行高 (px)');
			$row2->addChild('masonry_gallery_square_small_button_line_height', $masonry_gallery_square_small_button_line_height);

			$masonry_gallery_square_small_button_letter_spacing = new QodeField('textsimple', 'masonry_gallery_square_small_button_letter_spacing', '', '字母间距 (px)');
			$row2->addChild('masonry_gallery_square_small_button_letter_spacing', $masonry_gallery_square_small_button_letter_spacing);

		$row3 = new QodeRow(true);
		$group10->addChild('row3', $row3);

			$masonry_gallery_square_small_button_text_color = new QodeField('colorsimple', 'masonry_gallery_square_small_button_text_color', '', '文字颜色');
			$row3->addChild('masonry_gallery_square_small_button_text_color', $masonry_gallery_square_small_button_text_color);

			$masonry_gallery_square_small_button_hover_text_color = new QodeField('colorsimple', 'masonry_gallery_square_small_button_hover_text_color', '', '悬停文字颜色');
			$row3->addChild('masonry_gallery_square_small_button_hover_text_color', $masonry_gallery_square_small_button_hover_text_color);

			$masonry_gallery_square_small_button_background_color = new QodeField('colorsimple', 'masonry_gallery_square_small_button_background_color', '', '背景颜色');
			$row3->addChild('masonry_gallery_square_small_button_background_color', $masonry_gallery_square_small_button_background_color);

			$masonry_gallery_square_small_button_hover_background_color = new QodeField('colorsimple', 'masonry_gallery_square_small_button_hover_background_color', '', '悬停背景颜色');
			$row3->addChild('masonry_gallery_square_small_button_hover_background_color', $masonry_gallery_square_small_button_hover_background_color);

		$row4 = new QodeRow(true);
		$group10->addChild('row4', $row4);

			$masonry_gallery_square_small_button_border_color = new QodeField('colorsimple', 'masonry_gallery_square_small_button_border_color', '', '边框颜色');
			$row4->addChild('masonry_gallery_square_small_button_border_color', $masonry_gallery_square_small_button_border_color);

			$masonry_gallery_square_small_button_hover_border_color = new QodeField('colorsimple', 'masonry_gallery_square_small_button_hover_border_color', '', '悬停边框颜色');
			$row4->addChild('masonry_gallery_square_small_button_hover_border_color', $masonry_gallery_square_small_button_hover_border_color);

			$masonry_gallery_square_small_button_border_width = new QodeField('textsimple', 'masonry_gallery_square_small_button_border_width', '', '边框宽度 (px)');
			$row4->addChild('masonry_gallery_square_small_button_border_width', $masonry_gallery_square_small_button_border_width);

			$masonry_gallery_square_small_button_border_radius = new QodeField('textsimple', 'masonry_gallery_square_small_button_border_radius', '', '边框圆角 (px)');
			$row4->addChild('masonry_gallery_square_small_button_border_radius', $masonry_gallery_square_small_button_border_radius);

		$row5 = new QodeRow(true);
		$group10->addChild('row5', $row5);

			$masonry_gallery_square_small_button_padding_left = new QodeField('textsimple', 'masonry_gallery_square_small_button_padding_left', '', '内边距左 (px)');
			$row5->addChild('masonry_gallery_square_small_button_padding_left', $masonry_gallery_square_small_button_padding_left);

			$masonry_gallery_square_small_button_padding_right = new QodeField('textsimple', 'masonry_gallery_square_small_button_padding_right', '', '内边距右 (px)');
			$row5->addChild('masonry_gallery_square_small_button_padding_right', $masonry_gallery_square_small_button_padding_right);

			$masonry_gallery_square_small_button_margin_top = new QodeField('textsimple', 'masonry_gallery_square_small_button_margin_top', '', '外边距上');
			$row5->addChild('masonry_gallery_square_small_button_margin_top', $masonry_gallery_square_small_button_margin_top);	

	$group11 = new QodeGroup('图标风格', 'Define Square Small Icon Style');
	$panel17->addChild('group11', $group11);

		$row1 = new QodeRow();
		$group11->addChild('row1', $row1);

			$masonry_gallery_square_small_icon_color = new QodeField('colorsimple', 'masonry_gallery_square_small_icon_color', '', '图标颜色');
			$row1->addChild('masonry_gallery_square_small_icon_color', $masonry_gallery_square_small_icon_color);

			$masonry_gallery_square_small_icon_hover_color = new QodeField('colorsimple', 'masonry_gallery_square_small_icon_hover_color', '', '图标悬停颜色');
			$row1->addChild('masonry_gallery_square_small_icon_hover_color', $masonry_gallery_square_small_icon_hover_color);

			$masonry_gallery_square_small_icon_size = new QodeField('textsimple', 'masonry_gallery_square_small_icon_size', '', '图标尺寸 (px)');
			$row1->addChild('masonry_gallery_square_small_icon_size', $masonry_gallery_square_small_icon_size);

			$masonry_gallery_square_small_icon_margin_bottom = new QodeField('textsimple', 'masonry_gallery_square_small_icon_margin_bottom', '', '外边距下 (px)');
			$row1->addChild('masonry_gallery_square_small_icon_margin_bottom', $masonry_gallery_square_small_icon_margin_bottom);

	$group12 = new QodeGroup('覆盖样式', 'Define Square Small Overlay Style');
	$panel17->addChild('group12', $group12);

		$row1 = new QodeRow();
		$group12->addChild('row1', $row1);

			$masonry_gallery_square_small_overlay_color = new QodeField('colorsimple', 'masonry_gallery_square_small_overlay_color', '', '颜色');
			$row1->addChild('masonry_gallery_square_small_overlay_color', $masonry_gallery_square_small_overlay_color);

			$masonry_gallery_square_small_overlay_transparency = new QodeField('textsimple', 'masonry_gallery_square_small_overlay_transparency', '', '透明度 (0=透明 - 1=不透明)');
			$row1->addChild('masonry_gallery_square_small_overlay_transparency', $masonry_gallery_square_small_overlay_transparency);

	$group13 = new QodeGroup('文本对齐', 'Define Text Alignment');
	$panel17->addChild('group13', $group13);	

		$row1 = new QodeRow();
		$group13->addChild('row1', $row1);
			
			$masonry_gallery_square_small_text_align = new QodeField("selectsimple","masonry_gallery_square_small_text_align","center","Text Alignment","Choose text position",array(
			"center" => "中",
			"left" => "左",
			"right" => "右"
			));
			$row1->addChild("masonry_gallery_square_small_text_align",$masonry_gallery_square_small_text_align);

	$group14 = new QodeGroup('内容内边距', 'Please insert padding in px(or %) i.e. 5px (or 5%)');
	$panel17->addChild('group14', $group14);	

		$row1 = new QodeRow();
		$group14->addChild('row1', $row1);
			
				$masonry_gallery_square_small_padding_left = new QodeField("textsimple","masonry_gallery_square_small_padding_left","","内边距左","Please insert padding in px(or %) i.e. 5px(or 5%)", array(), array("col_width" => 3));
				$row1->addChild("masonry_gallery_square_small_padding_left",$masonry_gallery_square_small_padding_left);
				
				$masonry_gallery_square_small_padding_right = new QodeField("textsimple","masonry_gallery_square_small_padding_right","","内边距右","Please insert padding in px(or %) i.e. 5px(or 5%)", array(), array("col_width" => 3));
				$row1->addChild("masonry_gallery_square_small_padding_right",$masonry_gallery_square_small_padding_right);

	//Rectangle Portrait
	$masonry_gallery_rectangle_portrait_title = new QodeTitle('masonry_gallery_rectangle_portrait_title', 'Rectangle Portrait');
	$panel17->addChild('masonry_gallery_rectangle_portrait_title', $masonry_gallery_rectangle_portrait_title);

	$group15 = new QodeGroup('标题样式', 'Define Rectangle Portrait Title Style');
	$panel17->addChild('group15', $group15);

		$row1 = new QodeRow();
		$group15->addChild("row1",$row1);

			$masonry_gallery_rectangle_portrait_title_color = new QodeField('colorsimple','masonry_gallery_rectangle_portrait_title_color', '', '标题颜色');
			$row1->addChild('masonry_gallery_rectangle_portrait_title_color', $masonry_gallery_rectangle_portrait_title_color);

			$masonry_gallery_rectangle_portrait_title_font_size = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_title_font_size', '', '字体尺寸 (px)');
			$row1->addChild('masonry_gallery_rectangle_portrait_title_font_size', $masonry_gallery_rectangle_portrait_title_font_size);

			$masonry_gallery_rectangle_portrait_title_line_height = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_title_line_height', '', '行高 (px)');
			$row1->addChild('masonry_gallery_rectangle_portrait_title_line_height', $masonry_gallery_rectangle_portrait_title_line_height);

			$masonry_gallery_rectangle_portrait_title_text_transform = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_title_text_transform', '', '文本转换', '', $options_texttransform);
			$row1->addChild('masonry_gallery_rectangle_portrait_title_text_transform', $masonry_gallery_rectangle_portrait_title_text_transform);

		$row2 = new QodeRow(true);
		$group15->addChild("row2",$row2);

			$masonry_gallery_rectangle_portrait_title_font_family = new QodeField('fontsimple', 'masonry_gallery_rectangle_portrait_title_font_family', '-1', '字体系列');
			$row2->addChild('masonry_gallery_rectangle_portrait_title_font_family', $masonry_gallery_rectangle_portrait_title_font_family);

			$masonry_gallery_rectangle_portrait_title_font_style = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_title_font_style', '', '字体风格', '', $options_fontstyle);
			$row2->addChild('masonry_gallery_rectangle_portrait_title_font_style', $masonry_gallery_rectangle_portrait_title_font_style);

			$masonry_gallery_rectangle_portrait_title_font_weight = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_title_font_weight', '', '字体重量', '', $options_fontweight);
			$row2->addChild('masonry_gallery_rectangle_portrait_title_font_weight', $masonry_gallery_rectangle_portrait_title_font_weight);

			$masonry_gallery_rectangle_portrait_title_letter_spacing = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_title_letter_spacing', '', '字母间距');
			$row2->addChild('masonry_gallery_rectangle_portrait_title_letter_spacing', $masonry_gallery_rectangle_portrait_title_letter_spacing);

		$row3 = new QodeRow(true);
		$group15->addChild("row3",$row3);

			$masonry_gallery_rectangle_portrait_title_margin_bottom = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_title_margin_bottom', '', '边距底部');
			$row3->addChild('masonry_gallery_rectangle_portrait_title_margin_bottom', $masonry_gallery_rectangle_portrait_title_margin_bottom);

	$group16 = new QodeGroup('文字风格', 'Define Rectangle Portrait Text Style');
	$panel17->addChild('group16', $group16);

		$row1 = new QodeRow();
		$group16->addChild("row1",$row1);

			$masonry_gallery_rectangle_portrait_text_color = new QodeField('colorsimple','masonry_gallery_rectangle_portrait_text_color', '', '文字颜色');
			$row1->addChild('masonry_gallery_rectangle_portrait_text_color', $masonry_gallery_rectangle_portrait_text_color);

			$masonry_gallery_rectangle_portrait_text_font_size = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_text_font_size', '', '字体尺寸 (px)');
			$row1->addChild('masonry_gallery_rectangle_portrait_text_font_size', $masonry_gallery_rectangle_portrait_text_font_size);

			$masonry_gallery_rectangle_portrait_text_line_height = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_text_line_height', '', '行高 (px)');
			$row1->addChild('masonry_gallery_rectangle_portrait_text_line_height', $masonry_gallery_rectangle_portrait_text_line_height);

			$masonry_gallery_rectangle_portrait_text_text_transform = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_text_text_transform', '', '文本转换', '', $options_texttransform);
			$row1->addChild('masonry_gallery_rectangle_portrait_text_text_transform', $masonry_gallery_rectangle_portrait_text_text_transform);

		$row2 = new QodeRow(true);
		$group16->addChild("row2",$row2);

			$masonry_gallery_rectangle_portrait_text_font_family = new QodeField('fontsimple', 'masonry_gallery_rectangle_portrait_text_font_family', '-1', '字体系列');
			$row2->addChild('masonry_gallery_rectangle_portrait_text_font_family', $masonry_gallery_rectangle_portrait_text_font_family);

			$masonry_gallery_rectangle_portrait_text_font_style = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_text_font_style', '', '字体风格', '', $options_fontstyle);
			$row2->addChild('masonry_gallery_rectangle_portrait_text_font_style', $masonry_gallery_rectangle_portrait_text_font_style);

			$masonry_gallery_rectangle_portrait_text_font_weight = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_text_font_weight', '', '字体重量', '', $options_fontweight);
			$row2->addChild('masonry_gallery_rectangle_portrait_text_font_weight', $masonry_gallery_rectangle_portrait_text_font_weight);

			$masonry_gallery_rectangle_portrait_text_letter_spacing = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_text_letter_spacing', '', '字母间距');
			$row2->addChild('masonry_gallery_rectangle_portrait_text_letter_spacing', $masonry_gallery_rectangle_portrait_text_letter_spacing);

	$group17 = new QodeGroup('按钮样式', 'Define Rectangle Portrait Button Style');
	$panel17->addChild('group17', $group17);

		$row1 = new QodeRow();
		$group17->addChild('row1', $row1);

			$masonry_gallery_rectangle_portrait_button_font_family = new QodeField('fontsimple', 'masonry_gallery_rectangle_portrait_button_font_family', '-1', '字体系列');
			$row1->addChild('masonry_gallery_rectangle_portrait_button_font_family', $masonry_gallery_rectangle_portrait_button_font_family);

			$masonry_gallery_rectangle_portrait_button_font_style = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_button_font_style', '', '字体风格', '', $options_fontstyle);
			$row1->addChild('masonry_gallery_rectangle_portrait_button_font_style', $masonry_gallery_rectangle_portrait_button_font_style);

			$masonry_gallery_rectangle_portrait_button_font_weight = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_button_font_weight', '', '字体重量', '', $options_fontweight);
			$row1->addChild('masonry_gallery_rectangle_portrait_button_font_weight', $masonry_gallery_rectangle_portrait_button_font_weight);

			$masonry_gallery_rectangle_portrait_button_text_transform = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_button_text_transform', '', '文本转换', '', $options_texttransform);
			$row1->addChild('masonry_gallery_rectangle_portrait_button_text_transform', $masonry_gallery_rectangle_portrait_button_text_transform);

		$row2 = new QodeRow(true);
		$group17->addChild('row2', $row2);

			$masonry_gallery_rectangle_portrait_button_font_size = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_font_size', '', '字体大小 (px)');
			$row2->addChild('masonry_gallery_rectangle_portrait_button_font_size', $masonry_gallery_rectangle_portrait_button_font_size);

			$masonry_gallery_rectangle_portrait_button_line_height = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_line_height', '', '行高 (px)');
			$row2->addChild('masonry_gallery_rectangle_portrait_button_line_height', $masonry_gallery_rectangle_portrait_button_line_height);

			$masonry_gallery_rectangle_portrait_button_letter_spacing = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_letter_spacing', '', '字母间距 (px)');
			$row2->addChild('masonry_gallery_rectangle_portrait_button_letter_spacing', $masonry_gallery_rectangle_portrait_button_letter_spacing);

		$row3 = new QodeRow(true);
		$group17->addChild('row3', $row3);

			$masonry_gallery_rectangle_portrait_button_text_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_portrait_button_text_color', '', '文字颜色');
			$row3->addChild('masonry_gallery_rectangle_portrait_button_text_color', $masonry_gallery_rectangle_portrait_button_text_color);

			$masonry_gallery_rectangle_portrait_button_hover_text_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_portrait_button_hover_text_color', '', '悬停文字颜色');
			$row3->addChild('masonry_gallery_rectangle_portrait_button_hover_text_color', $masonry_gallery_rectangle_portrait_button_hover_text_color);

			$masonry_gallery_rectangle_portrait_button_background_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_portrait_button_background_color', '', '背景颜色');
			$row3->addChild('masonry_gallery_rectangle_portrait_button_background_color', $masonry_gallery_rectangle_portrait_button_background_color);

			$masonry_gallery_rectangle_portrait_button_hover_background_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_portrait_button_hover_background_color', '', '悬停背景颜色');
			$row3->addChild('masonry_gallery_rectangle_portrait_button_hover_background_color', $masonry_gallery_rectangle_portrait_button_hover_background_color);

		$row4 = new QodeRow(true);
		$group17->addChild('row4', $row4);
        
			$masonry_gallery_rectangle_portrait_button_border_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_portrait_button_border_color', '', '边框颜色');
			$row4->addChild('masonry_gallery_rectangle_portrait_button_border_color', $masonry_gallery_rectangle_portrait_button_border_color);

			$masonry_gallery_rectangle_portrait_button_hover_border_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_portrait_button_hover_border_color', '', '悬停边框颜色');
			$row4->addChild('masonry_gallery_rectangle_portrait_button_hover_border_color', $masonry_gallery_rectangle_portrait_button_hover_border_color);

			$masonry_gallery_rectangle_portrait_button_border_width = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_border_width', '', '边框宽度 (px)');
			$row4->addChild('masonry_gallery_rectangle_portrait_button_border_width', $masonry_gallery_rectangle_portrait_button_border_width);

			$masonry_gallery_rectangle_portrait_button_border_radius = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_border_radius', '', '边框圆角 (px)');
			$row4->addChild('masonry_gallery_rectangle_portrait_button_border_radius', $masonry_gallery_rectangle_portrait_button_border_radius);

		$row5 = new QodeRow(true);
		$group17->addChild('row5', $row5);

			$masonry_gallery_rectangle_portrait_button_padding_left = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_padding_left', '', '内边距左 (px)');
			$row5->addChild('masonry_gallery_rectangle_portrait_button_padding_left', $masonry_gallery_rectangle_portrait_button_padding_left);

			$masonry_gallery_rectangle_portrait_button_padding_right = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_padding_right', '', '内边距右 (px)');
			$row5->addChild('masonry_gallery_rectangle_portrait_button_padding_right', $masonry_gallery_rectangle_portrait_button_padding_right);

			$masonry_gallery_rectangle_portrait_button_margin_top = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_margin_top', '', '外边距上');
			$row5->addChild('masonry_gallery_rectangle_portrait_button_margin_top', $masonry_gallery_rectangle_portrait_button_margin_top);

	$group18 = new QodeGroup('图标风格', 'Define Rectangle Portrait Icon Style');
	$panel17->addChild('group18', $group18);

		$row1 = new QodeRow();
		$group18->addChild('row1', $row1);

			$masonry_gallery_rectangle_portrait_icon_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_portrait_icon_color', '', '图标颜色');
			$row1->addChild('masonry_gallery_rectangle_portrait_icon_color', $masonry_gallery_rectangle_portrait_icon_color);

			$masonry_gallery_rectangle_portrait_icon_hover_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_portrait_icon_hover_color', '', '图标悬停颜色');
			$row1->addChild('masonry_gallery_rectangle_portrait_icon_hover_color', $masonry_gallery_rectangle_portrait_icon_hover_color);

			$masonry_gallery_rectangle_portrait_icon_size = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_icon_size', '', '图标尺寸 (px)');
			$row1->addChild('masonry_gallery_rectangle_portrait_icon_size', $masonry_gallery_rectangle_portrait_icon_size);

			$masonry_gallery_rectangle_portrait_icon_margin_bottom = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_icon_margin_bottom', '', '外边距下 (px)');
			$row1->addChild('masonry_gallery_rectangle_portrait_icon_margin_bottom', $masonry_gallery_rectangle_portrait_icon_margin_bottom);

	$group19 = new QodeGroup('覆盖样式', 'Define Rectangle Portrait Overlay Style');
	$panel17->addChild('group19', $group19);

		$row1 = new QodeRow();
		$group19->addChild('row1', $row1);

			$masonry_gallery_rectangle_portrait_overlay_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_portrait_overlay_color', '', '颜色');
			$row1->addChild('masonry_gallery_rectangle_portrait_overlay_color', $masonry_gallery_rectangle_portrait_overlay_color);

			$masonry_gallery_rectangle_portrait_overlay_transparency = new QodeField('textsimple', 'masonry_gallery_rectangle_portrait_overlay_transparency', '', '透明度 (0=透明 - 1=不透明)');
			$row1->addChild('masonry_gallery_rectangle_portrait_overlay_transparency', $masonry_gallery_rectangle_portrait_overlay_transparency);

	$group20 = new QodeGroup('文本对齐', 'Define Text Alignment');
	$panel17->addChild('group20', $group20);	

		$row1 = new QodeRow();
		$group20->addChild('row1', $row1);

			$masonry_gallery_rectangle_portrait_text_align = new QodeField("selectsimple","masonry_gallery_rectangle_portrait_text_align","center","Text Alignment","Choose text position",array(
			"center" => "中",
			"left" => "左",
			"right" => "右"
			));
			$row1->addChild("masonry_gallery_rectangle_portrait_text_align",$masonry_gallery_rectangle_portrait_text_align);

	$group21 = new QodeGroup('内容内边距', 'Please insert padding in px(or %) i.e. 5px (or 5%)');
	$panel17->addChild('group21', $group21);

		$row1 = new QodeRow();
		$group21->addChild('row1', $row1);

			$masonry_gallery_rectangle_portrait_padding_left = new QodeField("textsimple","masonry_gallery_rectangle_portrait_padding_left","","内边距左","Please insert padding in px(or %) i.e. 5px(or 5%)", array(), array("col_width" => 3));
			$row1->addChild("masonry_gallery_rectangle_portrait_padding_left",$masonry_gallery_rectangle_portrait_padding_left);
			
			$masonry_gallery_rectangle_portrait_padding_right = new QodeField("textsimple","masonry_gallery_rectangle_portrait_padding_right","","内边距右","Please insert padding in px(or %) i.e. 5px(or 5%)", array(), array("col_width" => 3));
			$row1->addChild("masonry_gallery_rectangle_portrait_padding_right",$masonry_gallery_rectangle_portrait_padding_right);

	//Rectangle Landscape
	$masonry_gallery_rectangle_landscape_title = new QodeTitle('masonry_gallery_rectangle_landscape_title', '风景横幅');
	$panel17->addChild('masonry_gallery_rectangle_landscape_title', $masonry_gallery_rectangle_landscape_title);

	$group22 = new QodeGroup('标题样式', 'Define Rectangle Landscape Title Style');
	$panel17->addChild('group22', $group22);

		$row1 = new QodeRow();
		$group22->addChild("row1",$row1);

			$masonry_gallery_rectangle_landscape_title_color = new QodeField('colorsimple','masonry_gallery_rectangle_landscape_title_color', '', '标题颜色');
			$row1->addChild('masonry_gallery_rectangle_landscape_title_color', $masonry_gallery_rectangle_landscape_title_color);

			$masonry_gallery_rectangle_landscape_title_font_size = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_title_font_size', '', '字体尺寸 (px)');
			$row1->addChild('masonry_gallery_rectangle_landscape_title_font_size', $masonry_gallery_rectangle_landscape_title_font_size);

			$masonry_gallery_rectangle_landscape_title_line_height = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_title_line_height', '', '行高 (px)');
			$row1->addChild('masonry_gallery_rectangle_landscape_title_line_height', $masonry_gallery_rectangle_landscape_title_line_height);

			$masonry_gallery_rectangle_landscape_title_text_transform = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_title_text_transform', '', '文本转换', '', $options_texttransform);
			$row1->addChild('masonry_gallery_rectangle_landscape_title_text_transform', $masonry_gallery_rectangle_landscape_title_text_transform);

		$row2 = new QodeRow(true);
		$group22->addChild("row2",$row2);

			$masonry_gallery_rectangle_landscape_title_font_family = new QodeField('fontsimple', 'masonry_gallery_rectangle_landscape_title_font_family', '-1', '字体系列');
			$row2->addChild('masonry_gallery_rectangle_landscape_title_font_family', $masonry_gallery_rectangle_landscape_title_font_family);

			$masonry_gallery_rectangle_landscape_title_font_style = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_title_font_style', '', '字体风格', '', $options_fontstyle);
			$row2->addChild('masonry_gallery_rectangle_landscape_title_font_style', $masonry_gallery_rectangle_landscape_title_font_style);

			$masonry_gallery_rectangle_landscape_title_font_weight = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_title_font_weight', '', '字体重量', '', $options_fontweight);
			$row2->addChild('masonry_gallery_rectangle_landscape_title_font_weight', $masonry_gallery_rectangle_landscape_title_font_weight);

			$masonry_gallery_rectangle_landscape_title_letter_spacing = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_title_letter_spacing', '', '字母间距');
			$row2->addChild('masonry_gallery_rectangle_landscape_title_letter_spacing', $masonry_gallery_rectangle_landscape_title_letter_spacing);

		$row3 = new QodeRow(true);
		$group22->addChild("row3",$row3);

			$masonry_gallery_rectangle_landscape_title_margin_bottom = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_title_margin_bottom', '', '边距底部');
			$row3->addChild('masonry_gallery_rectangle_landscape_title_margin_bottom', $masonry_gallery_rectangle_landscape_title_margin_bottom);

	$group23 = new QodeGroup('文字风格', 'Define Rectangle Landscape Text Style');
	$panel17->addChild('group23', $group23);

		$row1 = new QodeRow();
		$group23->addChild("row1",$row1);

			$masonry_gallery_rectangle_landscape_text_color = new QodeField('colorsimple','masonry_gallery_rectangle_landscape_text_color', '', '文字颜色');
			$row1->addChild('masonry_gallery_rectangle_landscape_text_color', $masonry_gallery_rectangle_landscape_text_color);

			$masonry_gallery_rectangle_landscape_text_font_size = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_text_font_size', '', '字体尺寸 (px)');
			$row1->addChild('masonry_gallery_rectangle_landscape_text_font_size', $masonry_gallery_rectangle_landscape_text_font_size);

			$masonry_gallery_rectangle_landscape_text_line_height = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_text_line_height', '', '行高 (px)');
			$row1->addChild('masonry_gallery_rectangle_landscape_text_line_height', $masonry_gallery_rectangle_landscape_text_line_height);

			$masonry_gallery_rectangle_landscape_text_text_transform = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_text_text_transform', '', '文本转换', '', $options_texttransform);
			$row1->addChild('masonry_gallery_rectangle_landscape_text_text_transform', $masonry_gallery_rectangle_landscape_text_text_transform);

		$row2 = new QodeRow(true);
		$group23->addChild("row2",$row2);

			$masonry_gallery_rectangle_landscape_text_font_family = new QodeField('fontsimple', 'masonry_gallery_rectangle_landscape_text_font_family', '-1', '字体系列');
			$row2->addChild('masonry_gallery_rectangle_landscape_text_font_family', $masonry_gallery_rectangle_landscape_text_font_family);

			$masonry_gallery_rectangle_landscape_text_font_style = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_text_font_style', '', '字体风格', '', $options_fontstyle);
			$row2->addChild('masonry_gallery_rectangle_landscape_text_font_style', $masonry_gallery_rectangle_landscape_text_font_style);

			$masonry_gallery_rectangle_landscape_text_font_weight = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_text_font_weight', '', '字体重量', '', $options_fontweight);
			$row2->addChild('masonry_gallery_rectangle_landscape_text_font_weight', $masonry_gallery_rectangle_landscape_text_font_weight);

			$masonry_gallery_rectangle_landscape_text_letter_spacing = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_text_letter_spacing', '', '字母间距');
			$row2->addChild('masonry_gallery_rectangle_landscape_text_letter_spacing', $masonry_gallery_rectangle_landscape_text_letter_spacing);

	$group24 = new QodeGroup('按钮样式', 'Define Rectangle Landscape Button Style');
	$panel17->addChild('group24', $group24);

		$row1 = new QodeRow();
		$group24->addChild('row1', $row1);

			$masonry_gallery_rectangle_landscape_button_font_family = new QodeField('fontsimple', 'masonry_gallery_rectangle_landscape_button_font_family', '-1', '字体系列');
			$row1->addChild('masonry_gallery_rectangle_landscape_button_font_family', $masonry_gallery_rectangle_landscape_button_font_family);

			$masonry_gallery_rectangle_landscape_button_font_style = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_button_font_style', '', '字体风格', '', $options_fontstyle);
			$row1->addChild('masonry_gallery_rectangle_landscape_button_font_style', $masonry_gallery_rectangle_landscape_button_font_style);

			$masonry_gallery_rectangle_landscape_button_font_weight = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_button_font_weight', '', '字体重量', '', $options_fontweight);
			$row1->addChild('masonry_gallery_rectangle_landscape_button_font_weight', $masonry_gallery_rectangle_landscape_button_font_weight);

			$masonry_gallery_rectangle_landscape_button_text_transform = new QodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_button_text_transform', '', '文本转换', '', $options_texttransform);
			$row1->addChild('masonry_gallery_rectangle_landscape_button_text_transform', $masonry_gallery_rectangle_landscape_button_text_transform);

		$row2 = new QodeRow(true);
		$group24->addChild('row2', $row2);

			$masonry_gallery_rectangle_landscape_button_font_size = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_font_size', '', '字体大小 (px)');
			$row2->addChild('masonry_gallery_rectangle_landscape_button_font_size', $masonry_gallery_rectangle_landscape_button_font_size);

			$masonry_gallery_rectangle_landscape_button_line_height = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_line_height', '', '行高 (px)');
			$row2->addChild('masonry_gallery_rectangle_landscape_button_line_height', $masonry_gallery_rectangle_landscape_button_line_height);

			$masonry_gallery_rectangle_landscape_button_letter_spacing = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_letter_spacing', '', '字母间距 (px)');
			$row2->addChild('masonry_gallery_rectangle_landscape_button_letter_spacing', $masonry_gallery_rectangle_landscape_button_letter_spacing);

		$row3 = new QodeRow(true);
		$group24->addChild('row3', $row3);

			$masonry_gallery_rectangle_landscape_button_text_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_landscape_button_text_color', '', '文字颜色');
			$row3->addChild('masonry_gallery_rectangle_landscape_button_text_color', $masonry_gallery_rectangle_landscape_button_text_color);

			$masonry_gallery_rectangle_landscape_button_hover_text_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_landscape_button_hover_text_color', '', '悬停文字颜色');
			$row3->addChild('masonry_gallery_rectangle_landscape_button_hover_text_color', $masonry_gallery_rectangle_landscape_button_hover_text_color);

			$masonry_gallery_rectangle_landscape_button_background_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_landscape_button_background_color', '', '背景颜色');
			$row3->addChild('masonry_gallery_rectangle_landscape_button_background_color', $masonry_gallery_rectangle_landscape_button_background_color);

			$masonry_gallery_rectangle_landscape_button_hover_background_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_landscape_button_hover_background_color', '', '悬停背景颜色');
			$row3->addChild('masonry_gallery_rectangle_landscape_button_hover_background_color', $masonry_gallery_rectangle_landscape_button_hover_background_color);

		$row4 = new QodeRow(true);
		$group24->addChild('row4', $row4);

			$masonry_gallery_rectangle_landscape_button_border_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_landscape_button_border_color', '', '边框颜色');
			$row4->addChild('masonry_gallery_rectangle_landscape_button_border_color', $masonry_gallery_rectangle_landscape_button_border_color);

			$masonry_gallery_rectangle_landscape_button_hover_border_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_landscape_button_hover_border_color', '', '悬停边框颜色');
			$row4->addChild('masonry_gallery_rectangle_landscape_button_hover_border_color', $masonry_gallery_rectangle_landscape_button_hover_border_color);

			$masonry_gallery_rectangle_landscape_button_border_width = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_border_width', '', '边框宽度 (px)');
			$row4->addChild('masonry_gallery_rectangle_landscape_button_border_width', $masonry_gallery_rectangle_landscape_button_border_width);

			$masonry_gallery_rectangle_landscape_button_border_radius = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_border_radius', '', '边框圆角 (px)');
			$row4->addChild('masonry_gallery_rectangle_landscape_button_border_radius', $masonry_gallery_rectangle_landscape_button_border_radius);

		$row5 = new QodeRow(true);
		$group24->addChild('row5', $row5);

			$masonry_gallery_rectangle_landscape_button_padding_left = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_padding_left', '', '内边距左 (px)');
			$row5->addChild('masonry_gallery_rectangle_landscape_button_padding_left', $masonry_gallery_rectangle_landscape_button_padding_left);

			$masonry_gallery_rectangle_landscape_button_padding_right = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_padding_right', '', '内边距右 (px)');
			$row5->addChild('masonry_gallery_rectangle_landscape_button_padding_right', $masonry_gallery_rectangle_landscape_button_padding_right);

			$masonry_gallery_rectangle_landscape_button_margin_top = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_margin_top', '', '外边距上');
			$row5->addChild('masonry_gallery_rectangle_landscape_button_margin_top', $masonry_gallery_rectangle_landscape_button_margin_top);

	$group25 = new QodeGroup('图标风格', 'Define Rectangle Landscape Icon Style');
	$panel17->addChild('group25', $group25);

		$row1 = new QodeRow();
		$group25->addChild('row1', $row1);

			$masonry_gallery_rectangle_landscape_icon_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_landscape_icon_color', '', '图标颜色');
			$row1->addChild('masonry_gallery_rectangle_landscape_icon_color', $masonry_gallery_rectangle_landscape_icon_color);

			$masonry_gallery_rectangle_landscape_icon_hover_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_landscape_icon_hover_color', '', '图标悬停颜色');
			$row1->addChild('masonry_gallery_rectangle_landscape_icon_hover_color', $masonry_gallery_rectangle_landscape_icon_hover_color);

			$masonry_gallery_rectangle_landscape_icon_size = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_icon_size', '', '图标尺寸 (px)');
			$row1->addChild('masonry_gallery_rectangle_landscape_icon_size', $masonry_gallery_rectangle_landscape_icon_size);

			$masonry_gallery_rectangle_landscape_icon_margin_bottom = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_icon_margin_bottom', '', '外边距下 (px)');
			$row1->addChild('masonry_gallery_rectangle_landscape_icon_margin_bottom', $masonry_gallery_rectangle_landscape_icon_margin_bottom);

	$group26 = new QodeGroup('覆盖样式', 'Define Rectangle Landscape Overlay Style');
	$panel17->addChild('group26', $group26);

		$row1 = new QodeRow();
		$group26->addChild('row1', $row1);

			$masonry_gallery_rectangle_landscape_overlay_color = new QodeField('colorsimple', 'masonry_gallery_rectangle_landscape_overlay_color', '', '颜色');
			$row1->addChild('masonry_gallery_rectangle_landscape_overlay_color', $masonry_gallery_rectangle_landscape_overlay_color);

			$masonry_gallery_rectangle_landscape_overlay_transparency = new QodeField('textsimple', 'masonry_gallery_rectangle_landscape_overlay_transparency', '', '透明度 (0=透明 - 1=不透明)');
			$row1->addChild('masonry_gallery_rectangle_landscape_overlay_transparency', $masonry_gallery_rectangle_landscape_overlay_transparency);

	$group27 = new QodeGroup('文本对齐', 'Define Text Alignment');
	$panel17->addChild('group27', $group27);	

		$row1 = new QodeRow();
		$group27->addChild('row1', $row1);
			
			$masonry_gallery_rectangle_landscape_text_align = new QodeField("selectsimple","masonry_gallery_rectangle_landscape_text_align","center","Text Alignment","Choose text position",array(
			"center" => "中",
			"left" => "左",
			"right" => "右"
			));
			$row1->addChild("masonry_gallery_rectangle_landscape_text_align",$masonry_gallery_rectangle_landscape_text_align);

	$group28 = new QodeGroup('内容内边距', 'Please insert padding in px(or %) i.e. 5px (or 5%)');
	$panel17->addChild('group28', $group28);

		$row1 = new QodeRow();
		$group28->addChild('row1', $row1);
		
			$masonry_gallery_rectangle_landscape_padding_left = new QodeField("textsimple","masonry_gallery_rectangle_landscape_padding_left","","内边距左","Please insert padding in px(or %) i.e. 5px (or 5%)", array(), array("col_width" => 3));
			$row1->addChild("masonry_gallery_rectangle_landscape_padding_left",$masonry_gallery_rectangle_landscape_padding_left);
			
			$masonry_gallery_rectangle_landscape_padding_right = new QodeField("textsimple","masonry_gallery_rectangle_landscape_padding_right","","内边距右","Please insert padding in px(or %) i.e. 5px(or 5%)", array(), array("col_width" => 3));
			$row1->addChild("masonry_gallery_rectangle_landscape_padding_right",$masonry_gallery_rectangle_landscape_padding_right);


//Full Screen Sections

$panel16 = new QodePanel("全屏部分","full_screen_sections");
$elementsPage->addChild("panel16",$panel16);

$full_screen_sections_nav_title = new QodeTitle("full_screen_sections_nav_title","Navigation Buttons");
$panel16->addChild("full_screen_sections_nav_title",$full_screen_sections_nav_title);

	$group1 = new QodeGroup("导航按钮尺寸","Define navigation button size");
	$panel16->addChild("group1",$group1);

		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);

			$fss_navigation_button_width = new QodeField("textsimple","fss_navigation_button_width","","宽度 (px)","This is some description");
			$row1->addChild("fss_navigation_button_width",$fss_navigation_button_width);

			$fss_navigation_button_height = new QodeField("textsimple","fss_navigation_button_height","","高度 (px)","This is some description");
			$row1->addChild("fss_navigation_button_height",$fss_navigation_button_height);

	$fss_navigation_button_position = new QodeField("select","fss_navigation_button_position","","导航位置","Choose navigation buttons position",array(
		"" => "Default",
		"side_by_side" => "侧边箭头"
		),array(
		"dependence" => true,
		"show" => array("" => "#qodef_fss_default_position_container"),
		"hide" => array("side_by_side" => "#qodef_fss_default_position_container")
		));
	$panel16->addChild("fss_navigation_button_position",$fss_navigation_button_position);

	$fss_default_position_container = new QodeContainer("fss_default_position_container","fss_navigation_button_position","side_by_side",array("side_by_side"));
	$panel16->addChild("fss_default_position_container",$fss_default_position_container);

		$group1 = new QodeGroup("按钮位置","Set the position of buttons from top/bottom edges of the screen");
		$fss_default_position_container->addChild("group1",$group1);

			$row1 = new QodeRow();
			$group1->addChild("row1",$row1);

				$fss_navigation_button_up_position = new QodeField("textsimple","fss_navigation_button_up_position","","上按钮位置 (px)","This is some description");
				$row1->addChild("fss_navigation_button_up_position",$fss_navigation_button_up_position);

				$fss_navigation_button_down_position = new QodeField("textsimple","fss_navigation_button_down_position","","下按钮位置 (px)","This is some description");
				$row1->addChild("fss_navigation_button_down_position",$fss_navigation_button_down_position);

	$group2 = new QodeGroup("图标箭头样式","Define arrow navigation style");
	$panel16->addChild("group2",$group2);

		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);

			$fss_navigation_arrow_color = new QodeField("colorsimple","fss_navigation_arrow_color","","箭头颜色","This is some description");
			$row1->addChild("fss_navigation_arrow_color",$fss_navigation_arrow_color);

			$fss_navigation_arrow_transparency = new QodeField("textsimple","fss_navigation_arrow_transparency","","箭头透明度 (0-1)","This is some description");
			$row1->addChild("fss_navigation_arrow_transparency",$fss_navigation_arrow_transparency);

			$fss_navigation_arrow_hover_color = new QodeField("colorsimple","fss_navigation_arrow_hover_color","","箭头悬停颜色","This is some description");
			$row1->addChild("fss_navigation_arrow_hover_color",$fss_navigation_arrow_hover_color);

			$fss_navigation_arrow_hover_transparency = new QodeField("textsimple","fss_navigation_arrow_hover_transparency","","箭头悬停透明度 (0-1)","This is some description");
			$row1->addChild("fss_navigation_arrow_hover_transparency",$fss_navigation_arrow_hover_transparency);

		$row2 = new QodeRow();
		$group2->addChild("row2",$row2);

			$fss_navigation_arrow_size = new QodeField("textsimple","fss_navigation_arrow_size","","箭头尺寸 (px)","Default value is 14    ");
			$row2->addChild("fss_navigation_arrow_size",$fss_navigation_arrow_size);

	$group3 = new QodeGroup("导航按钮背景","Define navigation button background");
	$panel16->addChild("group3",$group3);

		$row1 = new QodeRow();
		$group3->addChild("row1",$row1);

			$fss_navigation_background_color = new QodeField("colorsimple","fss_navigation_background_color","","背景颜色","This is some description");
			$row1->addChild("fss_navigation_background_color",$fss_navigation_background_color);

			$fss_navigation_background_transparency = new QodeField("textsimple","fss_navigation_background_transparency","","背景透明度 (0-1)","This is some description");
			$row1->addChild("fss_navigation_background_transparency",$fss_navigation_background_transparency);

			$fss_navigation_background_hover_color = new QodeField("colorsimple","fss_navigation_background_hover_color","","背景悬停颜色","This is some description");
			$row1->addChild("fss_navigation_background_hover_color",$fss_navigation_background_hover_color);

			$fss_navigation_background_hover_transparency = new QodeField("textsimple","fss_navigation_background_hover_transparency","","背景悬停透明度 (0-1)","This is some description");
			$row1->addChild("fss_navigation_background_hover_transparency",$fss_navigation_background_hover_transparency);

	$group4 = new QodeGroup("导航按钮边框","Define border style");
	$panel16->addChild("group4",$group4);

		$row1 = new QodeRow();
		$group4->addChild("row1",$row1);

			$fss_navigation_border_color = new QodeField("colorsimple","fss_navigation_border_color","","边框颜色","This is some description");
			$row1->addChild("fss_navigation_border_color",$fss_navigation_border_color);

			$fss_navigation_border_transparency = new QodeField("textsimple","fss_navigation_border_transparency","","边框透明度(0-1)","This is some description");
			$row1->addChild("fss_navigation_border_transparency",$fss_navigation_border_transparency);

			$fss_navigation_border_hover_color = new QodeField("colorsimple","fss_navigation_border_hover_color","","边框悬停颜色","This is some description");
			$row1->addChild("fss_navigation_border_hover_color",$fss_navigation_border_hover_color);

			$fss_navigation_border_hover_transparency = new QodeField("textsimple","fss_navigation_border_hover_transparency","","边框悬停透明度 (0-1)","This is some description");
			$row1->addChild("fss_navigation_border_hover_transparency",$fss_navigation_border_hover_transparency);

		$row2 = new QodeRow();
		$group4->addChild("row2",$row2);

			$fss_navigation_border_width = new QodeField("textsimple","fss_navigation_border_width","","边框宽度 (px)","");
			$row2->addChild("fss_navigation_border_width",$fss_navigation_border_width);

			$fss_navigation_border_radius = new QodeField("textsimple","fss_navigation_border_radius","","边框圆角 (px)","This is some description");
			$row2->addChild("fss_navigation_border_radius",$fss_navigation_border_radius);