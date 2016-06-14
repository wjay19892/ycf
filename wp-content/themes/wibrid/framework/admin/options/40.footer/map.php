<?php

$footerPage = new QodeAdminPage("_footer", "页脚", "fa fa-sort-amount-asc");
$qodeFramework->qodeOptions->addAdminPage("footer",$footerPage);


$panel10 = new QodePanel("页脚","footer_panel");
$footerPage->addChild("panel10",$panel10);
$uncovering_footer = new QodeField("yesno","uncovering_footer","no","未覆盖页脚","Enabling this option will make Footer gradually appear on scroll");
$panel10->addChild("uncovering_footer",$uncovering_footer);

$footer_main_image_background = new QodeField("image","footer_main_image_background","","页脚背景图像","Choose footer background image");
$panel10->addChild("footer_main_image_background",$footer_main_image_background);
$show_footer_top = new QodeField("yesno","show_footer_top","yes","显示页脚顶部","Enabling this option will show Footer Top area", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_show_footer_top_container"));
$panel10->addChild("show_footer_top",$show_footer_top);
$show_footer_top_container = new QodeContainer("show_footer_top_container","show_footer_top","no");
$panel10->addChild("show_footer_top_container",$show_footer_top_container);
$footer_in_grid = new QodeField("yesno","footer_in_grid","yes","平铺页脚","Enabling this option will place Footer Top content in grid");
$show_footer_top_container->addChild("footer_in_grid",$footer_in_grid);
$footer_top_columns = new QodeField("select","footer_top_columns","4","页脚顶部列数","Choose number of columns for Footer Top area", array( "1" => "1",
       "2" => "2",
       "3" => "3",
       "5" => "3(25%+25%+50%)",
       "6" => "3(50%+25%+25%)",
       "4" => "4"
      ),array(
      "dependence" => true,
      "hide" => array(
      	"1" => "#qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container, #qodef_footer_col4_alignment_container",
      	"2" => "#qodef_footer_col3_alignment_container, #qodef_footer_col4_alignment_container",
      	"3" => "#qodef_footer_col4_alignment_container",
      	"5" => "#qodef_footer_col4_alignment_container",
      	"6" => "#qodef_footer_col4_alignment_container",
      	"4" => ""
      	),
      "show" => array(
      	"1" => "#qodef_footer_col1_alignment_container",
      	"2" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container",
      	"3" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container",
      	"5" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container",
      	"6" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container",
      	"4" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container, #qodef_footer_col4_alignment_container",
      	)
      ));
$show_footer_top_container->addChild("footer_top_columns",$footer_top_columns);

$footer_col1_alignment_container = new QodeContainer("footer_col1_alignment_container","footer_top_columns","");
$show_footer_top_container->addChild("footer_col1_alignment_container",$footer_col1_alignment_container);

$footer_col1_alignment = new QodeField("selectblank","footer_col1_alignment","","页脚顶部第1列对齐方式","Choose alignment for first column",array(
	"left" => "左",
	"center" => "中",
	"right" => "右"
	));
$footer_col1_alignment_container->addChild("footer_col1_alignment",$footer_col1_alignment);

$footer_col2_alignment_container = new QodeContainer("footer_col2_alignment_container","footer_top_columns","",array("1"));
$show_footer_top_container->addChild("footer_col2_alignment_container",$footer_col2_alignment_container);

$footer_col2_alignment = new QodeField("selectblank","footer_col2_alignment","","页脚顶部第2列对齐方式","Choose alignment for second column",array(
	"left" => "左",
	"center" => "中",
	"right" => "右"
	));
$footer_col2_alignment_container->addChild("footer_col2_alignment",$footer_col2_alignment);

$footer_col3_alignment_container = new QodeContainer("footer_col3_alignment_container","footer_top_columns","",array("1","2"));
$show_footer_top_container->addChild("footer_col3_alignment_container",$footer_col3_alignment_container);

$footer_col3_alignment = new QodeField("selectblank","footer_col3_alignment","","页脚顶部第3列对齐方式","Choose alignment for third column",array(
	"left" => "左",
	"center" => "中",
	"right" => "右"
	));
$footer_col3_alignment_container->addChild("footer_col3_alignment",$footer_col3_alignment);

$footer_col4_alignment_container = new QodeContainer("footer_col4_alignment_container","footer_top_columns","",array("1","2","3","5","6"));
$show_footer_top_container->addChild("footer_col4_alignment_container",$footer_col4_alignment_container);

$footer_col4_alignment = new QodeField("selectblank","footer_col4_alignment","","页脚顶部第4列对齐方式","Choose alignment for fourth column",array(
	"left" => "左",
	"center" => "中",
	"right" => "右"
	));
$footer_col4_alignment_container->addChild("footer_col4_alignment",$footer_col4_alignment);

$group1 = new QodeGroup("页脚顶部颜色","Configure colors for Footer Top area");
$show_footer_top_container->addChild("group1",$group1);
$row1 = new QodeRow();
$group1->addChild("row1",$row1);
$footer_top_background_color = new QodeField("colorsimple","footer_top_background_color","","背景颜色","This is some description");
$row1->addChild("footer_top_background_color",$footer_top_background_color);
$footer_top_title_color = new QodeField("colorsimple","footer_top_title_color","","标题颜色","This is some description");
$row1->addChild("footer_top_title_color",$footer_top_title_color);
$footer_top_text_color = new QodeField("colorsimple","footer_top_text_color","","文字颜色","This is some description");
$row1->addChild("footer_top_text_color",$footer_top_text_color);
$row2 = new QodeRow(true);
$group1->addChild("row2",$row2);
$footer_link_color = new QodeField("colorsimple","footer_link_color","","链接颜色","This is some description");
$row2->addChild("footer_link_color",$footer_link_color);
$footer_link_hover_color = new QodeField("colorsimple","footer_link_hover_color","","链接悬停颜色","This is some description");
$row2->addChild("footer_link_hover_color",$footer_link_hover_color);
$footer_image_background = new QodeField("image","footer_image_background","","页脚顶部背景图像","Choose footer top background image");
$show_footer_top_container->addChild("footer_image_background",$footer_image_background);

//Footer top border section
$footer_top_border_group = new QodeGroup('页脚顶部边框', 'Set footer top section borders');
$show_footer_top_container->addChild('footer_top_border_group', $footer_top_border_group);

$row_ft_border = new QodeRow(true);
$footer_top_border_group->addChild('row_ft_border', $row_ft_border);

$footer_top_border_color = new QodeField('colorsimple', 'footer_top_border_color', '', '顶部边框颜色');
$row_ft_border->addChild('footer_top_border_color', $footer_top_border_color);

$footer_top_border_width = new QodeField('textsimple', 'footer_top_border_width', '', '顶部边框宽度 (px)');
$row_ft_border->addChild('footer_top_border_width', $footer_top_border_width);

$footer_top_border_in_grid = new QodeField('yesnosimple', 'footer_top_border_in_grid', 'no', '顶部边框平铺');
$row_ft_border->addChild('footer_top_border_in_grid', $footer_top_border_in_grid);

$footer_top_padding_group = new QodeGroup('页脚顶部内边距', 'Set padding for footer top section');
$show_footer_top_container->addChild('footer_top_padding_group', $footer_top_padding_group);

$footer_top_padding_row = new QodeRow(true);
$footer_top_padding_group->addChild('footer_top_padding_row', $footer_top_padding_row);

$footer_top_padding_top = new QodeField('textsimple', 'footer_top_padding_top', '', '内边距上 (px)');
$footer_top_padding_row->addChild('footer_top_padding_top', $footer_top_padding_top);

$footer_top_padding_right = new QodeField('textsimple', 'footer_top_padding_right', '', '内边距右 (px)');
$footer_top_padding_row->addChild('footer_top_padding_right', $footer_top_padding_right);

$footer_top_padding_bottom = new QodeField('textsimple', 'footer_top_padding_bottom', '', '内边距下 (px)');
$footer_top_padding_row->addChild('footer_top_padding_bottom', $footer_top_padding_bottom);

$footer_top_padding_left = new QodeField('textsimple', 'footer_top_padding_left', '', '内边距左 (px)');
$footer_top_padding_row->addChild('footer_top_padding_left', $footer_top_padding_left);


//Footer angled sections
$footer_angled_section = new QodeField("yesno","footer_angled_section","no","启用倾斜页脚","Enabling this option will show angled shape in footer background", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_footer_angled_section_holder"));
$show_footer_top_container->addChild("footer_angled_section",$footer_angled_section);

$footer_angled_section_holder = new QodeContainer("footer_angled_section_holder","footer_angled_section","no");
$show_footer_top_container->addChild("footer_angled_section_holder",$footer_angled_section_holder);

$footer_angled_section_direction = new QodeField("select","footer_angled_section_direction","","倾斜角度","Choose a direction for footer angled shape", array(
	"from_left_to_right" => "左到右",
	"from_right_to_left" => "右到左"
));
$footer_angled_section_holder->addChild("footer_angled_section_direction",$footer_angled_section_direction);

$footer_angled_section_background_color = new QodeField("color","footer_angled_section_background_color","","背景颜色","Choose a background color for angled shape");
$footer_angled_section_holder->addChild("footer_angled_section_background_color",$footer_angled_section_background_color);




$footer_text = new QodeField("yesno","footer_text","yes","显示页脚底部","Enabling this option will show Footer Bottom area", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_footer_text_container"));
$panel10->addChild("footer_text",$footer_text);
$footer_text_container = new QodeContainer("footer_text_container","footer_text","no");
$panel10->addChild("footer_text_container",$footer_text_container);

$footer_bottom_in_grid = new QodeField("yesno","footer_bottom_in_grid","no","页脚顶部平铺","Enabling this option will place Footer bottom content in grid");
$footer_text_container->addChild("footer_bottom_in_grid",$footer_bottom_in_grid);

$footer_bottom_columns = new QodeField("select","footer_bottom_columns","1","页脚底部列数","Choose number of columns for Footer Bottom area", array( "1" => "1",
	"2" => "2",
	"3" => "3"
));
$footer_text_container->addChild("footer_bottom_columns",$footer_bottom_columns);

$group2 = new QodeGroup("页脚底部颜色","Configure colors for Footer Bottom area");
$footer_text_container->addChild("group2",$group2);
$row1 = new QodeRow();
$group2->addChild("row1",$row1);
$footer_bottom_background_color = new QodeField("colorsimple","footer_bottom_background_color","","背景颜色","This is some description");
$row1->addChild("footer_bottom_background_color",$footer_bottom_background_color);
$footer_bottom_text_color = new QodeField("colorsimple","footer_bottom_text_color","","文字颜色","This is some description");
$row1->addChild("footer_bottom_text_color",$footer_bottom_text_color);
$footer_bottom_link_hover_color = new QodeField("colorsimple","footer_bottom_link_hover_color","","链接悬停颜色","This is some description");
$row1->addChild("footer_bottom_link_hover_color",$footer_bottom_link_hover_color);

$footer_bottom_border_group = new QodeGroup('页脚底部边框', 'Set footer bottom section borders');
$footer_text_container->addChild('footer_bottom_border_group', $footer_bottom_border_group);
$footer_bottom_border_row = new QodeRow(true);
$footer_bottom_border_group->addChild('footer_bottom_border_row', $footer_bottom_border_row);

$footer_bottom_border_color = new QodeField('colorsimple', 'footer_bottom_border_color', '', '边框顶部颜色');
$footer_bottom_border_row->addChild('footer_bottom_border_color', $footer_bottom_border_color);

$footer_bottom_border_width = new QodeField('textsimple', 'footer_bottom_border_width', '', '边框顶部宽度 (px)');
$footer_bottom_border_row->addChild('footer_bottom_border_width', $footer_bottom_border_width);

$footer_bottom_border_in_grid = new QodeField('yesnosimple', 'footer_bottom_border_in_grid', 'no', '平铺边框顶部');
$footer_bottom_border_row->addChild('footer_bottom_border_in_grid', $footer_bottom_border_in_grid);


$footer_bottom_padding_group = new QodeGroup('页脚底部内边距', 'Set footer bottom padding');
$footer_text_container->addChild('footer_bottom_padding_group', $footer_bottom_padding_group);
$footer_bottom_padding_row = new QodeRow(true);
$footer_bottom_padding_group->addChild('footer_bottom_padding_row', $footer_bottom_padding_row);

$footer_bottom_padding_top = new QodeField('textsimple', 'footer_bottom_padding_top', '', '内边距上 (px)');
$footer_bottom_padding_row->addChild('footer_bottom_padding_top', $footer_bottom_padding_top);

$footer_bottom_padding_right = new QodeField('textsimple', 'footer_bottom_padding_right', '', '内边距右 (px)');
$footer_bottom_padding_row->addChild('footer_bottom_padding_right', $footer_bottom_padding_right);

$footer_bottom_padding_bottom = new QodeField('textsimple', 'footer_bottom_padding_bottom', '', '内边距下 (px)');
$footer_bottom_padding_row->addChild('footer_bottom_padding_bottom', $footer_bottom_padding_bottom);

$footer_bottom_padding_left = new QodeField('textsimple', 'footer_bottom_padding_left', '', '内边距左 (px)');
$footer_bottom_padding_row->addChild('footer_bottom_padding_left', $footer_bottom_padding_left);


$footer_bottom_image_background = new QodeField("image","footer_bottom_image_background","","页脚底部背景图像","Choose footer bottom background image");
$footer_text_container->addChild("footer_bottom_image_background",$footer_bottom_image_background);

$footer_custom_menu_spacing = new QodeField("text","footer_custom_menu_spacing","","自定义菜单项间距 (px)","Enter Spacing Between Items in the Custom Menu Widget. This Option Only Applies When the Custom Menu Widget is Set in the Footer Bottom.",array(),array("col_width" => 3));
$footer_text_container->addChild("footer_custom_menu_spacing",$footer_custom_menu_spacing);
