<?php
$atts = shortcode_atts( genemy_our_skills_shortcode_vc(true), $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$listArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($strategy_list) : array();

$atts['content'] = $content;
$atts['paramsArr'] = $paramsArr;
$atts['listArr'] = $listArr;
echo genemy_buffer_template_file('sections/our-skill.php', $atts);
?>