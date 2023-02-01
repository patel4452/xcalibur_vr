<?php

add_action( 'vc_load_default_templates_action','genemy_business_consultancy_template_for_vc' ); // Hook in

function genemy_business_consultancy_template_for_vc() {

    $data               = array(); // Create new array

    $data['name']       = __( 'Template: 06 - Business Consultancy', 'genemy' ); // Assign name for your custom template

    $data['weight']     = 0; 

    $data['image_path'] = '';

    $data['custom_class'] = ''; // CSS class name

    $data['content']    = <<<CONTENT

    [vc_section full_width="container-wide" padding_class="wide-0" bg_class="bg-tra"][vc_row][vc_column][genemy_hero_business_consultancy params="%5B%7B%22icon%22%3A%22fa%20fa-angle-double-right%22%2C%22button_text%22%3A%22Discover%20Our%20Services%22%2C%22button_url%22%3A%22%23about%22%2C%22button_target%22%3A%22_self%22%2C%22button_style%22%3A%22btn-tra-white%22%2C%22button_size%22%3A%22btn-md%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section el_id="about"][vc_row][vc_column][genemy_section_title title=""][/vc_column][/vc_row][vc_row][vc_column width="1/3"][genemy_service_box icon="flaticon-idea" title="Concept &amp; Idea" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][genemy_service_box icon="flaticon-settings-2" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][/vc_column][vc_column width="1/3"][genemy_service_box icon="flaticon-share-2" title="Keyword Research" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][genemy_service_box icon="flaticon-price-tag" title="Brand Identity" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][/vc_column][vc_column width="1/3"][genemy_service_box icon="flaticon-fingerprint" title="User Experience" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][genemy_service_box icon="flaticon-worldwide" title="SEO &amp; SMM Services" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0" el_id="why-genemy"][vc_row][vc_column][genemy_about_us style="green-color" counter_group="%5B%7B%22title%22%3A%22Happy%20Clients%22%2C%22count%22%3A%221154%22%7D%2C%7B%22title%22%3A%22Tickets%20Closed%22%2C%22count%22%3A%22409%22%7D%5D" params="%5B%7B%22title%22%3A%22Happy%20Clients%22%2C%22count%22%3A%221154%22%7D%2C%7B%22title%22%3A%22Tickets%20Closed%22%2C%22count%22%3A%22409%22%7D%5D"]An enim nullam tempor sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor eros erat magna morbi[/genemy_about_us][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0" bg_class="bg-dark" el_id="content-7-title"][vc_row][vc_column][genemy_what_we_do_best]An enim nullam tempor sapien gravida enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor erat[/genemy_what_we_do_best][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0" bg_class="bg-tra" el_id="content-7-boxes"][vc_row][vc_column width="1/3"][genemy_card_box css_animation="fadeInUp" animation_delay="800"]An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae purus primis ipsum congue magna odio augue pretium ligula rutrum nullam[/genemy_card_box][/vc_column][vc_column width="1/3"][genemy_card_box image="http://jthemes.org/wp/genemy/files/images/image-04.jpg" title="Professional Design" css_animation="fadeInUp" animation_delay="900"]An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae purus primis ipsum congue magna odio augue pretium ligula rutrum nullam[/genemy_card_box][/vc_column][vc_column width="1/3"][genemy_card_box image="http://jthemes.org/wp/genemy/files/images/image-05.jpg" title="Free Consultation" css_animation="fadeInUp" animation_delay="1000"]An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae purus primis ipsum congue magna odio augue pretium ligula rutrum nullam[/genemy_card_box][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0" el_id="how-it-works"][vc_row][vc_column][genemy_digital_solutions techs_group="%5B%7B%22title%22%3A%22HTML5%22%2C%22icon%22%3A%22fa+fa-html5%22%7D%2C%7B%22title%22%3A%22CSS3%22%2C%22icon%22%3A%22fa+fa-css3-alt%22%7D%2C%7B%22title%22%3A%22JavaScripts%22%2C%22icon%22%3A%22fa+fa-js-square%22%7D%2C%7B%22title%22%3A%22PHP%22%2C%22icon%22%3A%22fa+fa-php%22%7D%2C%7B%22title%22%3A%22WordPress%22%2C%22icon%22%3A%22fa+fa-wordpress%22%7D%2C%7B%22title%22%3A%22Sass%22%2C%22icon%22%3A%22fa+fa-sass%22%7D%5D" params="%5B%7B%22title%22%3A%22HTML5%22%2C%22icon%22%3A%22fa+fa-html5%22%7D%2C%7B%22title%22%3A%22CSS3%22%2C%22icon%22%3A%22fa+fa-css3-alt%22%7D%2C%7B%22title%22%3A%22JavaScripts%22%2C%22icon%22%3A%22fa+fa-js-square%22%7D%2C%7B%22title%22%3A%22PHP%22%2C%22icon%22%3A%22fa+fa-php%22%7D%2C%7B%22title%22%3A%22WordPress%22%2C%22icon%22%3A%22fa+fa-wordpress%22%7D%2C%7B%22title%22%3A%22Sass%22%2C%22icon%22%3A%22fa+fa-sass%22%7D%5D"]An enim nullam tempor sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor eros erat magna morbi pretium neque[/genemy_digital_solutions][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="60px"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/files/images/video-1.jpg" padding_class="wide-100" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="inherit" el_id="watch-video"][vc_row][vc_column][vc_empty_space height="40px"][genemy_watch_video style="style2" title="See the benefits you can get by working with our experts"][vc_empty_space height="40px"][/vc_column][/vc_row][/vc_section][vc_section el_id="clients"][vc_row][vc_column][genemy_section_title title="Trusted by thousands of companies" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius augue luctus donec volutpat sapien"][genemy_our_clients params="%5B%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-1.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-7.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-3.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-8.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-9.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-6.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-4.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-5.png%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section bg_class="bg-lightgrey" el_id="pricing"][vc_row][vc_column][genemy_section_title title="Our Pricing &amp; Packages" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien" tag="h2:h2-xs"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][genemy_pricing_table animation_delay="300"]

<ul class="features">

 	<li><strong>10</strong> Users Tasks</li>

 	<li><strong>5 GB</strong> of Storage</li>

 	<li><strong>10 mySQL</strong> Database</li>

 	<li><strong>9/5</strong> Support</li>

</ul>

[/genemy_pricing_table][/vc_column][vc_column width="1/3"][genemy_pricing_table featured="yes" price="99" animation_delay="300"]

<ul class="features">

 	<li><strong>50</strong> Users Tasks</li>

 	<li><strong>50 GB</strong> of Storage</li>

 	<li><strong>50 mySQL</strong> Database</li>

 	<li><strong>12/7</strong> Support</li>

</ul>

[/genemy_pricing_table][/vc_column][vc_column width="1/3"][genemy_pricing_table price="99" animation_delay="300"]

<ul class="features">

 	<li><strong>100</strong> Users Tasks</li>

 	<li><strong>100 GB</strong> of Storage</li>

 	<li><strong>50 mySQL</strong> Database</li>

 	<li><strong>24/7</strong> Support</li>

</ul>

[/genemy_pricing_table][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/files/images/reviews.jpg" padding_class="wide-100" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="inherit" el_id="testimonials"][vc_row][vc_column][genemy_testimonials params="%5B%7B%22name%22%3A%22pebz13%22%2C%22title%22%3A%22Programmer%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Freview-author-1.jpg%22%2C%22desc%22%3A%22%5C%22%20Etiam%20sapien%20sem%20at%20sagittis%20congue%20augue%20massa%20varius%20sodales%20sapien%20undo%20tempus%20dolor%20%20%20%20%20%20%20%20egestas%20magna%20suscipit%20magna%20tempus%20aliquet%20porta%20sodales%20augue%20suscipit%20luctus%20neque%20%5C%22%22%7D%2C%7B%22name%22%3A%22Evelyn%20Martinez%22%2C%22title%22%3A%22Housewife%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Freview-author-2.jpg%22%2C%22desc%22%3A%22%5C%22%20Etiam%20sapien%20sem%20at%20sagittis%20congue%20augue%20massa%20varius%20sodales%20sapien%20undo%20tempus%20dolor%20%20%20%20%20%20%20%20egestas%20magna%20suscipit%20magna%20tempus%20aliquet%20porta%20sodales%20augue%20suscipit%20luctus%20neque%20%5C%22%22%7D%2C%7B%22name%22%3A%22Robert%20Peterson%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Freview-author-3.jpg%22%2C%22desc%22%3A%22%5C%22%20Etiam%20sapien%20sem%20at%20sagittis%20congue%20augue%20massa%20varius%20sodales%20sapien%20undo%20tempus%20dolor%20%20%20%20%20%20%20%20egestas%20magna%20suscipit%20magna%20tempus%20aliquet%20porta%20sodales%20augue%20suscipit%20luctus%20neque%20%5C%22%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-100" el_id="faqs"][vc_row][vc_column][genemy_section_title title="Questions About Pricing Plans?" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien" tag="h2:h2-xs"][/vc_column][/vc_row][vc_row][vc_column width="1/2"][genemy_faq css_animation="fadeInUp" animation_delay="200"][genemy_faq css_animation="fadeInUp"][genemy_faq title="An interdum lobortis pretium ornare?" subtitle="Feugiat eros, ac tincidunt ligula massa in faucibus orci luctus et purus pretium ligula posuere cubilia curae" css_animation="fadeInUp" animation_delay="400"][genemy_faq title="Interdum lobortis pretium ornare?" subtitle="Praesent semper, lacus sed cursus porta, odio augue ligula massa risus laoreet. Laoreet auctor massa varius egestas amet mauris suscipit semper lacus sed cursus porta primis" css_animation="fadeInUp" animation_delay="500"][/vc_column][vc_column width="1/2"][genemy_faq title="Aliquam dapibus pretium ornare?" css_animation="fadeInUp" animation_delay="200"][genemy_faq title="Pretium purus lacus tempor an ipsum vitae augue egestas emo ligula?" subtitle="Praesent semper lacus sed cursus porta, feugiat primis in orci luctus ligula egestas volute turpis quaerat sodales sapien orci luctus et ultrices ante ipsum primis in amet in odio." css_animation="fadeInUp"][genemy_faq title="Dapibus lobortis pretium ornare?" subtitle="Semper lacus sed cursus porta,feugiat primis in egestas volute turpis quaerat sodales sapien ligula ultrice egesta magna" css_animation="fadeInUp" animation_delay="400"][genemy_faq title="Interdum lobortis pretium ornare?" subtitle="Feugiat eros, ac tincidunt ligula massa in faucibus orci luctus et ultrices posuere cubilia curae integer congue leo metus" css_animation="fadeInUp" animation_delay="500"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/files/images/clouds.jpg" bg_class="bg-lightgrey" parallax_image_repeat="no-repeat" parallax_image_position="bottom center" parallax_image_attachment="inherit" el_id="contact"][vc_row][vc_column][genemy_section_title title="Need Help? Say Hello" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien" tag="h2:h2-xs"][/vc_column][/vc_row][vc_row][vc_column width="1/12"][/vc_column][vc_column width="10/12"][vc_row_inner][vc_column_inner width="4/12"][genemy_contact_info css_animation="fadeInUp"][genemy_contact_info title="Contact Phones" subtitle="Phone : +12 3 3456 7890

Fax : +12 9 8765 4321" css_animation="fadeInUp" animation_delay="400"][genemy_contact_info title="Working Hours" subtitle="Mon - Fri: 8:30am - 7:30pm

Sat: 8:30am - 3:30pm" css_animation="fadeInUp" animation_delay="500"][/vc_column_inner][vc_column_inner width="8/12"][contact-form-7 id="144"][/vc_column_inner][/vc_row_inner][vc_empty_space height="20px"][/vc_column][vc_column width="1/12"][/vc_column][/vc_row][/vc_section]

CONTENT;

  

    vc_add_default_templates( $data );   

}



