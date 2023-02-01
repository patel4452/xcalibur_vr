<?php
$atts = shortcode_atts( genemy_section_title_shortcode_vc(true), $atts);
extract($atts);
$Arr = explode(':', $tag);
$tagname = $Arr[0];
$classname = $Arr[1];
$sectionclass = array('section-title');
$sectionclass[] = 'text-'.esc_attr($align);
$sectionclass[] = ( $align == 'center' )? 'col-lg-10 offset-lg-1': 'col-md-11 col-lg-10';

$tagclass = '';
if( $underline == 'yes' ){
	$tagclass = ($underline_color != 'none')? $underline_color : '';
	$tagclass .= ($highlight_text_color != '')? ' '.$highlight_text_color.'-color' : '';
}

$parse_args = array('tagclass' => $tagclass );

$_nameclass = 'section-id '.esc_attr($name_color).'-color';
$nameClass = apply_filters('perch_vc_class_filter', $_nameclass, 'name', $atts);
$atts['title_highlight_text'] = 'extra_class:'.$tagclass;
$titleClass = apply_filters('perch_vc_class_filter', $classname, 'title', $atts);
$_subtitleClass = 'p-lg '.esc_attr($subtitle_text_color).'-color';
$subtitleClass = apply_filters('perch_vc_class_filter', $_subtitleClass, 'subtitle', $atts);

$atts['tagname'] = $tagname;
$atts['classname'] = $classname;
$atts['sectionclass'] = $sectionclass;
$atts['tagclass'] = $tagclass;
$atts['parse_args'] = array('tagclass' => $tagclass );
$atts['_nameclass'] = $_nameclass;
$atts['nameClass'] = $nameClass;
$atts['atts'] = $atts;
$atts['titleClass'] = $titleClass;
$atts['_subtitleClass'] = $_subtitleClass;
$atts['subtitleClass'] = $subtitleClass;
echo genemy_buffer_template_file('sections/section-title.php', $atts);
?>