<?php
$atts = shortcode_atts( genemy_hero_text_block_shortcode_vc(true), $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$animation_delay = 600;

$atts['paramsArr'] = $paramsArr;
$atts['animation_delay'] = $animation_delay;
echo genemy_buffer_template_file('sections/hero-text-block.php', $atts);
?>