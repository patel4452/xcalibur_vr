<?php
$atts = shortcode_atts( genemy_testimonials_shortcode_vc(true), $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$car_attr = apply_filters( 'genemy_carousel_attr', '', $atts );

$atts['paramsArr'] = $paramsArr;
$atts['car_attr'] = $car_attr;
echo genemy_buffer_template_file('sections/testimonials.php', $atts);