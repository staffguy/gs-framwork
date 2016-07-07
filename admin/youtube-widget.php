<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Creating the widget 
class gs_framework_youtube_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'gs_framework_youtube_widget', 

// Widget name will appear in UI
__('Youtube Icon', 'gs_framework'), 

// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'gs_framework' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
//echo __( 'Hello, World!', 'gs_framework' );
$option = get_option('gs_framework_theme_options');
echo '<a href="' . $option['youtube_url'] . '" target="_blank"><img src="'. $option['youtube_icon_uploader'] .'"/></a>';
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'gs_framework' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class gs_framework_youtube_widget ends here

// Register and load the widget
function gs_framework_load_youtube_widget() {
	register_widget( 'gs_framework_youtube_widget' );
}
add_action( 'widgets_init', 'gs_framework_load_youtube_widget' );