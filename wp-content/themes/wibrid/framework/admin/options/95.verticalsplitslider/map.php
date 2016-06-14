<?php

$verticalSplitSliderPage = new QodeAdminPage("_vertical_split_slider", "垂直分割滑块", "fa fa-arrows-v");
$qodeFramework->qodeOptions->addAdminPage("verticalSplitSlider",$verticalSplitSliderPage);

// General Style

$panel10 = new QodePanel("常规风格","general_style");
$verticalSplitSliderPage->addChild("panel10",$panel10);

	$group1 = new QodeGroup("导航样式","Define style for navigation bullets");
	$panel10->addChild("group1",$group1);

		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);

			$vss_navigation_inactive_color = new QodeField("colorsimple","vss_navigation_inactive_color","","导航颜色","Define color for navigation dots");
			$row1->addChild("vss_navigation_inactive_color",$vss_navigation_inactive_color);

			$vss_navigation_inactive_border_color = new QodeField("colorsimple","vss_navigation_inactive_border_color","","导航边框颜色","Define border color for navigation dots");
			$row1->addChild("vss_navigation_inactive_border_color",$vss_navigation_inactive_border_color);

			$vss_navigation_color = new QodeField("colorsimple","vss_navigation_color","","导航激活颜色","Define active color for navigation dots");
			$row1->addChild("vss_navigation_color",$vss_navigation_color);

			$vss_navigation_border_color = new QodeField("colorsimple","vss_navigation_border_color","","导航激活边框颜色","Define active border color for navigation dots");
			$row1->addChild("vss_navigation_border_color",$vss_navigation_border_color);

    $vss_navigation_size = new QodeField("text","vss_navigation_size","","导航尺寸 (px)","Define size for navigation dots", array(), array("col_width" => 1));
    $panel10->addChild("vss_navigation_size",$vss_navigation_size);

    $vss_left_panel_size = new QodeField("text","vss_left_panel_size","","左滑块面板尺寸 (%)","Define size for left slide panel. Note that sum of left and right slide panel should be 100.", array(), array("col_width" => 1));
    $panel10->addChild("vss_left_panel_size",$vss_left_panel_size);

    $vss_right_panel_size = new QodeField("text","vss_right_panel_size","","右滑块面板尺寸 (%)","Define size for right slide panel. Note that sum of left and right slide panel should be 100.", array(), array("col_width" => 1));
    $panel10->addChild("vss_right_panel_size",$vss_right_panel_size);

    $vss_responsive_advanced = new QodeField("yesno","vss_responsive_advanced","no","高级自适应","Enable this option for advanced responsive on smaller devices");
    $panel10->addChild("vss_responsive_advanced",$vss_responsive_advanced);
