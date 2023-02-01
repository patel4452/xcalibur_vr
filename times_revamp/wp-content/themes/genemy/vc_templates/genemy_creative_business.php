<?php
$atts = shortcode_atts( genemy_creative_business_shortcode_vc(true), $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$subtitleClass2 = apply_filters('perch_vc_class_filter', 'section-id rose-color', 'section_name', $atts);
$titleClass = apply_filters('perch_vc_class_filter', '', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-md', 'lead_text', $atts);
$background_imges = ($bg_image == 'yes')? 'style=" background-image: url('.esc_url($image).'); "':'';

$atts['paramsArr'] = $paramsArr;
$atts['subtitleClass2'] = $subtitleClass2;
$atts['titleClass'] = $titleClass;
$atts['subtitleClass'] = $subtitleClass;
$atts['background_imges'] = $background_imges;
echo genemy_buffer_template_file('sections/hero-creative-buisness.php', $atts);
?>