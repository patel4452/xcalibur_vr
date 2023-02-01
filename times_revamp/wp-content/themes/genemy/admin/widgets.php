<?php
foreach ( glob( GENEMY_DIR . "/admin/widgets/*.php" ) as $filename ) {
    include $filename;
} //glob( GENEMY_DIR . "/admin/widgets/*.php" ) as $filename
if ( !function_exists( 'genemy_custom_register_widgets' ) ):
    function genemy_custom_register_widgets( ) {
        if ( class_exists( 'Genemy_About_me_Widget' ) ) {
            register_widget( 'Genemy_About_me_Widget' );
        } //class_exists( 'Genemy_About_me_Widget' )
        /*if( class_exists('Genemy_Testimonial_Widget') ){         
        register_widget( 'Genemy_Testimonial_Widget' );         
        }        
        */
        if ( class_exists( 'Genemy_Widget_Recent_Posts' ) ) {
            register_widget( 'Genemy_Widget_Recent_Posts' );
        } //class_exists( 'Genemy_Widget_Recent_Posts' )
        if ( class_exists( 'Genemy_How_can_We_Help_Widget' ) ) {
            register_widget( 'Genemy_How_can_We_Help_Widget' );
        } //class_exists( 'Genemy_How_can_We_Help_Widget' )
        if ( class_exists( 'Genemy_Footer_Subscription_Form' ) ) {
            register_widget( 'Genemy_Footer_Subscription_Form' );
        } //class_exists( 'Genemy_Footer_Subscription_Form' )
        if ( class_exists( 'Genemy_Get_In_Touch' ) ) {
            register_widget( 'Genemy_Get_In_Touch' );
        } //class_exists( 'Genemy_Get_In_Touch' )
        if ( class_exists( 'Genemy_Social_links' ) ) {
            register_widget( 'Genemy_Social_links' );
        } //class_exists( 'Genemy_Social_links' )
        if ( class_exists( 'Genemy_Download_link_Widget' ) ) {
            register_widget( 'Genemy_Download_link_Widget' );
        } //class_exists( 'Genemy_Download_link_Widget' )
    }
    add_action( 'widgets_init', 'genemy_custom_register_widgets' );
endif;