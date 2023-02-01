<?php
$atts = shortcode_atts(array(
		'image' => GENEMY_URI . '/images/video/video.jpg', 
		'mp4' => 'http://jthemes.org/wp/genemy/files/images/video/video.mp4',
		'webm' => 'http://jthemes.org/wp/genemy/files/images/video/video.webm',
		'ogv' => 'http://jthemes.org/wp/genemy/files/images/video/video.ogv',
), $atts);
extract($atts);
$atts['content'] = $content;
echo genemy_buffer_template_file('sections/hero-innovation-agency.php', $atts);
?>