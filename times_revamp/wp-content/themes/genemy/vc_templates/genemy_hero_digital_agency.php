<?php
$atts = shortcode_atts( genemy_hero_digital_agency_shortcode_vc(true), $atts);
extract($atts);
$args = array(
	$atts,
	array(
		'tag' => 'h3',
		'class' => '',
		'id' => '',
		'data' => array()
	)
);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$style = ($bg != '')?' style="background-image: url('.esc_url($bg).')"' : '';
$titleClass = apply_filters('perch_vc_class_filter', '', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-lg', 'lead_text', $atts);

$atts['paramsArr'] = $paramsArr;
$atts['style'] = $style;
$atts['titleClass'] = $titleClass;
$atts['subtitleClass'] = $subtitleClass;
echo genemy_buffer_template_file('sections/hero-digital-agency.php', $atts);
?>