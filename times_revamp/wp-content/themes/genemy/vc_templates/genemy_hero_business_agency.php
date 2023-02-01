<?php
$atts = shortcode_atts( genemy_hero_business_agency_shortcode_vc(true), $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$titleClass = apply_filters('perch_vc_class_filter', 'h3-lg', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-md grey-color', 'lead_text', $atts);

$atts['paramsArr'] = $paramsArr;
$atts['titleClass'] = $titleClass;
$atts['subtitleClass'] = $subtitleClass;
echo genemy_buffer_template_file('sections/hero-buisness-agency.php', $atts);
?>