<?php 

function ppm_quickstart_widget_areas() {

	register_sidebar( array(
		'name' => __( 'Widget', 'PerfectPoingMarketing' ),
		'id' => 'widget_id',
		'before_widget' => '<div class="single-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

}
add_action('widgets_init', 'ppm_quickstart_widget_areas');
