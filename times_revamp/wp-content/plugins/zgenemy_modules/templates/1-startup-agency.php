<?php

add_action( 'vc_load_default_templates_action','genemy_startup_agency_template_for_vc' ); // Hook in

function genemy_startup_agency_template_for_vc() {

    $data               = array(); // Create new array

    $data['name']       = __( 'Template: 01 - Startup Agency', 'genemy' ); // Assign name for your custom template

    $data['weight']     = 0; 

    $data['image_path'] = '';

    $data['custom_class'] = ''; // CSS class name

    $data['content']    = <<<CONTENT

    [vc_section el_class="bg-fixed hero-section white-color" el_id="hero-1"][vc_row][vc_column][genemy_hero_startup params="%5B%7B%22title%22%3A%22No%20credit%20card%20required%22%7D%2C%7B%22add_link%22%3A%22yes%22%2C%22link_before%22%3A%22*%22%2C%22link_title%22%3A%22See%20FAQ%22%2C%22title%22%3A%22for%20more%20details%22%7D%2C%7B%22add_link%22%3A%22yes%22%2C%22link_title%22%3A%22Privacy%20Policy%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section][vc_row][vc_column width="1/3"][genemy_service_box icon="flaticon-idea" title="Concept &amp; Idea" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][genemy_service_box icon="flaticon-settings-2" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][/vc_column][vc_column width="1/3"][genemy_service_box icon="flaticon-share-2" title="Keyword Research" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][genemy_service_box icon="flaticon-price-tag" title="Brand Identity" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][/vc_column][vc_column width="1/3"][genemy_service_box icon="flaticon-fingerprint" title="User Experience" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][genemy_service_box icon="flaticon-worldwide" title="SEO &amp; SMM Services" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][/vc_column][/vc_row][vc_row el_id="about"][vc_column][vc_empty_space height="50px"][genemy_about_us position="yes" style="purple" counter_group="%5B%7B%22title%22%3A%22Happy%20Clients%22%2C%22count%22%3A%221154%22%7D%2C%7B%22title%22%3A%22Tickets%20Closed%22%2C%22count%22%3A%22409%22%7D%5D" params="%5B%7B%22title%22%3A%22Happy%20Clients%22%2C%22count%22%3A%221154%22%7D%2C%7B%22title%22%3A%22Tickets%20Closed%22%2C%22count%22%3A%22409%22%7D%5D"]An enim nullam tempor sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor eros erat magna morbi[/genemy_about_us][/vc_column][/vc_row][/vc_section][vc_section full_width="container-wide" el_id="why-genemy"][vc_row full_width="stretch_row_content_no_spaces"][vc_column][genemy_digital_strategy strategy_list="%5B%7B%22title%22%3A%22Fully%20Responsive%20Design%22%7D%2C%7B%22title%22%3A%22Bootstrap%204.0%20Based%22%7D%2C%7B%22title%22%3A%22Google%20Analytics%20Ready%22%7D%2C%7B%22title%22%3A%22Cross%20Browser%20Compatability%22%7D%2C%7B%22title%22%3A%22Developer%20Friendly%20Commented%20Code%22%7D%2C%7B%22title%22%3A%22and%20much%20more%E2%80%A6%22%7D%5D" params="%5B%7B%22title%22%3A%22Fully%20Responsive%20Design%22%7D%2C%7B%22title%22%3A%22Bootstrap%204.0%20Based%22%7D%2C%7B%22title%22%3A%22Google%20Analytics%20Ready%22%7D%2C%7B%22title%22%3A%22Cross%20Browser%20Compatability%22%7D%2C%7B%22title%22%3A%22Developer%20Friendly%20Commented%20Code%22%7D%2C%7B%22title%22%3A%22and%20much%20more%E2%80%A6%22%7D%5D"]An enim tempor sapien gravida donec ipsum blandit porta justo integer odio velna vitae auctor integer congue magna pretium purus pretium ligula rutrum luctus risus ultrice luctus[/genemy_digital_strategy][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0" bg_class="bg-dark" el_id="content-7-title"][vc_row][vc_column][genemy_what_we_do_best]An enim nullam tempor sapien gravida enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor erat[/genemy_what_we_do_best][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0" bg_class="bg-tra" el_id="content-7-boxes"][vc_row][vc_column width="1/3"][genemy_card_box css_animation="fadeInUp" animation_delay="800"]An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae purus primis ipsum congue magna odio augue pretium ligula rutrum nullam[/genemy_card_box][/vc_column][vc_column width="1/3"][genemy_card_box image="http://jthemes.org/wp/genemy/demos/wp-content/themes/genemy/images/image-04.jpg" title="Professional Design" css_animation="fadeInUp" animation_delay="900"]An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae purus primis ipsum congue magna odio augue pretium ligula rutrum nullam[/genemy_card_box][/vc_column][vc_column width="1/3"][genemy_card_box image="http://jthemes.org/wp/genemy/demos/wp-content/themes/genemy/images/image-05.jpg" title="Free Consultation" css_animation="fadeInUp" animation_delay="1000"]An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae purus primis ipsum congue magna odio augue pretium ligula rutrum nullam[/genemy_card_box][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0"][vc_row][vc_column][genemy_digital_solutions techs_group="%5B%7B%22title%22%3A%22HTML5%22%2C%22icon%22%3A%22fa%20fa-html5%22%7D%2C%7B%22title%22%3A%22CSS3%22%2C%22icon%22%3A%22fa%20fa-css3%22%7D%2C%7B%22title%22%3A%22JavaScripts%22%2C%22icon%22%3A%22fa%20fa-jsfiddle%22%7D%2C%7B%22title%22%3A%22PHP%22%2C%22icon%22%3A%22fa%20fa-git%22%7D%2C%7B%22title%22%3A%22WordPress%22%2C%22icon%22%3A%22fa%20fa-wordpress%22%7D%2C%7B%22title%22%3A%22Sass%22%2C%22icon%22%3A%22fa%20fa-mixcloud%22%7D%5D" params="%5B%7B%22title%22%3A%22HTML5%22%2C%22icon%22%3A%22fa+fa-html5%22%7D%2C%7B%22title%22%3A%22CSS3%22%2C%22icon%22%3A%22fa+fa-css3-alt%22%7D%2C%7B%22title%22%3A%22JavaScripts%22%2C%22icon%22%3A%22fa+fa-js-square%22%7D%2C%7B%22title%22%3A%22PHP%22%2C%22icon%22%3A%22fa+fa-php%22%7D%2C%7B%22title%22%3A%22WordPress%22%2C%22icon%22%3A%22fa+fa-wordpress%22%7D%2C%7B%22title%22%3A%22Sass%22%2C%22icon%22%3A%22fa+fa-sass%22%7D%5D"]An enim nullam tempor sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor eros erat magna morbi pretium neque[/genemy_digital_solutions][vc_empty_space height="60px"][/vc_column][/vc_row][/vc_section][vc_section bg_class="bg-lightgrey" el_id="portfolio"][vc_row][vc_column][genemy_section_title title="Creative Ideas That Impress" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien" tag="h2:h2-xs"][genemy_portfolios posts_per_page="9" tax_term="" active="" order="desc" orderby="date"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/demos/wp-content/themes/genemy/images/brands.jpg" padding_class="wide-70" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="inherit" css=".vc_custom_1534839323128{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_id="clients"][vc_row][vc_column][genemy_section_title title="Trusted by thousands of companies" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius augue luctus donec volutpat sapien"][genemy_our_clients params="%5B%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fdemos%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Fbrand-11.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fdemos%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Fbrand-17.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fdemos%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Fbrand-13.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fdemos%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Fbrand-18.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fdemos%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Fbrand-19.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fdemos%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Fbrand-16.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fdemos%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Fbrand-14.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fdemos%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Fbrand-15.png%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-100" el_id="watch-video"][vc_row][vc_column][genemy_section_title title="We're the stand out experts in business" subtitle="Donec enim ipsum porta justo integer at velna vitae auctor integer congue magna at risus auctor purus unt pretium ligula rutrum sapien ultrice eros dolor"][/vc_column][/vc_row][vc_row][vc_column width="1/12"][/vc_column][vc_column width="10/12"][genemy_watch_video][/vc_column][vc_column width="1/12"][/vc_column][/vc_row][/vc_section][vc_section bg_class="bg-lightgrey" el_id="testimonials"][vc_row][vc_column][genemy_section_title title="Our Customers Reviews" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien" tag="h2:h2-xs"][genemy_testimonials style="3column" params="%5B%7B%22name%22%3A%22pebz13%22%2C%22title%22%3A%22Programmer%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-1.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Evelyn%20Martinez%22%2C%22title%22%3A%22Housewife%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-2.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Robert%20Peterson%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-3.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Leslie%20Serpas%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-4.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Robert%20Peterson%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-5.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Robert%20Peterson%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-6.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section el_id="blog"][vc_row][vc_column][genemy_section_title title="Our Stories &amp; Latest News" tag="h2:h2-xs"][genemy_posts img_size="genemy-400x400-crop" tax_term=""][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/demos/wp-content/themes/genemy/images/call-to-action.jpg" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="inherit"][vc_row][vc_column][genemy_call_to_action params="%5B%7B%22icon%22%3A%22fa%20fa-angle-double-right%22%2C%22button_text%22%3A%22Get%20Started%20Now%22%2C%22button_url%22%3A%22%23%22%2C%22button_target%22%3A%22_self%22%2C%22button_size%22%3A%22btn-md%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/demos/wp-content/themes/genemy/images/clouds.jpg" parallax_image_repeat="no-repeat" parallax_image_position="bottom center" parallax_image_attachment="inherit" el_id="contact"][vc_row][vc_column][genemy_section_title title="Need Help? Say Hello" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien" tag="h2:h2-xs"][/vc_column][/vc_row][vc_row][vc_column width="1/12"][/vc_column][vc_column width="10/12"][vc_row_inner][vc_column_inner width="4/12"][genemy_contact_info css_animation="fadeInUp"][genemy_contact_info title="Contact Phones" subtitle="Phone : +12 3 3456 7890

Fax : +12 9 8765 4321" css_animation="fadeInUp" animation_delay="400"][genemy_contact_info title="Working Hours" subtitle="Mon - Fri: 8:30am - 7:30pm

Sat: 8:30am - 3:30pm" css_animation="fadeInUp" animation_delay="500"][/vc_column_inner][vc_column_inner width="8/12"][contact-form-7 id="144"][/vc_column_inner][/vc_row_inner][vc_empty_space height="20px"][/vc_column][vc_column width="1/12"][/vc_column][/vc_row][/vc_section]

CONTENT;

  

    vc_add_default_templates( $data );   

}



