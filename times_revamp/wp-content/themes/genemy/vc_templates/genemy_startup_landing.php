<?php
$atts['content'] = $content;
$atts = shortcode_atts( genemy_startup_landing_shortcode_vc(true), $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$style = ($bg != '')?' style="background-image: url('.esc_url($bg).')"' : '';
$titleClass = apply_filters('perch_vc_class_filter', '', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-md', 'lead_text', $atts);

$atts['paramsArr'] = $paramsArr;
$atts['style'] = $style;
$atts['titleClass'] = $titleClass;
$atts['subtitleClass'] = $subtitleClass;
echo genemy_buffer_template_file('sections/hero-startup-landing.php', $atts);
?>