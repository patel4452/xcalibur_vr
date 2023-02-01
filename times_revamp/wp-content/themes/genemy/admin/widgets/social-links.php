<?php
/**
 * Genemy class used to implement a Footer Social icons widget. 
 */
class Genemy_Social_links extends WP_Widget {	

	public function __construct() {
		$widget_ops = array(
			 'classname' => 'genemy-social-widget',
			'description' => __('Display company social links', 'genemy' )
		);
		parent::__construct( 'social-icons', __( 'Genemy Social links', 'genemy' ), $widget_ops );
	}


	public function widget( $args, $instance ) {
		if ( !isset( $args[ 'widget_id' ] ) ) {
			$args[ 'widget_id' ] = $this->id;
		} //!isset( $args[ 'widget_id' ] )		

		$title = ( !empty( $instance[ 'title' ] ) ) ? $instance[ 'title' ] : '';
		

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );		

		echo genemey_context_args($args[ 'before_widget' ]);
		echo ( !empty( $title ) ) ? $args[ 'before_title' ] . esc_attr($title) . $args[ 'after_title' ] : '';

		$social_icons = ot_get_option( 'social_icons', genemy_default_social_icons() );

		echo '<div class="widget-content flow-me-widget">';
		echo genemy_footer_social_icons();	
		echo '</div>';

		echo genemey_context_args($args[ 'after_widget' ]);	
	}	

	public function update( $new_instance, $old_instance ) {
		$instance                = $old_instance;
		$instance[ 'title' ]     = sanitize_text_field( $new_instance[ 'title' ] );

		return $instance;
	}



	public function form( $instance ) {
		$title     = isset( $instance[ 'title' ] ) ? esc_attr( $instance[ 'title' ] ) : '';	
		?>
        <p><label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>">
        	<?php _e( 'Title:', 'genemy' ); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
        <p><?php _e('Social icons can be edit from Theme options > General options', 'genemy')?></p>
		<?php
	}
}