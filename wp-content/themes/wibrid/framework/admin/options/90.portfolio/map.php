<?php

$portfolioPage = new QodeAdminPage("_portfolio", "作品展示", "fa fa-camera-retro");
$qodeFramework->qodeOptions->addAdminPage("portfolioPage",$portfolioPage);

//Portfolio Single Project

$panel1 = new QodePanel("作品内页项目", "porfolio_single_project");
$portfolioPage->addChild("panel1",$panel1);

	$portfolio_style = new QodeField("select","portfolio_style","1","做类型",'Choose a default type for Single Project pages', array( "1" => "Portfolio small images",
       "2" => "作品小滑块",
       "5" => "作品大图",
       "3" => "作品大滑块",
       "4" => "作品自定义 - 平铺",
       "7" => "作品自定义 - 全宽",
       "6" => "作品相册"
      ));
	$panel1->addChild("portfolio_style",$portfolio_style);

	$portfolio_qode_like = new QodeField("onoff","portfolio_qode_like","on","喜欢",'Enabling this option will turn on "Likes"');
	$panel1->addChild("portfolio_qode_like",$portfolio_qode_like);

	$lightbox_single_project = new QodeField("yesno","lightbox_single_project","yes","图片灯箱","Enabling this option will turn on lightbox functionality for projects with images.");
	$panel1->addChild("lightbox_single_project",$lightbox_single_project);

	$lightbox_video_single_project = new QodeField("yesno","lightbox_video_single_project","no","视频灯箱","Enabling this option will turn on lightbox functionality for YouTube/Vimeo projects.");
	$panel1->addChild("lightbox_video_single_project",$lightbox_video_single_project);

	$portfolio_columns_number = new QodeField("select","portfolio_columns_number","2","列数",'Enter the number of columns for Portfolio Gallery type', array( "2" => "2 列",
       "3" => "3 列",
       "4" => "4 列"
      ));
	$panel1->addChild("portfolio_columns_number",$portfolio_columns_number);

	$portfolio_single_sidebar = new QodeField("select","portfolio_single_sidebar","default","侧边栏布局","Choose a sidebar layout for Single Project pages", array( "default" => "No Sidebar",
       "1" => "侧边栏 1/3 右",
       "2" => "侧边栏 1/4 右",
       "3" => "侧边栏 1/3 左",
       "4" => "侧边栏 1/4 左"
      ));
	$panel1->addChild("portfolio_single_sidebar",$portfolio_single_sidebar);
	
	$custom_sidebars = array();
	foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {
		if(isUserMadeSidebar(ucwords($sidebar['name']))){
			$custom_sidebars[$sidebar['id']] = ucwords( $sidebar['name']);
		}
	}
	$portfolio_single_sidebar_custom_display = new QodeField("selectblank","portfolio_single_sidebar_custom_display","","侧边栏显示","Choose a sidebar to display on Single Project pages", $custom_sidebars);
	$panel1->addChild("portfolio_single_sidebar_custom_display",$portfolio_single_sidebar_custom_display);

	$portfolio_single_slug = new QodeField("text","portfolio_single_slug","","作品内页别名",'Enter if you wish to use a different Single Project slug (Note: After entering slug, navigate to Settings -> Permalinks and click "Save" in order for changes to take effect) ', array(), array("col_width" => 3));
	$panel1->addChild("portfolio_single_slug",$portfolio_single_slug);

	$portfolio_text_follow = new QodeField("portfoliofollow","portfolio_text_follow","portfolio_single_follow","置顶旁边文字 ","Enabling this option will make side text sticky on Single Project pages");
	$panel1->addChild("portfolio_text_follow",$portfolio_text_follow);

	$portfolio_comments = new QodeField("yesno","enable_portfolio_comments", "no", "启用评论","Enabling this option will display comments on portfolio single page");
	$panel1->addChild("enable_portfolio_comments",$portfolio_comments);

/* Portfolio List */

$panel2 = new QodePanel("作品列表", "porfolio_list");
$portfolioPage->addChild("panel2",$panel2);

	$group1 = new QodeGroup("覆盖样式","Define styles overlay");
	$panel2->addChild("group1",$group1);
	$row1 = new QodeRow();
	$group1->addChild("row1",$row1);
	$portfolio_list_overlay_color = new QodeField("colorsimple","portfolio_list_overlay_color","","覆盖颜色","Choose overlay color");
	$row1->addChild("portfolio_list_overlay_color",$portfolio_list_overlay_color);
	$portfolio_list_overlay_opacity = new QodeField("textsimple","portfolio_list_overlay_opacity","","覆盖不透明度 (值 0-1)","This is some description");
	$row1->addChild("portfolio_list_overlay_opacity",$portfolio_list_overlay_opacity);

	$group2 = new QodeGroup("标题样式 (标准和瀑布流带边距)","Define styles for title");
	$panel2->addChild("group2",$group2);
	$row1 = new QodeRow();
	$group2->addChild("row1",$row1);
	$portfolio_list_standard_title_color = new QodeField("colorsimple","portfolio_list_standard_title_color","","文字颜色","This is some description");
	$row1->addChild("portfolio_list_standard_title_color",$portfolio_list_standard_title_color);
	$portfolio_list_standard_title_hover_color = new QodeField("colorsimple","portfolio_list_standard_title_hover_color","","文字悬停颜色","This is some description");
	$row1->addChild("portfolio_list_standard_title_hover_color",$portfolio_list_standard_title_hover_color);
	$portfolio_list_standard_title_fontsize = new QodeField("textsimple","portfolio_list_standard_title_fontsize","","字体大小 (px)","This is some description");
	$row1->addChild("portfolio_list_standard_title_fontsize",$portfolio_list_standard_title_fontsize);
	$portfolio_list_standard_title_lineheight = new QodeField("textsimple","portfolio_list_standard_title_lineheight","","行高 (px)","This is some description");
	$row1->addChild("portfolio_list_standard_title_lineheight",$portfolio_list_standard_title_lineheight);
	$row2 = new QodeRow(true);
	$group2->addChild("row2",$row2);
	$portfolio_list_standard_title_texttransform = new QodeField("selectblanksimple","portfolio_list_standard_title_texttransform","","文本转换","This is some description",$options_texttransform);
	$row2->addChild("portfolio_list_standard_title_texttransform",$portfolio_list_standard_title_texttransform);
	$portfolio_list_standard_title_google_fonts = new QodeField("fontsimple","portfolio_list_standard_title_google_fonts","-1","字体系列","This is some description");
	$row2->addChild("portfolio_list_standard_title_google_fonts",$portfolio_list_standard_title_google_fonts);
	$portfolio_list_standard_title_fontstyle = new QodeField("selectblanksimple","portfolio_list_standard_title_fontstyle","","字体样式","This is some description",$options_fontstyle);
	$row2->addChild("portfolio_list_standard_title_fontstyle",$portfolio_list_standard_title_fontstyle);
	$portfolio_list_standard_title_fontweight = new QodeField("selectblanksimple","portfolio_list_standard_title_fontweight","","字体重量","This is some description",$options_fontweight);
	$row2->addChild("portfolio_list_standard_title_fontweight",$portfolio_list_standard_title_fontweight);
	$row3 = new QodeRow(true);
	$group2->addChild("row3",$row3);
	$portfolio_list_standard_title_letterspacing = new QodeField("textsimple","portfolio_list_standard_title_letterspacing","","字母间距(px)","This is some description");
	$row3->addChild("portfolio_list_standard_title_letterspacing",$portfolio_list_standard_title_letterspacing);

	$group3 = new QodeGroup("分类样式 (标准和瀑布流带边距)","Define styles for category");
	$panel2->addChild("group3",$group3);
	$row1 = new QodeRow();
	$group3->addChild("row1",$row1);
	$portfolio_list_standard_category_color = new QodeField("colorsimple","portfolio_list_standard_category_color","","文字颜色","This is some description");
	$row1->addChild("portfolio_list_standard_category_color",$portfolio_list_standard_category_color);
	$portfolio_list_standard_category_fontsize = new QodeField("textsimple","portfolio_list_standard_category_fontsize","","文字大小 (px)","This is some description");
	$row1->addChild("portfolio_list_standard_category_fontsize",$portfolio_list_standard_category_fontsize);
	$portfolio_list_standard_category_lineheight = new QodeField("textsimple","portfolio_list_standard_category_lineheight","","行高 (px)","This is some description");
	$row1->addChild("portfolio_list_standard_category_lineheight",$portfolio_list_standard_category_lineheight);
	$portfolio_list_standard_category_texttransform = new QodeField("selectblanksimple","portfolio_list_standard_category_texttransform","","文本转换","This is some description",$options_texttransform);
	$row1->addChild("portfolio_list_standard_category_texttransform",$portfolio_list_standard_category_texttransform);
	$row2 = new QodeRow(true);
	$group3->addChild("row2",$row2);
	$portfolio_list_standard_category_google_fonts = new QodeField("fontsimple","portfolio_list_standard_category_google_fonts","-1","字体系列","This is some description");
	$row2->addChild("portfolio_list_standard_category_google_fonts",$portfolio_list_standard_category_google_fonts);
	$portfolio_list_standard_category_fontstyle = new QodeField("selectblanksimple","portfolio_list_standard_category_fontstyle","","字体样式","This is some description",$options_fontstyle);
	$row2->addChild("portfolio_list_standard_category_fontstyle",$portfolio_list_standard_category_fontstyle);
	$portfolio_list_standard_category_fontweight = new QodeField("selectblanksimple","portfolio_list_standard_category_fontweight","","字体重量","This is some description",$options_fontweight);
	$row2->addChild("portfolio_list_standard_category_fontweight",$portfolio_list_standard_category_fontweight);
	$portfolio_list_standard_category_letterspacing = new QodeField("textsimple","portfolio_list_standard_category_letterspacing","","字母间距(px)","This is some description");
	$row2->addChild("portfolio_list_standard_category_letterspacing",$portfolio_list_standard_category_letterspacing);

	$group4 = new QodeGroup("标题样式 (悬停文本, 瀑布流无间距和瀑布流带间距 (仅图像))","Define styles for title");
	$panel2->addChild("group4",$group4);
	$row1 = new QodeRow();
	$group4->addChild("row1",$row1);
	$portfolio_list_gallery_title_color = new QodeField("colorsimple","portfolio_list_gallery_title_color","","文字颜色","This is some description");
	$row1->addChild("portfolio_list_gallery_title_color",$portfolio_list_gallery_title_color);
	$portfolio_list_gallery_title_hover_color = new QodeField("colorsimple","portfolio_list_gallery_title_hover_color","","文字悬停颜色","This is some description");
	$row1->addChild("portfolio_list_gallery_title_hover_color",$portfolio_list_gallery_title_hover_color);
	$portfolio_list_gallery_title_fontsize = new QodeField("textsimple","portfolio_list_gallery_title_fontsize","","文字尺寸 (px)","This is some description");
	$row1->addChild("portfolio_list_gallery_title_fontsize",$portfolio_list_gallery_title_fontsize);
	$portfolio_list_gallery_title_lineheight = new QodeField("textsimple","portfolio_list_gallery_title_lineheight","","行高 (px)","This is some description");
	$row1->addChild("portfolio_list_gallery_title_lineheight",$portfolio_list_gallery_title_lineheight);

	$row2 = new QodeRow(true);
	$group4->addChild("row2",$row2);
	$portfolio_list_gallery_title_texttransform = new QodeField("selectblanksimple","portfolio_list_gallery_title_texttransform","","文本转换","This is some description",$options_texttransform);
	$row2->addChild("portfolio_list_gallery_title_texttransform",$portfolio_list_gallery_title_texttransform);
	$portfolio_list_gallery_title_google_fonts = new QodeField("fontsimple","portfolio_list_gallery_title_google_fonts","-1","字体系列","This is some description");
	$row2->addChild("portfolio_list_gallery_title_google_fonts",$portfolio_list_gallery_title_google_fonts);
	$portfolio_list_gallery_title_fontstyle = new QodeField("selectblanksimple","portfolio_list_gallery_title_fontstyle","","字体样式","This is some description",$options_fontstyle);
	$row2->addChild("portfolio_list_gallery_title_fontstyle",$portfolio_list_gallery_title_fontstyle);
	$portfolio_list_gallery_title_fontweight = new QodeField("selectblanksimple","portfolio_list_gallery_title_fontweight","","字体重量","This is some description",$options_fontweight);
	$row2->addChild("portfolio_list_gallery_title_fontweight",$portfolio_list_gallery_title_fontweight);
	$row3 = new QodeRow(true);
	$group4->addChild("row3",$row3);
	$portfolio_list_gallery_title_letterspacing = new QodeField("textsimple","portfolio_list_gallery_title_letterspacing","","字母间距 (px)","This is some description");
	$row3->addChild("portfolio_list_gallery_title_letterspacing",$portfolio_list_gallery_title_letterspacing);

	$group5 = new QodeGroup("分类样式(悬停文本, 瀑布流无间距和瀑布流带间距 (仅图像))","Define styles for category");
	$panel2->addChild("group5",$group5);
	$row1 = new QodeRow();
	$group5->addChild("row1",$row1);
	$portfolio_list_gallery_category_color = new QodeField("colorsimple","portfolio_list_gallery_category_color","","文字颜色","This is some description");
	$row1->addChild("portfolio_list_gallery_category_color",$portfolio_list_gallery_category_color);
	$portfolio_list_gallery_category_fontsize = new QodeField("textsimple","portfolio_list_gallery_category_fontsize","","文字尺寸 (px)","This is some description");
	$row1->addChild("portfolio_list_gallery_category_fontsize",$portfolio_list_gallery_category_fontsize);
	$portfolio_list_gallery_category_lineheight = new QodeField("textsimple","portfolio_list_gallery_category_lineheight","","行高(px)","This is some description");
	$row1->addChild("portfolio_list_gallery_category_lineheight",$portfolio_list_gallery_category_lineheight);
	$portfolio_list_gallery_category_texttransform = new QodeField("selectblanksimple","portfolio_list_gallery_category_texttransform","","文本转换","This is some description",$options_texttransform);
	$row1->addChild("portfolio_list_gallery_category_texttransform",$portfolio_list_gallery_category_texttransform);
	$row2 = new QodeRow(true);
	$group5->addChild("row2",$row2);
	$portfolio_list_gallery_category_google_fonts = new QodeField("fontsimple","portfolio_list_gallery_category_google_fonts","-1","字体系列","This is some description");
	$row2->addChild("portfolio_list_gallery_category_google_fonts",$portfolio_list_gallery_category_google_fonts);
	$portfolio_list_gallery_category_fontstyle = new QodeField("selectblanksimple","portfolio_list_gallery_category_fontstyle","","字体风格","This is some description",$options_fontstyle);
	$row2->addChild("portfolio_list_gallery_category_fontstyle",$portfolio_list_gallery_category_fontstyle);
	$portfolio_list_gallery_category_fontweight = new QodeField("selectblanksimple","portfolio_list_gallery_category_fontweight","","字体重量","This is some description",$options_fontweight);
	$row2->addChild("portfolio_list_gallery_category_fontweight",$portfolio_list_gallery_category_fontweight);
	$portfolio_list_gallery_category_letterspacing = new QodeField("textsimple","portfolio_list_gallery_category_letterspacing","","字母间距 (px)","This is some description");
	$row2->addChild("portfolio_list_gallery_category_letterspacing",$portfolio_list_gallery_category_letterspacing);

	$group6 = new QodeGroup("分类筛选样式","Define styles for category filter holder");
	$panel2->addChild("group6",$group6);

	$row1 = new QodeRow();
	$group6->addChild("row1",$row1);

	$portfolio_list_filter_background_color = new QodeField("colorsimple","portfolio_list_filter_background_color","","背景颜色","Choose color for background of filter area");
	$row1->addChild("portfolio_list_filter_background_color",$portfolio_list_filter_background_color);
	$portfolio_list_filter_height = new QodeField("textsimple","portfolio_list_filter_height","","高度 (px)","Enter height for filter area");
	$row1->addChild("portfolio_list_filter_height",$portfolio_list_filter_height);
	$portfolio_filter_margin_bottom = new QodeField("textsimple","portfolio_filter_margin_bottom","","底部边距 (px)","Enter bottom margin for filter area. Default value is 40");
	$row1->addChild("portfolio_filter_margin_bottom",$portfolio_filter_margin_bottom);

$thin_icon_only_title = new QodeTitle('thin_icon_only', '薄加只悬停');
$panel2->addChild('thin_icon_only', $thin_icon_only_title);
$thin_icon_font_family = new QodeField('font', 'thin_icon_only_font_family', '', '图标字体系列', 'Choose font family plus icon that appears on hover');
$panel2->addChild('thin_icon_only_font_family', $thin_icon_font_family);