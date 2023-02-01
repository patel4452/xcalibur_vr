<?php
$atts = shortcode_atts( genemy_hero_app_landing_shortcode_vc(true), $atts);
$params = '';
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$titleClass = apply_filters('perch_vc_class_filter', '', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-lg', 'lead_text', $atts);

$atts['params'] = $params;
$atts['paramsArr'] = $paramsArr;
$atts['titleClass'] = $titleClass;
$atts['subtitleClass'] = $subtitleClass;
echo genemy_buffer_template_file('sections/hero-app-landing.php', $atts);
?>