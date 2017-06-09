<?php

// Office hubs theme supports
if ( ! function_exists( 'officehubs_supports' ) ) :
function officehubs_supports(){
    
    load_theme_textdomain( 'officehubs', get_template_directory() . '/languages' );
    
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'post-image', 400, 400, true );
    
	register_nav_menus( array(
		'primary'   => __( 'Primary menu', 'officehubs' ),
	) );    
}
endif;
add_action('after_setup_theme', 'officehubs_supports');


// Calling Theme files
function officehubs_files(){
    
    wp_enqueue_style( 'officehubs-theme-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet', array(), '1.0' );
    wp_enqueue_style( 'officehubs-theme-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', array(), '3.3.4' );
    wp_enqueue_style( 'officehubs-theme-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '4.3.0' );
    wp_enqueue_style( 'officehubs-theme-slicknav', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0' );
    wp_enqueue_style( 'officehubs-theme-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'officehubs-theme-responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0' );
    
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'officehubs-bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array(), '20120206', true );
    wp_enqueue_script( 'officehubs-slicknav-js', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array(), '20120206', true );
    wp_enqueue_script( 'officehubs-main-js', get_template_directory_uri() . '/js/main.js', array(), '20120206', true );
    
    
    
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'officehubs_files'); 


function officehubs_ie_compitable_elements(){
    ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="shortcut icon" type="image/png" href=""/>
    
    <?php
}
add_action('wp_head', 'officehubs_ie_compitable_elements'); 


// Includes
include_once('inc/widgets.php');
include_once('inc/shortcodes.php');
include_once('inc/custom-posts.php');
require_once dirname( __FILE__ ) .'/inc/cs-framework/cs-framework.php';

add_filter('widget_text', 'do_shortcode');

//default theme support
add_image_size( 'workspace', 310, 310, true );