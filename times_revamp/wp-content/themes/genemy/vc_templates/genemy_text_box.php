<?php
$atts = shortcode_atts( genemy_text_box_shortcode_vc(true), $atts);
extract($atts);
$digitClass = apply_filters('perch_vc_class_filter', 'tra-digit rose-color', 'digit', $atts);
$titleClass = apply_filters('perch_vc_class_filter', 'h5-sm', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', '', 'subtitle', $atts);

$atts['digitClass'] = $digitClass;
$atts['titleClass'] = $titleClass;
$atts['subtitleClass'] = $subtitleClass;
echo genemy_buffer_template_file('sections/text-box.php', $atts);
?>