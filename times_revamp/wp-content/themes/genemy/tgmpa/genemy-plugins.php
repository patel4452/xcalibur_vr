<?php
require_once get_template_directory() . '/tgmpa/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'genemy_register_required_plugins' );

function genemy_register_required_plugins( ) {
    $plugins = array(
        // This is an example of how to include a plugin bundled with a theme.
         array(
            'name' => __( 'Visual Composer', 'genemy' ), // The plugin name.
            'slug' => 'js_composer', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/js_composer-6.3.0.zip', // The plugin source.
            'required' => true,
            'version' => '6.3.0',
            'force_activation' => false, 
            'force_deactivation' => false, 
            'external_url' => '', 
            'is_callable' => '' 
        ),
        array(
            'name' => __( 'Genemy extends', 'genemy' ), // The plugin name.
            'slug' => 'perch_modules', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/perch_modules-1.0.4.zip', // The plugin source.
            'required' => true,
            'version' => '1.0.4',
            'force_activation' => false, 
            'force_deactivation' => false, 
            'external_url' => '', 
            'is_callable' => '' 
        ),       
        array(
            'name' => __( 'Genemy post types & shortcodes', 'genemy' ), // The plugin name.
            'slug' => 'zgenemy_modules', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/zgenemy_modules.zip', // The plugin source.
            'required' => true,
            'version' => '1.1',
            'force_activation' => false,
            'force_deactivation' => false 
        ), 
        array(
            'name' => __( 'Envato market', 'genemy' ), // The plugin name.
            'slug' => 'envato-market', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/envato-market.zip', // The plugin source.
            'required' => true,
            'version' => '2.0.3',
            'force_activation' => false,
            'force_deactivation' => false 
        ),        
        array(
            'name' => __( 'Convert Plus', 'pergo' ), // The plugin name.
            'slug' => 'convertplug', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/convertplug-3.5.12.zip', // The plugin source.
            'required' => true,
            'version' => '3.5.12',
            'force_activation' => false, 
            'force_deactivation' => false, 
            'external_url' => '', 
            'is_callable' => '' 
        ),  
        array(
             'name' => esc_attr__( 'Loco Translate', 'genemy' ),
            'slug' => 'loco-translate',
            'required' => false 
        ),  
        array(
             'name' => __( 'Cool Responsive Megamenu', 'genemy' ),
            'slug' => 'cool-responsive-mega-menu',         
            'required' => true 
        ),
        array(
            'name' => __( 'Contact Form 7', 'genemy' ),
            'slug' => 'contact-form-7',
            'required' => true 
        ),
        array(
             'name' => __( 'Breadcrumb NavXT', 'genemy' ),
            'slug' => 'breadcrumb-navxt',
            'required' => true 
        ),
        array(
             'name' => __( 'Email Subscription', 'genemy' ),
            'slug' => 'email-subscribers',
            'required' => true 
        ),
        array(
             'name' => __( 'WP User Avatar', 'genemy' ),
            'slug' => 'wp-user-avatar',
            'required' => false 
        ),
        array(
             'name' => __( 'WP Retina 2x', 'genemy' ),
            'slug' => 'wp-retina-2x',
            'required' => false 
        ),
        array(
             'name' => __( 'Regenerate Thumbnails', 'genemy' ),
            'slug' => 'regenerate-thumbnails',
            'required' => false 
        ),
        array(
             'name' => __( 'One Click Demo Import', 'genemy' ),
            'slug' => 'one-click-demo-import',
            'required' => false 
        ),
        array(
             'name' => __( 'Woocommerce', 'genemy' ),
            'slug' => 'woocommerce',
            'required' => true 
        ),
        array(
             'name' => __( 'Variation Swatches for WooCommerce', 'genemy' ),
            'slug' => 'woo-variation-swatches',
            'required' => true 
        ),
        array(
             'name' => __( 'Woocommerce quick view', 'genemy' ),
            'slug' => 'yith-woocommerce-quick-view',
            'required' => true 
        ),
        array(
             'name' => __( 'Woocommerce wishlist', 'genemy' ),
            'slug' => 'yith-woocommerce-wishlist',
            'required' => true 
        ),
        
    );
    $config  = array(
         'id' => 'tgmpa', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '', // Default absolute path to bundled plugins.
        'menu' => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug' => 'themes.php', // Parent menu slug.
        'capability' => 'edit_theme_options', 
        'has_notices' => true, // Show admin notices or not.
        'dismissable' => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false, // Automatically activate plugins after installation or not.
        'message' => '' // Message to output right before the plugins table.
    );
    tgmpa( $plugins, $config );
}

