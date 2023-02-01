<?php
$atts = shortcode_atts( genemy_count_down_shortcode_vc(true), $atts);
extract($atts);
wp_enqueue_script('jquery-countdown');
$arr = explode(':', $datetxt);
$atts['arr'] = $arr;
echo genemy_buffer_template_file('sections/count-down.php', $atts);
?>