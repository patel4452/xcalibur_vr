<?php

class Genemy_About_me_Widget extends WP_Widget {



  function __construct() {

    $widget_ops = array(
       'classname' => 'footer-info',
      'description' => __('Display title, description & social icons', 'genemy' )
    );
    // Instantiate the parent object
    parent::__construct( 'genemy_about_me_widget', 'Genemy About us', $widget_ops );
  }


  function widget( $args, $instance ) {
    $title = ( !empty( $instance[ 'title' ] ) ) ? $instance[ 'title' ] : '';  	
    $description = isset( $instance[ 'description' ] )? $instance[ 'description' ] : '';    

    echo genemey_context_args($args['before_widget']);

    if ( $title ) {
      echo '<h4 class="h4-md txt-up txt-900">' . esc_attr($title) . '</h4>';
    } //$title

    echo '<p>'.do_shortcode($description).'</p>'; 

    echo genemey_context_args($args['after_widget']);
  }

  function update( $new_instance, $old_instance ) {
    // Save widget options
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
    return $instance;
  }

  function form( $instance ) {
    $title = isset( $instance[ 'title' ] )? $instance[ 'title' ] : 'GENEMY.';
    $description = isset( $instance[ 'description' ] )? $instance[ 'description' ] : 'Aliquam orci nullam tempor sapien orci gravida donec enim ipsum porta justo integer at velna vitae auctor integer congue magna';
    ?>

    <p><label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>">
          <?php _e( 'Title:', 'genemy' ); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
    
    <p>
      <label for="<?php echo esc_attr($this->get_field_id( 'description' )); ?>"><?php _e( 'Description:', 'genemy' ); ?></label> 
      <textarea cols="20" rows="4" class="widefat" id="<?php echo esc_attr($this->get_field_id( 'description' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'description' )); ?>"><?php echo esc_attr( $description ); ?></textarea></p>

    <?php
  }
}