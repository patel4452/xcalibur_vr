<?php
$atts = shortcode_atts( genemy_our_clients_shortcode_vc(true), $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$style_id = ( $style == 'style1' )? 'brands-2' : 'brands-1';
$car_attr = apply_filters( 'genemy_carousel_attr', '', $atts );

$atts['paramsArr'] = $paramsArr;
$atts['style_id'] = $style_id;
$atts['car_attr'] = $car_attr;
echo genemy_buffer_template_file('sections/our-clients.php', $atts);
?>