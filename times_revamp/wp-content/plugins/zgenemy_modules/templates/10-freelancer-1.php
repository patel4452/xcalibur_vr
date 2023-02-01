<?php

add_action( 'vc_load_default_templates_action','genemy_freelancer_1_template_for_vc' ); // Hook in

function genemy_freelancer_1_template_for_vc() {

    $data               = array(); // Create new array

    $data['name']       = __( 'Template: 10 - Freelancer 1', 'genemy' ); // Assign name for your custom template

    $data['weight']     = 0; 

    $data['image_path'] = '';

    $data['custom_class'] = ''; // CSS class name

    $data['content']    = <<<CONTENT

    [vc_section bg_class="bg-dark"][vc_row][vc_column][genemy_hero_freelancer1][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-40" el_id="about"][vc_row][vc_column][genemy_section_title title=""][vc_row_inner][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="5/12"][genemy_service_box icon="flaticon-wireless-internet" title="Market Research" css_animation="fadeInUp"][genemy_service_box css_animation="fadeInUp" animation_delay="500"][/vc_column_inner][vc_column_inner width="5/12"][genemy_service_box icon="flaticon-users" title="User Experience" css_animation="fadeInUp" animation_delay="400"][genemy_service_box icon="flaticon-help" title="Free Consultations" css_animation="fadeInUp" animation_delay="600"][/vc_column_inner][vc_column_inner width="1/12"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-80" bg_class="bg-lightgrey" el_id="portfolio"][vc_row][vc_column][genemy_portfolios template="portfolio/isotope1.php" posts_per_page="9" tax_term="" order="desc" orderby="date"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="" padding_class="wide-0" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="inherit"][vc_row][vc_column width="1/4"][genemy_counter_up css_animation="fadeInUp"][/vc_column][vc_column width="1/4"][genemy_counter_up count="409" title="Tickets Closed" subtitle="Donec enim ipsum porta justo" css_animation="fadeInUp" animation_delay="400"][/vc_column][vc_column width="1/4"][genemy_counter_up count="869" title="Followers" subtitle="Velna iaculis odio auctor" css_animation="fadeInUp" animation_delay="500"][/vc_column][vc_column width="1/4"][genemy_counter_up count="901" title="Cups of Coffee" subtitle="Integer congue impedit magna" css_animation="fadeInUp" animation_delay="600"][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="50px"][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-70"][vc_row][vc_column][genemy_section_title title="Trusted by thousands of companies" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius augue luctus donec volutpat sapien"][genemy_our_clients params="%5B%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-21.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-7.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-23.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-28.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-29.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-26.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-24.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-25.png%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-100" bg_class="bg-lightgrey" el_id="testimonials"][vc_row][vc_column][genemy_section_title title="Our Customers Reviews" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien" tag="h2:h2-xs"][genemy_testimonials style="3column" params="%5B%7B%22name%22%3A%22pebz13%22%2C%22title%22%3A%22Programmer%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-1.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Evelyn%20Martinez%22%2C%22title%22%3A%22Housewife%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-2.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Robert%20Peterson%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-3.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Leslie%20Serpas%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-4.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Robert%20Peterson%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-5.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Robert%20Peterson%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-6.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-100" el_id="blog"][vc_row][vc_column][genemy_section_title title="My Stories &amp; Latest News" tag="h2:h2-xs"][/vc_column][/vc_row][vc_row][vc_column][genemy_posts][/vc_column][/vc_row][vc_row][vc_column][genemy_more_question_button title="" params="%5B%7B%22icon%22%3A%22fa%20fa-angle-double-right%22%2C%22button_text%22%3A%22Read%20All%20posts%22%2C%22button_url%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fblog%2F%22%2C%22button_target%22%3A%22_self%22%7D%5D" animation_delay="800"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/files/images/call-to-action.jpg" padding_class="wide-100" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="inherit"][vc_row][vc_column][genemy_newsletter_form][/vc_column][/vc_row][/vc_section]

CONTENT;

  

    vc_add_default_templates( $data );   

}



