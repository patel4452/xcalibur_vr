<?php

add_action( 'vc_load_default_templates_action','genemy_classic_business_template_for_vc' ); // Hook in

function genemy_classic_business_template_for_vc() {

    $data               = array(); // Create new array

    $data['name']       = __( 'Template: 18 - classic-business', 'genemy' ); // Assign name for your custom template

    $data['weight']     = 0; 

    $data['image_path'] = '';

    $data['custom_class'] = ''; // CSS class name

    $data['content']    = <<<CONTENT

    [vc_section bg_class="bg-dark"][vc_row][vc_column][genemy_hero_classic_business][/vc_column][/vc_row][/vc_section][vc_section][vc_row][vc_column width="1/4"][genemy_service_box style="sbox-2" align="text-center" icon="flaticon-idea" title="Concept &amp; Idea" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus auctor tempus" css_animation="fadeInUp" animation_delay="300"][/vc_column][vc_column width="1/4"][genemy_service_box style="sbox-2" align="text-center" icon="flaticon-compose" title="Development" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus auctor tempus" css_animation="fadeInUp" animation_delay="400"][/vc_column][vc_column width="1/4"][genemy_service_box style="sbox-2" align="text-center" icon="flaticon-wireless-internet" title="Market Analysis" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus auctor tempus" css_animation="fadeInUp" animation_delay="500"][/vc_column][vc_column width="1/4"][genemy_service_box style="sbox-2" align="text-center" icon="flaticon-notification" title="Optimization" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus auctor tempus" css_animation="fadeInUp" animation_delay="600"][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="60px"][/vc_column][/vc_row][vc_row el_id="about"][vc_column][genemy_about_us title="Stylish &amp; featured landing pages pack" lead_text="An enim nullam tempor sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor eros erat magna morbi" counter_group="%5B%7B%22title%22%3A%22Happy%20Clients%22%2C%22count%22%3A%221154%22%7D%2C%7B%22title%22%3A%22Tickets%20Closed%22%2C%22count%22%3A%22409%22%7D%5D"]An enim nullam tempor sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor eros erat magna morbi[/genemy_about_us][/vc_column][/vc_row][/vc_section][vc_section bg_class="bg-lightgrey" el_id="content-70-title"][vc_row][vc_column][genemy_digital_solutions techs_group="%5B%7B%22title%22%3A%22HTML5%22%2C%22icon%22%3A%22fa%20fa-html5%22%7D%2C%7B%22title%22%3A%22CSS3%22%2C%22icon%22%3A%22fa%20fa-css3%22%7D%2C%7B%22title%22%3A%22jsfiddle%22%2C%22icon%22%3A%22fa%20fa-jsfiddle%22%7D%2C%7B%22title%22%3A%22git%22%2C%22icon%22%3A%22fa%20fa-git%22%7D%2C%7B%22title%22%3A%22WordPress%22%2C%22icon%22%3A%22fa%20fa-wordpress%22%7D%2C%7B%22title%22%3A%22mixcloud%22%2C%22icon%22%3A%22fa%20fa-mixcloud%22%7D%5D" params="%5B%5D"]An enim nullam tempor sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor eros erat magna morbi pretium neque[/genemy_digital_solutions][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-80" el_id="portfolio"][vc_row][vc_column][genemy_section_title title="Creative Ideas That Impress" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien" tag="h2:h2-xs"][genemy_portfolios posts_per_page="9" tax_term="" active="" order="desc" orderby="date"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/files/images/statistic.jpg" padding_class="wide-70" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="fixed" el_id="why-genemy"][vc_row][vc_column][genemy_section_title title="Our success is measured by result"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][genemy_counter_up css_animation="fadeInUp"][/vc_column][vc_column width="1/4"][genemy_counter_up count="409" title="Tickets Closed" subtitle="Donec enim ipsum porta justo" css_animation="fadeInUp" animation_delay="400"][/vc_column][vc_column width="1/4"][genemy_counter_up count="869" title="Followers" subtitle="Velna iaculis odio auctor" css_animation="fadeInUp" animation_delay="500"][/vc_column][vc_column width="1/4"][genemy_counter_up count="901" title="Cups of Coffee" subtitle="Integer congue impedit magna" css_animation="fadeInUp" animation_delay="600"][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-100" el_id="wab-contain-8"][vc_row][vc_column][genemy_inner_content2]

<p class="animated" data-animation="fadeInUp" data-animation-delay="500">An enim nullam tempor sapien gravida donec enim blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula luctus risus</p>



<h5 class="h5-sm animated" data-animation="fadeInUp" data-animation-delay="600">Front-End Development</h5>

<ul class="content-list">

 	<li class=" animated" data-animation="fadeInUp" data-animation-delay="700">Vivamus tellus eget mattis rutrum</li>

 	<li class="animated" data-animation="fadeInUp" data-animation-delay="800">Aenean quis purus auctor, rhoncus est non, dictum arcu maximus interdum sem eget justo maximus</li>

 	<li class=" animated" data-animation="fadeInUp" data-animation-delay="900">Donec dolor in magna ultrices felis</li>

</ul>

[/genemy_inner_content2][/vc_column][/vc_row][/vc_section][vc_section full_width="container-wide"][vc_row full_width="stretch_row_content_no_spaces"][vc_column][genemy_digital_strategy strategy_list="%5B%7B%22title%22%3A%22Fully%20Responsive%20Design%22%7D%2C%7B%22title%22%3A%22Bootstrap%204.0%20Based%22%7D%2C%7B%22title%22%3A%22Google%20Analytics%20Ready%22%7D%2C%7B%22title%22%3A%22Cross%20Browser%20Compatability%22%7D%2C%7B%22title%22%3A%22Developer%20Friendly%20Commented%20Code%22%7D%2C%7B%22title%22%3A%22and%20much%20more%E2%80%A6%22%7D%5D"]An enim tempor sapien gravida donec ipsum blandit porta justo integer odio velna vitae auctor integer congue magna pretium purus pretium ligula rutrum luctus risus ultrice luctus[/genemy_digital_strategy][/vc_column][/vc_row][/vc_section][vc_section bg_class="bg-lightgrey" el_id="pricing"][vc_row][vc_column][genemy_section_title title="Our Pricing &amp; Packages" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien" tag="h2:h2-xs"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][genemy_pricing_table animation_delay="300"]

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

[/genemy_pricing_table][/vc_column][/vc_row][/vc_section][vc_section el_id="clients"][vc_row][vc_column][genemy_section_title title="Trusted by thousands of companies" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius augue luctus donec volutpat sapien"][genemy_our_clients params="%5B%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-1.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-7.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-3.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-8.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-9.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-6.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-4.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-5.png%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/files/images/reviews.jpg" padding_class="wide-100" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="fixed" el_id="testimonials"][vc_row][vc_column][genemy_testimonials params="%5B%7B%22name%22%3A%22pebz13%22%2C%22title%22%3A%22Programmer%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Freview-author-1.jpg%22%2C%22desc%22%3A%22%5C%22%20Etiam%20sapien%20sem%20at%20sagittis%20congue%20augue%20massa%20varius%20sodales%20sapien%20undo%20tempus%20dolor%20%20%20%20%20%20%20%20egestas%20magna%20suscipit%20magna%20tempus%20aliquet%20porta%20sodales%20augue%20suscipit%20luctus%20neque%20%5C%22%22%7D%2C%7B%22name%22%3A%22Evelyn%20Martinez%22%2C%22title%22%3A%22Housewife%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Freview-author-2.jpg%22%2C%22desc%22%3A%22%5C%22%20Etiam%20sapien%20sem%20at%20sagittis%20congue%20augue%20massa%20varius%20sodales%20sapien%20undo%20tempus%20dolor%20%20%20%20%20%20%20%20egestas%20magna%20suscipit%20magna%20tempus%20aliquet%20porta%20sodales%20augue%20suscipit%20luctus%20neque%20%5C%22%22%7D%2C%7B%22name%22%3A%22Robert%20Peterson%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Freview-author-3.jpg%22%2C%22desc%22%3A%22%5C%22%20Etiam%20sapien%20sem%20at%20sagittis%20congue%20augue%20massa%20varius%20sodales%20sapien%20undo%20tempus%20dolor%20%20%20%20%20%20%20%20egestas%20magna%20suscipit%20magna%20tempus%20aliquet%20porta%20sodales%20augue%20suscipit%20luctus%20neque%20%5C%22%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section][vc_row][vc_column][genemy_section_title title="Our Stories &amp; Latest News" tag="h2:h2-xs"][genemy_posts img_size="genemy-400x400-crop" tax_term=""][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="" bg_class="bg-lightgrey" parallax_image_repeat="" parallax_image_position="bottom center" parallax_image_attachment="inherit" el_class="contacts-section" el_id="contact"][vc_row][vc_column][genemy_section_title title="Let's Make Something Great" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien" tag="h2:h2-xs"][/vc_column][/vc_row][vc_row][vc_column width="1/2" el_class="ind-20"][vc_column_text]

<h4 class="h4-xs">Get in Touch</h4>

<p class="p-md">We are always open to discuss software development projects and meet our clients in our cozy offices</p>

[/vc_column_text][genemy_google_map][vc_empty_space height="40px"][vc_row_inner][vc_column_inner width="1/2"][genemy_contact_info css_animation="fadeInUp" animation_delay="300"][/vc_column_inner][vc_column_inner width="1/2"][genemy_contact_info title="Let's Talk" subtitle="Phone : +12 3 3456 7890

Fax : +12 9 8765 4321" css_animation="fadeInUp" animation_delay="400"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][vc_column_text]

<h4 class="h4-xs">Send a Message</h4>

<p class="p-md">Please use the form below to contact us. We will never spam you, or sell your email to third parties. All fields are required</p>

[/vc_column_text][contact-form-7 id="318"][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="40px"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" padding_class="wide-100" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="fixed" el_id="newsletter"][vc_row][vc_column][genemy_newsletter_form][/vc_column][/vc_row][/vc_section]

CONTENT;

  

    vc_add_default_templates( $data );   

}



