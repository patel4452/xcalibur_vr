<?php
$atts = shortcode_atts( genemy_counter_up_shortcode_vc(true), $atts);
extract($atts);
echo genemy_buffer_template_file('sections/counter-up.php', $atts);
?>