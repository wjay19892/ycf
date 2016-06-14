<?php

$generalPage = new QodeAdminPage("", "常规", "fa fa-institution");
$qodeFramework->qodeOptions->addAdminPage("general",$generalPage);

// Design Style

$panel1 = new QodePanel("设计风格","design_style");
$generalPage->addChild("panel1",$panel1);

	$google_fonts = new QodeField("font","google_fonts","-1","字体系列","Choose a default Google font for your site");
	$panel1->addChild("google_fonts",$google_fonts);
	
	$first_color = new QodeField("color","first_color","","第1主色","Choose the most dominant theme color");
	$panel1->addChild("first_color",$first_color);
	
	$second_color = new QodeField("color","second_color","","第2主色","Choose the second most dominant theme color");
	$panel1->addChild("second_color",$second_color);
	
	$third_color = new QodeField("color","third_color","","第3主色","Choose the third most dominant theme color");
	$panel1->addChild("third_color",$third_color);
	
	$fourth_color = new QodeField("color","fourth_color","","第4主色","Choose the fourth most dominant theme color");
	$panel1->addChild("fourth_color",$fourth_color);
	
	$background_color = new QodeField("color","background_color","","内容背景颜色","Choose the background color for page content area ");
	$panel1->addChild("background_color",$background_color);
	
	$background_color_boxes = new QodeField("color","background_color_boxes","","框背景颜色","Choose the background color for portfolio and blog boxes");
	$panel1->addChild("background_color_boxes",$background_color_boxes);
	
	$selection_color = new QodeField("color","selection_color","","文本选择颜色","Choose the color users see when selecting text");
	$panel1->addChild("selection_color",$selection_color);

    $overlapping_content = new QodeField("yesno","overlapping_content","no","启用重叠内容","Enabling this option will make content overlap title area or slider for set amount of pixels", array(),
        array("dependence" => true,
            "dependence_hide_on_yes" => "",
            "dependence_show_on_yes" => "#qodef_overlapping_content_container"));
    $panel1->addChild("overlapping_content",$overlapping_content);

    $overlapping_content_container = new QodeContainer("overlapping_content_container","overlapping_content","no");
    $panel1->addChild("overlapping_content_container",$overlapping_content_container);

    $overlapping_content_amount = new QodeField("text","overlapping_content_amount","","重叠数 (px)","Enter amount of pixels you would like content to overlap title area or slider", array(), array("col_width" => 1));
    $overlapping_content_container->addChild("overlapping_content_amount",$overlapping_content_amount);

    $overlapping_content_padding = new QodeField("text","overlapping_content_padding","","重叠 左/右 内边距 (px)","This option takes effect only on Default (in grid) templates", array(), array("col_width" => 1));
    $overlapping_content_container->addChild("overlapping_content_padding",$overlapping_content_padding);

	$boxed = new QodeField("yesno","boxed","no","窄布局","Enabling this option will display site content in grid", array(),
		array("dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_boxed_container"));
	$panel1->addChild("boxed",$boxed);
	
	$boxed_container = new QodeContainer("boxed_container","boxed","no");
	$panel1->addChild("boxed_container",$boxed_container);
	
		$background_color_box = new QodeField("color","background_color_box","","页面背景颜色","Choose the page background (body) color");
		$boxed_container->addChild("background_color_box",$background_color_box);
		
		$background_image = new QodeField("image","background_image","","背景图像","Choose an image to be displayed in background");
		$boxed_container->addChild("background_image",$background_image);
		
		$pattern_background_image = new QodeField("image","pattern_background_image","","背景图案","Choose an image to be used as background pattern");
		$boxed_container->addChild("pattern_background_image",$pattern_background_image);

    $paspartu = new QodeField("yesno","paspartu","no","路路通","Enabling this option will display passepartout around site content", array(),
        array("dependence" => true,
            "dependence_hide_on_yes" => "",
            "dependence_show_on_yes" => "#qodef_paspartu_container"));
    $panel1->addChild("paspartu",$paspartu);

    $paspartu_container = new QodeContainer("paspartu_container","paspartu","no");
    $panel1->addChild("paspartu_container",$paspartu_container);

        $paspartu_color = new QodeField("color","paspartu_color","","路路通颜色","Choose passepartout color, default value is #ffffff");
        $paspartu_container->addChild("paspartu_color",$paspartu_color);

        $paspartu_width = new QodeField("text","paspartu_width","","路路通尺寸 (%)","Enter size amount for passepartout, default value is 2% (the percent is in relation to site width)", array(), array("col_width" => 3));
        $paspartu_container->addChild("paspartu_width",$paspartu_width);

        $paspartu_header_alignment = new QodeField("yesno","paspartu_header_alignment","no","页眉对齐路路通","Enabling this option will set header content within passepartout");
        $paspartu_container->addChild("paspartu_header_alignment",$paspartu_header_alignment);

        $paspartu_header_inside = new QodeField("yesno","paspartu_header_inside","no","设置页眉到路路通","Enabling this option will set the whole header between the left and right border of passepartout");
        $paspartu_container->addChild("paspartu_header_inside",$paspartu_header_inside);

        $vertical_menu_inside_paspartu = new QodeField("yesno","vertical_menu_inside_paspartu","yes","在路路通里的垂直菜单","");
        $paspartu_container->addChild("vertical_menu_inside_paspartu",$vertical_menu_inside_paspartu);

        $paspartu_on_top = new QodeField("yesno","paspartu_on_top","yes","顶部路路通","Disabling this option will disable top part of passepartout", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_paspartu_on_top_fixed_container"));
        $paspartu_container->addChild("paspartu_on_top",$paspartu_on_top);

        $paspartu_on_top_fixed_container = new QodeContainer("paspartu_on_top_fixed_container","paspartu_on_top","no");
        $paspartu_container->addChild("paspartu_on_top_fixed_container",$paspartu_on_top_fixed_container);

        $paspartu_on_top_fixed = new QodeField("yesno","paspartu_on_top_fixed","no","固定顶部路路通","Enabling this option will fix top part of passepartout to the top of the screen");
        $paspartu_on_top_fixed_container->addChild("paspartu_on_top_fixed",$paspartu_on_top_fixed);

        $paspartu_on_bottom_slider_container = new QodeContainer("paspartu_on_bottom_slider_container","","");
        $paspartu_container->addChild("paspartu_on_bottom_slider_container",$paspartu_on_bottom_slider_container);

        $paspartu_on_bottom_slider = new QodeField("yesno","paspartu_on_bottom_slider","no","在Qode 幻灯片显示底部路路通","Enabling this option will show bottom passepartout on Qode Slider");
        $paspartu_on_bottom_slider_container->addChild("paspartu_on_bottom_slider",$paspartu_on_bottom_slider);

        $paspartu_on_bottom = new QodeField("yesno","paspartu_on_bottom","yes","底部路路通","禁用这个选项将禁用底部路路通", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_paspartu_on_bottom_fixed_container"));
        $paspartu_container->addChild("paspartu_on_bottom",$paspartu_on_bottom);

        $paspartu_on_bottom_fixed_container = new QodeContainer("paspartu_on_bottom_fixed_container","paspartu_on_bottom","no");
        $paspartu_container->addChild("paspartu_on_bottom_fixed_container",$paspartu_on_bottom_fixed_container);

            $paspartu_on_bottom_fixed = new QodeField("yesno","paspartu_on_bottom_fixed","no","固定底部路路通","Enabling this option will fix bottom part of passepartout to the bottom of the screen");
            $paspartu_on_bottom_fixed_container->addChild("paspartu_on_bottom_fixed",$paspartu_on_bottom_fixed);

	$enable_content_top_margin = new QodeField("yesno","enable_content_top_margin","no","内容一直在页眉下面","Enabling this option always will put content below header");
	$panel1->addChild("enable_content_top_margin",$enable_content_top_margin);

// Settings

$panel4 = new QodePanel("设置","settings");
$generalPage->addChild("panel4",$panel4);

	$page_transitions = new QodeField("select","page_transitions","0","页面切换",'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', array( 0 => "No animation",
		1 => "Up/Down",
		2 => "Fade",
		3 => "Up/Down (In) / Fade (Out)",
		4 => "Left/Right"
	), array(), "enable_grid_elements",array("yes"));
	$panel4->addChild("page_transitions",$page_transitions);

	$page_transitions_notice = new QodeNotice("页面转换",'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', "AJAX Page transitions are disabled due to VC Grid Elements", "enable_grid_elements","no");
	$panel4->addChild("page_transitions_notice",$page_transitions_notice);

	$loading_animation = new QodeField("onoff","loading_animation","off","加载动画","Enabling this option will display animation while page loads", array(),
		array("dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_loading_animation_container"));
	$panel4->addChild("loading_animation",$loading_animation);
	
	$loading_animation_container = new QodeContainer("loading_animation_container","loading_animation","off");
	$panel4->addChild("loading_animation_container",$loading_animation_container);
	
		$group1 = new QodeGroup("加载动画绘图","Choose type and color of preload graphic animation");
		$loading_animation_container->addChild("group1",$group1);
		
			$row1 = new QodeRow();
			$group1->addChild("row1",$row1);
			
				$loading_animation_spinner = new QodeField("selectsimple","loading_animation_spinner","pulse","旋转","This is some description", array( "pulse" => "Pulse",
	       "double_pulse" => "Double Pulse",
	       "cube" => "Cube",
	       "rotating_cubes" => "Rotating Cubes",
	       "stripes" => "Stripes",
	       "wave" => "Wave",
	       "two_rotating_circles" => "2 Rotating Circles",
	       "five_rotating_circles" => "5 Rotating Circles"
	      ));
				$row1->addChild("loading_animation_spinner",$loading_animation_spinner);
				
				$spinner_color = new QodeField("colorsimple","spinner_color","","旋转颜色","This is some description");
				$row1->addChild("spinner_color",$spinner_color);
				
		$loading_image = new QodeField("image","loading_image","","加载图像",'Upload custom image to be displayed while page loads (Note: Page Transition must not be set to "No Animation")');
		$loading_animation_container->addChild("loading_image",$loading_image);

		$loading_animation_left_menu_alignment = new QodeField("yesno","loading_animation_left_menu_alignment","no","中心加载动画到浏览器窗口",'Enabling this option will center loading animation in regard to browser window instead of in regard to content when left menu is enabled');
		$loading_animation_container->addChild("loading_animation_left_menu_alignment",$loading_animation_left_menu_alignment);
		
	$smooth_scroll = new QodeField("yesno","smooth_scroll","yes","平滑滚动","Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)");
	$panel4->addChild("smooth_scroll",$smooth_scroll);
	
	$elements_animation_on_touch = new QodeField("yesno","elements_animation_on_touch","no","手机触摸设备元素动画","Enabling this option will allow elements (shortcodes) to animate on mobile / touch devices");
	$panel4->addChild("elements_animation_on_touch",$elements_animation_on_touch);
	
	$show_back_button = new QodeField("yesno","show_back_button","yes","Show '回顶部按钮'","Enabling this option will display a Back to Top button on every page");
	$panel4->addChild("show_back_button",$show_back_button);
	
	$responsiveness = new QodeField("yesno","responsiveness","yes","自适应","Enabling this option will make all pages responsive");
	$panel4->addChild("responsiveness",$responsiveness);
	
	$favicon_image = new QodeField("image","favicon_image",QODE_ROOT."/img/favicon.ico","收藏图标","Choose a favicon image to be displayed");
	$panel4->addChild("favicon_image",$favicon_image);
	
	$internal_no_ajax_links = new QodeField("textarea","internal_no_ajax_links","","没有AJAX内部URL加载列表 (英文逗号分隔)","To disable AJAX transitions on certain pages, enter their full URLs here (for example: http://www.mydomain.com/forum/)");
	$panel4->addChild("internal_no_ajax_links",$internal_no_ajax_links);

// Custom Code

$panel3 = new QodePanel("自定义代码","custom_code");
$generalPage->addChild("panel3",$panel3);

	$custom_css = new QodeField("textarea","custom_css","","自定义 CSS","Enter your custom CSS here");
	$panel3->addChild("custom_css",$custom_css);

	$custom_svg_css = new QodeField("textarea", "custom_svg_css", "", "自定义 SVG CSS", "Enter your SVG CSS here");
	$panel3->addChild("custom_svg_css", $custom_svg_css);
	
	$custom_js = new QodeField("textarea","custom_js","","自定义 JS",'Enter your custom Javascript here (jQuery selector is "$j" because of the conflict mode)');
	$panel3->addChild("custom_js",$custom_js);

// SEO

$panel2 = new QodePanel("SEO","seo");
$generalPage->addChild("panel2",$panel2);

	$google_analytics_code = new QodeField("text","google_analytics_code","","谷歌分析帐号 ID","With this field you can monitor traffic on your website");
	$panel2->addChild("google_analytics_code",$google_analytics_code);
	
	$disable_qode_seo = new QodeField("yesno","disable_qode_seo","no","禁用 Qode SEO","Enabling this option will turn off Qode SEO", array(),
		array("dependence" => true,
		"dependence_hide_on_yes" => "#qodef_disable_qode_seo_container",
		"dependence_show_on_yes" => ""));
	$panel2->addChild("disable_qode_seo",$disable_qode_seo);
	
	$disable_qode_seo_container = new QodeContainer("disable_qode_seo_container","disable_qode_seo","yes");
	$panel2->addChild("disable_qode_seo_container",$disable_qode_seo_container);
	
		$meta_keywords = new QodeField("textarea","meta_keywords","","Meta 关键词","Add relevant keywords separated with commas to improve SEO");
		$disable_qode_seo_container->addChild("meta_keywords",$meta_keywords);
		
		$meta_description = new QodeField("textarea","meta_description","","Meta 描述","Enter a short description of the website for SEO");
		$disable_qode_seo_container->addChild("meta_description",$meta_description);