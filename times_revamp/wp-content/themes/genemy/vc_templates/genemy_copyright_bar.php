<?php
$atts = shortcode_atts( genemy_copyright_bar_shortcode_vc(true), $atts);
extract($atts);
echo genemy_buffer_template_file('sections/copyright-bar.php', $atts);
?>