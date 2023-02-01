<?php
$atts = shortcode_atts( genemy_hero_portfolio_minimal_shortcode_vc(true), $atts);
extract($atts);
$Arr = explode(':', $tag);
$tagname = $Arr[0];
$classname = $Arr[1];
$sectionclass = array('hero-txt');
$sectionclass[] = 'text-'.esc_attr($align);
$sectionclass[] = ( $align == 'center' )? 'col-lg-10 offset-lg-1': 'col-md-10 col-lg-10 col-xl-11';

$tagclass = '';
if( $underline == 'yes' ){
	$tagclass = ($underline_color != 'none')? $underline_color : '';
	$tagclass .= ($highlight_text_color != '')? ' '.$highlight_text_color.'-color' : '';
}

$parse_args = array('tagclass' => $tagclass );

$atts['tagname'] = $tagname;
$atts['tagname'] = $tagname;
$atts['classname'] = $classname;
$atts['sectionclass'] = $sectionclass;
$atts['tagclass'] = $tagclass;
$atts['parse_args'] = array('tagclass' => $tagclass );
echo genemy_buffer_template_file('sections/hero-portfolio-minimal.php', $atts);
?>