<?php
$atts = shortcode_atts( genemy_hero_slide_shortcode_vc(true), $atts);
extract($atts);
$subtitleClass2 = apply_filters('perch_vc_class_filter', 'p-lg', 'subtitle', $atts);
$titleClass = apply_filters('perch_vc_class_filter', '', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-lg', 'lead_text', $atts);

$atts['subtitleClass2'] = $subtitleClass2;
$atts['titleClass'] = $titleClass;
$atts['subtitleClass'] = $subtitleClass;
echo genemy_buffer_template_file('sections/hero-slide.php', $atts);
?>