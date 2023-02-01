<?php
$atts['content'] = $content;
$atts = shortcode_atts( genemy_pricing_table_shortcode_vc(true), $atts);
extract($atts);
$btnclass = ($featured)? 'btn-rose' : 'btn-tra-black';
if(isset($atts['button_style'])) $btnclass = $button_style;
$titleclass = ($featured)? ' highlight '.esc_attr($pricing_bg) : '';
$borderclass = ($featured)? esc_attr($plan_bg) : 'bg-lightgrey';

if($featured):
$dark_color_class = genemy_default_dark_color_classes();
$titleclass = in_array($pricing_bg, $dark_color_class)? $titleclass.' white-color' : $titleclass;
$borderclass = in_array($plan_bg, $dark_color_class)? $borderclass.' white-color' : $borderclass;
endif;

$wrapper_class = array('pricing-table', 'wow', $css_animation, $titleclass );
$wrapper_class[] = 'pricing-table-btn-'.$button_position;

$atts['btnclass'] = $btnclass;
$atts['titleclass'] = $titleclass;
$atts['borderclass'] = $borderclass;
$atts['wrapper_class'] = $wrapper_class;
echo genemy_buffer_template_file('sections/pricing-table.php', $atts);
?>