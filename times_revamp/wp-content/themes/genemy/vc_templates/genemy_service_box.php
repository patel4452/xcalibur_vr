<?php
$atts = shortcode_atts( genemy_service_box_shortcode_vc(true), $atts);
extract($atts);
$class = array('sbox box-icon wow');
$class[] = esc_attr($css_animation.' '.$align);
$sbox_style = ( ($tra_text_display == 'yes') || ($icon == '') )? 'sbox-6' : 'sbox-5';
$class[] = ($align == 'text-center')? 'sbox-1' : $sbox_style;
if($border == 'yes') $class[] = 'sbox-rounded';

$tagclass = '';
if( $underline == 'yes' ){
	$tagclass = ($underline_color != 'none')? $underline_color : '';
	$tagclass .= ($highlight_text_color != '')? ' '.$highlight_text_color.'-color' : '';
}


$parse_args = array('tagclass' => $tagclass );
$title_html = genemy_parse_text($title, $parse_args);

$atts['class'] = $class;
$atts['sbox_style'] = $sbox_style;
$atts['tagclass'] = $tagclass;
$atts['parse_args'] = array('tagclass' => $tagclass );
$atts['title_html'] = $title_html;
echo genemy_buffer_template_file('sections/service-box.php', $atts);
?>