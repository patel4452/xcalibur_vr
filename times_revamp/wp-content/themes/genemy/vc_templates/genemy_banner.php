<?php
$atts = shortcode_atts( genemy_banner_shortcode_vc(true), $atts);
extract($atts);

$tagname = 'h2';
$classname = 'wow fadeInUp';
$sectionclass = array();
$sectionclass[] = 'text-'.esc_attr($align);
$sectionclass[] = ( $align == 'center' )? 'col-lg-10 offset-lg-1': 'col-md-9';

$atts['tagname'] = $tagname;
$atts['classname'] = $classname;
$atts['sectionclass'] = $sectionclass;
echo genemy_buffer_template_file('sections/banner.php', $atts);
?>