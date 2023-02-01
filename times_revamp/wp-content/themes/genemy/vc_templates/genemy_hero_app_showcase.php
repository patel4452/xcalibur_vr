<?php
$atts = shortcode_atts( genemy_hero_app_showcase_shortcode_vc(true), $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$nameClass = apply_filters('perch_vc_class_filter', 'section-id', 'section_name', $atts);
$titleClass = apply_filters('perch_vc_class_filter', '', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-md', 'lead_text', $atts);

$atts['paramsArr'] = $paramsArr;
$atts['nameClass'] = $nameClass;
$atts['titleClass'] = $titleClass;
$atts['subtitleClass'] = $subtitleClass;
echo genemy_buffer_template_file('sections/hero-app-showcase.php', $atts);
?>