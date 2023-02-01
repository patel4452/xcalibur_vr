<?php
$atts = shortcode_atts( genemy_contact_info_shortcode_vc(true), $atts);
extract($atts);
echo genemy_buffer_template_file('sections/contact-info.php', $atts);
?>