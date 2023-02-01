<?php
$atts = shortcode_atts( genemy_button_group_shortcode_vc(true), $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$paramsArr2 = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params2) : array();
$divclass = array( 'text-'.$align , 'genemy-btns hero-btns stores-badge animated', $mright, $mleft, $mtop, $mbottom);

$atts['paramsArr'] = $paramsArr;
$atts['paramsArr2'] = $paramsArr2;
$atts['divclass'] = $divclass;
echo genemy_buffer_template_file('sections/button-group.php', $atts);
?>