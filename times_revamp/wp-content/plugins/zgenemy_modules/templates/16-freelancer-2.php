<?php

add_action( 'vc_load_default_templates_action','genemy_freelancer_2_template_for_vc' ); // Hook in

function genemy_freelancer_2_template_for_vc() {

    $data               = array(); // Create new array

    $data['name']       = __( 'Template: 16 - freelancer-2', 'genemy' ); // Assign name for your custom template

    $data['weight']     = 0; 

    $data['image_path'] = '';

    $data['custom_class'] = ''; // CSS class name

    $data['content']    = <<<CONTENT

    [vc_section bg_class="bg-dark"][vc_row full_width="stretch_row"][vc_column][genemy_hero_freelancer2][/vc_column][/vc_row][/vc_section][vc_section el_id="about"][vc_row][vc_column][genemy_our_skills params="%5B%7B%22title%22%3A%22Coding%20Knowledge%22%2C%22count%22%3A%22%2097%22%7D%2C%7B%22title%22%3A%22Digital%20Marketing%22%2C%22count%22%3A%2292%22%7D%2C%7B%22title%22%3A%22Front%20End%20Development%22%2C%22count%22%3A%2285%22%7D%2C%7B%22title%22%3A%22WordPress%22%2C%22count%22%3A%2294%22%7D%5D"]An enim nullam tempor sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor eros erat magna morbi[/genemy_our_skills][/vc_column][/vc_row][/vc_section][vc_section bg_class="bg-lightgrey"][vc_row][vc_column][genemy_section_title][vc_row_inner][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="5/12"][genemy_service_box icon="flaticon-wireless-internet" title="Market Research" css_animation="fadeInUp"][genemy_service_box css_animation="fadeInUp" animation_delay="500"][/vc_column_inner][vc_column_inner width="5/12"][genemy_service_box icon="flaticon-users" title="User Experience" css_animation="fadeInUp" animation_delay="400"][genemy_service_box icon="flaticon-help" title="Free Consultations" css_animation="fadeInUp" animation_delay="600"][/vc_column_inner][vc_column_inner width="1/12"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section][vc_section el_id="portfolio"][vc_row][vc_column][genemy_section_title title="Creative Ideas That Impress" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien" tag="h2:h2-xs"][genemy_portfolios posts_per_page="9" tax_term="" active="" order="desc" orderby="date"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/files/images/reviews.jpg" padding_class="wide-100" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="inherit" el_id="testimonials"][vc_row][vc_column][genemy_testimonials params="%5B%7B%22name%22%3A%22pebz13%22%2C%22title%22%3A%22Programmer%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Freview-author-1.jpg%22%2C%22desc%22%3A%22%5C%22%20Etiam%20sapien%20sem%20at%20sagittis%20congue%20augue%20massa%20varius%20sodales%20sapien%20undo%20tempus%20dolor%20%20%20%20%20%20%20%20egestas%20magna%20suscipit%20magna%20tempus%20aliquet%20porta%20sodales%20augue%20suscipit%20luctus%20neque%20%5C%22%22%7D%2C%7B%22name%22%3A%22Evelyn%20Martinez%22%2C%22title%22%3A%22Housewife%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Freview-author-2.jpg%22%2C%22desc%22%3A%22%5C%22%20Etiam%20sapien%20sem%20at%20sagittis%20congue%20augue%20massa%20varius%20sodales%20sapien%20undo%20tempus%20dolor%20%20%20%20%20%20%20%20egestas%20magna%20suscipit%20magna%20tempus%20aliquet%20porta%20sodales%20augue%20suscipit%20luctus%20neque%20%5C%22%22%7D%2C%7B%22name%22%3A%22Robert%20Peterson%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Freview-author-3.jpg%22%2C%22desc%22%3A%22%5C%22%20Etiam%20sapien%20sem%20at%20sagittis%20congue%20augue%20massa%20varius%20sodales%20sapien%20undo%20tempus%20dolor%20%20%20%20%20%20%20%20egestas%20magna%20suscipit%20magna%20tempus%20aliquet%20porta%20sodales%20augue%20suscipit%20luctus%20neque%20%5C%22%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-70" el_id="clients"][vc_row][vc_column][genemy_section_title title="Trusted by thousands of companies" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius augue luctus donec volutpat sapien"][genemy_our_clients params="%5B%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-21.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-7.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-23.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-21.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-29.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-26.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-24.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-25.png%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="" bg_class="bg-lightgrey" parallax_image_repeat="no-repeat" parallax_image_position="bottom center" parallax_image_attachment="inherit" el_id="contacts"][vc_row][vc_column width="1/2"][vc_column_text]

<h3 class="h3-lg animated" data-animation="fadeInUp" data-animation-delay="400">Don’t hesitate to contact with me for any kind of information</h3>

<!-- Text -->

<p class="p-lg txt-400 grey-color animated" data-animation="fadeInUp" data-animation-delay="500">I'm always open to discuss software development projects and meet our clients in our cozy offices.</p>



<!-- Contact Phone -->

<p class="p-md support-number-txt animated" data-animation="fadeInUp" data-animation-delay="600">Call me for imiditate support</p>

<span class="support-number animated" data-animation="fadeInUp" data-animation-delay="800">+12 3 3456 7890</span>[/vc_column_text][vc_empty_space height="40px"][/vc_column][vc_column width="1/2"][contact-form-7 id="144"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/files/images/tra-bg.png" padding_class="wide-100" bg_class="bg-purple" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="inherit"][vc_row][vc_column][genemy_newsletter_form][/vc_column][/vc_row][/vc_section]

CONTENT;

  

    vc_add_default_templates( $data );   

}



