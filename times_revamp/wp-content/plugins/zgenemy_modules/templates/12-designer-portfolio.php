<?php

add_action( 'vc_load_default_templates_action','genemy_designer_portfolio_template_for_vc' ); // Hook in

function genemy_designer_portfolio_template_for_vc() {

    $data               = array(); // Create new array

    $data['name']       = __( 'Template: 12 - Designer Portfolio', 'genemy' ); // Assign name for your custom template

    $data['weight']     = 0; 

    $data['image_path'] = '';

    $data['custom_class'] = ''; // CSS class name

    $data['content']    = <<<CONTENT

    [vc_section padding_class="wide-0"][vc_row][vc_column][vc_empty_space height="220px"][/vc_column][/vc_row][vc_row][vc_column width="10/12"][vc_column_text]

<h2 class="h2-xs">It's easy when you're doing something you love</h2>

[/vc_column_text][/vc_column][vc_column width="2/12"][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="25px"][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-80" el_id="portfolio"][vc_row][vc_column][genemy_portfolios posts_per_page="9" tax_term="" active="" order="desc" orderby="date"][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-70" bg_class="bg-lightgrey" el_id="clients"][vc_row][vc_column][genemy_section_title title="Trusted by thousands of companies" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius augue luctus donec volutpat sapien"][genemy_our_clients params="%5B%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-1.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-7.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-3.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-8.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-9.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-6.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-4.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Ffiles%2Fimages%2Fbrand-5.png%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-100" el_id="blog"][vc_row][vc_column][genemy_section_title title="Our Stories &amp; Latest News" tag="h2:h2-xs"][/vc_column][/vc_row][vc_row][vc_column][genemy_posts tax_term=""][genemy_more_question_button title="" params="%5B%7B%22icon%22%3A%22fa%20fa-angle-double-right%22%2C%22button_text%22%3A%22Read%20All%20Posts%22%2C%22button_url%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fgenemy%2Fstartup%2Fblog%2F%22%2C%22button_target%22%3A%22_self%22%7D%5D" animation_delay="800"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/genemy/files/images/call-to-action.jpg" padding_class="wide-100" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="inherit"][vc_row][vc_column][genemy_newsletter_form][/vc_column][/vc_row][/vc_section]

CONTENT;

  

    vc_add_default_templates( $data );   

}



