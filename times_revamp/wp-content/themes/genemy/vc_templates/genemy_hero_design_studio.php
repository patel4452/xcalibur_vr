<?php
$atts = shortcode_atts( genemy_hero_design_studio_shortcode_vc(true), $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$paramsArr2 = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params2) : array();
$nameClass = apply_filters('perch_vc_class_filter', 'section-id rose-color', 'section_name', $atts);
$titleClass = apply_filters('perch_vc_class_filter', '', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-md grey-color', 'lead_text', $atts);

$atts['paramsArr'] = $paramsArr;
$atts['paramsArr2'] = $paramsArr2;
$atts['nameClass'] = $nameClass;
$atts['titleClass'] = $titleClass;
$atts['subtitleClass'] = $subtitleClass;
echo genemy_buffer_template_file('sections/hero-design-studio.php', $atts);
?>