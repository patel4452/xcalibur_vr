<?php
$atts = shortcode_atts( genemy_call_to_action_shortcode_vc(true), $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$paramsArr2 = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params2) : array();

$atts['paramsArr'] = $paramsArr;
$atts['paramsArr2'] = $paramsArr2;
echo genemy_buffer_template_file('sections/call-to-action.php', $atts);
?>