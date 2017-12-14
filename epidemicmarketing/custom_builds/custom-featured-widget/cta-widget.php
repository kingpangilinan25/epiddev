<?php

if(!class_exists('CtaWidget')) {

  class CtaWidget extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
      $widget_ops = array(
        'classname' => 'cta_widget',
        'description' => 'CTA Widget built with ACF Pro',
      );
      parent::__construct( 'cta_widget', 'CTA Widget', $widget_ops );
    }

  /**
    * Outputs the content of the widget
    *
    * @param array $args
    * @param array $instance
    */
    public function widget( $args, $instance ) {
      // outputs the content of the widget
      if ( ! isset( $args['widget_id'] ) ) {
        $args['widget_id'] = $this->id;
      }

      // widget ID with prefix for use in ACF API functions
      $widget_id = 'widget_' . $args['widget_id'];

      $title = get_field( 'title', $widget_id ) ? get_field( 'title', $widget_id ) : '';
      $btn_label = get_field( 'button_label', $widget_id );
      $btn_link = get_field( 'button_link', $widget_id ) ? get_field( 'button_link', $widget_id ) : '#';

      echo $args['before_widget'];

      if ( $title ) {
        echo $args['before_title'] . esc_html($title) . $args['after_title'];
      }
      
      the_field( 'text', $widget_id );

      if($btn_label) {
        echo '<a href="' . esc_url($btn_link) . '" class="button">' . esc_html($btn_label) . '</a>';
      }

      echo $args['after_widget'];
      
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
    	// outputs the options form on admin
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update( $new_instance, $old_instance ) {
    	// processes widget options to be saved
    }

  }

}

/**
 * Register our CTA Widget
 */
function register_cta_widget()
{
  register_widget( 'CtaWidget' );
}
add_action( 'widgets_init', 'register_cta_widget' );