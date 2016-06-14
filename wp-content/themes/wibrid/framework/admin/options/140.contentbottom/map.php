<?php

$contentbottomPage = new QodeAdminPage("_content_bottom", "内容底部", "fa fa-caret-square-o-down");
$qodeFramework->qodeOptions->addAdminPage("内容底部",$contentbottomPage);

//Content Bottom Area

$panel1 = new QodePanel("内容底部区域","content_bottom_area_panel");
$contentbottomPage->addChild("panel1",$panel1);

	$enable_content_bottom_area = new QodeField("yesno","enable_content_bottom_area","no","启用内容底部区域","This option will enable Content Bottom area on pages", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_content_bottom_area_container"));
	$panel1->addChild("enable_content_bottom_area",$enable_content_bottom_area);

		$enable_content_bottom_area_container = new QodeContainer("enable_content_bottom_area_container","enable_content_bottom_area","no");
		$panel1->addChild("enable_content_bottom_area_container",$enable_content_bottom_area_container);

		    $custom_sidebars = array();
		    foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {
		        if(isUserMadeSidebar(ucwords($sidebar['name']))){
		            $custom_sidebars[$sidebar['id']] = ucwords( $sidebar['name']);
		        }
		    }
			$content_bottom_sidebar_custom_display = new QodeField("selectblank","content_bottom_sidebar_custom_display","","侧边栏显示","Choose a Content Bottom sidebar to display", $custom_sidebars);
			$enable_content_bottom_area_container->addChild("content_bottom_sidebar_custom_display",$content_bottom_sidebar_custom_display);

			$content_bottom_in_grid = new QodeField("yesno","content_bottom_in_grid","yes","平铺显示","Enabling this option will place Content Bottom in grid");
			$enable_content_bottom_area_container->addChild("content_bottom_in_grid",$content_bottom_in_grid);

			$content_bottom_background_color = new QodeField("color","content_bottom_background_color","","背景颜色","Choose a background color for Content Bottom area");
			$enable_content_bottom_area_container->addChild("content_bottom_background_color",$content_bottom_background_color);