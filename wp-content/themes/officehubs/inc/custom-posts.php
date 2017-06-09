<?php 
add_action( 'init', 'officehubs_theme_custom_post' );
function officehubs_theme_custom_post() {
	register_post_type( 'workspace',
		array(
			'labels' => array(
				'name' => __( 'Workspaces' ),
				'singular_name' => __( 'Workspace' ),
				'add_new_item' => __( 'Add New Workspace' )
			),
			'public' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
		)
	);
	
}



function ppm_quickstart_custom_post_taxonomy() {
	register_taxonomy(
		'cpt_cat',  
		'cpt', 
		array(
			'hierarchical'          => true,
			'label'                 => 'CPT Category', 
			'query_var'             => true,
			'show_admin_column'     => true,
			'rewrite'               => array(
				'slug'              => 'event-category', 
				'with_front'        => true 
				)
			)
	);
}
add_action( 'init', 'ppm_quickstart_custom_post_taxonomy');   