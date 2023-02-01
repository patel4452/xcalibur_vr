<?php
$atts = shortcode_atts( genemy_hero_marketing_agency_shortcode_vc(true), $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$titleClass = apply_filters('perch_vc_class_filter', '', 'title', $atts);

$atts['paramsArr'] = $paramsArr;
$atts['titleClass'] = $titleClass;
echo genemy_buffer_template_file('sections/hero-marketing-agency.php', $atts);
?>