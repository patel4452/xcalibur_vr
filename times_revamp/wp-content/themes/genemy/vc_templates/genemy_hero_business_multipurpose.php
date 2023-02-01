<?php
$atts = shortcode_atts( genemy_hero_business_multipurpose_shortcode_vc(true), $atts);
$atts['content'] = $content;
extract($atts);
echo genemy_buffer_template_file('sections/hero-business-multipurpose.php', $atts);
?>

