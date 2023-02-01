<?php
function genemy_dynamic_general_style_css(){

  $primary_color = ot_get_option('primary_color', apply_filters( 'genemy_primary_color', '#ff3366'));
  $primary_color_2 = ot_get_option('primary_color_2', apply_filters( 'genemy_primary_color_2', '#e62354'));
  $dark_color = ot_get_option('secondary_color', apply_filters( 'genemy_secondary_color', '#222'));
  $grey_color = ot_get_option('secondary_color_light', apply_filters( 'genemy_grey_color_light', '#f0f0f0'));
	$css = '.wpb-js-composer .vc_tta-tabs.vc_tta-tabs-position-top.vc_tta-style-genemy .vc_tta-tabs-list .vc_active a{background-color: '.esc_attr($primary_color).';}
  .wpb-js-composer .vc_tta-tabs.vc_tta-tabs-position-top.vc_tta-style-genemy .vc_tta-tabs-list li a span{color: '.esc_attr($primary_color).';} ';
  $css .= "\n";
  for ($i=1; $i <= 40 ; $i++) { 
    $value =  ($i*5);
    $css .= '.ind-'.$value.' { padding-right: '.$value.'px; padding-left: '.$value.'px; } ';
    $value =  ($i*10);
    $css .= '.wide-'.$value.' { padding-bottom: '.$value.'px; } ';
    $value =  ($i*5);
    $css .= '.m-top-'.$value.' { margin-top: '.$value.'px; } ';
    $css .= '.m-bottom-'.$value.' { margin-bottom: '.$value.'px; } ';
    $css .= '.m-left-'.$value.' { margin-left: '.$value.'px; } ';
    $css .= '.m-right-'.$value.' { margin-right: '.$value.'px; } ';
    $css .= '.p-top-'.$value.' { padding-top: '.$value.'px; } ';
    $css .= '.p-bottom-'.$value.' { padding-bottom: '.$value.'px; }';
    $css .= '.p-left-'.$value.' { padding-left: '.$value.'px; }';
    $css .= '.p-right-'.$value.' { padding-right: '.$value.'px; }';

    $value =  ($i*10);
    $css .= '.p-top-bottom-'.$value.' { padding-top: '.$value.'px; padding-bottom: '.$value.'px; }';
  } 

$css .= '
.m-bottom-0 { margin-bottom: 0; }.p-bottom-0 { padding-bottom: 0; }.p-left-0 { padding-left: 0px; }.p-right-0 { padding-right: 0px; }
.bg-dark { background-color: '. esc_attr( $dark_color ) .' !important; }
.bg-lightgrey { background-color: '. esc_attr( $grey_color ) .' !important; }
.bg-rose { background-color: '. esc_attr($primary_color) .' !important; }
.primary-color, .preset-color, .color-text,
.navbar.scroll.navbar-light .rose-hover .navbar-nav .nav-link:hover, 
.navbar.scroll.navbar-dark .rose-hover .navbar-nav .nav-link:hover,
.wpb-js-composer .vc_tta-tabs.vc_tta-tabs-position-top.vc_tta-style-genemy .vc_tta-tabs-list li a span,
a.rose-hover:hover { color: '. esc_attr($primary_color) .'; }
.portfolio-filter.rose-btngroup .btn-group > .btn.active, 
.portfolio-filter.rose-btngroup .btn-group > .btn.focus,
.wpb-js-composer .vc_tta-tabs.vc_tta-tabs-position-top.vc_tta-style-genemy .vc_tta-tabs-list .vc_active a{ background-color: '. esc_attr($primary_color) .'; border-color: '. esc_attr($primary_color) .'; }
.btn-rose{background-color: '. esc_attr($primary_color) .';border: 2px solid '. esc_attr($primary_color) .';}
.btn-tra,.white-color .btn-tra{color: '.esc_attr($primary_color).';border-color:'.esc_attr($primary_color).';}
.pricing-plan.rose-border{ border-color: '. esc_attr($primary_color) .' }
.btn:hover { color: #fff;background-color:'.esc_attr($primary_color_2 ).';border-color:'.esc_attr($primary_color_2).';}
.btn-tra:hover{background-color: '.esc_attr($primary_color) .';border-color:'. esc_attr($primary_color).';}
.play-icon-rose { color: '. esc_attr($primary_color) .'; }
.rose-progress .progress-bar {  background-color: '. esc_attr($primary_color) .'; }
.white-color .rose-icon span, .rose-icon span {  color: '. esc_attr($primary_color) .';}
.rose-hover:hover .grey-icon span { color: '. esc_attr($primary_color) .'; }
.portfolio-filter button.is-checked, .bg-dark .portfolio-filter button.is-checked,
.widget_rss cite,.recentcomments .comment-author-link, .recentcomments .comment-author-link a,.rose-color,
.rose-color h2, .rose-color h3,.rose-color h4, .rose-color h5, .rose-color h6, .rose-color p, .rose-color a, 
.rose-color li, .rose-color i, .white-color .rose-color,
.hover-menu .collapse.rose-hover ul ul > li:hover > a, 
.navbar .rose-hover .show .dropdown-menu > li > a:focus, 
.navbar .rose-hover .show .dropdown-menu > li > a:hover, 
.hover-menu .collapse.rose-hover ul ul ul > li:hover > a,
.navbar-light.bg-light.navbar-expand-lg .nl-simple a:hover,
.navbar-light.bg-light.navbar-expand-lg .nl-simple.active a,
.hover-menu .dropdown-item.active, .hover-menu .dropdown-item:active,
.dropdown-item.active, .dropdown-item:active,
.rose-color span { 
  color: '. esc_attr($primary_color) .'; 
}
.woocommerce span.onsale,
.owl-theme .owl-dots .owl-dot.active span,
.hover-overlay mark, .hover-overlay ins,
.cssload-ball,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
.wpb-js-composer .vc_tta-tabs.vc_tta-tabs-position-top.vc_tta-style-genemy-style2 .vc_tta-tabs-list .vc_active a,
.page-item.active .page-link,
.navbar-expand-lg .nl-simple a::before{
  background-color: '. esc_attr($primary_color) .';
}
.woocommerce button.button.alt.single_add_to_cart_button{border: 2px solid '. esc_attr($primary_color) .';}
.page-item.active .page-link,
.portfolio-filter button.is-checked, .bg-dark .portfolio-filter button.is-checked{
  border-color: '. esc_attr($primary_color) .';
}
';

$colors_arr = genemy_default_color_classes();
    foreach ($colors_arr as $key => $value) {
        $color = $value['value'];
        $css .= "
        .has-{$key}-background-color .wp-block-coblocks-shape-divider__alt-wrapper,
        .has-{$key}-background-color,  
        .bg-{$key} { background-color: {$color}; } 
        .underline-{$key} { 
          background-image: linear-gradient(120deg, {$color} 0%, {$color} 90%); 
          background-repeat: no-repeat;
          background-size: 100% 0.22em;
          background-position: 0 105%; 
        }";
        $color =  isset($value['color'])? $value['color']: $value['value'];
        $css .= "
        .has-{$key}-color.has-text-color,
        .play-icon-{$key},
                  .{$key}-color,
                  .{$key}-color h2, 
                  .{$key}-color h3, 
                  .{$key}-color h4, 
                  .{$key}-color h5, 
                  .{$key}-color h6, 
                  .{$key}-color p, 
                  .{$key}-color a, 
                  .{$key}-color li,
                  .{$key}-color i, 
                  .white-color .{$key}-color,
                  span.section-id.{$key}-color,
                  .{$key}-color span{ color: {$color}; }";
        $css .= ".btn-{$key},.btn-tra-{$key}:hover,.btn-tra-{$key}:focus,.btn-{$key}:hover,.btn-{$key}:focus{background-color: {$color}; border-color: {$color};}";          
        $css .= ".is-style-outline .has-{$key}-background-color,  .btn-tra-{$key}{background-color: transparent; border-color: {$color};}";          
        $css .= ".{$key}-icon, .{$key}-icon [class^='flaticon-']::before {color: {$color};}";          
    }

	return genemy_compress($css);
}
function genemy_bootstrap_style_css(){
    $primary_color = ot_get_option('primary_color', apply_filters( 'genemy_primary_color', '#ff3366'));
    $css = '.btn{ background-color:'.esc_attr($primary_color).';border:2px solid '.esc_attr($primary_color).';}';
    return genemy_compress($css);
}

function genemy_woocommerce_general_style_css(){
    $primary_color = ot_get_option('primary_color', apply_filters( 'genemy_primary_color', '#ff3366'));
    $primary_color_2 = ot_get_option('primary_color_2', apply_filters( 'genemy_primary_color_2', '#e62354'));
    $dark_color = ot_get_option('secondary_color', apply_filters( 'genemy_secondary_color', '#2c353f'));
    $grey_color = ot_get_option('secondary_color_light', apply_filters( 'genemy_grey_color_light', '#f0f0f0'));

    $output = '';
    $output .= ' 
    .woocommerce-info > a:hover,
    .woocommerce-info::before,
    .woocommerce-MyAccount-content p a,
    .page-content .woocommerce-MyAccount-navigation ul .active a,
    .woocommerce .single-widget a:hover,
    .woocommerce .single-widget a:focus,
    .product_meta a,
    .order-total .amount,
    .product-name strong,
    .single-product .summary .yith-wcwl-add-to-wishlist a,   
    .woocommerce div.product p.price, 
    .woocommerce div.product span.price{
        color: '.$primary_color.';
    }
    #headersearch .caret,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
    .woocommerce #respond input#submit:hover, 
    .woocommerce a.button:hover, 
    .woocommerce button.button:hover, 
    .woocommerce input.button:hover,
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
    .product-inner-buttons .yith-wcwl-wishlistaddedbrowse a,
    .product-inner-buttons .yith-wcwl-wishlistexistsbrowse a,
    .product-inner-buttons .yith-wcqv-button:hover,
    .product-inner-buttons .yith-wcqv-button:focus,
    .woocommerce #respond input#submit.alt, 
    .woocommerce a.button.alt, 
    .woocommerce button.button.alt, 
    .woocommerce input.button.alt{
        background-color: '.$primary_color.';
    }
    .product-item .product-inner-buttons .yith-wcwl-wishlistaddedbrowse a,
    .product-item .product-inner-buttons .yith-wcwl-wishlistexistsbrowse a,
    .product-inner-buttons .yith-wcqv-button:hover,
    .product-inner-buttons .yith-wcqv-button:focus{
      border-color: '.$primary_color.';
    }
    .nav-item .cart-contents .cart-contents-count,
    .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content,
    .woocommerce #respond input#submit.alt:hover, 
    .woocommerce a.button.alt:hover, 
    .woocommerce button.button.alt:hover, 
    .woocommerce input.button.alt:hover{
        background-color: '.$primary_color_2.';
    }
    .woocommerce-error, 
    .woocommerce-info, 
    .woocommerce-message{
        background-color: '.$grey_color.';
    }    
    ';

    return genemy_compress($output);
}