<?php
$atts = shortcode_atts( genemy_google_map_shortcode_vc(true), $atts);
extract($atts);
wp_enqueue_script( 'googleapis' );
echo genemy_buffer_template_file('sections/google-map.php', $atts);
?>