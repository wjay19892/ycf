<?php
$qode_custom_sidebars = array();
foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {
	if(isUserMadeSidebar(ucwords($sidebar['name']))){
		$qode_custom_sidebars[$sidebar['id']] = ucwords( $sidebar['name']);
	}
}

$qodeGeneral = new QodeMetaBox("post", "Qode General");
$qodeFramework->qodeMetaBoxes->addMetaBox("post_general",$qodeGeneral);

	$qode_page_background_color = new QodeMetaField("color","qode_page_background_color","","页面背景颜色","选择页面背景(主体) 颜色");
	$qodeGeneral->addChild("qode_page_background_color",$qode_page_background_color);

	$qode_show_animation = new QodeMetaField("selectblank", "qode_show-animation", "", "页面切换", '选择2个页面加载切换类型.', array(
		"no_animation" => "无动画",
		"updown" => "Up / Down",
		"fade" => "Fade",
		"updown_fade" => "Up/Down (In) / Fade (Out)",
		"leftright" => "Left / Right"
	), array(), "enable_grid_elements", array("yes"));
	$qodeGeneral->addChild("qode_show-animation", $qode_show_animation);

	$page_transitions_notice = new QodeNotice("页面切换",'选择页面切换类型. In order for animation to work properly, you must choose "Post name" in permalinks settings', "AJAX Page transitions are disabled due to VC Grid Elements", "enable_grid_elements","no");
	$qodeGeneral->addChild("page_transitions_notice",$page_transitions_notice);

	$qode_hide_featured_image = new QodeMetaField("yesno","qode_hide-featured-image","no","隐藏特色图像","本文是否隐藏特色图像?");
	$qodeGeneral->addChild("qode_hide-featured-image",$qode_hide_featured_image);

	$qode_revolution_slider = new QodeMetaField("text","qode_revolution-slider","","Layer 幻灯片或 Qode 幻灯片简码e","复制粘贴你的简码在 Qode 幻灯片 -> 幻灯片");
	$qodeGeneral->addChild("qode_revolution-slider",$qode_revolution_slider);

	$qode_post_style_masonry_date_image = new QodeMetaField("select","qode_post_style_masonry_date_image","","博客瀑布流图像的尺寸 - 图像日期","选择博客瀑布流图像尺寸 - 图像日期模板",array(
		"full" => "默认",
		"landscape" => "横版",
		"portrait" => "竖版",
		"square" => "方形"
		));
	$qodeGeneral->addChild("qode_post_style_masonry_date_image",$qode_post_style_masonry_date_image);

	$qode_enable_content_top_margin = new QodeMetaField("selectblank","qode_enable_content_top_margin","","内容一直在头部下面","Enabling this option always will put content below header", array(
		"no" => "否",
		"yes" => "是",
	));
	$qodeGeneral->addChild("qode_enable_content_top_margin",$qode_enable_content_top_margin);
// Left Menu Area

$qodeLeftMenuArea = new QodeMetaBox("post", "Qode 左菜单区域","vertical_area",array("no"));
$qodeFramework->qodeMetaBoxes->addMetaBox("post_left_menu",$qodeLeftMenuArea);

	$qode_page_vertical_area_transparency = new QodeMetaField("selectblank","qode_page_vertical_area_transparency","","启用透明左侧菜单区","启用这个选项让左菜单背景透明  ", array(
       "no" => "否",
       "yes" => "是"
      ));
	$qodeLeftMenuArea->addChild("qode_page_vertical_area_transparency",$qode_page_vertical_area_transparency);

	$qode_page_vertical_area_background = new QodeMetaField("color","qode_page_vertical_area_background","","左菜单区域背景颜色","为左菜单背景选择一个颜色");
	$qodeLeftMenuArea->addChild("qode_page_vertical_area_background",$qode_page_vertical_area_background);

	$qode_page_vertical_area_background_image = new QodeMetaField("image","qode_page_vertical_area_background_image","","左菜单区域背景图像","为左菜单背景选择一个图像");
	$qodeLeftMenuArea->addChild("qode_page_vertical_area_background_image",$qode_page_vertical_area_background_image);

// Header

$qodeHeader = new QodeMetaBox("post", "Qode 页眉","vertical_area",array("yes"));
$qodeFramework->qodeMetaBoxes->addMetaBox("post_header",$qodeHeader);

	$qode_header_style = new QodeMetaField("selectblank","qode_header-style","","页眉皮肤","为页眉选择一个皮肤 (logo, main menu, side menu button) 在预订的风格里", array(
       "light" => "浅色",
	   "dark" => "深色"
      ));
	$qodeHeader->addChild("qode_header-style",$qode_header_style);

    $qode_header_style_on_scroll = new QodeMetaField("selectblank","qode_header-style-on-scroll","","启用页眉滚动样式","启用这个选项, 在滚动的时候页眉会变更样式  (depending on row settings) to make header elements (logo, main menu, side menu button) in that style", array(
        "no" => "否",
        "yes" => "是"
    ));
    $qodeHeader->addChild("qode_header-style-on-scroll",$qode_header_style_on_scroll);

	$qode_header_color_per_page = new QodeMetaField("color","qode_header_color_per_page","","初始页眉背景颜色","为页眉区域选一个颜色");
	$qodeHeader->addChild("qode_header_color_per_page",$qode_header_color_per_page);

	$qode_header_color_transparency_per_page = new QodeMetaField("text","qode_header_color_transparency_per_page","","初始页眉透明度","为页眉背景选择一个透明度 (0 = 完全透明, 1 =不透明)", array(), array("col_width" => 3));
	$qodeHeader->addChild("qode_header_color_transparency_per_page",$qode_header_color_transparency_per_page);

	$qode_page_scroll_amount_for_sticky = new QodeMetaField("text","qode_page_scroll_amount_for_sticky","","固定页眉出现的滚动数 (px)","为固定页眉定义滚动到哪出现固定", array(), array("col_width" => 3),"header_bottom_appearance",array( "regular","fixed","fixed_hiding") );
	$qodeHeader->addChild("qode_page_scroll_amount_for_sticky",$qode_page_scroll_amount_for_sticky);
	
	$qode_page_hide_initial_sticky = new QodeMetaField("selectblank","qode_page_hide_initial_sticky","","起初隐藏固定页眉","启用这个选项将在起初隐藏页眉,当用户滚动页眉才显示", array(
		"no" => "否",
		"yes" => "是"
	));
	$qodeHeader->addChild("qode_page_hide_initial_sticky",$qode_page_hide_initial_sticky);
	
// Title

$qodeTitle = new QodeMetaBox("post", "Qode 标题");
$qodeFramework->qodeMetaBoxes->addMetaBox("post_title",$qodeTitle);

	$qode_show_page_title = new QodeMetaField("select","qode_show-page-title","default","不显示标题区域","启用这个选项将关闭标题区域", array(
			"" => "默认",
			"no" => "否",
			"yes" => "是"),
		array("dependence" => true,
			"hide" => array(
				"yes"=>"#qodef_qode_page_title_area_container, #qodef-meta-box-post_title_animations"),
			"show" => array(
				""=>"#qodef_qode_page_title_area_container, #qodef-meta-box-post_title_animations",
				"no"=>"#qodef_qode_page_title_area_container, #qodef-meta-box-post_title_animations") ));
	$qodeTitle->addChild("qode_show-page-title",$qode_show_page_title);

	$qode_page_title_area_container = new QodeContainer("qode_page_title_area_container","qode_show-page-title","yes");
	$qodeTitle->addChild("qode_page_title_area_container",$qode_page_title_area_container);

	$qode_animate_page_title = new QodeMetaField("selectblank","qode_animate-page-title","no","动画","为标题区域选动画",array(
		"no" => "无动画",
		"text_right_left" => "文字右到左",
		"area_top_bottom" => "标题区域上到下"
	));
	$qode_page_title_area_container->addChild("qode_animate_page_title",$qode_animate_page_title);

	$qode_show_page_title_text = new QodeMetaField("select","qode_show-page-title-text","","不显示标题文字","启用此选项隐藏标题文字", array(
			"" => "默认",
			"no" => "否",
			"yes" => "是"),
		array("dependence" => true,
			"hide" => array(
				"yes"=>"#qodef_qode_title_text_container"),
			"show" => array(
				""=>"#qodef_qode_title_text_container",
				"no"=>"#qodef_qode_title_text_container") ));
	$qode_page_title_area_container->addChild("qode_show-page-title-text",$qode_show_page_title_text);

	$qode_title_text_container = new QodeContainer("qode_title_text_container","qode_show-page-title-text","yes");
	$qode_page_title_area_container->addChild("qode_title_text_container",$qode_title_text_container);

	$qode_page_title_position = new QodeMetaField("selectblank","qode_page_title_position","","标题文字对齐方式","指定标题文字对齐方式",array(
		"left" => "左",
		"center" => "中",
		"right" => "右"
	));
	$qode_title_text_container->addChild("qode_page_title_position",$qode_page_title_position);

	$group1 = new QodeGroup("标题文字样式","为标题区域文字定义样式");
	$qode_title_text_container->addChild("group1",$group1);

	$row1 = new QodeRow();
	$group1->addChild("row1",$row1);

	$qode_page_title_color = new QodeMetaField("colorsimple","qode_page-title-color","","文字颜色","ThisIsDescription");
	$row1->addChild("qode_page-title-color",$qode_page_title_color);

	$qode_page_title_font_size = new QodeMetaField("selectblanksimple","qode_page_title_font_size","","文字尺寸","ThisIsDescription",array(
		"small" => "小",
		"medium" => "中",
		"large" => "大"
	));
	$row1->addChild("qode_page_title_font_size",$qode_page_title_font_size);

	$qode_title_text_shadow = new QodeMetaField("selectblanksimple","qode_title_text_shadow","","文字阴影","ThisIsDescription",array(
		"no" => "否",
		"yes" => "是"
	));
	$row1->addChild("qode_title_text_shadow",$qode_title_text_shadow);

	$qode_page_title_background_color = new QodeMetaField("color","qode_page-title-background-color","","背景颜色","为标题区域选背景颜色");
	$qode_page_title_area_container->addChild("qode_page-title-background-color",$qode_page_title_background_color);

	$qode_show_page_title_image = new QodeMetaField("yesempty","qode_show-page-title-image","","不再显示背景图像","启用此选项隐藏标题区域背景图像", array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef_qode_background_image_container", "dependence_show_on_yes" => ""));
	$qode_page_title_area_container->addChild("qode_show-page-title-image",$qode_show_page_title_image);

	$qode_background_image_container = new QodeContainer("qode_background_image_container","qode_show-page-title-image","yes");
	$qode_page_title_area_container->addChild("qode_background_image_container",$qode_background_image_container);

	$qode_title_image = new QodeMetaField("image","qode_title-image","","背景图像","为标题区域选择背景图像");
	$qode_background_image_container->addChild("qode_title-image",$qode_title_image);

	$qode_title_overlay_image = new QodeMetaField("image","qode_title-overlay-image","","图案叠加图像","选择用于标题区域叠加的图案");
	$qode_background_image_container->addChild("qode_title-overlay-image",$qode_title_overlay_image);

	$qode_responsive_title_image = new QodeMetaField("selectblank","qode_responsive-title-image","","自适应背景图像","你想标题背景图像自适应?", array(
		"no" => "否",
		"yes" => "是"),
		array("dependence" => true,
			"hide" => array(
				"yes"=>"#qodef_qode_responsive_title_image_container, #qodef_qode_title-height"),
			"show" => array(
				""=>"#qodef_qode_responsive_title_image_container, #qodef_qode_title-height",
				"no"=>"#qodef_qode_responsive_title_image_container, #qodef_qode_title-height") ));
	$qode_background_image_container->addChild("qode_responsive-title-image",$qode_responsive_title_image);

	$qode_responsive_title_image_container = new QodeContainer("qode_responsive_title_image_container","qode_responsive-title-image","yes");
	$qode_background_image_container->addChild("qode_responsive_title_image_container",$qode_responsive_title_image_container);

	$qode_fixed_title_image = new QodeMetaField("selectblank","qode_fixed-title-image","","视差背景图像","你希望背景图像有视差效果?", array(
		"no" => "否",
		"yes" => "是",
		"yes_zoom" => "是, 带放大"
	));
	$qode_responsive_title_image_container->addChild("qode_fixed-title-image",$qode_fixed_title_image);

	$qode_title_height = new QodeMetaField("text","qode_title-height","","标题高度 (px)","为标题区域设置高度像素", array(), array("col_width" => 3));
	$qode_page_title_area_container->addChild("qode_title-height",$qode_title_height);

	$qode_separator_bellow_title = new QodeMetaField("select","qode_separator_bellow_title","","标题文本下的分隔符","你希望有个标题文本下的分隔符?",
		array(
			"" => "",
			"no" => "否",
			"yes" => "是"
		),
		array(
			'dependence' => true,
			'hide' => array(
				'no' => '#qodef_animation_page_page_separator_container'
			),
			'show' => array(
				'' => '#qodef_animation_page_page_separator_container',
				'yes' => '#qodef_animation_page_page_separator_container'
			)
		)
	);
	$qode_page_title_area_container->addChild("qode_separator_bellow_title",$qode_separator_bellow_title);

	$qode_title_separator_color = new QodeMetaField("color","qode_title_separator_color","","分隔符颜色","为分隔符选择颜色");
	$qode_page_title_area_container->addChild("qode_title_separator_color",$qode_title_separator_color);

	$qode_enable_page_title_angled = new QodeMetaField("selectblank","qode_enable_page_title_angled","","使倾斜的标题","启用这个选项，标题会倾斜", array(
			"no" => "否",
			"yes" => "是"),
		array("dependence" => true,
			"hide" => array(
				"no"=>"#qodef_qode_title_angled_container",
				""=>"#qodef_qode_title_angled_container"),
			"show" => array(
				"yes"=>"#qodef_qode_title_angled_container") ));
	$qode_page_title_area_container->addChild("qode_enable_page_title_angled",$qode_enable_page_title_angled);

	$qode_title_angled_container = new QodeContainer("qode_title_angled_container","qode_enable_page_title_angled","");
	$qode_page_title_area_container->addChild("qode_title_angled_container",$qode_title_angled_container);

$qode_title_angled_section_direction = new QodeMetaField("selectblank","qode_title_angled_section_direction","","倾斜方向","选择标题区域倾斜方向", array(
		"from_left_to_right" => "从左到右",
		"from_right_to_left" => "从右到左"
	));
	$qode_title_angled_container->addChild("qode_title_angled_section_direction",$qode_title_angled_section_direction);

	$qode_title_angled_section_color = new QodeMetaField("color","qode_title_angled_section_color","","背景颜色","为倾斜标题选项背景颜色");
	$qode_title_angled_container->addChild("qode_title_angled_section_color",$qode_title_angled_section_color);

	$qode_enable_breadcrumbs = new QodeMetaField("selectblank","qode_enable_breadcrumbs","","启用面包屑","在标题区域显示面包屑?",
		array(
			"no" => "否",
			"yes" => "是"
		),
		array(
			'dependence' => true,
			'hide' => array(
				'no' => '#qodef_animation_page_page_breadcrumbs_container'
			),
			'show' => array(
				'yes' => '#qodef_animation_page_page_breadcrumbs_container',
				'' => '#qodef_animation_page_page_breadcrumbs_container'
			)
		)
	);
	$qode_page_title_area_container->addChild("qode_enable_breadcrumbs",$qode_enable_breadcrumbs);

	$qode_page_breadcrumbs_color = new QodeMetaField("color","qode_page_breadcrumbs_color","","面包屑颜色","为面包屑文字选颜色");
	$qode_page_title_area_container->addChild("qode_page_breadcrumbs_color",$qode_page_breadcrumbs_color);

	$qode_page_subtitle = new QodeMetaField("text","qode_page_subtitle","","副标题文字","输入副标题文字");
	$qode_page_title_area_container->addChild("qode_page_subtitle",$qode_page_subtitle);

	$qode_page_subtitle_color = new QodeMetaField("color","qode_page_subtitle_color","","副标题文字颜色","为副标题文字选一个颜色");
	$qode_page_title_area_container->addChild("qode_page_subtitle_color",$qode_page_subtitle_color);

	$group_margin_after_title = new QodeGroup("定义标题后的间距. 如果标题被禁用，该选项也将生效，并将移动内容为该设置值.");
	$qodeTitle->addChild("group_margin_after_title",$group_margin_after_title);

	$row1 = new QodeRow();
	$group_margin_after_title->addChild("row1",$row1);

	$qode_margin_after_title = new QodeMetaField("textsimple","qode_margin_after_title","","标题后外边距 (px)","为标题区域设置底部边距");
	$row1->addChild("qode_margin_after_title",$qode_margin_after_title);

	$qode_margin_after_title_mobile = new QodeMetaField("selectblanksimple","qode_margin_after_title_mobile","","为移动端页眉设置底部边距","", array(
		"no" => "否",
		"yes" => "是"
	));
	$row1->addChild("qode_margin_after_title_mobile",$qode_margin_after_title_mobile);

//Page Title Animations
$qodeTitleAnimations = new QodeMetaBox('post', 'Qode 滚动标题动画', 'qode_show-page-title', array('yes'));
$qodeFramework->qodeMetaBoxes->addMetaBox('post_title_animations', $qodeTitleAnimations);

//Whole title content animation
$page_page_title_whole_content_animations = new QodeMetaField('selectblank', 'page_page_title_whole_content_animations', '', '启用整个标题内容动画', 'This option will enable whole title content animation', array(
	'no' => '否',
	'yes' => '是'
),
	array(
		'dependence' => true,
		'hide' => array(
			'' => '#qodef_page_page_title_whole_content_animations_container',
			'no' => '#qodef_page_page_title_whole_content_animations_container'
		),
		'show' => array(
			'yes' => '#qodef_page_page_title_whole_content_animations_container'
		)
	));
$qodeTitleAnimations->addChild('page_page_title_whole_content_animations', $page_page_title_whole_content_animations);

$page_page_title_whole_content_animations_container = new QodeContainer('page_page_title_whole_content_animations_container', 'page_page_title_whole_content_animations', '', array('', 'no'));
$qodeTitleAnimations->addChild('page_page_title_whole_content_animations_container', $page_page_title_whole_content_animations_container);

$page_page_title_whole_content_animations_data_start = new QodeGroup('滚动动画开始点', '这些都是在滚动动画的第一个关键帧的属性');
$page_page_title_whole_content_animations_container->addChild('page_page_title_whole_content_animations_data_start', $page_page_title_whole_content_animations_data_start);

$row1 = new QodeRow();
$page_page_title_whole_content_animations_data_start->addChild('row1', $row1);

$page_page_title_whole_content_data_start = new QodeMetaField('textsimple', 'page_page_title_whole_content_data_start', '', '滚动条顶部的距离 (px)');
$row1->addChild('page_page_title_whole_content_data_start', $page_page_title_whole_content_data_start);

$page_page_title_whole_content_start_custom_style = new QodeMetaField('textareasimple', 'page_page_title_whole_content_start_custom_style', '', '输入 CSS用分号分隔的声明');
$row1->addChild('page_page_title_whole_content_start_custom_style', $page_page_title_whole_content_start_custom_style);

$page_page_title_whole_content_animations_data_end = new QodeGroup('滚动动画结束点', '滚动动画最后一个关键帧属性');
$page_page_title_whole_content_animations_container->addChild('page_page_title_whole_content_animations_data_end', $page_page_title_whole_content_animations_data_end);

$row2 = new QodeRow();
$page_page_title_whole_content_animations_data_end->addChild('row2', $row2);

$page_page_title_whole_content_data_end = new QodeMetaField('textsimple', 'page_page_title_whole_content_data_end', '', '滚动条顶部的距离 (px)');
$row2->addChild('page_page_title_whole_content_data_end', $page_page_title_whole_content_data_end);

$page_page_title_whole_content_end_custom_style = new QodeMetaField('textareasimple', 'page_page_title_whole_content_end_custom_style', '', '输入 CSS用分号分隔的声明');
$row2->addChild('page_page_title_whole_content_end_custom_style', $page_page_title_whole_content_end_custom_style);


//Title Animations
$animation_page_page_title_container = new QodeContainerNoStyle('animation_page_page_title_container', 'qode_show-page-title-text', 'yes');
$qodeTitleAnimations->addChild('animation_page_page_title_container', $animation_page_page_title_container);

$page_page_title_animations = new QodeMetaField('selectblank', 'page_page_title_animations', '', '启用页面标题动画', '启用页面标题滚动动画',
	array(
			'no' => '否',
			'yes' => '是'
		),
	array(
		'dependence' => true,
		'hide' => array(
			'' => '#qodef_page_page_title_animations_container',
			'no' => '#qodef_page_page_title_animations_container'
		),
		'show' => array(
			'yes' => '#qodef_page_page_title_animations_container'
		) ));

$animation_page_page_title_container->addChild('page_page_title_animations', $page_page_title_animations);

$page_page_title_animations_container = new QodeContainer('page_page_title_animations_container', 'page_page_title_animations', '', array('', 'no'));
$animation_page_page_title_container->addChild('page_page_title_animations_container', $page_page_title_animations_container);

$page_page_title_animations_data_start = new QodeGroup('滚动动画开始点', '滚动动画第一个关键帧属性');
$page_page_title_animations_container->addChild('page_page_title_animations_data_start', $page_page_title_animations_data_start);

$row1 = new QodeRow();
$page_page_title_animations_data_start->addChild('row1', $row1);

$page_page_title_data_start = new QodeMetaField('textsimple', 'page_page_title_data_start', '', '滚动条顶部距离 (px)');
$row1->addChild('page_page_title_data_start', $page_page_title_data_start);

$page_page_title_start_custom_style = new QodeMetaField('textareasimple', 'page_page_title_start_custom_style', '', '输入CSS用分号分隔的声明');
$row1->addChild('page_page_title_start_custom_style', $page_page_title_start_custom_style);

$page_page_title_animations_data_end = new QodeGroup('滚动动画结束点', '滚动动画最后一个关键帧属性');
$page_page_title_animations_container->addChild('page_page_title_animations_data_end', $page_page_title_animations_data_end);

$row2 = new QodeRow();
$page_page_title_animations_data_end->addChild('row2', $row2);

$page_page_title_data_end = new QodeMetaField('textsimple', 'page_page_title_data_end', '', '滚动条顶部距离 (px)');
$row2->addChild('page_page_title_data_end', $page_page_title_data_end);

$page_page_title_end_custom_style = new QodeMetaField('textareasimple', 'page_page_title_end_custom_style', '', '输入CSS用分号分隔的声明');
$row2->addChild('page_page_title_end_custom_style', $page_page_title_end_custom_style);

//Title Separator Animations
$animation_page_page_separator_container = new QodeContainerNoStyle('animation_page_page_separator_container', 'qode_separator_bellow_title', 'no');
$qodeTitleAnimations->addChild('animation_page_page_separator_container', $animation_page_page_separator_container);

$page_page_title_separator_animations = new QodeMetaField('selectblank', 'page_page_title_separator_animations', '', '启用页面分隔符标题动画', '启用页面标题分隔符滚动动画',
	array(
			'no' => '否',
			'yes' => '是'
		),
	array(
		'dependence' => true,
		'hide' => array(
			'' => '#qodef_page_page_title_separator_animations_container',
			'no' => '#qodef_page_page_title_separator_animations_container'
		),
		'show' => array(
			'yes' => '#qodef_page_page_title_separator_animations_container'
		)
	));
$animation_page_page_separator_container->addChild('page_page_title_separator_animations', $page_page_title_separator_animations);

$page_page_title_separator_animations_container = new QodeContainer('page_page_title_separator_animations_container', 'page_page_title_separator_animations', '', array('no', ''));
$animation_page_page_separator_container->addChild('page_page_title_separator_animations_container', $page_page_title_separator_animations_container);

$page_page_title_separator_animations_data_start = new QodeGroup('滚动动画开始点', '滚动动画第一个关键帧属性');
$page_page_title_separator_animations_container->addChild('page_page_title_separator_animations_data_start', $page_page_title_separator_animations_data_start);

$row1 = new QodeRow();
$page_page_title_separator_animations_data_start->addChild('row1', $row1);

$page_page_title_separator_data_start = new QodeMetaField('textsimple', 'page_page_title_separator_data_start', '', '滚动条顶部距离 (px)');
$row1->addChild('page_page_title_separator_data_start', $page_page_title_separator_data_start);

$page_page_title_separator_start_custom_style = new QodeMetaField('textareasimple', 'page_page_title_separator_start_custom_style', '', '输入CSS用分号分隔的声明');
$row1->addChild('page_page_title_separator_start_custom_style', $page_page_title_separator_start_custom_style);

$page_page_title_separator_animations_data_end = new QodeGroup('滚动动画结束点', '滚动动画最后一个关键帧属性');
$page_page_title_separator_animations_container->addChild('page_page_title_separator_animations_data_end', $page_page_title_separator_animations_data_end);

$row2 = new QodeRow();
$page_page_title_separator_animations_data_end->addChild('row2', $row2);

$page_page_title_separator_data_end = new QodeMetaField('textsimple', 'page_page_title_separator_data_end', '', '滚动条顶部距离 (px)');
$row2->addChild('page_page_title_separator_data_end', $page_page_title_separator_data_end);

$page_page_title_separator_end_custom_style = new QodeMetaField('textareasimple', 'page_page_title_separator_end_custom_style', '', '输入CSS用分号分隔的声明');
$row2->addChild('page_page_title_separator_end_custom_style', $page_page_title_separator_end_custom_style);

//Subtitle Animations
$page_page_subtitle_animations = new QodeMetaField('selectblank', 'page_page_subtitle_animations', '', '启用页面副标题动画', 'This option will enable Page Subtitle Scroll Animations',
	array(
			'no' => '否',
			'yes' => '是'
		),
	array(
		'dependence' => true,
		'hide' => array(
			'' => '#qodef_page_page_subtitle_animations_container',
			'no' => '#qodef_page_page_subtitle_animations_container'
		),
		'show' => array(
			'yes' => '#qodef_page_page_subtitle_animations_container'
		)
	));
$qodeTitleAnimations->addChild('page_page_subtitle_animations', $page_page_subtitle_animations);

$page_page_subtitle_animations_container = new QodeContainer('page_page_subtitle_animations_container', 'page_page_subtitle_animations', '', array('', 'no'));
$qodeTitleAnimations->addChild('page_page_subtitle_animations_container', $page_page_subtitle_animations_container);

$page_page_subtitle_animations_data_start = new QodeGroup('滚动动画开始点', '滚动动画第一个关键帧属性');
$page_page_subtitle_animations_container->addChild('page_page_subtitle_animations_data_start', $page_page_subtitle_animations_data_start);

$row1 = new QodeRow();
$page_page_subtitle_animations_data_start->addChild('row1', $row1);

$page_page_subtitle_data_start = new QodeMetaField('textsimple', 'page_page_subtitle_data_start', '', '滚动条顶部距离 (px)');
$row1->addChild('page_page_subtitle_data_start', $page_page_subtitle_data_start);

$page_page_subtitle_start_custom_style = new QodeMetaField('textareasimple', 'page_page_subtitle_start_custom_style', '', '输入CSS用分号分隔的声明');
$row1->addChild('page_page_subtitle_start_custom_style', $page_page_subtitle_start_custom_style);

$page_page_subtitle_animations_data_end = new QodeGroup('滚动动画结束点', '滚动动画最后一个关键帧属性');
$page_page_subtitle_animations_container->addChild('page_page_subtitle_animations_data_end', $page_page_subtitle_animations_data_end);

$row2 = new QodeRow();
$page_page_subtitle_animations_data_end->addChild('row2', $row2);

$page_page_subtitle_data_end = new QodeMetaField('textsimple', 'page_page_subtitle_data_end', '', '滚动条顶部距离 (px)');
$row2->addChild('page_page_subtitle_data_end', $page_page_subtitle_data_end);

$page_page_subtitle_end_custom_style = new QodeMetaField('textareasimple', 'page_page_subtitle_end_custom_style', '', '输入CSS用分号分隔的声明');
$row2->addChild('page_page_subtitle_end_custom_style', $page_page_subtitle_end_custom_style);

//Breadcrumb animations
$animation_page_page_breadcrumbs_container = new QodeContainerNoStyle('animation_page_page_breadcrumbs_container', 'qode_enable_breadcrumbs', 'no');
$qodeTitleAnimations->addChild('animation_page_page_breadcrumbs_container', $animation_page_page_breadcrumbs_container);

$page_page_title_breadcrumbs_animations = new QodeMetaField('selectblank', 'page_page_title_breadcrumbs_animations', '', '启用页面面包屑动画', 'This option will enable Page Title Breadcrumbs Scroll Animations',
	array(
		'no' => '否',
		'yes' => '是'
	),
	array(
		'dependence' => true,
		'hide' => array(
			'' => '#qodef_page_page_title_breadcrumbs_animations_container',
			'no' => '#qodef_page_page_title_breadcrumbs_animations_container'
		),
		'show' => array(
			'yes' => '#qodef_page_page_title_breadcrumbs_animations_container'
		)
	));
$animation_page_page_breadcrumbs_container->addChild('page_page_title_breadcrumbs_animations', $page_page_title_breadcrumbs_animations);

$page_page_title_breadcrumbs_animations_container = new QodeContainer('page_page_title_breadcrumbs_animations_container', 'page_page_title_breadcrumbs_animations', '', array('', 'no'));
$animation_page_page_breadcrumbs_container->addChild('page_page_title_breadcrumbs_animations_container', $page_page_title_breadcrumbs_animations_container);

$page_page_title_breadcrumbs_animations_data_start = new QodeGroup('滚动动画开始点', '滚动动画第一个关键帧属性');
$page_page_title_breadcrumbs_animations_container->addChild('page_page_title_breadcrumbs_animations_data_start', $page_page_title_breadcrumbs_animations_data_start);

$row1 = new QodeRow();
$page_page_title_breadcrumbs_animations_data_start->addChild('row1', $row1);

$page_page_title_breadcrumbs_data_start = new QodeMetaField('textsimple', 'page_page_title_breadcrumbs_data_start', '', '滚动条顶部距离 (px)');
$row1->addChild('page_page_title_breadcrumbs_data_start', $page_page_title_breadcrumbs_data_start);

$page_page_title_breadcrumbs_start_custom_style = new QodeMetaField('textareasimple', 'page_page_title_breadcrumbs_start_custom_style', '', '输入CSS用分号分隔的声明');
$row1->addChild('page_page_title_breadcrumbs_start_custom_style', $page_page_title_breadcrumbs_start_custom_style);

$page_page_title_breadcrumbs_animations_data_end = new QodeGroup('滚动动画结束点', '滚动动画最后一个关键帧属性');
$page_page_title_breadcrumbs_animations_container->addChild('page_page_title_breadcrumbs_animations_data_end', $page_page_title_breadcrumbs_animations_data_end);

$row2 = new QodeRow();
$page_page_title_breadcrumbs_animations_data_end->addChild('row2', $row2);

$page_page_title_breadcrumbs_data_end = new QodeMetaField('textsimple', 'page_page_title_breadcrumbs_data_end', '', '滚动条顶部距离 (px)');
$row2->addChild('page_page_title_breadcrumbs_data_end', $page_page_title_breadcrumbs_data_end);

$page_page_title_breadcrumbs_end_custom_style = new QodeMetaField('textareasimple', 'page_page_title_breadcrumbs_end_custom_style', '', '输入CSS用分号分隔的声明');
$row2->addChild('page_page_title_breadcrumbs_end_custom_style', $page_page_title_breadcrumbs_end_custom_style);



// Content Bottom

$qodeContentBottom = new QodeMetaBox("post", "Qode 内容底部");
$qodeFramework->qodeMetaBoxes->addMetaBox("post_content_bottom_page",$qodeContentBottom);

	$qode_enable_content_bottom_area = new QodeMetaField("selectblank","qode_enable_content_bottom_area","","显示内容底部区域","Do you want to show content bottom area?", array(
       "no" => "否",
	   "yes" => "是"
      ),
      array("dependence" => true,
      	"hide" => array(
      		"no"=>"#qodef_qode_enable_content_bottom_area_container",
			""=>"#qodef_qode_enable_content_bottom_area_container"),
      	"show" => array(
      		"yes"=>"#qodef_qode_enable_content_bottom_area_container") ));
	$qodeContentBottom->addChild("qode_enable_content_bottom_area",$qode_enable_content_bottom_area);
	
	$qode_enable_content_bottom_area_container = new QodeContainer("qode_enable_content_bottom_area_container","qode_enable_content_bottom_area","no",array("", "no"));
	$qodeContentBottom->addChild("qode_enable_content_bottom_area_container",$qode_enable_content_bottom_area_container);

		$qode_content_bottom_background_color = new QodeMetaField("color","qode_content_bottom_background_color","","背景颜色","为内容底部区域选背景颜色");
		$qode_enable_content_bottom_area_container->addChild("qode_content_bottom_background_color",$qode_content_bottom_background_color);
	
		$qode_choose_content_bottom_sidebar = new QodeMetaField("selectblank","qode_choose_content_bottom_sidebar","","自定义小工具","选择要显示的小工具",$qode_custom_sidebars);
		$qode_enable_content_bottom_area_container->addChild("qode_choose_content_bottom_sidebar",$qode_choose_content_bottom_sidebar);
	
		$qode_content_bottom_sidebar_in_grid = new QodeMetaField("selectblank","qode_content_bottom_sidebar_in_grid","","平铺显示","底部内容平铺显示",array(
	       "no" => "否",
		   "yes" => "是"
	      ));
		$qode_enable_content_bottom_area_container->addChild("qode_content_bottom_sidebar_in_grid",$qode_content_bottom_sidebar_in_grid);


// Side Bar Area

$qodeSideBar = new QodeMetaBox("post", "Qode 侧边栏");
$qodeFramework->qodeMetaBoxes->addMetaBox("post_side_bar",$qodeSideBar);

	$qode_show_sidebar = new QodeMetaField("select","qode_show-sidebar","default","Layout","Choose the sidebar layout",array( "default" => "Default",
       "1" => "侧边栏 1/3 右",
	   "2" => "侧边栏 1/4 右",
	   "3" => "侧边栏 1/3 左",
	   "4" => "侧边栏 1/4 左",
      ));
	$qodeSideBar->addChild("qode_show-sidebar",$qode_show_sidebar);

	$qode_choose_sidebar = new QodeMetaField("selectblank","qode_choose-sidebar","default","选择侧边栏小工具区域","选择要显示的侧边栏小工具", $qode_custom_sidebars);
	$qodeSideBar->addChild("qode_choose-sidebar",$qode_choose_sidebar);

// SEO

$qodeSeo = new QodeMetaBox("post", "Qode 搜索引擎优化");
$qodeFramework->qodeMetaBoxes->addMetaBox("post_seo",$qodeSeo);

$seo_title = new QodeMetaField("text","qode_seo_title","","SEO 标题","输入本页自定义标题");
$qodeSeo->addChild("qode_seo_title",$seo_title);

$seo_keywords = new QodeMetaField("text","qode_seo_keywords","","Meta 关键词","逗号分隔多个关键词");
$qodeSeo->addChild("qode_seo_keywords",$seo_keywords);

$seo_description = new QodeMetaField("textarea","qode_seo_description","","Meta 描述","为这个页面输入描述文字");
$qodeSeo->addChild("qode_seo_description",$seo_description);