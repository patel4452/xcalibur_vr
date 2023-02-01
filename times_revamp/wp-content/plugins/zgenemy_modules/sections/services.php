<?php

add_action( 'vc_load_default_templates_action','genemy_service_section_1_for_vc' ); // Hook in

function genemy_service_section_1_for_vc() {

    $data               = array(); // Create new array

    $data['name']       = __( 'Section: Service - Section title + 2 column service box ', 'genemy' ); // Assign name for your custom template

    $data['weight']     = 0; 

    $data['image_path'] = '';

    $data['custom_class'] = ''; // CSS class name

    $data['content']    = <<<CONTENT

    [vc_section][vc_row][vc_column][genemy_section_title][vc_row_inner][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="5/12"][genemy_service_box icon="flaticon-wireless-internet" title="Market Research" css_animation="fadeInUp"][genemy_service_box css_animation="fadeInUp" animation_delay="500"][/vc_column_inner][vc_column_inner width="5/12"][genemy_service_box icon="flaticon-users" title="User Experience" css_animation="fadeInUp" animation_delay="400"][genemy_service_box icon="flaticon-help" title="Free Consultations" css_animation="fadeInUp" animation_delay="600"][/vc_column_inner][vc_column_inner width="1/12"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]

CONTENT;

  

    vc_add_default_templates( $data );



    $data               = array(); // Create new array

    $data['name']       = __( 'Section: Service - 3 column service box ', 'genemy' ); // Assign name for your custom template

    $data['weight']     = 0; 

    $data['image_path'] = '';

    $data['custom_class'] = ''; // CSS class name

    $data['content']    = <<<CONTENT

    [vc_section][vc_row][vc_column width="1/3"][genemy_service_box icon="flaticon-idea" title="Concept &amp; Idea" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][genemy_service_box icon="flaticon-settings-2" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][/vc_column][vc_column width="1/3"][genemy_service_box icon="flaticon-share-2" title="Keyword Research" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][genemy_service_box icon="flaticon-price-tag" title="Brand Identity" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][/vc_column][vc_column width="1/3"][genemy_service_box icon="flaticon-fingerprint" title="User Experience" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][genemy_service_box icon="flaticon-worldwide" title="SEO &amp; SMM Services" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp"][/vc_column][/vc_row][/vc_section]

CONTENT;

  

    vc_add_default_templates( $data );

}



