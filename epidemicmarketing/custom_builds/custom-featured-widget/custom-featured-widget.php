<?php
/*
Widget Name: Custom Featured Widget
Description: An example widget which displays 'Custom Featured Widget'.
Author: King Pangilinan
Author URI: http://example.com
Widget URI: http://example.com/custom_featured_widget,
Video URI: http://example.com/custom_featured_widget
*/

/**
 * Adds Foo_Widget widget.
 */
class Custom_Featured_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'custom_featured_widget', // Base ID
			esc_html__( 'Custom Featured Widget', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'A Featured Widget', 'text_domain' ), ) // Args
		);
	}
	
	

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
      // outputs the content of the widget
      if ( ! isset( $args['widget_id'] ) ) {
        $args['widget_id'] = $this->id;
      }

      // widget ID with prefix for use in ACF API functions
      $widget_id = 'widget_' . $args['widget_id'];

      $icon_image = get_field( 'icon_image', $widget_id ) ? get_field( 'icon_image', $widget_id ) : '';
      $title = get_field( 'title', $widget_id ) ? get_field( 'title', $widget_id ) : '';
      $btn_label = get_field( 'button_label', $widget_id );
      $btn_link = get_field( 'button_link', $widget_id ) ? get_field( 'button_link', $widget_id ) : '#';

      echo $args['before_widget'];

      if ( $title ) {
        echo $args['before_title'] . esc_html($title) . $args['after_title'];
      }
      if ( $icon_image ) {
        echo "<img src=\"{$icon_image['sizes']['thumbnail']}\" title=\"{esc_html($title)}\" alt=\"{esc_html($title)}\" />";
      }
      
      the_field( 'text', $widget_id );

      if($btn_label) {
        echo '<a href="' . esc_url($btn_link) . '" class="button">' . esc_html($btn_label) . '</a>';
      }

      echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		//$instance = $old_instance;
		
		//$instance = array();
		//$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		//return $instance;
		return $new_instance;
	}

} // class Foo_Widget
// register Foo_Widget widget
function register_custom_featured_widget() {
    register_widget( 'Custom_Featured_Widget' );
}
add_action( 'widgets_init', 'register_custom_featured_widget' );