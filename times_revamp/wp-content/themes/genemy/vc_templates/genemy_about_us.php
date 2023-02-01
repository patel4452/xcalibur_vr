<?php
$atts = shortcode_atts( genemy_about_us_shortcode_vc(true), $atts);
extract($atts);
$params = '';
if( $display == 'counter' ){
	$params = $counter_group;
}elseif( $display == 'techs' ){
	$params = $techs_group;
}

$listArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($strategy_list) : array();

$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$content_order = ($position == 'yes')? 'col-md-6 col-lg-6' : 'col-md-6 col-xl-6 offset-xl-1';
$img_order = ($position == 'yes')? 'col-md-6 col-lg-5 offset-xl-1 order-md-last order-lg-last' : 'col-md-6 col-lg-5';
$video_class = ( $video_popup == 'yes' )? 'video-preview' : '';
$animation_class = 'fadeInUp';
if( $display == 'list' ){
	$order = ($position == 'yes')? 'col-md-6 col-lg-5 offset-lg-1' : 'col-md-6 col-lg-5';
	$container_class = ($position == 'yes')? 'col-md-6 col-lg-5' : 'col-md-6 col-lg-6 offset-lg-1 order-md-last order-lg-last';
	$video_class = ( $video_popup == 'yes' )? 'video-preview' : '';
}
$about_class = ( $position == 'yes' )? '' : ' ind-45';

$atts['content'] = $content;
$atts['params'] = $params;
$atts['listArr'] = $listArr;
$atts['paramsArr'] = $paramsArr;
$atts['content_order'] = $content_order;
$atts['img_order'] = $img_order;
$atts['video_class'] = $video_class;
$atts['animation_class'] = $animation_class;
$atts['about_class'] = $about_class;
echo genemy_buffer_template_file('sections/about-us.php', $atts);
?>