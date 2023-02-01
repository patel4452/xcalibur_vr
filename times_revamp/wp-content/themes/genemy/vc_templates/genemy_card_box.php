<?php
$atts = shortcode_atts( genemy_card_box_shortcode_vc(true), $atts);
$atts['content'] = $content;
extract($atts);

echo genemy_buffer_template_file('sections/card-box.php', $atts);
?>