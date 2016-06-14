<?php

$sliderPage = new QodeAdminPage("_slider", "Qode 幻灯片", "fa fa-sliders");
$qodeFramework->qodeOptions->addAdminPage("slider",$sliderPage);

// General Style

$panel3 = new QodePanel("常规样式","navigation_control_style");
$sliderPage->addChild("panel3",$panel3);

	$qs_slider_height_tablet = new QodeField("text","qs_slider_height_tablet","","平板和手机横屏的幻灯片高度 (px)","Define slider height for tablet devices - portrait view and mobile devices landscape view");
	$panel3->addChild("qs_slider_height_tablet",$qs_slider_height_tablet);

	$qs_slider_height_mobile = new QodeField("text","qs_slider_height_mobile","","手机竖版高度 (px)","Define slider height for mobile devices");
	$panel3->addChild("qs_slider_height_mobile",$qs_slider_height_mobile);

//Buttons

$panel4 = new QodePanel("按钮风格","buttons_panel");
$sliderPage->addChild("panel4",$panel4);
	
	$group1 = new QodeGroup("按钮 1 风格","Define style for button 1.");
	$panel4->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);

			$qs_button_color = new QodeField("colorsimple","qs_button_color","","文字颜色","This is some description");
			$row1->addChild("qs_button_color",$qs_button_color);

			$qs_button_hover_color = new QodeField("colorsimple","qs_button_hover_color","","悬停文字颜色","This is some description");
			$row1->addChild("qs_button_hover_color",$qs_button_hover_color);

			$qs_button_background_color = new QodeField("colorsimple","qs_button_background_color","","背景颜色","This is some description");
			$row1->addChild("qs_button_background_color",$qs_button_background_color);

			$qs_button_hover_background_color = new QodeField("colorsimple","qs_button_hover_background_color","","背景悬停颜色","This is some description");
			$row1->addChild("qs_button_hover_background_color",$qs_button_hover_background_color);

		$row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);
			
			$qs_button_border_color = new QodeField("colorsimple","qs_button_border_color","","边框颜色","This is some description");
			$row2->addChild("qs_button_border_color",$qs_button_border_color);

			$qs_button_hover_border_color = new QodeField("colorsimple","qs_button_hover_border_color","","边框悬停颜色","This is some description");
			$row2->addChild("qs_button_hover_border_color",$qs_button_hover_border_color);

			$qs_button_border_width = new QodeField("textsimple","qs_button_border_width","","边框宽度 (px)","This is some description");
			$row2->addChild("qs_button_border_width",$qs_button_border_width);

			$qs_button_border_radius = new QodeField("textsimple","qs_button_border_radius","","边框圆角 (px)","This is some description");
			$row2->addChild("qs_button_border_radius",$qs_button_border_radius);

	$group2 = new QodeGroup("按钮 2 风格","Define style for button 2.");
	$panel4->addChild("group2",$group2);
		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);

			$qs_button2_color = new QodeField("colorsimple","qs_button2_color","","文字颜色","This is some description");
			$row1->addChild("qs_button2_color",$qs_button2_color);

			$qs_button2_hover_color = new QodeField("colorsimple","qs_button2_hover_color","","悬停文字颜色","This is some description");
			$row1->addChild("qs_button2_hover_color",$qs_button2_hover_color);

			$qs_button2_background_color = new QodeField("colorsimple","qs_button2_background_color","","背景颜色","This is some description");
			$row1->addChild("qs_button2_background_color",$qs_button2_background_color);

			$qs_button2_hover_background_color = new QodeField("colorsimple","qs_button2_hover_background_color","","背景悬停颜色","This is some description");
			$row1->addChild("qs_button2_hover_background_color",$qs_button2_hover_background_color);

		$row2 = new QodeRow(true);
		$group2->addChild("row2",$row2);
			
			$qs_button2_border_color = new QodeField("colorsimple","qs_button2_border_color","","边框颜色","This is some description");
			$row2->addChild("qs_button2_border_color",$qs_button2_border_color);

			$qs_button2_hover_border_color = new QodeField("colorsimple","qs_button2_hover_border_color","","边框悬停颜色","This is some description");
			$row2->addChild("qs_button2_hover_border_color",$qs_button2_hover_border_color);

			$qs_button2_border_width = new QodeField("textsimple","qs_button2_border_width","","边框宽度 (px)","This is some description");
			$row2->addChild("qs_button2_border_width",$qs_button2_border_width);

			$qs_button2_border_radius = new QodeField("textsimple","qs_button2_border_radius","","边框圆角 (px)","This is some description");
			$row2->addChild("qs_button2_border_radius",$qs_button2_border_radius);

	// Custom cursor navigation style

	$panel5 = new QodePanel("自定义光标导航样式","navigation_custom_cursor_style");
	$sliderPage->addChild("panel5",$panel5);

	$qs_enable_navigation_custom_cursor = new QodeField("yesno","qs_enable_navigation_custom_cursor","no","为导航启用自定义光标","Enabling this option will display custom cursors for slider navigation", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qs_enable_navigation_custom_cursor_container"));
	$panel5->addChild("qs_enable_navigation_custom_cursor",$qs_enable_navigation_custom_cursor);


	$qs_enable_navigation_custom_cursor_container = new QodeContainer("qs_enable_navigation_custom_cursor_container","qs_enable_navigation_custom_cursor","no");
	$panel5->addChild("qs_enable_navigation_custom_cursor_container",$qs_enable_navigation_custom_cursor_container);

	$cursor_image_left_right_area_size = new QodeField("text","cursor_image_left_right_area_size","","可点击的左/右区域尺寸 (%)","Define size of clickable left/right slider area in relation to slider width (default value is 23%)", array(), array("col_width" => 3));
	$qs_enable_navigation_custom_cursor_container->addChild("cursor_image_left_right_area_size",$cursor_image_left_right_area_size);

	$cursor_image_left_normal = new QodeField("image","cursor_image_left_normal","","光标图像 '左' - 正常","Choose a default cursor 'Left' image to display ");
	$qs_enable_navigation_custom_cursor_container->addChild("cursor_image_left_normal",$cursor_image_left_normal);

	$cursor_image_right_normal = new QodeField("image","cursor_image_right_normal","","光标图像 '右' - 正常","Choose a default cursor 'Right' image to display ");
	$qs_enable_navigation_custom_cursor_container->addChild("cursor_image_right_normal",$cursor_image_right_normal);


	$cursor_image_left_light = new QodeField("image","cursor_image_left_light","","光标图像 '左' - 浅色","Choose a cursor 'Left' light image to display ");
	$qs_enable_navigation_custom_cursor_container->addChild("cursor_image_left_light",$cursor_image_left_light);

	$cursor_image_right_light = new QodeField("image","cursor_image_right_light","","光标图像 '右' - 浅色","Choose a cursor 'Right' light image to display ");
	$qs_enable_navigation_custom_cursor_container->addChild("cursor_image_right_light",$cursor_image_right_light);

	$cursor_image_left_dark = new QodeField("image","cursor_image_left_dark","","光标图像 '左' - 深色","Choose a cursor 'Left' dark image to display ");
	$qs_enable_navigation_custom_cursor_container->addChild("cursor_image_left_dark",$cursor_image_left_dark);

	$cursor_image_right_dark = new QodeField("image","cursor_image_right_dark","","光标图像 '右' - 深色","Choose a cursor 'Right' dark image to display ");
	$qs_enable_navigation_custom_cursor_container->addChild("cursor_image_right_dark",$cursor_image_right_dark);


	$qs_enable_navigation_custom_cursor_grab = new QodeField("yesno","qs_enable_navigation_custom_cursor_grab","no","为 '抓' 箭头启用自定义光标","Enabling this option will display custom cursor for slider 'Grab' arrow", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qs_enable_navigation_custom_cursor_grab_container"));
	$qs_enable_navigation_custom_cursor_container->addChild("qs_enable_navigation_custom_cursor_grab",$qs_enable_navigation_custom_cursor_grab);

	$qs_enable_navigation_custom_cursor_grab_container = new QodeContainer("qs_enable_navigation_custom_cursor_grab_container","qs_enable_navigation_custom_cursor_grab","no");
	$qs_enable_navigation_custom_cursor_container->addChild("qs_enable_navigation_custom_cursor_grab_container",$qs_enable_navigation_custom_cursor_grab_container);

	$cursor_image_grab_normal = new QodeField("image","cursor_image_grab_normal","","光标图像 '抓' - 正常","Choose a default cursor 'Grab' image to display");
	$qs_enable_navigation_custom_cursor_grab_container->addChild("cursor_image_grab_normal",$cursor_image_grab_normal);

	$cursor_image_grab_light = new QodeField("image","cursor_image_grab_light","","光标图像 '抓' - 浅色","Choose a cursor 'Grab' light image to display");
	$qs_enable_navigation_custom_cursor_grab_container->addChild("cursor_image_grab_light",$cursor_image_grab_light);

	$cursor_image_grab_dark = new QodeField("image","cursor_image_grab_dark","","光标图像 '抓' - 深色","Choose a cursor 'Grab' dark image to display");
	$qs_enable_navigation_custom_cursor_grab_container->addChild("cursor_image_grab_dark",$cursor_image_grab_dark);




