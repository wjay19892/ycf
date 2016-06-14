<?php
$qode_custom_sidebars = array();
foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {
	if(isUserMadeSidebar(ucwords($sidebar['name']))){
		$qode_custom_sidebars[$sidebar['id']] = ucwords( $sidebar['name']);
	}
}


$qode_blog_categories = array();
$categories = get_categories(); 
foreach($categories as $category) {
	$qode_blog_categories[$category->term_id] = $category->name;
}

//Qode Slide Type

$qodeSlideType = new QodeMetaBox("slides", "Qode 滑块类型");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_type",$qodeSlideType);

	$qode_slide_background_type = new QodeMetaField("imagevideo","qode_slide-background-type","image","滑块背景类型","Do you want to upload an image or video?", array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef-meta-box-slides_video_settings", "dependence_show_on_yes" => "#qodef-meta-box-slides_image_settings"));
	$qodeSlideType->addChild("qode_slide-background-type",$qode_slide_background_type);

//Qode Slide Image

$qodeSlideImageSettings = new QodeMetaBox("slides", "Qode 滑块图像","qode_slide-background-type",array("video"));
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_image_settings",$qodeSlideImageSettings);

	$qode_slide_image = new QodeMetaField("image","qode_slide-image","","滑块图像","Choose background image");
	$qodeSlideImageSettings->addChild("qode_title-image",$qode_slide_image);
	
	$qode_slide_overlay_image = new QodeMetaField("image","qode_slide-overlay-image","","覆盖图像","Choose overlay image (pattern) for background image");
	$qodeSlideImageSettings->addChild("qode_slide-overlay-image",$qode_slide_overlay_image);
	
	$qode_enable_image_animation = new QodeMetaField("yesno", "qode_enable_image_animation", "no", "启用图像动画", "Enabling this option will turn on a motion animation on the slide image", array(), array(
        "dependence" => "true",
        "dependence_hide_on_yes" => "",
        "dependence_show_on_yes" => "#qodef_qode_enable_image_animation_container"
    ));
	$qodeSlideImageSettings->addChild('qode_enable_image_animation', $qode_enable_image_animation);
	
	$qode_enable_image_animation_container = new QodeContainer("qode_enable_image_animation_container", "qode_enable_image_animation", "no");
	$qodeSlideImageSettings->addChild("qode_enable_image_animation_container", $qode_enable_image_animation_container);
	
	$qode_enable_image_animation_type = new QodeMetaField("select","qode_enable_image_animation_type","zoom_center","动画类型","", array(
        "zoom_center" => "Zoom In Center",
        "zoom_top_left" => "Zoom In to Top Left",
        "zoom_top_right" => "Zoom In to Top Right",
        "zoom_bottom_left" => "Zoom In to Bottom Left",
        "zoom_bottom_right" => "Zoom In to Bottom Right"
    ));
    $qode_enable_image_animation_container->addChild("qode_enable_image_animation_type",$qode_enable_image_animation_type);

//Qode Slide Video

$qodeSlideVideoSettings = new QodeMetaBox("slides", "Qode 滑块视频","qode_slide-background-type",array("image"));
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_video_settings",$qodeSlideVideoSettings);

	$qode_slide_video_webm = new QodeMetaField("text","qode_slide-video-webm","","视频 - webm","Path to the webm file that you have previously uploaded in Media Section");
	$qodeSlideVideoSettings->addChild("qode_slide-video-webm",$qode_slide_video_webm);
	
	$qode_slide_video_mp4 = new QodeMetaField("text","qode_slide-video-mp4","","视频 - mp4","Path to the mp4 file that you have previously uploaded in Media Section");
	$qodeSlideVideoSettings->addChild("qode_slide-video-mp4",$qode_slide_video_mp4);
	
	$qode_slide_video_ogv = new QodeMetaField("text","qode_slide-video-ogv","","视频 - ogv","Path to the ogv file that you have previously uploaded in Media Section");
	$qodeSlideVideoSettings->addChild("qode_slide-video-ogv",$qode_slide_video_ogv);

	$qode_slide_video_image = new QodeMetaField("image","qode_slide-video-image","","视频预览图像","Choose background image that will be visible until video is loaded. This image will be shown on touch devices too.");
	$qodeSlideVideoSettings->addChild("qode_slide-video-image",$qode_slide_video_image);
	
	$qode_slide_video_overlay = new QodeMetaField("yesempty","qode_slide-video-overlay","","视频覆盖图像","Do you want to have an overlay image on video? ", array(),
			array("dependence" => true,
			"dependence_hide_on_yes" => "",
			"dependence_show_on_yes" => "#qodef_qode_slide-video-overlay_container"));
	$qodeSlideVideoSettings->addChild("qode_slide-video-overlay",$qode_slide_video_overlay);
	
	$qode_slide_video_overlay_container = new QodeContainer("qode_slide-video-overlay_container","qode_slide-video-overlay","");
	$qodeSlideVideoSettings->addChild("qode_slide_video_overlay_container",$qode_slide_video_overlay_container);
	
		$qode_slide_video_overlay_image = new QodeMetaField("image","qode_slide-video-overlay-image","","覆盖图像","Choose overlay image (pattern) for background video");
		$qode_slide_video_overlay_container->addChild("qode_slide-video-overlay-image",$qode_slide_video_overlay_image);

//Qode Slide General

$qodeSlideGeneral = new QodeMetaBox("slides", "Qode 滑块常规");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_layout",$qodeSlideGeneral);
	
	$qode_slide_header_style = new QodeMetaField("selectblank","qode_slide-header-style","","头部皮肤","Header skin will be applied when this slide is in focus", array(
	    "light" => "Light",
	    "dark" => "Dark"
	));
	$qodeSlideGeneral->addChild("qode_slide-header-style",$qode_slide_header_style);
	
	$qode_slide_navigation_color = new QodeMetaField("color","qode_slide-navigation-color","","导航颜色","Navigation color will be applied when this slide is in focus");
	$qodeSlideGeneral->addChild("qode_slide-navigation-color",$qode_slide_navigation_color);
	
	$qode_slide_scroll_to_section = new QodeMetaField("text","qode_slide-anchor-button","","滚动到区域","An arrow will appear to take viewers to the next section of the page. Enter the section anchor here, for example, '#contact'");
	$qodeSlideGeneral->addChild("qode_slide-anchor-button",$qode_slide_scroll_to_section);

	$qode_slide_hide_title = new QodeMetaField("yesempty","qode_slide-hide-title","","隐藏滑块标题","Do you want to hide slide title?", array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef-meta-box-slides_title", "dependence_show_on_yes" => ""));
	$qodeSlideGeneral->addChild("qode_slide-hide-title",$qode_slide_hide_title);

    $qode_slide_hide_shadow = new QodeMetaField("yesempty","qode_slide-hide-shadow","","不显示滑块文字阴影","Do you want to hide text shadow?");
    $qodeSlideGeneral->addChild("qode_slide-hide-shadow",$qode_slide_hide_shadow);

    $qode_slide_thumbnail_animation = new QodeMetaField("select","qode_slide-thumbnail-animation","","图形动画","This is how the graphic will enter the slide", array(
        "flip" => "Flip",
        "fade" => "Fade"
    ));
    $qodeSlideGeneral->addChild("qode_slide-thumbnail-animation",$qode_slide_thumbnail_animation);

    $qode_slide_content_animation = new QodeMetaField("select","qode_slide-content-animation","","内容动画","This is how content (title, subtitle, text and buttons) will enter the slide", array(
        "all_at_once" => "All At Once",
        "one_by_one" => "One By One"
    ));
    $qodeSlideGeneral->addChild("qode_slide-content-animation",$qode_slide_content_animation);

//Qode Slide Title

$qodeSlideTitle = new QodeMetaBox("slides", "Qode 滑块标题","qode_slide-hide-title",array("yes"));
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_title",$qodeSlideTitle);

	$title_group = new QodeGroup("标题风格","Define styles for title");
	$qodeSlideTitle->addChild("title_group",$title_group);
	    $row1 = new QodeRow();
	    $title_group->addChild("row1",$row1);
		    $title_color = new QodeMetaField("colorsimple","qode_slide-title-color","","字体颜色","This is some description");
		    $row1->addChild("qode_slide-title-color",$title_color);
		    $title_fontsize = new QodeMetaField("textsimple","qode_slide-title-font-size","","字体大小 (px)","This is some description");
		    $row1->addChild("qode_slide-title-font-size",$title_fontsize);
		    $title_lineheight = new QodeMetaField("textsimple","qode_slide-title-line-height","","行高 (px)","This is some description");
		    $row1->addChild("qode_slide-title-line-height",$title_lineheight);
		    $title_letterspacing = new QodeMetaField("textsimple","qode_slide-title-letter-spacing","","字母间距 (px)","This is some description");
		    $row1->addChild("qode_slide-title-letter-spacing",$title_letterspacing);
	
	    $row2 = new QodeRow(true);
	    $title_group->addChild("row2",$row2);
		    $title_google_fonts = new QodeMetaField("Fontsimple","qode_slide-title-font-family","","字体系列","This is some description");
		    $row2->addChild("qode_slide-title-font-family",$title_google_fonts);
		    $title_fontstyle = new QodeMetaField("selectblanksimple","qode_slide-title-font-style","","文字风格","This is some description",$options_fontstyle);
		    $row2->addChild("qode_slide-title-font-style",$title_fontstyle);
		    $title_fontweight = new QodeMetaField("selectblanksimple","qode_slide-title-font-weight","","字体重量","This is some description",$options_fontweight);
		    $row2->addChild("qode_slide-title-font-weight",$title_fontweight);
		    $title_texttransform = new QodeMetaField("selectblanksimple","qode_slide-title-text-transform","","文本转换","This is some description",$options_texttransform);
		    $row2->addChild("qode_slide-title-text-transform",$title_texttransform);
	
	    $row3 = new QodeRow(true);
	    $title_group->addChild("row3",$row3);
		    $title_background_color = new QodeMetaField("colorsimple","qode_slide-title-background-color","","背景颜色","This is some description");
		    $row3->addChild("qode_slide-title-background-color",$title_background_color);
		    $title_background_color_transparency = new QodeMetaField("textsimple","qode_slide-title-bg-color-transparency","","背景颜色透明度 (0 = fully transparent, 1 = opaque)","Value between 0 and 1");
		    $row3->addChild("qode_slide-title-bg-color-transparency",$title_background_color_transparency);

	$qode_slide_title_separator = new QodeMetaField("yesno","qode_slide-separator-after-title","no","标题后分隔符","Do you want to have a separator after title?", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qode_slide_title_separator_container"));
	$qodeSlideTitle->addChild("qode_slide-separator-after-title",$qode_slide_title_separator);
	
	$qode_slide_title_separator_container = new QodeContainer("qode_slide_title_separator_container","qode_slide-separator-after-title","no");
	$qodeSlideTitle->addChild("qode_slide_title_separator_container",$qode_slide_title_separator_container);
	
		$qode_slide_title_separator_color = new QodeMetaField("color","qode_slide-separator-color","","分隔符的颜色","Choose a color for the separator");
		$qode_slide_title_separator_container->addChild("qode_slide-separator-color",$qode_slide_title_separator_color);
		
		$qode_slide_title_separator_transparency = new QodeMetaField("text","qode_slide-separator-transparency","","分隔符透明度","Enter a value between 0 (fully transparent) and 1 (opaque)");
		$qode_slide_title_separator_container->addChild("qode_slide-separator-transparency",$qode_slide_title_separator_transparency);
		
		$qode_slide_title_separator_width = new QodeMetaField("text","qode_slide-separator-width","","分隔符宽度","Enter value from 0% to 100%. Enter just number.");
		$qode_slide_title_separator_container->addChild("qode_slide-separator-width",$qode_slide_title_separator_width);

	$qode_slide_title_border = new QodeMetaField("yesno","qode_slide-border-around-title","no","标题的边框","Do you want to have a border around title?", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qode_slide_title_border_container"));
	$qodeSlideTitle->addChild("qode_slide-border-around-title",$qode_slide_title_border);
	
	$qode_slide_title_border_container = new QodeContainer("qode_slide_title_border_container","qode_slide-border-around-title","no");
	$qodeSlideTitle->addChild("qode_slide_title_border_container",$qode_slide_title_border_container);
	
		$qode_slide_title_border_color = new QodeMetaField("color","qode_slide-border-around-title-color","","边框颜色","Choose a color for the border");
		$qode_slide_title_border_container->addChild("qode_slide-border-around-title-color",$qode_slide_title_border_color);
		
		$qode_slide_title_border_transparency = new QodeMetaField("text","qode_slide-border-around-title-transparency","","边框透明度","Enter a value between 0 (fully transparent) and 1 (opaque)");
		$qode_slide_title_border_container->addChild("qode_slide-border-around-title-transparency",$qode_slide_title_border_transparency);

//Qode Slide Subtitle

$qodeSlideSubtitle = new QodeMetaBox("slides", "Qode 滑块子标题");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_subtitle",$qodeSlideSubtitle);

	$qode_slide_subtitle = new QodeMetaField("text","qode_slide-subtitle","","滑块子标题","Enter slide subtitle");
	$qodeSlideSubtitle->addChild("qode_slide-subtitle",$qode_slide_subtitle);
	
	$qode_slide_subtitle_position = new QodeMetaField("select","qode_slide-subtitle-position","","子标题位置","Choose a position for the subtitle", array(
	    "above_title" => "标题上面",
	    "bellow_title" => "标题下面"
	));
	$qodeSlideSubtitle->addChild("qode_slide-subtitle-position",$qode_slide_subtitle_position);
	
	$subtitle_group = new QodeGroup("Subtitle Style","Define styles for subtitle");
	$qodeSlideSubtitle->addChild("subtitle_group",$subtitle_group);
	    $row1 = new QodeRow();
	    $subtitle_group->addChild("row1",$row1);
		    $subtitle_color = new QodeMetaField("colorsimple","qode_slide-subtitle-color","","字体颜色","This is some description");
		    $row1->addChild("qode_slide-subtitle-color",$subtitle_color);
		    $subtitle_fontsize = new QodeMetaField("textsimple","qode_slide-subtitle-font-size","","字体尺寸 (px)","This is some description");
		    $row1->addChild("qode_slide-subtitle-font-size",$subtitle_fontsize);
		    $subtitle_lineheight = new QodeMetaField("textsimple","qode_slide-subtitle-line-height","","行高 (px)","This is some description");
		    $row1->addChild("qode_slide-subtitle-line-height",$subtitle_lineheight);
		    $subtitle_letterspacing = new QodeMetaField("textsimple","qode_slide-subtitle-letter-spacing","","字母间距 (px)","This is some description");
		    $row1->addChild("qode_slide-subtitle-letter-spacing",$subtitle_letterspacing);
	
	    $row2 = new QodeRow(true);
	    $subtitle_group->addChild("row2",$row2);
		    $subtitle_google_fonts = new QodeMetaField("fontsimple","qode_slide-subtitle-font-family","","字体系列","This is some description");
		    $row2->addChild("qode_slide-subtitle-font-family",$subtitle_google_fonts);
		    $subtitle_fontstyle = new QodeMetaField("selectblanksimple","qode_slide-subtitle-font-style","","字体风格","This is some description",$options_fontstyle);
		    $row2->addChild("qode_slide-subtitle-font-style",$subtitle_fontstyle);
		    $subtitle_fontweight = new QodeMetaField("selectblanksimple","qode_slide-subtitle-font-weight","","字体重量","This is some description",$options_fontweight);
		    $row2->addChild("qode_slide-subtitle-font-weight",$subtitle_fontweight);
			$subtitle_text_transform = new QodeMetaField("selectblanksimple","qode_slide-subtitle-text-transform","","文本转换","This is some description",$options_texttransform);
		    $row2->addChild("qode_slide-subtitle-text-transform",$subtitle_text_transform);
	
	    $row3 = new QodeRow(true);
	    $subtitle_group->addChild("row3",$row3);
		    $subtitle_background_color = new QodeMetaField("colorsimple","qode_slide-subtitle-background-color","","背景颜色","This is some description");
		    $row3->addChild("qode_slide-subtitle-background-color",$subtitle_background_color);
		    $subtitle_background_color_transparency = new QodeMetaField("textsimple","qode_slide-subtitle-bg-color-transparency","","背景颜色透明度 (0 = fully transparent, 1 = opaque)","Value between 0 ana 1");
		    $row3->addChild("qode_slide-subtitle-bg-color-transparency",$subtitle_background_color_transparency);

    $subtitle_margin_group = new QodeGroup("底部外边距 (px)","Enter value for subtitle bottom margin (default value is 14)");
    $qodeSlideSubtitle->addChild("subtitle_margin_group",$subtitle_margin_group);
        $row1 = new QodeRow(true);
        $subtitle_margin_group->addChild("row1",$row1);
            $subtitle_margin_bottom = new QodeMetaField("textsimple","qode_slide_subtitle_margin_bottom","","","This is some description");
            $row1->addChild("qode_slide_subtitle_margin_bottom",$subtitle_margin_bottom);

    $subtitle_padding_group = new QodeGroup("内边距","定义子标题内边距");
    $qodeSlideSubtitle->addChild("subtitle_padding_group",$subtitle_padding_group);
        $row1 = new QodeRow(true);
        $subtitle_padding_group->addChild("row1",$row1);
            $subtitle_padding_top = new QodeMetaField("textsimple","qode_slide_subtitle_padding_top","","上内边距 (px)","This is some description");
            $row1->addChild("qode_slide_subtitle_padding_top",$subtitle_padding_top);
            $subtitle_padding_right = new QodeMetaField("textsimple","qode_slide_subtitle_padding_right","","右内边距 (px)","This is some description");
            $row1->addChild("qode_slide_subtitle_padding_right",$subtitle_padding_right);
            $subtitle_padding_bottom = new QodeMetaField("textsimple","qode_slide_subtitle_padding_bottom","","下内边距 (px)","This is some description");
            $row1->addChild("qode_slide_subtitle_padding_bottom",$subtitle_padding_bottom);
            $subtitle_padding_left = new QodeMetaField("textsimple","qode_slide_subtitle_padding_left","","左内边距 (px)","This is some description");
            $row1->addChild("qode_slide_subtitle_padding_left",$subtitle_padding_left);

//Qode Slide Text

$qodeSlideText = new QodeMetaBox("slides", "Qode 滑块文本");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_text",$qodeSlideText);

	$qode_slide_text = new QodeMetaField("textarea","qode_slide-text","","滑块文本","Enter slide text");
	$qodeSlideText->addChild("qode_slide-text",$qode_slide_text);

    $text_group = new QodeGroup("文本风格","Define styles for text");
    $qodeSlideText->addChild("title_group",$text_group);
    $row1 = new QodeRow();
    $text_group->addChild("row1",$row1);
        $text_color = new QodeMetaField("colorsimple","qode_slide-text-color","","字体颜色","This is some description");
        $row1->addChild("qode_slide-text-color",$text_color);
        $text_fontsize = new QodeMetaField("textsimple","qode_slide-text-font-size","","字体尺寸 (px)","This is some description");
        $row1->addChild("qode_slide-text-font-size",$text_fontsize);
        $text_lineheight = new QodeMetaField("textsimple","qode_slide-text-line-height","","行高 (px)","This is some description");
        $row1->addChild("qode_slide-text-line-height",$text_lineheight);
		$text_text_transform = new QodeMetaField("selectblanksimple","qode_slide-text-text-transform","","文本转换","This is some description",$options_texttransform);
		$row1->addChild("qode_slide-text-text-transform",$text_text_transform);

    $row2 = new QodeRow(true);
    $text_group->addChild("row2",$row2);
        $text_google_fonts = new QodeMetaField("Fontsimple","qode_slide-text-font-family","","字体系列","This is some description");
        $row2->addChild("qode_slide-text-font-family",$text_google_fonts);
        $text_fontstyle = new QodeMetaField("selectblanksimple","qode_slide-text-font-style","","字体风格","This is some description",$options_fontstyle);
        $row2->addChild("qode_slide-text-font-style",$text_fontstyle);
        $text_fontweight = new QodeMetaField("selectblanksimple","qode_slide-text-font-weight","","字体重量","This is some description",$options_fontweight);
        $row2->addChild("qode_slide-text-font-weight",$text_fontweight);

    $text_without_separator_padding_group = new QodeGroup("内边距","Define padding for text");
    $qodeSlideText->addChild("text_without_separator_padding_group",$text_without_separator_padding_group);
        $row1 = new QodeRow(true);
        $text_without_separator_padding_group->addChild("row1",$row1);
            $text_padding_top = new QodeMetaField("textsimple","qode_slide_text_padding_top","","上内边距 (px)","This is some description");
            $row1->addChild("qode_slide_text_padding_top",$text_padding_top);
            $text_padding_right = new QodeMetaField("textsimple","qode_slide_text_padding_right","","右内边距(px)","This is some description");
            $row1->addChild("qode_slide_text_padding_right",$text_padding_right);
            $text_padding_bottom = new QodeMetaField("textsimple","qode_slide_text_padding_bottom","","下内边距 (px)","This is some description");
            $row1->addChild("qode_slide_text_padding_bottom",$text_padding_bottom);
            $text_padding_left = new QodeMetaField("textsimple","qode_slide_text_padding_left","","左内边距 (px)","This is some description");
            $row1->addChild("qode_slide_text_padding_left",$text_padding_left);

//Qode Slide Graphic

$qodeSlideGraphic = new QodeMetaBox("slides", "Qode 滑块图形");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_graphic",$qodeSlideGraphic);

	$qode_slide_graphic = new QodeMetaField("image","qode_slide-thumbnail","","滑块图形","Choose slide graphic");
	$qodeSlideGraphic->addChild("qode_slide-thumbnail",$qode_slide_graphic);
	
	$qode_slide_graphic_link = new QodeMetaField("text","qode_slide-thumbnail-link","","链接","Past link for slide graphic if you want to link it");
	$qodeSlideGraphic->addChild("qode_slide-thumbnail-link",$qode_slide_graphic_link);

$qodeSlideSvg = new QodeMetaBox('slides', 'Qode 滑块 SVG');
$qodeFramework->qodeMetaBoxes->addMetaBox('svg', $qodeSlideSvg);

	$qode_slide_svg_source = new QodeMetaField('textarea', 'qode_slide_svg_source', '', 'SVG 来源代码', 'Paste SVG source code. (Note: all CSS styling for SVG you may put in Qode Options > General > Custom SVG CSS)');
	$qodeSlideSvg->addChild('qode_slide_svg_source', $qode_slide_svg_source);

	$qode_slide_svg_link = new QodeMetaField('text', 'qode_slide_svg_link', '', 'SVG 链接', 'Enter URL to link SVG');
	$qodeSlideSvg->addChild('qode_slide_svg_link', $qode_slide_svg_link);

	$qode_slide_svg_drawing = new QodeMetaField("yesno", "qode_slide_svg_drawing", "no", "SVG 绘制动画", "Enable SVG drawing animation", array(), array(
		"dependence" => "true",
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_svg_drawing_container"
	));
	$qodeSlideSvg->addChild("qode_slide_svg_drawing", $qode_slide_svg_drawing);

	$qode_slide_svg_drawing_container = new QodeContainer("qode_slide_svg_drawing_container", "qode_slide_svg_drawing", "no");
	$qodeSlideSvg->addChild("qode_slide_svg_drawing_container", $qode_slide_svg_drawing_container);

	$qode_slide_svg_frame_rate = new QodeMetaField("text", "qode_slide_svg_frame_rate", "", "SVG Frame Rate", "FPS (frames per second) value, defines speed of drawing");
	$qode_slide_svg_drawing_container->addChild("qode_slide_svg_frame_rate", $qode_slide_svg_frame_rate);

//Qode Slide Buttons

$qodeSlideButtons = new QodeMetaBox("slides", "Qode 滑块按钮");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_buttons",$qodeSlideButtons);

	$button1_group = new QodeGroup("按钮 1","");
	$qodeSlideButtons->addChild("button1_group",$button1_group);
	    $row1 = new QodeRow();
	    $button1_group->addChild("row1",$row1);
		    $button1_label = new QodeMetaField("textsimple","qode_slide-button-label","","标签","This is some description");
		    $row1->addChild("qode_slide-button-label",$button1_label);
		    $button1_link = new QodeMetaField("textsimple","qode_slide-button-link","","链接","This is some description");
		    $row1->addChild("qode_slide-button-link",$button1_link);
	
	$button2_group = new QodeGroup("按钮 2","");
	$qodeSlideButtons->addChild("button2_group",$button2_group);
	    $row1 = new QodeRow();
	    $button2_group->addChild("row1",$row1);
		    $button2_label = new QodeMetaField("textsimple","qode_slide-button-label2","","标签","This is some description");
		    $row1->addChild("qode_slide-button-label",$button2_label);
		    $button2_link = new QodeMetaField("textsimple","qode_slide-button-link2","","链接","This is some description");
		    $row1->addChild("qode_slide-button-link",$button2_link);

//Qode Slide Content Positioning

$qodeSlideContentPositioning = new QodeMetaBox("slides", "Qode 滑块内容定位");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_content_positioning",$qodeSlideContentPositioning);

	$qode_slide_graphic_alignment = new QodeMetaField("selectblank","qode_slide-graphic-alignment","","图形对齐","Choose an alignment for the slide graphic", array(
	    "left" => "左",
	    "center" => "中",
	    "right" => "右"
	));
	$qodeSlideContentPositioning->addChild("qode_slide-graphic-alignment",$qode_slide_graphic_alignment);
	
	$qode_slide_text_alignment = new QodeMetaField("selectblank","qode_slide-content-alignment","","文字对齐","Choose an alignment for the slide text", array(
	    "left" => "左",
	    "center" => "中",
	    "right" => "右"
	));
	$qodeSlideContentPositioning->addChild("qode_slide-content-alignment",$qode_slide_text_alignment);

	$qode_slide_separate_text_graphic = new QodeMetaField("selectblank","qode_slide-separate-text-graphic","no","分开图形和文本定位","Do you want to separately position graphic and text?", array(
	    "no" => "否",
	    "yes" => "是"
	), array("dependence" => true,
	         "hide" => array(
	            "" => "#qodef_qode_slide_graphic_positioning_container",
	            "no" => "#qodef_qode_slide_graphic_positioning_container"
	         ),
	         "show" => array(
	             "yes" => "#qodef_qode_slide_graphic_positioning_container"
	         )));
	$qodeSlideContentPositioning->addChild("qode_slide-separate-text-graphic",$qode_slide_separate_text_graphic);

	$content_positioning_group = new QodeGroup("内容定位","Positioning for slide title, subtitle, text and buttons (and graphic if positioning is not separated) ");
	$qodeSlideContentPositioning->addChild("content_positioning_group",$content_positioning_group);
	    $row1 = new QodeRow();
	    $content_positioning_group->addChild("row1",$row1);
		    $qode_slide_content_width = new QodeMetaField("textsimple","qode_slide-content-width","","宽度 (%)","This is some description");
		    $row1->addChild("qode_slide-content-width",$qode_slide_content_width);
	
	    $row2 = new QodeRow(true);
	    $content_positioning_group->addChild("row2",$row2);
		    $qode_slide_content_top = new QodeMetaField("textsimple","qode_slide-content-top","","内容离顶部 (%)","This is some description");
		    $row2->addChild("qode_slide-content-top",$qode_slide_content_top);
		    $qode_slide_content_left = new QodeMetaField("textsimple","qode_slide-content-left","","内容离左部 (%)","This is some description");
		    $row2->addChild("qode_slide-content-left",$qode_slide_content_left);
	
	    $row3 = new QodeRow(true);
	    $content_positioning_group->addChild("row3",$row3);
		    $qode_slide_content_bottom = new QodeMetaField("textsimple","qode_slide-content-bottom","","内容离底部 (%)","This is some description");
		    $row3->addChild("qode_slide-content-bottom",$qode_slide_content_bottom);
		    $qode_slide_content_right = new QodeMetaField("textsimple","qode_slide-content-right","","内容离右部 (%)","This is some description");
		    $row3->addChild("qode_slide-content-right",$qode_slide_content_right);

	$qode_slide_graphic_positioning_container = new QodeContainer("qode_slide_graphic_positioning_container","qode_slide-separate-text-graphic","no");
	$qodeSlideContentPositioning->addChild("qode_slide_graphic_positioning_container",$qode_slide_graphic_positioning_container);

	$graphic_positioning_group = new QodeGroup("Graphic Positioning","滑块图形定位");
	$qode_slide_graphic_positioning_container->addChild("graphic_positioning_group",$graphic_positioning_group);
	    $row1 = new QodeRow();
	    $graphic_positioning_group->addChild("row1",$row1);
		    $qode_slide_content_width = new QodeMetaField("textsimple","qode_slide-graphic-width","","宽度 (%)","This is some description");
		    $row1->addChild("qode_slide-graphic-width",$qode_slide_content_width);
	
	    $row2 = new QodeRow(true);
	    $graphic_positioning_group->addChild("row2",$row2);
		    $qode_slide_content_top = new QodeMetaField("textsimple","qode_slide-graphic-top","","内容离顶部 (%)","This is some description");
		    $row2->addChild("qode_slide-graphic-top",$qode_slide_content_top);
		    $qode_slide_content_left = new QodeMetaField("textsimple","qode_slide-graphic-left","","内容离左部 (%)","This is some description");
		    $row2->addChild("qode_slide-graphic-left",$qode_slide_content_left);
	
	    $row3 = new QodeRow(true);
	    $graphic_positioning_group->addChild("row3",$row3);
		    $qode_slide_content_bottom = new QodeMetaField("textsimple","qode_slide-graphic-bottom","","内容离底部 (%)","This is some description");
		    $row3->addChild("qode_slide-graphic-bottom",$qode_slide_content_bottom);
		    $qode_slide_content_right = new QodeMetaField("textsimple","qode_slide-graphic-right","","内容离右部 (%)","This is some description");
		    $row3->addChild("qode_slide-graphic-right",$qode_slide_content_right);

//Qode Slide Scroll Animations

$qodeSlideScrollAnimations = new QodeMetaBox("slides", "Qode 滑块滚动动画");
$qodeFramework->qodeMetaBoxes->addMetaBox("slides_scroll_animations",$qodeSlideScrollAnimations);

	$qode_slide_general_animation = new QodeMetaField("yesno", "qode_slide_general_animation", "yes", "滚动的时候动画整个滑块内容组", "All parts of slide content will animate on scroll as group", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_general_animation_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_general_animation', $qode_slide_general_animation);

	$qode_slide_general_animation_container = new QodeContainer('qode_slide_general_animation_container', 'qode_slide_general_animation', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_general_animation_container', $qode_slide_general_animation_container);

		$qode_slide_content_animation_data_start = new QodeGroup("滚动动画开始点", "These are starting properties for the scrolling animation of the slide content group");
		$qode_slide_general_animation_container->addChild("qode_slide_content_animation_data_start", $qode_slide_content_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_content_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_start = new QodeMetaField("textsimple", "qode_slide_data_start", "","滚动条顶部边距 (px)", "", array(), array("col_width" => 1));
				$row1->addChild("qode_slide_data_start", $qode_slide_data_start);

				$qode_slide_data_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_start_custom_style", "", "输入分号隔开的 CSS 代码", "", array(), array("col_width" => 4));
				$row1->addChild("qode_slide_data_start_custom_style", $qode_slide_data_start_custom_style);

		$qode_slide_content_animation_data_end = new QodeGroup("滚动动画结束点", "These are ending properties for the scrolling animation of the slide content group");
		$qode_slide_general_animation_container->addChild("qode_slide_content_animation_data_end", $qode_slide_content_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_content_animation_data_end->addChild('row2', $row2);

				$qode_slide_data_end = new QodeMetaField("textsimple", "qode_slide_data_end", "", "滚动条顶部边距 (px)", "");
				$row2->addChild("qode_slide_data_end", $qode_slide_data_end);

				$qode_slide_data_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_end_custom_style", "", "输入分号隔开的 CSS 代码", "");
				$row2->addChild("qode_slide_data_end_custom_style", $qode_slide_data_end_custom_style);

//Title scroll animation
	$qode_slide_title_animation_scroll = new QodeMetaField("yesno", "qode_slide_title_animation_scroll", "no", "滚动动画标题", "Enable title text to animate separately", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_title_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_title_animation_scroll', $qode_slide_title_animation_scroll);

	$qode_slide_title_animation_scroll_container = new QodeContainer('qode_slide_title_animation_scroll_container', 'qode_slide_title_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_title_animation_scroll_container', $qode_slide_title_animation_scroll_container);

		$qode_slide_title_animation_data_start = new QodeGroup("滚动动画开始点", "These are properties for the first keyframe in scrolling animation");
		$qode_slide_title_animation_scroll_container->addChild("qode_slide_title_animation_data_start", $qode_slide_title_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_title_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_title_start = new QodeMetaField("textsimple", "qode_slide_data_title_start", "", "滚动条顶部边距 (px)", "");
				$row1->addChild("qode_slide_data_title_start", $qode_slide_data_title_start);

				$qode_slide_data_title_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_title_start_custom_style", "", "Enter CSS declarations separated by semicolons", "");
				$row1->addChild("qode_slide_data_title_start_custom_style", $qode_slide_data_title_start_custom_style);

		$qode_slide_title_animation_data_end = new QodeGroup("滚动动画结束点", "These are properties for the last keyframe in scrolling animation");
		$qode_slide_title_animation_scroll_container->addChild("qode_slide_title_animation_data_end", $qode_slide_title_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_title_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_title_end = new QodeMetaField("textsimple", "qode_slide_data_title_end", "", "滚动条顶部边距 (px)", "");
				$row2->addChild("qode_slide_data_title_end", $qode_slide_data_title_end);

				$qode_slide_data_title_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_title_end_custom_style", "", "输入分号隔开的 CSS 代码", "");
				$row2->addChild("qode_slide_data_title_end_custom_style", $qode_slide_data_title_end_custom_style);


//Subtitle scroll animation
	$qode_slide_subtitle_animation_scroll = new QodeMetaField("yesno", "qode_slide_subtitle_animation_scroll", "no", "滚动副标题动画", "Enable subtitle text to animate separately", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_subtitle_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_subtitle_animation_scroll', $qode_slide_subtitle_animation_scroll);

	$qode_slide_subtitle_animation_scroll_container = new QodeContainer('qode_slide_subtitle_animation_scroll_container', 'qode_slide_subtitle_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_subtitle_animation_scroll_container', $qode_slide_subtitle_animation_scroll_container);

		$qode_slide_subtitle_animation_data_start = new QodeGroup("滚动动画开始点", "These are properties for the first keyframe in scrolling animation");
		$qode_slide_subtitle_animation_scroll_container->addChild("qode_slide_subtitle_animation_data_start", $qode_slide_subtitle_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_subtitle_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_subtitle_start = new QodeMetaField("textsimple", "qode_slide_data_subtitle_start", "", "滚动条顶部边距 (px)", "");
				$row1->addChild("qode_slide_data_subtitle_start", $qode_slide_data_subtitle_start);

				$qode_slide_data_subtitle_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_subtitle_start_custom_style", "", "Enter CSS declarations separated by semicolons", "");
				$row1->addChild("qode_slide_data_subtitle_start_custom_style", $qode_slide_data_subtitle_start_custom_style);

		$qode_slide_subtitle_animation_data_end = new QodeGroup("滚动动画结束点", "These are properties for the last keyframe in scrolling animation");
		$qode_slide_subtitle_animation_scroll_container->addChild("qode_slide_subtitle_animation_data_end", $qode_slide_subtitle_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_subtitle_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_subtitle_end = new QodeMetaField("textsimple", "qode_slide_data_subtitle_end", "", "滚动条顶部边距 (px)", "");
				$row2->addChild("qode_slide_data_subtitle_end", $qode_slide_data_subtitle_end);

				$qode_slide_data_subtitle_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_subtitle_end_custom_style", "", "Enter CSS declarations separated by semicolons", "");
				$row2->addChild("qode_slide_data_subtitle_end_custom_style", $qode_slide_data_subtitle_end_custom_style);


//Graphics scroll animation
	$qode_slide_graphic_animation_scroll = new QodeMetaField("yesno", "qode_slide_graphic_animation_scroll", "no", "滚动动画绘图", "Enable graphic to animate separately", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_graphic_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_graphic_animation_scroll', $qode_slide_graphic_animation_scroll);

	$qode_slide_graphic_animation_scroll_container = new QodeContainer('qode_slide_graphic_animation_scroll_container', 'qode_slide_graphic_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_graphic_animation_scroll_container', $qode_slide_graphic_animation_scroll_container);

		$qode_slide_graphics_animation_data_start = new QodeGroup("滚动动画开始点", "These are properties for the first keyframe in scrolling animation");
		$qode_slide_graphic_animation_scroll_container->addChild("qode_slide_graphics_animation_data_start", $qode_slide_graphics_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_graphics_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_graphics_start = new QodeMetaField("textsimple", "qode_slide_data_graphics_start", "", "滚动条顶部边距 (px)", "");
				$row1->addChild("qode_slide_data_graphics_start", $qode_slide_data_graphics_start);

				$qode_slide_data_graphics_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_graphics_start_custom_style", "", "Enter CSS declarations separated by semicolons", "");
				$row1->addChild("qode_slide_data_graphics_start_custom_style", $qode_slide_data_graphics_start_custom_style);

		$qode_slide_graphics_animation_data_end = new QodeGroup("滚动动画结束点", "These are properties for the last keyframe in scrolling animation");
		$qode_slide_graphic_animation_scroll_container->addChild("qode_slide_graphics_animation_data_end", $qode_slide_graphics_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_graphics_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_graphics_end = new QodeMetaField("textsimple", "qode_slide_data_graphics_end", "", "滚动条顶部边距 (px)", "");
				$row2->addChild("qode_slide_data_graphics_end", $qode_slide_data_graphics_end);

				$qode_slide_data_graphics_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_graphics_end_custom_style", "", "Enter CSS declarations separated by semicolons", "");
				$row2->addChild("qode_slide_data_graphics_end_custom_style", $qode_slide_data_graphics_end_custom_style);

//Text scroll animation
	$qode_slide_text_animation_scroll = new QodeMetaField("yesno", "qode_slide_text_animation_scroll", "no", "滚动文字动画", "Enable text to animate separately", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_text_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_text_animation_scroll', $qode_slide_text_animation_scroll);

	$qode_slide_text_animation_scroll_container = new QodeContainer('qode_slide_text_animation_scroll_container', 'qode_slide_text_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_text_animation_scroll_container', $qode_slide_text_animation_scroll_container);

		$qode_slide_text_animation_data_start = new QodeGroup("滚动动画开始点", "These are properties for the first keyframe in scrolling animation");
		$qode_slide_text_animation_scroll_container->addChild("qode_slide_text_animation_data_start", $qode_slide_text_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_text_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_text_start = new QodeMetaField("textsimple", "qode_slide_data_text_start", "", "滚动条顶部边距 (px)", "");
				$row1->addChild("qode_slide_data_text_start", $qode_slide_data_text_start);

				$qode_slide_data_text_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_text_start_custom_style", "", "Enter CSS declarations separated by semicolons", "");
				$row1->addChild("qode_slide_data_text_start_custom_style", $qode_slide_data_text_start_custom_style);

		$qode_slide_text_animation_data_end = new QodeGroup("滚动动画结束点", "These are properties for the last keyframe in scrolling animation");
		$qode_slide_text_animation_scroll_container->addChild("qode_slide_text_animation_data_end", $qode_slide_text_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_text_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_text_end = new QodeMetaField("textsimple", "qode_slide_data_text_end", "", "滚动条顶部距离 (px)", "");
				$row2->addChild("qode_slide_data_text_end", $qode_slide_data_text_end);

				$qode_slide_data_text_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_text_end_custom_style", "", "输入分号隔开的 CSS 代码", "");
				$row2->addChild("qode_slide_data_text_end_custom_style", $qode_slide_data_text_end_custom_style);


//Button 1 scroll animation
	$qode_slide_button1_animation_scroll = new QodeMetaField("yesno", "qode_slide_button1_animation_scroll", "no", "动画按钮 1 滚动时", "Enable button 1 to animate separately", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_button1_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_button1_animation_scroll', $qode_slide_button1_animation_scroll);

	$qode_slide_button1_animation_scroll_container = new QodeContainer('qode_slide_button1_animation_scroll_container', 'qode_slide_button1_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_button1_animation_scroll_container', $qode_slide_button1_animation_scroll_container);

		$qode_slide_button_1_animation_data_start = new QodeGroup("滚动动画开始点", "These are properties for the first keyframe in scrolling animation");
		$qode_slide_button1_animation_scroll_container->addChild("qode_slide_button_1_animation_data_start", $qode_slide_button_1_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_button_1_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_button_1_start = new QodeMetaField("textsimple", "qode_slide_data_button_1_start", "", "滚动条顶部距离 (px)");
				$row1->addChild("qode_slide_data_button_1_start", $qode_slide_data_button_1_start);

				$qode_slide_data_button_1_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_button_1_start_custom_style", "", "Enter CSS declarations separated by semicolons");
				$row1->addChild("qode_slide_data_button_1_start_custom_style", $qode_slide_data_button_1_start_custom_style);

		$qode_slide_button_1_animation_data_end = new QodeGroup("滚动动画结束点", "These are properties for the last keyframe in scrolling animation");
		$qode_slide_button1_animation_scroll_container->addChild("qode_slide_button_1_animation_data_end", $qode_slide_button_1_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_button_1_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_button_1_end = new QodeMetaField("textsimple", "qode_slide_data_button_1_end", "", "滚动条顶部距离 (px)");
				$row2->addChild("qode_slide_data_button_1_end", $qode_slide_data_button_1_end);

				$qode_slide_data_button_1_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_button_1_end_custom_style", "", "输入分号隔开的 CSS 代码");
				$row2->addChild("qode_slide_data_button_1_end_custom_style", $qode_slide_data_button_1_end_custom_style);



//Button 2 scroll animation
	$qode_slide_button2_animation_scroll = new QodeMetaField("yesno", "qode_slide_button2_animation_scroll", "no", "动画按钮 2滚动时", "Enable button 2 to animate separately", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_button2_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_button2_animation_scroll', $qode_slide_button2_animation_scroll);

	$qode_slide_button2_animation_scroll_container = new QodeContainer('qode_slide_button2_animation_scroll_container', 'qode_slide_button2_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_button2_animation_scroll_container', $qode_slide_button2_animation_scroll_container);

		$qode_slide_button_2_animation_data_start = new QodeGroup("滚动动画开始点", "These are properties for the first keyframe in scrolling animation");
		$qode_slide_button2_animation_scroll_container->addChild("qode_slide_button_2_animation_data_start", $qode_slide_button_2_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_button_2_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_button_2_start = new QodeMetaField("textsimple", "qode_slide_data_button_2_start", "", "滚动条顶部距离 (px)");
				$row1->addChild("qode_slide_data_button_2_start", $qode_slide_data_button_2_start);

				$qode_slide_data_button_2_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_button_2_start_custom_style", "", "Enter CSS declarations separated by semicolons");
				$row1->addChild("qode_slide_data_button_2_start_custom_style", $qode_slide_data_button_2_start_custom_style);

		$qode_slide_button_2_animation_data_end = new QodeGroup("滚动动画结束点", "These are properties for the last keyframe in scrolling animation");
		$qode_slide_button2_animation_scroll_container->addChild("qode_slide_button_2_animation_data_end", $qode_slide_button_2_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_button_2_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_button_2_end = new QodeMetaField("textsimple", "qode_slide_data_button_2_end", "", "滚动条顶部距离 (px)");
				$row2->addChild("qode_slide_data_button_2_end", $qode_slide_data_button_2_end);

				$qode_slide_data_button_2_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_button_2_end_custom_style", "", "输入分号隔开的 CSS 代码");
				$row2->addChild("qode_slide_data_button_2_end_custom_style", $qode_slide_data_button_2_end_custom_style);


//Separator Bottom scroll animation
	$qode_slide_separator_bottom_animation_scroll = new QodeMetaField("yesno", "qode_slide_separator_bottom_animation_scroll", "no", "滚动时分隔符动画", "Enable separator bottom to animate separately", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_separator_bottom_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_separator_bottom_animation_scroll', $qode_slide_separator_bottom_animation_scroll);

	$qode_slide_separator_bottom_animation_scroll_container = new QodeContainer('qode_slide_separator_bottom_animation_scroll_container', 'qode_slide_separator_bottom_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_separator_bottom_animation_scroll_container', $qode_slide_separator_bottom_animation_scroll_container);

		$qode_slide_separator_bottom_animation_data_start = new QodeGroup("滚动动画开始点", "These are properties for the first keyframe in scrolling animation");
		$qode_slide_separator_bottom_animation_scroll_container->addChild("qode_slide_separator_bottom_animation_data_start", $qode_slide_separator_bottom_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_separator_bottom_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_separator_bottom_start = new QodeMetaField("textsimple", "qode_slide_data_separator_bottom_start", "", "滚动条顶部距离 (px)");
				$row1->addChild("qode_slide_data_separator_bottom_start", $qode_slide_data_separator_bottom_start);

				$qode_slide_data_separator_bottom_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_separator_bottom_start_custom_style", "", "输入分号隔开的 CSS 代码");
				$row1->addChild("qode_slide_data_separator_bottom_start_custom_style", $qode_slide_data_separator_bottom_start_custom_style);

		$qode_slide_separator_bottom_animation_data_end = new QodeGroup("滚动动画结束点", "These are properties for the last keyframe in scrolling animation");
		$qode_slide_separator_bottom_animation_scroll_container->addChild("qode_slide_separator_bottom_animation_data_end", $qode_slide_separator_bottom_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_separator_bottom_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_separator_bottom_end = new QodeMetaField("textsimple", "qode_slide_data_separator_bottom_end", "", "滚动条顶部距离 (px)");
				$row2->addChild("qode_slide_data_separator_bottom_end", $qode_slide_data_separator_bottom_end);

				$qode_slide_data_separator_bottom_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_separator_bottom_end_custom_style", "", "输入分号隔开的 CSS 代码");
				$row2->addChild("qode_slide_data_separator_bottom_end_custom_style", $qode_slide_data_separator_bottom_end_custom_style);


//SVG scroll animation
	$qode_slide_svg_animation_scroll = new QodeMetaField("yesno", "qode_slide_svg_animation_scroll", "no", "滚动时动画 SVG ", "Enable SVG to animate separately", array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_svg_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_svg_animation_scroll', $qode_slide_svg_animation_scroll);

	$qode_slide_svg_animation_scroll_container = new QodeContainer('qode_slide_svg_animation_scroll_container', 'qode_slide_svg_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_svg_animation_scroll_container', $qode_slide_svg_animation_scroll_container);

		$qode_slide_svg_animation_data_start = new QodeGroup("滚动动画开始点", "These are properties for the first keyframe in scrolling animation");
		$qode_slide_svg_animation_scroll_container->addChild("qode_slide_svg_animation_data_start", $qode_slide_svg_animation_data_start);

			$row1 = new QodeRow();
			$qode_slide_svg_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_svg_start = new QodeMetaField("textsimple", "qode_slide_data_svg_start", "", "滚动条顶部距离 (px)");
				$row1->addChild("qode_slide_data_svg_start", $qode_slide_data_svg_start);

				$qode_slide_data_svg_start_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_svg_start_custom_style", "", "输入分号隔开的 CSS 代码");
				$row1->addChild("qode_slide_data_svg_start_custom_style", $qode_slide_data_svg_start_custom_style);

		$qode_slide_svg_animation_data_end = new QodeGroup("滚动动画结束点", "These are properties for the last keyframe in scrolling animation");
		$qode_slide_svg_animation_scroll_container->addChild("qode_slide_svg_animation_data_end", $qode_slide_svg_animation_data_end);

			$row2 = new QodeRow();
			$qode_slide_svg_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_svg_end = new QodeMetaField("textsimple", "qode_slide_data_svg_end", "", "滚动条顶部距离 (px)");
				$row2->addChild("qode_slide_data_svg_end", $qode_slide_data_svg_end);

				$qode_slide_data_svg_end_custom_style = new QodeMetaField("textareasimple", "qode_slide_data_svg_end_custom_style", "", "输入分号隔开的 CSS 代码");
				$row2->addChild("qode_slide_data_svg_end_custom_style", $qode_slide_data_svg_end_custom_style);