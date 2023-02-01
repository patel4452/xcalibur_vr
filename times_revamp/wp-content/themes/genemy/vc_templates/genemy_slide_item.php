<?php
$atts = shortcode_atts( genemy_slide_item_shortcode_vc(true), $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$subtitleClass2 = apply_filters('perch_vc_class_filter', 'p-lg', 'sub_title', $atts);
$titleClass = apply_filters('perch_vc_class_filter', '', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-lg', 'lead_text', $atts);

$atts['paramsArr'] = $paramsArr;
$atts['subtitleClass2'] = $subtitleClass2;
$atts['titleClass'] = $titleClass;
$atts['subtitleClass'] = $subtitleClass;
echo genemy_buffer_template_file('sections/slider-item.php', $atts);
?>