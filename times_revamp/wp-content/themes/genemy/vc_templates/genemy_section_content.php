<?php
$atts = shortcode_atts( genemy_section_content_shortcode_vc(true), $atts);
$atts['content'] = $content;
extract($atts);
$Arr = explode(':', $tag);
$tagname = $Arr[0];
$classname = $Arr[1];
$classname .= ' '.$title_text_color.'-color';
$sectionclass = array($mright, $mleft, $mtop, $mbottom, $pleft, $pbottom, $ptop, $pright);
$sectionclass[] = 'text-'.esc_attr($align);
if( $fullwidth == '' ){
	$sectionclass[] = ( $align == 'center' )? 'col-lg-10 offset-lg-1': 'col-md-11 col-lg-10';
}
if( $fullwidth == 'yes' ){
	$sectionclass[] = 'col-md-12';
}


$tagclass = '';
if( $underline == 'yes' ){
	$tagclass = ($underline_color != 'none')? $underline_color : '';
	$tagclass .= ($highlight_text_color != '')? ' '.$highlight_text_color.'-color' : '';
}

$parse_args = array('tagclass' => $tagclass );
$duration = 300;

$atts['tagname'] = $tagname;
$atts['classname'] = $classname;
$atts['sectionclass'] = $sectionclass;
$atts['tagclass'] = $tagclass;
$atts['parse_args'] = array('tagclass' => $tagclass );
$atts['duration'] = $duration;
echo genemy_buffer_template_file('sections/section-content.php', $atts);
?>