<?php

$blogPage = new QodeAdminPage("_blog", "博客", "fa fa-files-o");
$qodeFramework->qodeOptions->addAdminPage("blogPage",$blogPage);

// Blog List

$panel2 = new QodePanel("博客列表", "blog_list_panel");
$blogPage->addChild("panel2",$panel2);

	$pagination = new QodeField("zeroone","pagination","1","分页","Enabling this option will display pagination on bottom of Blog List");
	$panel2->addChild("pagination",$pagination);

	$blog_style = new QodeField("select","blog_style","1","存档和分类页面布局","Choose a default blog layout for archived Blog Lists and Category Blog Lists", array(
       "1" => "博客大图",
//     "5" => "Blog Masonry Full Width",
       "3" => "Blog Large Image Whole Post",
       "4" => "Blog Small Image",
        "2" => "Blog Masonry",
        "7" => "Blog Large Image With Dividers",
        "8" => "Blog Masonry - Date in Image"
      ));
	$panel2->addChild("blog_style",$blog_style);

	$category_blog_sidebar = new QodeField("select","category_blog_sidebar","default","存档和分类侧边栏","Choose a sidebar layout for archived Blog Lists and Category Blog Lists", array( "default" => "No Sidebar",
       "1" => "侧边栏 1/3 右",
       "2" => "侧边栏 1/4 右",
       "3" => "侧边栏 1/3 左",
       "4" => "侧边栏 1/4 左"
      ));
	$panel2->addChild("category_blog_sidebar",$category_blog_sidebar);

	$blog_hide_comments = new QodeField("yesno","blog_hide_comments","no","隐藏评论","Enabling this option will hide comments on Blog List");
	$panel2->addChild("blog_hide_comments",$blog_hide_comments);

	$blog_hide_author = new QodeField("yesno","blog_hide_author","no","隐藏作者","Enabling this option will hide author name on Blog List");
	$panel2->addChild("blog_hide_author",$blog_hide_author);

	$qode_like = new QodeField("onoff","qode_like","on","喜欢",'Enabling this option will turn on "Likes"');
	$panel2->addChild("qode_like",$qode_like);

	$blog_page_range = new QodeField("text","blog_page_range","","分页页面范围",'Enter the number of numerals to be displayed before the "..." (For example, enter "3" to get "1 2 3...")', array(), array("col_width" => 3));
	$panel2->addChild("blog_page_range",$blog_page_range);

	$number_of_chars = new QodeField("text","number_of_chars","45","博客列表文字数",'Enter the number of words to be displayed per post in Blog List', array(), array("col_width" => 3));
	$panel2->addChild("number_of_chars",$number_of_chars);

	$number_of_chars_masonry = new QodeField("text","number_of_chars_masonry","","瀑布流列表文字数",'Enter the number of words to be displayed per post in "Masonry" Blog List (Note: this overrides "Word Number" above)', array(), array("col_width" => 3));
	$panel2->addChild("number_of_chars_masonry",$number_of_chars_masonry);

	$number_of_chars_large_image = new QodeField("text","number_of_chars_large_image","","大图文字数",'Enter the number of words to be displayed per post in "Large Image" Blog List (Note: this overrides "Word Number" above)', array(), array("col_width" => 3));
	$panel2->addChild("number_of_chars_large_image",$number_of_chars_large_image);

	$number_of_chars_small_image = new QodeField("text","number_of_chars_small_image","","小图文字数",'Enter the number of words to be displayed per post in "Small Image" Blog List (Note: this overrides "Word Number" above))', array(), array("col_width" => 3));
	$panel2->addChild("number_of_chars_small_image",$number_of_chars_small_image);

	$blog_content_position = new QodeField("select","blog_content_position","content_above_blog_list","内容位置","Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", array(
		"content_above_blog_list" => "内容在博客列表上",
		"content_above_blog_list_and_sidebar" => "内容在博客列表和侧边栏上"
	));
	$panel2->addChild("blog_content_position",$blog_content_position);

	$pagination_masonry = new QodeField("select","pagination_masonry","pagination","瀑布流分页",'Choose a pagination style for "Masonry" Blog List', array( "pagination" => "Pagination",
       "load_more" => "加载更多",
       "infinite_scroll" => "无限滚动"
      ));
	$panel2->addChild("pagination_masonry",$pagination_masonry);

	$blog_masonry_filter = new QodeField("yesno","blog_masonry_filter","no","在瀑布流显示分类筛选",'Enabling this option will display a Category Filter on "Masonry" Blog List');
	$panel2->addChild("blog_masonry_filter",$blog_masonry_filter);

	$blog_masonry_padding = new QodeField("text","blog_masonry_padding","","全宽瀑布流外边距",'Please insert margin in px (i.e. 5px), or in % (i.e 5%)',array(),array("col_width" => 3));
	$panel2->addChild("blog_masonry_padding",$blog_masonry_padding);

	$blog_large_image_subtitle = new QodeTitle("blog_large_image_subtitle", "博客大图风格");
	$panel2->addChild("blog_large_image_subtitle", $blog_large_image_subtitle);

	$group1 = new QodeGroup("大图风格",'Define styles for the "Large Image" Blog List');
	$panel2->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
				$blog_large_image_text_in_box = new QodeField("selectsimple","blog_large_image_text_in_box","","框里文字",'ThisIsDescription', array( "Default" => "默认",
		   "no" => "否",
		   "yes" => "是"
		  ));
			$row1->addChild("blog_large_image_text_in_box",$blog_large_image_text_in_box);
			$blog_large_image_border = new QodeField("selectsimple","blog_large_image_border","","文本框边框",'ThisIsDescription', array( "Default" => "默认",
		   "no" => "否",
		   "yes" => "是"
		  ));
			$row1->addChild("blog_large_image_border",$blog_large_image_border);
			$blog_large_image_border_width = new QodeField("textsimple","blog_large_image_border_width","","文本框边框宽度 (px)","This is some description");
			$row1->addChild("blog_large_image_border_width",$blog_large_image_border_width);
		$row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);
			$blog_large_image_background_color = new QodeField("colorsimple","blog_large_image_background_color","","文本框背景颜色","ThisIsDescription");
			$row2->addChild("blog_large_image_background_color",$blog_large_image_background_color);
			$blog_large_image_border_color = new QodeField("colorsimple","blog_large_image_border_color","","文本框边框颜色","ThisIsDescription");
			$row2->addChild("blog_large_image_border_color",$blog_large_image_border_color);

		$group2 = new QodeGroup("标题样式","Define styles for title. *Please note that these settings also take effect on single post titles");
		$panel2->addChild("group2",$group2);
			$row1 = new QodeRow();
			$group2->addChild("row1",$row1);
				$blog_large_image_title_color = new QodeField("colorsimple","blog_large_image_title_color","","标题颜色","This is some description");
				$row1->addChild("blog_large_image_title_color",$blog_large_image_title_color);
				$blog_large_image_title_hover_color = new QodeField("colorsimple","blog_large_image_title_hover_color","","标题悬停颜色","This is some description");
				$row1->addChild("blog_large_image_title_hover_color",$blog_large_image_title_hover_color);
				$blog_large_image_title_date_color = new QodeField("colorsimple","blog_large_image_title_date_color","","日期颜色","This is some description");
				$row1->addChild("blog_large_image_title_date_color",$blog_large_image_title_date_color);
				$blog_large_image_title_fontsize = new QodeField("textsimple","blog_large_image_title_fontsize","","字体大小 (px)","This is some description");
				$row1->addChild("blog_large_image_title_fontsize",$blog_large_image_title_fontsize);


			$row2 = new QodeRow(true);
			$group2->addChild("row2",$row2);
				$blog_large_image_title_lineheight = new QodeField("textsimple","blog_large_image_title_lineheight","","行高 (px)","This is some description");
				$row2->addChild("blog_large_image_title_lineheight",$blog_large_image_title_lineheight);
				$blog_large_image_title_texttransform = new QodeField("selectblanksimple","blog_large_image_title_texttransform","","文本转换","This is some description",$options_texttransform);
				$row2->addChild("blog_large_image_title_texttransform",$blog_large_image_title_texttransform);
				$blog_large_image_title_google_fonts = new QodeField("fontsimple","blog_large_image_title_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_large_image_title_google_fonts",$blog_large_image_title_google_fonts);
				$blog_large_image_title_fontstyle = new QodeField("selectblanksimple","blog_large_image_title_fontstyle","","字体样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_large_image_title_fontstyle",$blog_large_image_title_fontstyle);

			$row3 = new QodeRow(true);
			$group2->addChild("row3",$row3);
				$blog_large_image_title_fontweight = new QodeField("selectblanksimple","blog_large_image_title_fontweight","","字体重量","This is some description",$options_fontweight);
				$row3->addChild("blog_large_image_title_fontweight",$blog_large_image_title_fontweight);
				$blog_large_image_title_letterspacing = new QodeField("textsimple","blog_large_image_title_letterspacing","","字母间距(px)","This is some description");
				$row3->addChild("blog_large_image_title_letterspacing",$blog_large_image_title_letterspacing);

		$group18 = new QodeGroup("文章信息风格","Define styles for post info. *Please note that these settings also take effect on single post info");
		$panel2->addChild("group18",$group18);
			$row1 = new QodeRow();
			$group18->addChild("row1",$row1);
				$blog_large_image_post_info_color = new QodeField("colorsimple","blog_large_image_post_info_color","","文字颜色","This is some description");
				$row1->addChild("blog_large_image_post_info_color",$blog_large_image_post_info_color);
				$blog_large_image_post_info_link_color = new QodeField("colorsimple","blog_large_image_post_info_link_color","","链接颜色","This is some description");
				$row1->addChild("blog_large_image_post_info_link_color",$blog_large_image_post_info_link_color);
				$blog_large_image_post_info_link_hover_color = new QodeField("colorsimple","blog_large_image_post_info_link_hover_color","","链接悬停颜色","This is some description");
				$row1->addChild("blog_large_image_post_info_link_hover_color",$blog_large_image_post_info_link_hover_color);
				$blog_large_image_post_info_fontsize = new QodeField("textsimple","blog_large_image_post_info_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_large_image_post_info_fontsize",$blog_large_image_post_info_fontsize);

			$row2 = new QodeRow(true);
			$group18->addChild("row2",$row2);
				$blog_large_image_post_info_lineheight = new QodeField("textsimple","blog_large_image_post_info_lineheight","","行高 (px)","This is some description");
				$row2->addChild("blog_large_image_post_info_lineheight",$blog_large_image_post_info_lineheight);
				$blog_large_image_post_info_texttransform = new QodeField("selectblanksimple","blog_large_image_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
				$row2->addChild("blog_large_image_post_info_texttransform",$blog_large_image_post_info_texttransform);
				$blog_large_image_post_info_google_fonts = new QodeField("fontsimple","blog_large_image_post_info_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_large_image_post_info_google_fonts",$blog_large_image_post_info_google_fonts);
				$blog_large_image_post_info_fontstyle = new QodeField("selectblanksimple","blog_large_image_post_info_fontstyle","","字体风格","This is some description",$options_fontstyle);
				$row2->addChild("blog_large_image_post_info_fontstyle",$blog_large_image_post_info_fontstyle);

			$row3 = new QodeRow(true);
			$group18->addChild("row3",$row3);
				$blog_large_image_post_info_fontweight = new QodeField("selectblanksimple","blog_large_image_post_info_fontweight","","字体重量","This is some description",$options_fontweight);
				$row3->addChild("blog_large_image_post_info_fontweight",$blog_large_image_post_info_fontweight);
				$blog_large_image_post_info_letterspacing = new QodeField("textsimple","blog_large_image_post_info_letterspacing","","字母间距 (px)","This is some description");
				$row3->addChild("blog_large_image_post_info_letterspacing",$blog_large_image_post_info_letterspacing);

		$group23 = new QodeGroup("文章信息引用/链接样式","Define styles for Quote/Link post info. *Please note that these settings also take effect on single post info");
		$panel2->addChild("group23",$group23);
			$row1 = new QodeRow();
			$group23->addChild("row1",$row1);
				$blog_large_image_ql_post_info_color = new QodeField("colorsimple","blog_large_image_ql_post_info_color","","文字颜色","This is some description");
				$row1->addChild("blog_large_image_ql_post_info_color",$blog_large_image_ql_post_info_color);
				$blog_large_image_ql_post_info_link_color = new QodeField("colorsimple","blog_large_image_ql_post_info_link_color","","链接颜色","This is some description");
				$row1->addChild("blog_large_image_ql_post_info_link_color",$blog_large_image_ql_post_info_link_color);
				$blog_large_image_ql_post_info_link_hover_color = new QodeField("colorsimple","blog_large_image_ql_post_info_link_hover_color","","链接悬停颜色","This is some description");
				$row1->addChild("blog_large_image_ql_post_info_link_hover_color",$blog_large_image_ql_post_info_link_hover_color);
				$blog_large_image_ql_post_info_fontsize = new QodeField("textsimple","blog_large_image_ql_post_info_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_large_image_ql_post_info_fontsize",$blog_large_image_ql_post_info_fontsize);

			$row2 = new QodeRow(true);
			$group23->addChild("row2",$row2);
				$blog_large_image_ql_post_info_lineheight = new QodeField("textsimple","blog_large_image_ql_post_info_lineheight","","行高 (px)","This is some description");
				$row2->addChild("blog_large_image_ql_post_info_lineheight",$blog_large_image_ql_post_info_lineheight);
				$blog_large_image_ql_post_info_texttransform = new QodeField("selectblanksimple","blog_large_image_ql_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
				$row2->addChild("blog_large_image_ql_post_info_texttransform",$blog_large_image_ql_post_info_texttransform);
				$blog_large_image_ql_post_info_google_fonts = new QodeField("fontsimple","blog_large_image_ql_post_info_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_large_image_ql_post_info_google_fonts",$blog_large_image_ql_post_info_google_fonts);
				$blog_large_image_ql_post_info_fontstyle = new QodeField("selectblanksimple","blog_large_image_ql_post_info_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_large_image_ql_post_info_fontstyle",$blog_large_image_ql_post_info_fontstyle);

			$row3 = new QodeRow(true);
			$group23->addChild("row3",$row3);
				$blog_large_image_ql_post_info_fontweight = new QodeField("selectblanksimple","blog_large_image_ql_post_info_fontweight","","字体重量","This is some description",$options_fontweight);
				$row3->addChild("blog_large_image_ql_post_info_fontweight",$blog_large_image_ql_post_info_fontweight);
				$blog_large_image_ql_post_info_letterspacing = new QodeField("textsimple","blog_large_image_ql_post_info_letterspacing","","字母间距 (px)","This is some description");
				$row3->addChild("blog_large_image_ql_post_info_letterspacing",$blog_large_image_ql_post_info_letterspacing);


	$blog_small_image_subtitle = new QodeTitle("blog_small_image_subtitle", "博客小图像风格");
	$panel2->addChild("blog_small_image_subtitle", $blog_small_image_subtitle);

	$group3 = new QodeGroup("小图像风格",'Define styles for the "Small Image" Blog List');
	$panel2->addChild("group3",$group3);
		$row1 = new QodeRow();
		$group3->addChild("row1",$row1);
				$blog_small_image_text_in_box = new QodeField("selectsimple","blog_small_image_text_in_box","","框里的文字","ThisIsDescription", array( "Default" => "默认",
		   "no" => "否",
		   "yes" => "是"
		  ));
			$row1->addChild("blog_small_image_text_in_box",$blog_small_image_text_in_box);
			$blog_small_image_border = new QodeField("selectsimple","blog_small_image_border","","文本框边框","ThisIsDescription", array( "Default" => "Default",
		   "no" => "No",
		   "yes" => "Yes"
		  ));
			$row1->addChild("blog_small_image_border",$blog_small_image_border);
			$blog_small_image_border_width = new QodeField("textsimple","blog_small_image_border_width","","文本框边框宽度 (px)","ThisIsDescription");
			$row1->addChild("blog_small_image_border_width",$blog_small_image_border_width);
		$row2 = new QodeRow(true);
		$group3->addChild("row2",$row2);
			$blog_small_image_background_color = new QodeField("colorsimple","blog_small_image_background_color","","文本框背景颜色",'ThisIsDescription');
			$row2->addChild("blog_small_image_background_color",$blog_small_image_background_color);
			$blog_small_image_border_color = new QodeField("colorsimple","blog_small_image_border_color","","文本框边框颜色","ThisIsDescription");
			$row2->addChild("blog_small_image_border_color",$blog_small_image_border_color);

		$group4 = new QodeGroup("标题风格","Define styles for title");
		$panel2->addChild("group4",$group4);
			$row1 = new QodeRow();
			$group4->addChild("row1",$row1);
				$blog_small_image_title_color = new QodeField("colorsimple","blog_small_image_title_color","","标题颜色","This is some description");
				$row1->addChild("blog_small_image_title_color",$blog_small_image_title_color);
				$blog_small_image_title_hover_color = new QodeField("colorsimple","blog_small_image_title_hover_color","","标题悬停颜色","This is some description");
				$row1->addChild("blog_small_image_title_hover_color",$blog_small_image_title_hover_color);
				$blog_small_image_title_date_color = new QodeField("colorsimple","blog_small_image_title_date_color","","日期颜色","This is some description");
				$row1->addChild("blog_small_image_title_date_color",$blog_small_image_title_date_color);
				$blog_small_image_title_fontsize = new QodeField("textsimple","blog_small_image_title_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_small_image_title_fontsize",$blog_small_image_title_fontsize);


			$row2 = new QodeRow(true);
			$group4->addChild("row2",$row2);
				$blog_small_image_title_lineheight = new QodeField("textsimple","blog_small_image_title_lineheight","","文字行高 (px)","This is some description");
				$row2->addChild("blog_small_image_title_lineheight",$blog_small_image_title_lineheight);
				$blog_small_image_title_texttransform = new QodeField("selectblanksimple","blog_small_image_title_texttransform","","文本转换","This is some description",$options_texttransform);
				$row2->addChild("blog_small_image_title_texttransform",$blog_small_image_title_texttransform);
				$blog_small_image_title_google_fonts = new QodeField("fontsimple","blog_small_image_title_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_small_image_title_google_fonts",$blog_small_image_title_google_fonts);
				$blog_small_image_title_fontstyle = new QodeField("selectblanksimple","blog_small_image_title_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_small_image_title_fontstyle",$blog_small_image_title_fontstyle);

			$row3 = new QodeRow(true);
			$group4->addChild("row3",$row3);
				$blog_small_image_title_fontweight = new QodeField("selectblanksimple","blog_small_image_title_fontweight","","文字重量","This is some description",$options_fontweight);
				$row3->addChild("blog_small_image_title_fontweight",$blog_small_image_title_fontweight);
				$blog_small_image_title_letterspacing = new QodeField("textsimple","blog_small_image_title_letterspacing","","字母间距 (px)","This is some description");
				$row3->addChild("blog_small_image_title_letterspacing",$blog_small_image_title_letterspacing);

		$group19 = new QodeGroup("文章信息风格","Define styles for post info");
		$panel2->addChild("group19",$group19);
			$row1 = new QodeRow();
			$group19->addChild("row1",$row1);
				$blog_small_image_post_info_color = new QodeField("colorsimple","blog_small_image_post_info_color","","文字颜色","This is some description");
				$row1->addChild("blog_small_image_post_info_color",$blog_small_image_post_info_color);
				$blog_small_image_post_info_link_color = new QodeField("colorsimple","blog_small_image_post_info_link_color","","链接颜色","This is some description");
				$row1->addChild("blog_small_image_post_info_link_color",$blog_small_image_post_info_link_color);
				$blog_small_image_post_info_link_hover_color = new QodeField("colorsimple","blog_small_image_post_info_link_hover_color","","链接悬停颜色","This is some description");
				$row1->addChild("blog_small_image_post_info_link_hover_color",$blog_small_image_post_info_link_hover_color);
				$blog_small_image_post_info_fontsize = new QodeField("textsimple","blog_small_image_post_info_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_small_image_post_info_fontsize",$blog_small_image_post_info_fontsize);

			$row2 = new QodeRow(true);
			$group19->addChild("row2",$row2);
				$blog_small_image_post_info_lineheight = new QodeField("textsimple","blog_small_image_post_info_lineheight","","文字行高 (px)","This is some description");
				$row2->addChild("blog_small_image_post_info_lineheight",$blog_small_image_post_info_lineheight);
				$blog_small_image_post_info_texttransform = new QodeField("selectblanksimple","blog_small_image_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
				$row2->addChild("blog_small_image_post_info_texttransform",$blog_small_image_post_info_texttransform);
				$blog_small_image_post_info_google_fonts = new QodeField("fontsimple","blog_small_image_post_info_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_small_image_post_info_google_fonts",$blog_small_image_post_info_google_fonts);
				$blog_small_image_post_info_fontstyle = new QodeField("selectblanksimple","blog_small_image_post_info_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_small_image_post_info_fontstyle",$blog_small_image_post_info_fontstyle);

			$row3 = new QodeRow(true);
			$group19->addChild("row3",$row3);
				$blog_small_image_post_info_fontweight = new QodeField("selectblanksimple","blog_small_image_post_info_fontweight","","文字重量","This is some description",$options_fontweight);
				$row3->addChild("blog_small_image_post_info_fontweight",$blog_small_image_post_info_fontweight);
				$blog_small_image_post_info_letterspacing = new QodeField("textsimple","blog_small_image_post_info_letterspacing","","字母间距 (px)","This is some description");
				$row3->addChild("blog_small_image_post_info_letterspacing",$blog_small_image_post_info_letterspacing);

		$group24 = new QodeGroup("文章信息引用/链接样式","Define styles for Quote/Link post info");
		$panel2->addChild("group24",$group24);
			$row1 = new QodeRow();
			$group24->addChild("row1",$row1);
				$blog_small_image_ql_post_info_color = new QodeField("colorsimple","blog_small_image_ql_post_info_color","","文字颜色","This is some description");
				$row1->addChild("blog_small_image_ql_post_info_color",$blog_small_image_ql_post_info_color);
				$blog_small_image_ql_post_info_link_color = new QodeField("colorsimple","blog_small_image_ql_post_info_link_color","","链接颜色","This is some description");
				$row1->addChild("blog_small_image_ql_post_info_link_color",$blog_small_image_ql_post_info_link_color);
				$blog_small_image_ql_post_info_link_hover_color = new QodeField("colorsimple","blog_small_image_ql_post_info_link_hover_color","","链接悬停颜色","This is some description");
				$row1->addChild("blog_small_image_ql_post_info_link_hover_color",$blog_small_image_ql_post_info_link_hover_color);
				$blog_small_image_ql_post_info_fontsize = new QodeField("textsimple","blog_small_image_ql_post_info_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_small_image_ql_post_info_fontsize",$blog_small_image_ql_post_info_fontsize);

			$row2 = new QodeRow(true);
			$group24->addChild("row2",$row2);
				$blog_small_image_ql_post_info_lineheight = new QodeField("textsimple","blog_small_image_ql_post_info_lineheight","","文字行高 (px)","This is some description");
				$row2->addChild("blog_small_image_ql_post_info_lineheight",$blog_small_image_ql_post_info_lineheight);
				$blog_small_image_ql_post_info_texttransform = new QodeField("selectblanksimple","blog_small_image_ql_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
				$row2->addChild("blog_small_image_ql_post_info_texttransform",$blog_small_image_ql_post_info_texttransform);
				$blog_small_image_ql_post_info_google_fonts = new QodeField("fontsimple","blog_small_image_ql_post_info_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_small_image_ql_post_info_google_fonts",$blog_small_image_ql_post_info_google_fonts);
				$blog_small_image_ql_post_info_fontstyle = new QodeField("selectblanksimple","blog_small_image_ql_post_info_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_small_image_ql_post_info_fontstyle",$blog_small_image_ql_post_info_fontstyle);

			$row3 = new QodeRow(true);
			$group24->addChild("row3",$row3);
				$blog_small_image_ql_post_info_fontweight = new QodeField("selectblanksimple","blog_small_image_ql_post_info_fontweight","","文字重量","This is some description",$options_fontweight);
				$row3->addChild("blog_small_image_ql_post_info_fontweight",$blog_small_image_ql_post_info_fontweight);
				$blog_small_image_ql_post_info_letterspacing = new QodeField("textsimple","blog_small_image_ql_post_info_letterspacing","","字母间距 (px)","This is some description");
				$row3->addChild("blog_small_image_ql_post_info_letterspacing",$blog_small_image_ql_post_info_letterspacing);


	$blog_masonry_subtitle = new QodeTitle("blog_masonry_subtitle", "瀑布流风格");
	$panel2->addChild("blog_masonry_subtitle", $blog_masonry_subtitle);

	$group5 = new QodeGroup("瀑布流风格",'Define styles for the "Masonry" Blog List');
	$panel2->addChild("group5",$group5);
		$row1 = new QodeRow();
		$group5->addChild("row1",$row1);
			$blog_masonry_background_color = new QodeField("colorsimple","blog_masonry_background_color","","文字边框背景颜色","ThisIsDescription");
			$row1->addChild("blog_masonry_background_color",$blog_masonry_background_color);
			$blog_masonry_border_color = new QodeField("colorsimple","blog_masonry_border_color","","文字框边框颜色","ThisIsDescription");
			$row1->addChild("blog_masonry_border_color",$blog_masonry_border_color);
			$blog_masonry_border_radius = new QodeField("textsimple","blog_masonry_border_radius","","文本框边框圆角 (px)","ThisIsDescription");
			$row1->addChild("blog_masonry_border_radius",$blog_masonry_border_radius);

		$group6 = new QodeGroup("标题风格","Define styles for title");
		$panel2->addChild("group6",$group6);
			$row1 = new QodeRow();
			$group6->addChild("row1",$row1);
				$blog_masonry_title_color = new QodeField("colorsimple","blog_masonry_title_color","","标题颜色","This is some description");
				$row1->addChild("blog_masonry_title_color",$blog_masonry_title_color);
				$blog_masonry_title_hover_color = new QodeField("colorsimple","blog_masonry_title_hover_color","","标题悬停颜色","This is some description");
				$row1->addChild("blog_masonry_title_hover_color",$blog_masonry_title_hover_color);
				$blog_masonry_title_fontsize = new QodeField("textsimple","blog_masonry_title_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_masonry_title_fontsize",$blog_masonry_title_fontsize);
				$blog_masonry_title_lineheight = new QodeField("textsimple","blog_masonry_title_lineheight","","文字行高 (px)","This is some description");
				$row1->addChild("blog_masonry_title_lineheight",$blog_masonry_title_lineheight);

			$row2 = new QodeRow(true);
			$group6->addChild("row2",$row2);
				$blog_masonry_title_texttransform = new QodeField("selectblanksimple","blog_masonry_title_texttransform","","文本转换","This is some description",$options_texttransform);
				$row2->addChild("blog_masonry_title_texttransform",$blog_masonry_title_texttransform);
				$blog_masonry_title_google_fonts = new QodeField("fontsimple","blog_masonry_title_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_masonry_title_google_fonts",$blog_masonry_title_google_fonts);
				$blog_masonry_title_fontstyle = new QodeField("selectblanksimple","blog_masonry_title_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_masonry_title_fontstyle",$blog_masonry_title_fontstyle);
				$blog_masonry_title_fontweight = new QodeField("selectblanksimple","blog_masonry_title_fontweight","","文字重量","This is some description",$options_fontweight);
				$row2->addChild("blog_masonry_title_fontweight",$blog_masonry_title_fontweight);

			$row3 = new QodeRow(true);
			$group6->addChild("row3",$row3);
				$blog_masonry_title_letterspacing = new QodeField("textsimple","blog_masonry_title_letterspacing","","字母间距 (px)","This is some description");
				$row3->addChild("blog_masonry_title_letterspacing",$blog_masonry_title_letterspacing);

		$group20 = new QodeGroup("文章信息风格","Define styles for post info");
		$panel2->addChild("group20",$group20);
			$row1 = new QodeRow();
			$group20->addChild("row1",$row1);
				$blog_masonry_post_info_color = new QodeField("colorsimple","blog_masonry_post_info_color","","文字颜色","This is some description");
				$row1->addChild("blog_masonry_post_info_color",$blog_masonry_post_info_color);
				$blog_masonry_post_info_link_color = new QodeField("colorsimple","blog_masonry_post_info_link_color","","链接颜色","This is some description");
				$row1->addChild("blog_masonry_post_info_link_color",$blog_masonry_post_info_link_color);
				$blog_masonry_post_info_link_hover_color = new QodeField("colorsimple","blog_masonry_post_info_link_hover_color","","链接悬停颜色","This is some description");
				$row1->addChild("blog_masonry_post_info_link_hover_color",$blog_masonry_post_info_link_hover_color);
				$blog_masonry_post_info_fontsize = new QodeField("textsimple","blog_masonry_post_info_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_masonry_post_info_fontsize",$blog_masonry_post_info_fontsize);

			$row2 = new QodeRow(true);
			$group20->addChild("row2",$row2);
				$blog_masonry_post_info_lineheight = new QodeField("textsimple","blog_masonry_post_info_lineheight","","文字行高 (px)","This is some description");
				$row2->addChild("blog_masonry_post_info_lineheight",$blog_masonry_post_info_lineheight);
				$blog_masonry_post_info_texttransform = new QodeField("selectblanksimple","blog_masonry_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
				$row2->addChild("blog_masonry_post_info_texttransform",$blog_masonry_post_info_texttransform);
				$blog_masonry_post_info_google_fonts = new QodeField("fontsimple","blog_masonry_post_info_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_masonry_post_info_google_fonts",$blog_masonry_post_info_google_fonts);
				$blog_masonry_post_info_fontstyle = new QodeField("selectblanksimple","blog_masonry_post_info_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_masonry_post_info_fontstyle",$blog_masonry_post_info_fontstyle);

			$row3 = new QodeRow(true);
			$group20->addChild("row3",$row3);
				$blog_masonry_post_info_fontweight = new QodeField("selectblanksimple","blog_masonry_post_info_fontweight","","文字重量","This is some description",$options_fontweight);
				$row3->addChild("blog_masonry_post_info_fontweight",$blog_masonry_post_info_fontweight);
				$blog_masonry_post_info_letterspacing = new QodeField("textsimple","blog_masonry_post_info_letterspacing","","字母间距 (px)","This is some description");
				$row3->addChild("blog_masonry_post_info_letterspacing",$blog_masonry_post_info_letterspacing);

		$group25 = new QodeGroup("文章信息引用/链接样式","Define styles for Quote/Link post info");
		$panel2->addChild("group25",$group25);
			$row1 = new QodeRow();
			$group25->addChild("row1",$row1);
				$blog_masonry_ql_post_info_color = new QodeField("colorsimple","blog_masonry_ql_post_info_color","","文字颜色","This is some description");
				$row1->addChild("blog_masonry_ql_post_info_color",$blog_masonry_ql_post_info_color);
				$blog_masonry_ql_post_info_link_color = new QodeField("colorsimple","blog_masonry_ql_post_info_link_color","","链接颜色","This is some description");
				$row1->addChild("blog_masonry_ql_post_info_link_color",$blog_masonry_ql_post_info_link_color);
				$blog_masonry_ql_post_info_link_hover_color = new QodeField("colorsimple","blog_masonry_ql_post_info_link_hover_color","","链接悬停颜色","This is some description");
				$row1->addChild("blog_masonry_ql_post_info_link_hover_color",$blog_masonry_ql_post_info_link_hover_color);
				$blog_masonry_ql_post_info_fontsize = new QodeField("textsimple","blog_masonry_ql_post_info_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_masonry_ql_post_info_fontsize",$blog_masonry_ql_post_info_fontsize);

			$row2 = new QodeRow(true);
			$group25->addChild("row2",$row2);
				$blog_masonry_ql_post_info_lineheight = new QodeField("textsimple","blog_masonry_ql_post_info_lineheight","","文字行高 (px)","This is some description");
				$row2->addChild("blog_masonry_ql_post_info_lineheight",$blog_masonry_ql_post_info_lineheight);
				$blog_masonry_ql_post_info_texttransform = new QodeField("selectblanksimple","blog_masonry_ql_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
				$row2->addChild("blog_masonry_ql_post_info_texttransform",$blog_masonry_ql_post_info_texttransform);
				$blog_masonry_ql_post_info_google_fonts = new QodeField("fontsimple","blog_masonry_ql_post_info_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_masonry_ql_post_info_google_fonts",$blog_masonry_ql_post_info_google_fonts);
				$blog_masonry_ql_post_info_fontstyle = new QodeField("selectblanksimple","blog_masonry_ql_post_info_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_masonry_ql_post_info_fontstyle",$blog_masonry_ql_post_info_fontstyle);

			$row3 = new QodeRow(true);
			$group25->addChild("row3",$row3);
				$blog_masonry_ql_post_info_fontweight = new QodeField("selectblanksimple","blog_masonry_ql_post_info_fontweight","","文字重量","This is some description",$options_fontweight);
				$row3->addChild("blog_masonry_ql_post_info_fontweight",$blog_masonry_ql_post_info_fontweight);
				$blog_masonry_ql_post_info_letterspacing = new QodeField("textsimple","blog_masonry_ql_post_info_letterspacing","","字母间距 (px)","This is some description");
				$row3->addChild("blog_masonry_ql_post_info_letterspacing",$blog_masonry_ql_post_info_letterspacing);

	$blog_large_image_simple_subtitle = new QodeTitle("blog_large_image_simple_subtitle", "博客大图简单风格");
	$panel2->addChild("blog_large_image_simple_subtitle", $blog_large_image_simple_subtitle);

	$group7 = new QodeGroup("框内容风格","Define styles for content box");
	$panel2->addChild("group7",$group7);
	$blog_large_image_simple_side_padding_left = new QodeField("textsimple","blog_large_image_simple_side_padding_left","","内容内边距左(px)","This is some description");
	$group7->addChild("blog_large_image_simple_side_padding_left",$blog_large_image_simple_side_padding_left);

	$blog_large_image_simple_side_padding_right = new QodeField("textsimple","blog_large_image_simple_side_padding_right","","内容内边距右(px)","This is some description");
	$group7->addChild("blog_large_image_simple_side_padding_right",$blog_large_image_simple_side_padding_right);

		$group8 = new QodeGroup("标题风格","Define styles for title");
		$panel2->addChild("group8",$group8);
			$row1 = new QodeRow();
			$group8->addChild("row1",$row1);
				$blog_large_image_simple_title_color = new QodeField("colorsimple","blog_large_image_simple_title_color","","标题颜色","This is some description");
				$row1->addChild("blog_large_image_simple_title_color",$blog_large_image_simple_title_color);
				$blog_large_image_simple_title_hover_color = new QodeField("colorsimple","blog_large_image_simple_title_hover_color","","标题悬停颜色","This is some description");
				$row1->addChild("blog_large_image_simple_title_hover_color",$blog_large_image_simple_title_hover_color);
				$blog_large_image_simple_title_fontsize = new QodeField("textsimple","blog_large_image_simple_title_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_large_image_simple_title_fontsize",$blog_large_image_simple_title_fontsize);
				$blog_large_image_simple_title_lineheight = new QodeField("textsimple","blog_large_image_simple_title_lineheight","","文字行高 (px)","This is some description");
				$row1->addChild("blog_large_image_simple_title_lineheight",$blog_large_image_simple_title_lineheight);

			$row2 = new QodeRow(true);
			$group8->addChild("row2",$row2);
				$blog_large_image_simple_title_texttransform = new QodeField("selectblanksimple","blog_large_image_simple_title_texttransform","","文本转换","This is some description",$options_texttransform);
				$row2->addChild("blog_large_image_simple_title_texttransform",$blog_large_image_simple_title_texttransform);
				$blog_large_image_simple_title_google_fonts = new QodeField("fontsimple","blog_large_image_simple_title_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_large_image_simple_title_google_fonts",$blog_large_image_simple_title_google_fonts);
				$blog_large_image_simple_title_fontstyle = new QodeField("selectblanksimple","blog_large_image_simple_title_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_large_image_simple_title_fontstyle",$blog_large_image_simple_title_fontstyle);
				$blog_large_image_simple_title_fontweight = new QodeField("selectblanksimple","blog_large_image_simple_title_fontweight","","文字重量","This is some description",$options_fontweight);
				$row2->addChild("blog_large_image_simple_title_fontweight",$blog_large_image_simple_title_fontweight);

			$row3 = new QodeRow(true);
			$group8->addChild("row3",$row3);
				$blog_large_image_simple_title_letterspacing = new QodeField("textsimple","blog_large_image_simple_title_letterspacing","","字母间距 (px)","This is some description");
				$row3->addChild("blog_large_image_simple_title_letterspacing",$blog_large_image_simple_title_letterspacing);

		$group21 = new QodeGroup("日期风格","Define styles for date");
		$panel2->addChild("group21",$group21);
			$row1 = new QodeRow();
			$group21->addChild("row1",$row1);
				$blog_large_image_simple_post_info_color = new QodeField("colorsimple","blog_large_image_simple_post_info_color","","文字颜色","This is some description");
				$row1->addChild("blog_large_image_simple_post_info_color",$blog_large_image_simple_post_info_color);
				$blog_large_image_simple_post_info_fontsize = new QodeField("textsimple","blog_large_image_simple_post_info_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_large_image_simple_post_info_fontsize",$blog_large_image_simple_post_info_fontsize);
				$blog_large_image_simple_post_info_lineheight = new QodeField("textsimple","blog_large_image_simple_post_info_lineheight","","文字行高 (px)","This is some description");
				$row1->addChild("blog_large_image_simple_post_info_lineheight",$blog_large_image_simple_post_info_lineheight);
				$blog_large_image_simple_post_info_texttransform = new QodeField("selectblanksimple","blog_large_image_simple_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
				$row1->addChild("blog_large_image_simple_post_info_texttransform",$blog_large_image_simple_post_info_texttransform);

			$row2 = new QodeRow(true);
			$group21->addChild("row2",$row2);
				$blog_large_image_simple_post_info_google_fonts = new QodeField("fontsimple","blog_large_image_simple_post_info_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_large_image_simple_post_info_google_fonts",$blog_large_image_simple_post_info_google_fonts);
				$blog_large_image_simple_post_info_fontstyle = new QodeField("selectblanksimple","blog_large_image_simple_post_info_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_large_image_simple_post_info_fontstyle",$blog_large_image_simple_post_info_fontstyle);
				$blog_large_image_simple_post_info_fontweight = new QodeField("selectblanksimple","blog_large_image_simple_post_info_fontweight","","文字重量","This is some description",$options_fontweight);
				$row2->addChild("blog_large_image_simple_post_info_fontweight",$blog_large_image_simple_post_info_fontweight);
				$blog_large_image_simple_post_info_letterspacing = new QodeField("textsimple","blog_large_image_simple_post_info_letterspacing","","字母间距 (px)","This is some description");
				$row2->addChild("blog_large_image_simple_post_info_letterspacing",$blog_large_image_simple_post_info_letterspacing);

		$group26 = new QodeGroup("引用/链接日期风格","Define styles for Quote/Link date");
		$panel2->addChild("group26",$group26);
			$row1 = new QodeRow();
			$group26->addChild("row1",$row1);
				$blog_large_image_simple_ql_post_info_color = new QodeField("colorsimple","blog_large_image_simple_ql_post_info_color","","文字颜色","This is some description");
				$row1->addChild("blog_large_image_simple_ql_post_info_color",$blog_large_image_simple_ql_post_info_color);
				$blog_large_image_simple_ql_post_info_fontsize = new QodeField("textsimple","blog_large_image_simple_ql_post_info_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_large_image_simple_ql_post_info_fontsize",$blog_large_image_simple_ql_post_info_fontsize);
				$blog_large_image_simple_ql_post_info_lineheight = new QodeField("textsimple","blog_large_image_simple_ql_post_info_lineheight","","文字行高 (px)","This is some description");
				$row1->addChild("blog_large_image_simple_ql_post_info_lineheight",$blog_large_image_simple_ql_post_info_lineheight);
				$blog_large_image_simple_ql_post_info_texttransform = new QodeField("selectblanksimple","blog_large_image_simple_ql_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
				$row1->addChild("blog_large_image_simple_ql_post_info_texttransform",$blog_large_image_simple_ql_post_info_texttransform);

			$row2 = new QodeRow(true);
			$group26->addChild("row2",$row2);
				$blog_large_image_simple_ql_post_info_google_fonts = new QodeField("fontsimple","blog_large_image_simple_ql_post_info_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_large_image_simple_ql_post_info_google_fonts",$blog_large_image_simple_ql_post_info_google_fonts);
				$blog_large_image_simple_ql_post_info_fontstyle = new QodeField("selectblanksimple","blog_large_image_simple_ql_post_info_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_large_image_simple_ql_post_info_fontstyle",$blog_large_image_simple_ql_post_info_fontstyle);
				$blog_large_image_simple_ql_post_info_fontweight = new QodeField("selectblanksimple","blog_large_image_simple_ql_post_info_fontweight","","文字重量","This is some description",$options_fontweight);
				$row2->addChild("blog_large_image_simple_ql_post_info_fontweight",$blog_large_image_simple_ql_post_info_fontweight);
				$blog_large_image_simple_ql_post_info_letterspacing = new QodeField("textsimple","blog_large_image_simple_ql_post_info_letterspacing","","字母间距 (px)","This is some description");
				$row2->addChild("blog_large_image_simple_ql_post_info_letterspacing",$blog_large_image_simple_ql_post_info_letterspacing);


	$blog_large_image_dividers_subtitle = new QodeTitle("blog_large_image_dividers_subtitle", "博客大图带分隔样式");
	$panel2->addChild("blog_large_image_dividers_subtitle", $blog_large_image_dividers_subtitle);

	$blog_large_image_dividers_background_color = new QodeField("color","blog_large_image_dividers_background_color","","文字边框背景颜色","Choose a background color for Blog Large Image With Dividers");
	$panel2->addChild("blog_large_image_dividers_background_color",$blog_large_image_dividers_background_color);

	$group9 = new QodeGroup("标题风格","Define styles for title");
	$panel2->addChild("group9",$group9);
		$row1 = new QodeRow();
		$group9->addChild("row1",$row1);
			$blog_large_image_dividers_title_color = new QodeField("colorsimple","blog_large_image_dividers_title_color","","标题颜色","This is some description");
			$row1->addChild("blog_large_image_dividers_title_color",$blog_large_image_dividers_title_color);
			$blog_large_image_dividers_title_hover_color = new QodeField("colorsimple","blog_large_image_dividers_title_hover_color","","标题悬停颜色","This is some description");
			$row1->addChild("blog_large_image_dividers_title_hover_color",$blog_large_image_dividers_title_hover_color);
			$blog_large_image_dividers_title_fontsize = new QodeField("textsimple","blog_large_image_dividers_title_fontsize","","文字尺寸 (px)","This is some description");
			$row1->addChild("blog_large_image_dividers_title_fontsize",$blog_large_image_dividers_title_fontsize);
			$blog_large_image_dividers_title_lineheight = new QodeField("textsimple","blog_large_image_dividers_title_lineheight","","文字行高 (px)","This is some description");
			$row1->addChild("blog_large_image_dividers_title_lineheight",$blog_large_image_dividers_title_lineheight);
		$row2 = new QodeRow(true);
		$group9->addChild("row2",$row2);
			$blog_large_image_dividers_title_texttransform = new QodeField("selectblanksimple","blog_large_image_dividers_title_texttransform","","文本转换","This is some description",$options_texttransform);
			$row2->addChild("blog_large_image_dividers_title_texttransform",$blog_large_image_dividers_title_texttransform);
			$blog_large_image_dividers_title_google_fonts = new QodeField("fontsimple","blog_large_image_dividers_title_google_fonts","-1","字体系列","This is some description");
			$row2->addChild("blog_large_image_dividers_title_google_fonts",$blog_large_image_dividers_title_google_fonts);
			$blog_large_image_dividers_title_fontstyle = new QodeField("selectblanksimple","blog_large_image_dividers_title_fontstyle","","文字样式","This is some description",$options_fontstyle);
			$row2->addChild("blog_large_image_dividers_title_fontstyle",$blog_large_image_dividers_title_fontstyle);
			$blog_large_image_dividers_title_fontweight = new QodeField("selectblanksimple","blog_large_image_dividers_title_fontweight","","文字重量","This is some description",$options_fontweight);
			$row2->addChild("blog_large_image_dividers_title_fontweight",$blog_large_image_dividers_title_fontweight);
		$row3 = new QodeRow(true);
		$group9->addChild("row3",$row3);
			$blog_large_image_dividers_title_letterspacing = new QodeField("textsimple","blog_large_image_dividers_title_letterspacing","","字母间距 (px)","This is some description");
			$row3->addChild("blog_large_image_dividers_title_letterspacing",$blog_large_image_dividers_title_letterspacing);

		$group22 = new QodeGroup("文章信息风格","Define styles for post info");
		$panel2->addChild("group22",$group22);
			$row1 = new QodeRow();
			$group22->addChild("row1",$row1);
				$blog_large_image_dividers_post_info_color = new QodeField("colorsimple","blog_large_image_dividers_post_info_color","","文字颜色","This is some description");
				$row1->addChild("blog_large_image_dividers_post_info_color",$blog_large_image_dividers_post_info_color);
				$blog_large_image_dividers_post_info_link_color = new QodeField("colorsimple","blog_large_image_dividers_post_info_link_color","","链接颜色","This is some description");
				$row1->addChild("blog_large_image_dividers_post_info_link_color",$blog_large_image_dividers_post_info_link_color);
				$blog_large_image_dividers_post_info_link_hover_color = new QodeField("colorsimple","blog_large_image_dividers_post_info_link_hover_color","","链接悬停颜色","This is some description");
				$row1->addChild("blog_large_image_dividers_post_info_link_hover_color",$blog_large_image_dividers_post_info_link_hover_color);
				$blog_large_image_dividers_post_info_fontsize = new QodeField("textsimple","blog_large_image_dividers_post_info_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_large_image_dividers_post_info_fontsize",$blog_large_image_dividers_post_info_fontsize);

			$row2 = new QodeRow(true);
			$group22->addChild("row2",$row2);
				$blog_large_image_dividers_post_info_lineheight = new QodeField("textsimple","blog_large_image_dividers_post_info_lineheight","","文字行高 (px)","This is some description");
				$row2->addChild("blog_large_image_dividers_post_info_lineheight",$blog_large_image_dividers_post_info_lineheight);
				$blog_large_image_dividers_post_info_texttransform = new QodeField("selectblanksimple","blog_large_image_dividers_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
				$row2->addChild("blog_large_image_dividers_post_info_texttransform",$blog_large_image_dividers_post_info_texttransform);
				$blog_large_image_dividers_post_info_google_fonts = new QodeField("fontsimple","blog_large_image_dividers_post_info_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_large_image_dividers_post_info_google_fonts",$blog_large_image_dividers_post_info_google_fonts);
				$blog_large_image_dividers_post_info_fontstyle = new QodeField("selectblanksimple","blog_large_image_dividers_post_info_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_large_image_dividers_post_info_fontstyle",$blog_large_image_dividers_post_info_fontstyle);

			$row3 = new QodeRow(true);
			$group22->addChild("row3",$row3);
				$blog_large_image_dividers_post_info_fontweight = new QodeField("selectblanksimple","blog_large_image_dividers_post_info_fontweight","","文字重量","This is some description",$options_fontweight);
				$row3->addChild("blog_large_image_dividers_post_info_fontweight",$blog_large_image_dividers_post_info_fontweight);
				$blog_large_image_dividers_post_info_letterspacing = new QodeField("textsimple","blog_large_image_dividers_post_info_letterspacing","","字母间距 (px)","This is some description");
				$row3->addChild("blog_large_image_dividers_post_info_letterspacing",$blog_large_image_dividers_post_info_letterspacing);

		$group27 = new QodeGroup("文章信息引用/链接样式","Define styles for Quote/Link post info");
		$panel2->addChild("group27",$group27);
			$row1 = new QodeRow();
			$group27->addChild("row1",$row1);
				$blog_large_image_dividers_ql_post_info_color = new QodeField("colorsimple","blog_large_image_dividers_ql_post_info_color","","文字颜色","This is some description");
				$row1->addChild("blog_large_image_dividers_ql_post_info_color",$blog_large_image_dividers_ql_post_info_color);
				$blog_large_image_dividers_ql_post_info_link_color = new QodeField("colorsimple","blog_large_image_dividers_ql_post_info_link_color","","链接颜色","This is some description");
				$row1->addChild("blog_large_image_dividers_ql_post_info_link_color",$blog_large_image_dividers_ql_post_info_link_color);
				$blog_large_image_dividers_ql_post_info_link_hover_color = new QodeField("colorsimple","blog_large_image_dividers_ql_post_info_link_hover_color","","链接悬停颜色","This is some description");
				$row1->addChild("blog_large_image_dividers_ql_post_info_link_hover_color",$blog_large_image_dividers_ql_post_info_link_hover_color);
				$blog_large_image_dividers_ql_post_info_fontsize = new QodeField("textsimple","blog_large_image_dividers_ql_post_info_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_large_image_dividers_ql_post_info_fontsize",$blog_large_image_dividers_ql_post_info_fontsize);

			$row2 = new QodeRow(true);
			$group27->addChild("row2",$row2);
				$blog_large_image_dividers_ql_post_info_lineheight = new QodeField("textsimple","blog_large_image_dividers_ql_post_info_lineheight","","文字行高 (px)","This is some description");
				$row2->addChild("blog_large_image_dividers_ql_post_info_lineheight",$blog_large_image_dividers_ql_post_info_lineheight);
				$blog_large_image_dividers_ql_post_info_texttransform = new QodeField("selectblanksimple","blog_large_image_dividers_ql_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
				$row2->addChild("blog_large_image_dividers_ql_post_info_texttransform",$blog_large_image_dividers_ql_post_info_texttransform);
				$blog_large_image_dividers_ql_post_info_google_fonts = new QodeField("fontsimple","blog_large_image_dividers_ql_post_info_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_large_image_dividers_ql_post_info_google_fonts",$blog_large_image_dividers_ql_post_info_google_fonts);
				$blog_large_image_dividers_ql_post_info_fontstyle = new QodeField("selectblanksimple","blog_large_image_dividers_ql_post_info_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_large_image_dividers_ql_post_info_fontstyle",$blog_large_image_dividers_ql_post_info_fontstyle);

			$row3 = new QodeRow(true);
			$group27->addChild("row3",$row3);
				$blog_large_image_dividers_ql_post_info_fontweight = new QodeField("selectblanksimple","blog_large_image_dividers_ql_post_info_fontweight","","文字重量","This is some description",$options_fontweight);
				$row3->addChild("blog_large_image_dividers_ql_post_info_fontweight",$blog_large_image_dividers_ql_post_info_fontweight);
				$blog_large_image_dividers_ql_post_info_letterspacing = new QodeField("textsimple","blog_large_image_dividers_ql_post_info_letterspacing","","字母间距 (px)","This is some description");
				$row3->addChild("blog_large_image_dividers_ql_post_info_letterspacing",$blog_large_image_dividers_ql_post_info_letterspacing);

		$blog_vertical_loop_subtitle = new QodeTitle("blog_vertical_loop_subtitle", "博客垂直循环风格");
		$panel2->addChild("blog_vertical_loop_subtitle", $blog_vertical_loop_subtitle);

		$group10 = new QodeGroup("标题风格","Define styles for title");
		$panel2->addChild("group10",$group10);
		$row1 = new QodeRow();
		$group10->addChild("row1",$row1);
		$blog_vertical_loop_title_color = new QodeField("colorsimple","blog_vertical_loop_title_color","","标题颜色","This is some description");
		$row1->addChild("blog_vertical_loop_title_color",$blog_vertical_loop_title_color);
		$blog_vertical_loop_title_hover_color = new QodeField("colorsimple","blog_vertical_loop_title_hover_color","","标题悬停颜色","This is some description");
		$row1->addChild("blog_vertical_loop_title_hover_color",$blog_vertical_loop_title_hover_color);
		$blog_vertical_loop_title_fontsize = new QodeField("textsimple","blog_vertical_loop_title_fontsize","","文字尺寸 (px)","This is some description");
		$row1->addChild("blog_vertical_loop_title_fontsize",$blog_vertical_loop_title_fontsize);
		$blog_vertical_loop_title_lineheight = new QodeField("textsimple","blog_vertical_loop_title_lineheight","","文字行高 (px)","This is some description");
		$row1->addChild("blog_vertical_loop_title_lineheight",$blog_vertical_loop_title_lineheight);
		$row2 = new QodeRow(true);
		$group10->addChild("row2",$row2);
		$blog_vertical_loop_title_texttransform = new QodeField("selectblanksimple","blog_vertical_loop_title_texttransform","","文本转换","This is some description",$options_texttransform);
		$row2->addChild("blog_vertical_loop_title_texttransform",$blog_vertical_loop_title_texttransform);
		$blog_vertical_loop_title_google_fonts = new QodeField("fontsimple","blog_vertical_loop_title_google_fonts","-1","字体系列","This is some description");
		$row2->addChild("blog_vertical_loop_title_google_fonts",$blog_vertical_loop_title_google_fonts);
		$blog_vertical_loop_title_fontstyle = new QodeField("selectblanksimple","blog_vertical_loop_title_fontstyle","","文字样式","This is some description",$options_fontstyle);
		$row2->addChild("blog_vertical_loop_title_fontstyle",$blog_vertical_loop_title_fontstyle);
		$blog_vertical_loop_title_fontweight = new QodeField("selectblanksimple","blog_vertical_loop_title_fontweight","","文字重量","This is some description",$options_fontweight);
		$row2->addChild("blog_vertical_loop_title_fontweight",$blog_vertical_loop_title_fontweight);
		$row3 = new QodeRow(true);
		$group10->addChild("row3",$row3);
		$blog_vertical_loop_title_letterspacing = new QodeField("textsimple","blog_vertical_loop_title_letterspacing","","字母间距 (px)","This is some description");
		$row3->addChild("blog_vertical_loop_title_letterspacing",$blog_vertical_loop_title_letterspacing);

		$group11 = new QodeGroup("Next Post Title Style","Define styles for next post title");
		$panel2->addChild("group11",$group11);
			$row1 = new QodeRow();
			$group11->addChild("row1",$row1);
				$blog_vertical_loop_next_post_title_color = new QodeField("colorsimple","blog_vertical_loop_next_post_title_color","","标题颜色","This is some description");
				$row1->addChild("blog_vertical_loop_next_post_title_color",$blog_vertical_loop_next_post_title_color);
				$blog_vertical_loop_next_post_title_fontsize = new QodeField("textsimple","blog_vertical_loop_next_post_title_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_vertical_loop_next_post_title_fontsize",$blog_vertical_loop_next_post_title_fontsize);
				$blog_vertical_loop_next_post_title_lineheight = new QodeField("textsimple","blog_vertical_loop_next_post_title_lineheight","","文字行高 (px)","This is some description");
				$row1->addChild("blog_vertical_loop_next_post_title_lineheight",$blog_vertical_loop_next_post_title_lineheight);
				$blog_vertical_loop_next_post_title_texttransform = new QodeField("selectblanksimple","blog_vertical_loop_next_post_title_texttransform","","文本转换","This is some description",$options_texttransform);
				$row1->addChild("blog_vertical_loop_next_post_title_texttransform",$blog_vertical_loop_next_post_title_texttransform);
			$row2 = new QodeRow(true);
			$group11->addChild("row2",$row2);
				$blog_vertical_loop_next_post_title_google_fonts = new QodeField("fontsimple","blog_vertical_loop_next_post_title_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_vertical_loop_next_post_title_google_fonts",$blog_vertical_loop_next_post_title_google_fonts);
				$blog_vertical_loop_next_post_title_fontstyle = new QodeField("selectblanksimple","blog_vertical_loop_next_post_title_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_vertical_loop_next_post_title_fontstyle",$blog_vertical_loop_next_post_title_fontstyle);
				$blog_vertical_loop_next_post_title_fontweight = new QodeField("selectblanksimple","blog_vertical_loop_next_post_title_fontweight","","文字重量","This is some description",$options_fontweight);
				$row2->addChild("blog_vertical_loop_next_post_title_fontweight",$blog_vertical_loop_next_post_title_fontweight);
				$blog_vertical_loop_next_post_title_letterspacing = new QodeField("textsimple","blog_vertical_loop_next_post_title_letterspacing","","字母间距 (px)","This is some description");
				$row2->addChild("blog_vertical_loop_next_post_title_letterspacing",$blog_vertical_loop_next_post_title_letterspacing);


			$group12 = new QodeGroup("文章信息风格","Define styles for post info");
			$panel2->addChild("group12",$group12);
				$row1 = new QodeRow();
				$group12->addChild("row1",$row1);
					$blog_vertical_loop_post_info_color = new QodeField("colorsimple","blog_vertical_loop_post_info_color","","文字颜色","This is some description");
					$row1->addChild("blog_vertical_loop_post_info_color",$blog_vertical_loop_post_info_color);
					$blog_vertical_loop_post_info_link_color = new QodeField("colorsimple","blog_vertical_loop_post_info_link_color","","链接颜色","This is some description");
					$row1->addChild("blog_vertical_loop_post_info_link_color",$blog_vertical_loop_post_info_link_color);
					$blog_vertical_loop_post_info_hover_color = new QodeField("colorsimple","blog_vertical_loop_post_info_hover_color","","链接悬停颜色","This is some description");
					$row1->addChild("blog_vertical_loop_post_info_hover_color",$blog_vertical_loop_post_info_hover_color);
					$blog_vertical_loop_post_info_fontsize = new QodeField("textsimple","blog_vertical_loop_post_info_fontsize","","文字尺寸 (px)","This is some description");
					$row1->addChild("blog_vertical_loop_post_info_fontsize",$blog_vertical_loop_post_info_fontsize);
				$row2 = new QodeRow(true);
				$group12->addChild("row2",$row2);
					$blog_vertical_loop_post_info_lineheight = new QodeField("textsimple","blog_vertical_loop_post_info_lineheight","","文字行高 (px)","This is some description");
					$row2->addChild("blog_vertical_loop_post_info_lineheight",$blog_vertical_loop_post_info_lineheight);
					$blog_vertical_loop_post_info_texttransform = new QodeField("selectblanksimple","blog_vertical_loop_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
					$row2->addChild("blog_vertical_loop_post_info_texttransform",$blog_vertical_loop_post_info_texttransform);
					$blog_vertical_loop_post_info_google_fonts = new QodeField("fontsimple","blog_vertical_loop_post_info_google_fonts","-1","字体系列","This is some description");
					$row2->addChild("blog_vertical_loop_post_info_google_fonts",$blog_vertical_loop_post_info_google_fonts);
					$blog_vertical_loop_post_info_fontstyle = new QodeField("selectblanksimple","blog_vertical_loop_post_info_fontstyle","","文字样式","This is some description",$options_fontstyle);
					$row2->addChild("blog_vertical_loop_post_info_fontstyle",$blog_vertical_loop_post_info_fontstyle);

			$row3 = new QodeRow(true);
			$group12->addChild("row3",$row3);
			$blog_vertical_loop_post_info_fontweight = new QodeField("selectblanksimple","blog_vertical_loop_post_info_fontweight","","文字重量","This is some description",$options_fontweight);
			$row3->addChild("blog_vertical_loop_post_info_fontweight",$blog_vertical_loop_post_info_fontweight);
			$blog_vertical_loop_post_info_letterspacing = new QodeField("textsimple","blog_vertical_loop_post_info_letterspacing","","字母间距 (px)","This is some description");
			$row3->addChild("blog_vertical_loop_post_info_letterspacing",$blog_vertical_loop_post_info_letterspacing);

			$group13 = new QodeGroup("引用/链接标题风格","Define styles for title");
			$panel2->addChild("group13",$group13);
			$row1 = new QodeRow();
			$group13->addChild("row1",$row1);
			$blog_vertical_loop_ql_title_color = new QodeField("colorsimple","blog_vertical_loop_ql_title_color","","标题颜色","This is some description");
			$row1->addChild("blog_vertical_loop_ql_title_color",$blog_vertical_loop_ql_title_color);
			$blog_vertical_loop_ql_title_hover_color = new QodeField("colorsimple","blog_vertical_loop_ql_title_hover_color","","标题悬停颜色","This is some description");
			$row1->addChild("blog_vertical_loop_ql_title_hover_color",$blog_vertical_loop_ql_title_hover_color);
			$blog_vertical_loop_ql_title_author_color = new QodeField("colorsimple","blog_vertical_loop_ql_title_author_color","","引用作者颜色","This is some description");
			$row1->addChild("blog_vertical_loop_ql_title_author_color",$blog_vertical_loop_ql_title_author_color);
			$blog_vertical_loop_ql_title_fontsize = new QodeField("textsimple","blog_vertical_loop_ql_title_fontsize","","文字尺寸 (px)","This is some description");
			$row1->addChild("blog_vertical_loop_ql_title_fontsize",$blog_vertical_loop_ql_title_fontsize);

			$row2 = new QodeRow(true);
			$group13->addChild("row2",$row2);
			$blog_vertical_loop_ql_title_lineheight = new QodeField("textsimple","blog_vertical_loop_ql_title_lineheight","","文字行高 (px)","This is some description");
			$row2->addChild("blog_vertical_loop_ql_title_lineheight",$blog_vertical_loop_ql_title_lineheight);
			$blog_vertical_loop_ql_title_texttransform = new QodeField("selectblanksimple","blog_vertical_loop_ql_title_texttransform","","文本转换","This is some description",$options_texttransform);
			$row2->addChild("blog_vertical_loop_ql_title_texttransform",$blog_vertical_loop_ql_title_texttransform);
			$blog_vertical_loop_ql_title_google_fonts = new QodeField("fontsimple","blog_vertical_loop_ql_title_google_fonts","-1","字体系列","This is some description");
			$row2->addChild("blog_vertical_loop_ql_title_google_fonts",$blog_vertical_loop_ql_title_google_fonts);
			$blog_vertical_loop_ql_title_fontstyle = new QodeField("selectblanksimple","blog_vertical_loop_ql_title_fontstyle","","文字样式","This is some description",$options_fontstyle);
			$row2->addChild("blog_vertical_loop_ql_title_fontstyle",$blog_vertical_loop_ql_title_fontstyle);

			$row3 = new QodeRow(true);
			$group13->addChild("row3",$row3);
			$blog_vertical_loop_ql_title_fontweight = new QodeField("selectblanksimple","blog_vertical_loop_ql_title_fontweight","","文字重量","This is some description",$options_fontweight);
			$row3->addChild("blog_vertical_loop_ql_title_fontweight",$blog_vertical_loop_ql_title_fontweight);
			$blog_vertical_loop_ql_title_letterspacing = new QodeField("textsimple","blog_vertical_loop_ql_title_letterspacing","","字母间距 (px)","This is some description");
			$row3->addChild("blog_vertical_loop_ql_title_letterspacing",$blog_vertical_loop_ql_title_letterspacing);

			$group14 = new QodeGroup("引用/链接文章信息","Define styles for Quote/Link post info");
			$panel2->addChild("group14",$group14);
			$row1 = new QodeRow();
			$group14->addChild("row1",$row1);
			$blog_vertical_loop_ql_post_info_color = new QodeField("colorsimple","blog_vertical_loop_ql_post_info_color","","文字颜色","This is some description");
			$row1->addChild("blog_vertical_loop_ql_post_info_color",$blog_vertical_loop_ql_post_info_color);
			$blog_vertical_loop_ql_post_info_link_color = new QodeField("colorsimple","blog_vertical_loop_ql_post_info_link_color","","链接颜色","This is some description");
			$row1->addChild("blog_vertical_loop_ql_post_info_link_color",$blog_vertical_loop_ql_post_info_link_color);
			$blog_vertical_loop_ql_post_info_hover_color = new QodeField("colorsimple","blog_vertical_loop_ql_post_info_hover_color","","链接悬停颜色","This is some description");
			$row1->addChild("blog_vertical_loop_ql_post_info_hover_color",$blog_vertical_loop_ql_post_info_hover_color);
			$blog_vertical_loop_ql_post_info_fontsize = new QodeField("textsimple","blog_vertical_loop_ql_post_info_fontsize","","文字尺寸 (px)","This is some description");
			$row1->addChild("blog_vertical_loop_ql_post_info_fontsize",$blog_vertical_loop_ql_post_info_fontsize);

			$row2 = new QodeRow(true);
			$group14->addChild("row2",$row2);
			$blog_vertical_loop_ql_post_info_lineheight = new QodeField("textsimple","blog_vertical_loop_ql_post_info_lineheight","","文字行高 (px)","This is some description");
			$row2->addChild("blog_vertical_loop_ql_post_info_lineheight",$blog_vertical_loop_ql_post_info_lineheight);
			$blog_vertical_loop_ql_post_info_texttransform = new QodeField("selectblanksimple","blog_vertical_loop_ql_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
			$row2->addChild("blog_vertical_loop_ql_post_info_texttransform",$blog_vertical_loop_ql_post_info_texttransform);
			$blog_vertical_loop_ql_post_info_google_fonts = new QodeField("fontsimple","blog_vertical_loop_ql_post_info_google_fonts","-1","字体系列","This is some description");
			$row2->addChild("blog_vertical_loop_ql_post_info_google_fonts",$blog_vertical_loop_ql_post_info_google_fonts);
			$blog_vertical_loop_ql_post_info_fontstyle = new QodeField("selectblanksimple","blog_vertical_loop_ql_post_info_fontstyle","","文字样式","This is some description",$options_fontstyle);
			$row2->addChild("blog_vertical_loop_ql_post_info_fontstyle",$blog_vertical_loop_ql_post_info_fontstyle);

			$row3 = new QodeRow(true);
			$group14->addChild("row3",$row3);
			$blog_vertical_loop_ql_post_info_fontweight = new QodeField("selectblanksimple","blog_vertical_loop_ql_post_info_fontweight","","文字重量","This is some description",$options_fontweight);
			$row3->addChild("blog_vertical_loop_ql_post_info_fontweight",$blog_vertical_loop_ql_post_info_fontweight);
			$blog_vertical_loop_ql_post_info_letterspacing = new QodeField("textsimple","blog_vertical_loop_ql_post_info_letterspacing","","字母间距 (px)","This is some description");
			$row3->addChild("blog_vertical_loop_ql_post_info_letterspacing",$blog_vertical_loop_ql_post_info_letterspacing);

			$group15 = new QodeGroup("上一个/下一个按钮风格","Define styles next/prev buttons");
			$panel2->addChild("group15",$group15);
			$row1 = new QodeRow();
			$group15->addChild("row1",$row1);
			$blog_vertical_loop_npb_background_color = new QodeField("colorsimple","blog_vertical_loop_npb_background_color","","背景颜色","This is some description");
			$row1->addChild("blog_vertical_loop_npb_background_color",$blog_vertical_loop_npb_background_color);

			$blog_vertical_loop_npb_background_hover_color = new QodeField("colorsimple","blog_vertical_loop_npb_background_hover_color","","背景悬停颜色","This is some description");
			$row1->addChild("blog_vertical_loop_npb_background_hover_color",$blog_vertical_loop_npb_background_hover_color);

			$blog_vertical_loop_npb_icon_color = new QodeField("colorsimple","blog_vertical_loop_npb_icon_color","","图标颜色","This is some description");
			$row1->addChild("blog_vertical_loop_npb_icon_color",$blog_vertical_loop_npb_icon_color);

			$blog_vertical_loop_npb_icon_hover_color = new QodeField("colorsimple","blog_vertical_loop_npb_icon_hover_color","","图标悬停颜色","This is some description");
			$row1->addChild("blog_vertical_loop_npb_icon_hover_color",$blog_vertical_loop_npb_icon_hover_color);

	$blog_masonry_date_image_subtitle = new QodeTitle("blog_masonry_date_image_subtitle", "瀑布流 - 日期在图像中");
	$panel2->addChild("blog_masonry_date_image_subtitle", $blog_masonry_date_image_subtitle);

	$group16 = new QodeGroup("瀑布流 - 日期在图像中",'选择博客瀑布流背景颜色 - 日期在图像中');
	$panel2->addChild("group16",$group16);
		$row1 = new QodeRow();
		$group16->addChild("row1",$row1);
			$blog_masonry_date_image_background_color = new QodeField("colorsimple","blog_masonry_date_image_background_color","","文字边框背景颜色","ThisIsDescription");
			$row1->addChild("blog_masonry_date_image_background_color",$blog_masonry_date_image_background_color);

		$group17 = new QodeGroup("标题风格","Define styles for title");
		$panel2->addChild("group17",$group17);
			$row1 = new QodeRow();
			$group17->addChild("row1",$row1);
				$blog_masonry_date_image_title_color = new QodeField("colorsimple","blog_masonry_date_image_title_color","","标题颜色","This is some description");
				$row1->addChild("blog_masonry_date_image_title_color",$blog_masonry_date_image_title_color);
				$blog_masonry_date_image_title_hover_color = new QodeField("colorsimple","blog_masonry_date_image_title_hover_color","","标题悬停颜色","This is some description");
				$row1->addChild("blog_masonry_date_image_title_hover_color",$blog_masonry_date_image_title_hover_color);
				$blog_masonry_date_image_title_fontsize = new QodeField("textsimple","blog_masonry_date_image_title_fontsize","","文字尺寸 (px)","This is some description");
				$row1->addChild("blog_masonry_date_image_title_fontsize",$blog_masonry_date_image_title_fontsize);
				$blog_masonry_date_image_title_lineheight = new QodeField("textsimple","blog_masonry_date_image_title_lineheight","","文字行高 (px)","This is some description");
				$row1->addChild("blog_masonry_date_image_title_lineheight",$blog_masonry_date_image_title_lineheight);

			$row2 = new QodeRow(true);
			$group17->addChild("row2",$row2);
				$blog_masonry_date_image_title_texttransform = new QodeField("selectblanksimple","blog_masonry_date_image_title_texttransform","","文本转换","This is some description",$options_texttransform);
				$row2->addChild("blog_masonry_date_image_title_texttransform",$blog_masonry_date_image_title_texttransform);
				$blog_masonry_date_image_title_google_fonts = new QodeField("fontsimple","blog_masonry_date_image_title_google_fonts","-1","字体系列","This is some description");
				$row2->addChild("blog_masonry_date_image_title_google_fonts",$blog_masonry_date_image_title_google_fonts);
				$blog_masonry_date_image_title_fontstyle = new QodeField("selectblanksimple","blog_masonry_date_image_title_fontstyle","","文字样式","This is some description",$options_fontstyle);
				$row2->addChild("blog_masonry_date_image_title_fontstyle",$blog_masonry_date_image_title_fontstyle);
				$blog_masonry_date_image_title_fontweight = new QodeField("selectblanksimple","blog_masonry_date_image_title_fontweight","","文字重量","This is some description",$options_fontweight);
				$row2->addChild("blog_masonry_date_image_title_fontweight",$blog_masonry_date_image_title_fontweight);

			$row3 = new QodeRow(true);
			$group17->addChild("row3",$row3);
				$blog_masonry_date_image_title_letterspacing = new QodeField("textsimple","blog_masonry_date_image_title_letterspacing","","字母间距 (px)","This is some description");
				$row3->addChild("blog_masonry_date_image_title_letterspacing",$blog_masonry_date_image_title_letterspacing);

// Blog Single

$panel3 = new QodePanel("博客内页", "blog_single_panel");
$blogPage->addChild("panel3",$panel3);

	$blog_single_sidebar = new QodeField("select","blog_single_sidebar","default","侧边栏布局","Choose a sidebar layout for Blog Single pages", array( "default" => "无侧边栏",
       "1" => "侧边栏 1/3 右",
       "2" => "侧边栏 1/4 右",
       "3" => "侧边栏 1/3 左",
       "4" => "侧边栏 1/4 左"
      ));
	$panel3->addChild("blog_single_sidebar",$blog_single_sidebar);
	
	$custom_sidebars = array();
	foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {
		if(isUserMadeSidebar(ucwords($sidebar['name']))){
			$custom_sidebars[$sidebar['id']] = ucwords( $sidebar['name']);
		}
	}
	$blog_single_sidebar_custom_display = new QodeField("selectblank","blog_single_sidebar_custom_display","","显示的侧边栏","Choose a sidebar to display on Blog Single pages", $custom_sidebars);
	$panel3->addChild("blog_single_sidebar_custom_display",$blog_single_sidebar_custom_display);

	$blog_author_info = new QodeField("yesno","blog_author_info","no","显示博客作者","Enabling this option will display author name on Blog Single pages");
	$panel3->addChild("blog_author_info",$blog_author_info);

	$group1 = new QodeGroup("博客内页间距","Set spacing for blog single posts");
	$panel3->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$blog_single_image_margin_bottom = new QodeField("textsimple","blog_single_image_margin_bottom","","图像外边距底部 (px)", "This is some description");
			$row1->addChild("blog_single_image_margin_bottom",$blog_single_image_margin_bottom);
			$blog_single_title_margin_bottom = new QodeField("textsimple","blog_single_title_margin_bottom","","标题外边距底部 (px)", "This is some description");
			$row1->addChild("blog_single_title_margin_bottom",$blog_single_title_margin_bottom);
			$blog_single_post_info_margin_bottom = new QodeField("textsimple","blog_single_post_info_margin_bottom","","文章信息外边距底部 (px)", "This is some description");
			$row1->addChild("blog_single_post_info_margin_bottom",$blog_single_post_info_margin_bottom);

// Quote/Link

$panel1 = new QodePanel("引用/链接","quote_link_panel" );
$blogPage->addChild("panel1",$panel1);
	$blog_quote_link_box_color = new QodeField("color","blog_quote_link_box_color","","框背景颜色",'Choose a box background color for "Quote" and "Link" type blog displays');
	$panel1->addChild("blog_quote_link_box_color",$blog_quote_link_box_color);


$panel4 = new QodePanel("博客滑块", "blog_slider_panel");
$blogPage->addChild("panel4",$panel4);

	$blog_slider_default_subtitle = new QodeTitle("blog_slider_default_subtitle", "博客轮播滑块样式");
	$panel4->addChild("blog_slider_default_subtitle", $blog_slider_default_subtitle);

	$group1 = new QodeGroup("标题风格","Define styles for title");
	$panel4->addChild("group1",$group1);

		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);

			$blog_slider_title_color = new QodeField("colorsimple","blog_slider_title_color","","标题颜色","This is some description");
			$row1->addChild("blog_slider_title_color",$blog_slider_title_color);
			$blog_slider_title_hover_color = new QodeField("colorsimple","blog_slider_title_hover_color","","标题悬停颜色","This is some description");
			$row1->addChild("blog_slider_title_hover_color",$blog_slider_title_hover_color);
			$blog_slider_title_fontsize = new QodeField("textsimple","blog_slider_title_fontsize","","文字尺寸 (px)","This is some description");
			$row1->addChild("blog_slider_title_fontsize",$blog_slider_title_fontsize);
			$blog_slider_title_lineheight = new QodeField("textsimple","blog_slider_title_lineheight","","文字行高 (px)","This is some description");
			$row1->addChild("blog_slider_title_lineheight",$blog_slider_title_lineheight);

		$row2 = new QodeRow();
		$group1->addChild("row2",$row2);

			$blog_slider_title_texttransform = new QodeField("selectblanksimple","blog_slider_title_texttransform","","文本转换","This is some description",$options_texttransform);
			$row2->addChild("blog_slider_title_texttransform",$blog_slider_title_texttransform);
			$blog_slider_title_google_fonts = new QodeField("fontsimple","blog_slider_title_google_fonts","-1","字体系列","This is some description");
			$row2->addChild("blog_slider_title_google_fonts",$blog_slider_title_google_fonts);
			$blog_slider_title_fontstyle = new QodeField("selectblanksimple","blog_slider_title_fontstyle","","文字样式","This is some description",$options_fontstyle);
			$row2->addChild("blog_slider_title_fontstyle",$blog_slider_title_fontstyle);
			$blog_slider_title_fontweight = new QodeField("selectblanksimple","blog_slider_title_fontweight","","文字重量","This is some description",$options_fontweight);
			$row2->addChild("blog_slider_title_fontweight",$blog_slider_title_fontweight);

		$row3 = new QodeRow();
		$group1->addChild("row3",$row3);

			$blog_slider_title_letterspacing = new QodeField("textsimple","blog_slider_title_letterspacing","","字母间距 (px)","This is some description");
			$row3->addChild("blog_slider_title_letterspacing",$blog_slider_title_letterspacing);

	$group2 = new QodeGroup("文章信息风格","Define styles for post info");
	$panel4->addChild("group2",$group2);

		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);

			$blog_slider_post_info_color = new QodeField("colorsimple","blog_slider_post_info_color","","颜色","This is some description");
			$row1->addChild("blog_slider_post_info_color",$blog_slider_post_info_color);

			$blog_slider_post_info_link_color = new QodeField("colorsimple","blog_slider_post_info_link_color","","链接颜色","This is some description");
			$row1->addChild("blog_slider_post_info_link_color",$blog_slider_post_info_link_color);

			$blog_slider_post_info_link_hover_color = new QodeField("colorsimple","blog_slider_post_info_link_hover_color","","链接悬停颜色","This is some description");
			$row1->addChild("blog_slider_post_info_link_hover_color",$blog_slider_post_info_link_hover_color);

			$blog_slider_post_info_fontsize = new QodeField("textsimple","blog_slider_post_info_fontsize","","文字尺寸 (px)","This is some description");
			$row1->addChild("blog_slider_post_info_fontsize",$blog_slider_post_info_fontsize);

		$row2 = new QodeRow(true);
		$group2->addChild("row2",$row2);

			$blog_slider_post_info_lineheight = new QodeField("textsimple","blog_slider_post_info_lineheight","","文字行高 (px)","This is some description");
			$row2->addChild("blog_slider_post_info_lineheight",$blog_slider_post_info_lineheight);

			$blog_slider_post_info_texttransform = new QodeField("selectblanksimple","blog_slider_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
			$row2->addChild("blog_slider_post_info_texttransform",$blog_slider_post_info_texttransform);

			$blog_slider_post_info_google_fonts = new QodeField("fontsimple","blog_slider_post_info_google_fonts","-1","字体系列","This is some description");
			$row2->addChild("blog_slider_post_info_google_fonts",$blog_slider_post_info_google_fonts);

			$blog_slider_post_info_fontstyle = new QodeField("selectblanksimple","blog_slider_post_info_fontstyle","","文字样式","This is some description",$options_fontstyle);
			$row2->addChild("blog_slider_post_info_fontstyle",$blog_slider_post_info_fontstyle);

		$row3 = new QodeRow();
		$group2->addChild("row3",$row3);

			$blog_slider_post_info_fontweight = new QodeField("selectblanksimple","blog_slider_post_info_fontweight","","文字重量","This is some description",$options_fontweight);
			$row3->addChild("blog_slider_post_info_fontweight",$blog_slider_post_info_fontweight);

			$blog_slider_post_info_letterspacing = new QodeField("textsimple","blog_slider_post_info_letterspacing","","字母间距 (px)","This is some description");
			$row3->addChild("blog_slider_post_info_letterspacing",$blog_slider_post_info_letterspacing);

	$group9 = new QodeGroup("日风格","Define styles for post info - Day, for Post Info Position - Bottom (if not set, it will be inherited from Post Info Style)");
	$panel4->addChild("group9",$group9);

		$row1 = new QodeRow();
		$group9->addChild("row1",$row1);

			$blog_slider_day_color = new QodeField("colorsimple","blog_slider_day_color","","颜色","This is some description");
			$row1->addChild("blog_slider_day_color",$blog_slider_day_color);

			$blog_slider_day_fontsize = new QodeField("textsimple","blog_slider_day_fontsize","","文字尺寸 (px)","This is some description");
			$row1->addChild("blog_slider_day_fontsize",$blog_slider_day_fontsize);

			$blog_slider_day_lineheight = new QodeField("textsimple","blog_slider_day_lineheight","","文字行高 (px)","This is some description");
			$row1->addChild("blog_slider_day_lineheight",$blog_slider_day_lineheight);

			$blog_slider_day_texttransform = new QodeField("selectblanksimple","blog_slider_day_texttransform","","文本转换","This is some description",$options_texttransform);
			$row1->addChild("blog_slider_day_texttransform",$blog_slider_day_texttransform);

		$row2 = new QodeRow(true);
		$group9->addChild("row2",$row2);

			$blog_slider_day_google_fonts = new QodeField("fontsimple","blog_slider_day_google_fonts","-1","字体系列","This is some description");
			$row2->addChild("blog_slider_day_google_fonts",$blog_slider_day_google_fonts);

			$blog_slider_day_fontstyle = new QodeField("selectblanksimple","blog_slider_day_fontstyle","","文字样式","This is some description",$options_fontstyle);
			$row2->addChild("blog_slider_day_fontstyle",$blog_slider_day_fontstyle);

			$blog_slider_day_fontweight = new QodeField("selectblanksimple","blog_slider_day_fontweight","","文字重量","This is some description",$options_fontweight);
			$row2->addChild("blog_slider_day_fontweight",$blog_slider_day_fontweight);

			$blog_slider_day_letterspacing = new QodeField("textsimple","blog_slider_day_letterspacing","","字母间距 (px)","This is some description");
			$row2->addChild("blog_slider_day_letterspacing",$blog_slider_day_letterspacing);

	$group3 = new QodeGroup("博客滑块间距", "Define spacing for blog slider content");
	$panel4->addChild("group3",$group3);

		$row1 = new QodeRow();
		$group3->addChild("row1",$row1);

			$blog_slider_title_bottom_margin = new QodeField("textsimple","blog_slider_title_bottom_margin","","标题外边距底部 (px)","This is some description");
			$row1->addChild("blog_slider_title_bottom_margin",$blog_slider_title_bottom_margin);

			$blog_slider_date_bottom_margin = new QodeField("textsimple","blog_slider_date_bottom_margin","","日期外边距底部 (px)","This is some description");
			$row1->addChild("blog_slider_date_bottom_margin",$blog_slider_date_bottom_margin);

			$blog_slider_day_margin = new QodeField("textsimple","blog_slider_day_margin","","日外边距底部 (px)","This is some description");
			$row1->addChild("blog_slider_day_margin",$blog_slider_day_margin);

	$blog_slider_simple_subtitle = new QodeTitle("blog_slider_simple_subtitle", "博客简单滑块风格");
	$panel4->addChild("blog_slider_simple_subtitle", $blog_slider_simple_subtitle);

	$group4 = new QodeGroup("标题风格","Define styles for title");
	$panel4->addChild("group4",$group4);

		$row1 = new QodeRow();
		$group4->addChild("row1",$row1);

			$blog_slsimple_title_color = new QodeField("colorsimple","blog_slsimple_title_color","","标题颜色","This is some description");
			$row1->addChild("blog_slsimple_title_color",$blog_slsimple_title_color);
			$blog_slsimple_title_hover_color = new QodeField("colorsimple","blog_slsimple_title_hover_color","","标题悬停颜色","This is some description");
			$row1->addChild("blog_slsimple_title_hover_color",$blog_slsimple_title_hover_color);
			$blog_slsimple_title_fontsize = new QodeField("textsimple","blog_slsimple_title_fontsize","","文字尺寸 (px)","This is some description");
			$row1->addChild("blog_slsimple_title_fontsize",$blog_slsimple_title_fontsize);
			$blog_slsimple_title_lineheight = new QodeField("textsimple","blog_slsimple_title_lineheight","","文字行高 (px)","This is some description");
			$row1->addChild("blog_slsimple_title_lineheight",$blog_slsimple_title_lineheight);

		$row2 = new QodeRow();
		$group4->addChild("row2",$row2);

			$blog_slsimple_title_texttransform = new QodeField("selectblanksimple","blog_slsimple_title_texttransform","","文本转换","This is some description",$options_texttransform);
			$row2->addChild("blog_slsimple_title_texttransform",$blog_slsimple_title_texttransform);
			$blog_slsimple_title_google_fonts = new QodeField("fontsimple","blog_slsimple_title_google_fonts","-1","字体系列","This is some description");
			$row2->addChild("blog_slsimple_title_google_fonts",$blog_slsimple_title_google_fonts);
			$blog_slsimple_title_fontstyle = new QodeField("selectblanksimple","blog_slsimple_title_fontstyle","","文字样式","This is some description",$options_fontstyle);
			$row2->addChild("blog_slsimple_title_fontstyle",$blog_slsimple_title_fontstyle);
			$blog_slsimple_title_fontweight = new QodeField("selectblanksimple","blog_slsimple_title_fontweight","","文字重量","This is some description",$options_fontweight);
			$row2->addChild("blog_slsimple_title_fontweight",$blog_slsimple_title_fontweight);

		$row3 = new QodeRow();
		$group4->addChild("row3",$row3);

			$blog_slsimple_title_letterspacing = new QodeField("textsimple","blog_slsimple_title_letterspacing","","字母间距 (px)","This is some description");
			$row3->addChild("blog_slsimple_title_letterspacing",$blog_slsimple_title_letterspacing);

	$group5 = new QodeGroup("文章信息风格","Define styles for post info");
	$panel4->addChild("group5",$group5);

		$row1 = new QodeRow();
		$group5->addChild("row1",$row1);

			$blog_slsimple_post_info_color = new QodeField("colorsimple","blog_slsimple_post_info_color","","颜色","This is some description");
			$row1->addChild("blog_slsimple_post_info_color",$blog_slsimple_post_info_color);

			$blog_slsimple_post_info_link_color = new QodeField("colorsimple","blog_slsimple_post_info_link_color","","链接颜色","This is some description");
			$row1->addChild("blog_slsimple_post_info_link_color",$blog_slsimple_post_info_link_color);

			$blog_slsimple_post_info_link_hover_color = new QodeField("colorsimple","blog_slsimple_post_info_link_hover_color","","链接悬停颜色","This is some description");
			$row1->addChild("blog_slsimple_post_info_link_hover_color",$blog_slsimple_post_info_link_hover_color);

			$blog_slsimple_post_info_fontsize = new QodeField("textsimple","blog_slsimple_post_info_fontsize","","文字尺寸 (px)","This is some description");
			$row1->addChild("blog_slsimple_post_info_fontsize",$blog_slsimple_post_info_fontsize);

		$row2 = new QodeRow();
		$group5->addChild("row2",$row2);

			$blog_slsimple_post_info_lineheight = new QodeField("textsimple","blog_slsimple_post_info_lineheight","","文字行高 (px)","This is some description");
			$row2->addChild("blog_slsimple_post_info_lineheight",$blog_slsimple_post_info_lineheight);

			$blog_slsimple_post_info_texttransform = new QodeField("selectblanksimple","blog_slsimple_post_info_texttransform","","文本转换","This is some description",$options_texttransform);
			$row2->addChild("blog_slsimple_post_info_texttransform",$blog_slsimple_post_info_texttransform);

			$blog_slsimple_post_info_google_fonts = new QodeField("fontsimple","blog_slsimple_post_info_google_fonts","-1","字体系列","This is some description");
			$row2->addChild("blog_slsimple_post_info_google_fonts",$blog_slsimple_post_info_google_fonts);

			$blog_slsimple_post_info_fontstyle = new QodeField("selectblanksimple","blog_slsimple_post_info_fontstyle","","文字样式","This is some description",$options_fontstyle);
			$row2->addChild("blog_slsimple_post_info_fontstyle",$blog_slsimple_post_info_fontstyle);

		$row3 = new QodeRow();
		$group5->addChild("row3",$row3);

			$blog_slsimple_post_info_fontweight = new QodeField("selectblanksimple","blog_slsimple_post_info_fontweight","","文字重量","This is some description",$options_fontweight);
			$row3->addChild("blog_slsimple_post_info_fontweight",$blog_slsimple_post_info_fontweight);

			$blog_slsimple_post_info_letterspacing = new QodeField("textsimple","blog_slsimple_post_info_letterspacing","","字母间距 (px)","This is some description");
			$row3->addChild("blog_slsimple_post_info_letterspacing",$blog_slsimple_post_info_letterspacing);

	$group6 = new QodeGroup("博客滑块间距", "Define spacing for blog slider content");
	$panel4->addChild("group6",$group6);

		$row1 = new QodeRow();
		$group6->addChild("row1",$row1);

			$blog_slsimple_title_bottom_margin = new QodeField("textsimple","blog_slsimple_title_bottom_margin","","标题外边距下 (px)","This is some description");
			$row1->addChild("blog_slsimple_title_bottom_margin",$blog_slsimple_title_bottom_margin);

			$blog_slsimple_post_info_bottom_margin = new QodeField("textsimple","blog_slsimple_post_info_bottom_margin","","文章信息外边距下 (px)","This is some description");
			$row1->addChild("blog_slsimple_post_info_bottom_margin",$blog_slsimple_post_info_bottom_margin);

			$blog_slsimple_excerpt_bottom_margin = new QodeField("textsimple","blog_slsimple_excerpt_bottom_margin","","摘录外边距下 (px)","This is some description");
			$row1->addChild("blog_slsimple_excerpt_bottom_margin",$blog_slsimple_excerpt_bottom_margin);

	$group7 = new QodeGroup("框样式", "Define style for box");
	$panel4->addChild("group7",$group7);

		$row1 = new QodeRow();
		$group7->addChild("row1",$row1);

			$blog_slider_box_background_color = new QodeField("colorsimple","blog_slider_box_background_color","","背景颜色","This is some description");
			$row1->addChild("blog_slider_box_background_color",$blog_slider_box_background_color);

			$blog_slider_box_background_opacity = new QodeField("textsimple","blog_slider_box_background_opacity","","背景不透明度 (0-1)","This is some description");
			$row1->addChild("blog_slider_box_background_opacity",$blog_slider_box_background_opacity);

			$blog_slider_box_border_color = new QodeField("colorsimple","blog_slider_box_border_color","","边框颜色","This is some description");
			$row1->addChild("blog_slider_box_border_color",$blog_slider_box_border_color);

			$blog_slider_box_border_opacity = new QodeField("textsimple","blog_slider_box_border_opacity","","边框不透明度 (0-1)","This is some description");
			$row1->addChild("blog_slider_box_border_opacity",$blog_slider_box_border_opacity);

		$row2 = new QodeRow();
		$group7->addChild("row2",$row2);

			$blog_slider_box_padding_top = new QodeField("textsimple","blog_slider_box_padding_top","","内边距上 (px)","This is some description");
			$row2->addChild("blog_slider_box_padding_top",$blog_slider_box_padding_top);

			$blog_slider_box_padding_right = new QodeField("textsimple","blog_slider_box_padding_right","","内边距右 (px)","This is some description");
			$row2->addChild("blog_slider_box_padding_right",$blog_slider_box_padding_right);

			$blog_slider_box_padding_bottom = new QodeField("textsimple","blog_slider_box_padding_bottom","","内边距下 (px)","This is some description");
			$row2->addChild("blog_slider_box_padding_bottom",$blog_slider_box_padding_bottom);

			$blog_slider_box_padding_left = new QodeField("textsimple","blog_slider_box_padding_left","","内边距左 (px)","This is some description");
			$row2->addChild("blog_slider_box_padding_left",$blog_slider_box_padding_left);

		$row3 = new QodeRow();
		$group7->addChild("row3",$row3);

			$blog_slider_box_width = new QodeField("textsimple","blog_slider_box_width","","宽度 (%)","This is some description");
			$row2->addChild("blog_slider_box_width",$blog_slider_box_width);