<?php

add_action( 'vc_load_default_templates_action','genemy_app_showcase_template_for_vc' ); // Hook in

function genemy_app_showcase_template_for_vc() {

    $data               = array(); // Create new array

    $data['name']       = __( 'Template: 08 - App Showcase', 'genemy' ); // Assign name for your custom template

    $data['weight']     = 0; 

    $data['image_path'] = '';

    $data['custom_class'] = ''; // CSS class name

    $data['content']    = <<<CONTENT

    [vc_section][vc_row][vc_column][genemy_hero_app_showcase params="%5B%7B%22title%22%3A%22Download%20on%20the%20app%20store%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Fappstore.png%22%2C%22link%22%3A%22%23%22%7D%2C%7B%22title%22%3A%22Get%20it%20on%20Google%20play%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Fgoogleplay.png%22%2C%22link%22%3A%22%23%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0" el_id="features"][vc_row][vc_column][vc_empty_space height="100px"][genemy_section_title title=""][vc_row_inner][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="5/12"][genemy_service_box icon="flaticon-wireless-internet" title="Market Research" css_animation="fadeInUp"][genemy_service_box css_animation="fadeInUp" animation_delay="500"][/vc_column_inner][vc_column_inner width="5/12"][genemy_service_box icon="flaticon-users" title="User Experience" css_animation="fadeInUp" animation_delay="400"][genemy_service_box icon="flaticon-help" title="Free Consultations" css_animation="fadeInUp" animation_delay="600"][/vc_column_inner][vc_column_inner width="1/12"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0" el_id="about"][vc_row][vc_column][vc_empty_space height="40px"][genemy_about_us image="http://jthemes.org/wp/genemy/files/images/iphones-2.png" subtitle="" title="Stay Organized Effortlessly" lead_text="Justo integer odio velna vitae auctor integer congue magna at pretium purus ligula rutrum luctus" style="rose" counter_group="%5B%7B%22title%22%3A%22Happy%20Clients%22%2C%22count%22%3A%221154%22%7D%2C%7B%22title%22%3A%22Tickets%20Closed%22%2C%22count%22%3A%22409%22%7D%5D"] An enim nullam tempor sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor eros erat magna morbi pretium neque [/genemy_about_us][vc_empty_space height="60px"][/vc_column][/vc_row][/vc_section][vc_section bg_class="bg-lightgrey" el_id="testimonials"][vc_row][vc_column][genemy_section_title title="Customers Feedback" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien" tag="h2:h2-xs"][genemy_testimonials style="3column" params="%5B%7B%22name%22%3A%22pebz13%22%2C%22title%22%3A%22Programmer%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-1.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Evelyn%20Martinez%22%2C%22title%22%3A%22Housewife%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-2.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Robert%20Peterson%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-3.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Leslie%20Serpas%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-4.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Robert%20Peterson%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-5.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%2C%7B%22name%22%3A%22Robert%20Peterson%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Freview-author-6.jpg%22%2C%22desc%22%3A%22Augue%20egestas%20volutpat%20egestas%20et%20augue%20in%20cubilia%20laoreet%20magna%20suscipit%20luctus%20undo%20blandit%20vitae%20purus%20non%20diam%20tempus%20aliquet%20porta%20rutrum%20gestas%20neque%20est%20gravida%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section el_id="how-it-works"][vc_row][vc_column][genemy_bring_ideas image="http://jthemes.org/wp/genemy/files/images/apple-watch.png" title="Showcase your {mobile App} with GENEMY." tag="h3:h3-xl" lead_text="An enim nullam tempor sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor eros erat magna morbi pretium neque" display="icons" params2="%5B%7B%22title%22%3A%22Tablet%22%2C%22icon%22%3A%22fa%20fa-tablet%22%7D%2C%7B%22title%22%3A%22Mobile%22%2C%22icon%22%3A%22fa%20fa-mobile%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/files/images/video-1.jpg" padding_class="wide-100" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="inherit" el_id="watch-video"][vc_row][vc_column][vc_empty_space height="40px"][genemy_watch_video style="style2" title="See the benefits you can get by working with our experts"][vc_empty_space height="40px"][/vc_column][/vc_row][/vc_section][vc_section full_width="container-wide"][vc_row][vc_column][genemy_digital_strategy display_style="content-6" image="http://jthemes.org/wp/genemy/files/images/content-6-img.png" subtitle="" title="Most efficient {user friendly} interface" strategy_list="%5B%7B%7D%5D"]

<p class="p-lg grey-color animated" data-animation="fadeInUp" data-animation-delay="500">Justo integer odio velna vitae auctor integer congue magna at pretium purus ligula rutrum luctus</p>

<p class="animated" data-animation="fadeInUp" data-animation-delay="600">An enim tempor sapien gravida donec ipsum blandit porta justo integer odio velna vitae auctor integer congue magna pretium purus pretium ligula rutrum rutrum luctus risus ultrice luctus luctus risus ultrice luctus</p>



<h5 class="h5-sm animated" data-animation="fadeInUp" data-animation-delay="700">Feature Integration</h5>

<p class="animated" data-animation="fadeInUp" data-animation-delay="800">An enim tempor sapien gravida donec ipsum blandit porta justo integer odio velna vitae auctor integer congue magna pretium purus</p>

[/genemy_digital_strategy][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0" el_id="faqs"][vc_row][vc_column][vc_empty_space height="40px"][genemy_section_title title="Questions About Pricing Plans?" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien" tag="h2:h2-xs"][/vc_column][/vc_row][vc_row][vc_column width="1/2"][genemy_faq css_animation="fadeInUp" animation_delay="200"][genemy_faq css_animation="fadeInUp"][genemy_faq title="An interdum lobortis pretium ornare?" subtitle="Feugiat eros, ac tincidunt ligula massa in faucibus orci luctus et purus pretium ligula posuere cubilia curae" css_animation="fadeInUp" animation_delay="400"][genemy_faq title="Interdum lobortis pretium ornare?" subtitle="Praesent semper, lacus sed cursus porta, odio augue ligula massa risus laoreet. Laoreet auctor massa varius egestas amet mauris suscipit semper lacus sed cursus porta primis" css_animation="fadeInUp" animation_delay="500"][/vc_column][vc_column width="1/2"][genemy_faq title="Aliquam dapibus pretium ornare?" css_animation="fadeInUp" animation_delay="200"][genemy_faq title="Pretium purus lacus tempor an ipsum vitae augue egestas emo ligula?" subtitle="Praesent semper lacus sed cursus porta, feugiat primis in orci luctus ligula egestas volute turpis quaerat sodales sapien orci luctus et ultrices ante ipsum primis in amet in odio." css_animation="fadeInUp"][genemy_faq title="Dapibus lobortis pretium ornare?" subtitle="Semper lacus sed cursus porta,feugiat primis in egestas volute turpis quaerat sodales sapien ligula ultrice egesta magna" css_animation="fadeInUp" animation_delay="400"][genemy_faq title="Interdum lobortis pretium ornare?" subtitle="Feugiat eros, ac tincidunt ligula massa in faucibus orci luctus et ultrices posuere cubilia curae integer congue leo metus" css_animation="fadeInUp" animation_delay="500"][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="60px"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/files/images/call-to-action.jpg" padding_class="wide-100" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="inherit" el_id="try-for-free"][vc_row][vc_column][genemy_call_to_action style="style2" title=" Do even more with the {GENEMY} App! " lead_text=" Egestas magna egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue luctus magna dolor luctus undo an impedit magna dolor vitae auctor " display="icons" params2="%5B%7B%22title%22%3A%22Download%20on%20the%20app%20store%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Fappstore.png%22%2C%22link%22%3A%22%23%22%7D%2C%7B%22title%22%3A%22Get%20it%20on%20Google%20play%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fwp-content%2Fthemes%2Fgenemy%2Fimages%2Fgoogleplay.png%22%2C%22link%22%3A%22%23%22%7D%5D"][/vc_column][/vc_row][/vc_section]

CONTENT;

  

    vc_add_default_templates( $data );   

}



