<?php
$atts = shortcode_atts( genemy_startup_agency_shortcode_vc(true), $atts);
extract($atts);
$titleClass = apply_filters('perch_vc_class_filter', '', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-lg', 'lead_text', $atts);

$atts['titleClass'] = $titleClass;
$atts['subtitleClass'] = $subtitleClass;
echo genemy_buffer_template_file('sections/startup-agency.php', $atts);
?>