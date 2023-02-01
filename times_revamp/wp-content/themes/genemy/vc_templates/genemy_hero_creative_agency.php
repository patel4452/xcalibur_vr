
<?php $atts = shortcode_atts( genemy_hero_creative_agency_shortcode_vc(true), $atts);
$__content = $content;
extract($atts);

$atts['__content'] = $__content;
echo genemy_buffer_template_file('sections/hero-creative-agency.php', $atts);
?>