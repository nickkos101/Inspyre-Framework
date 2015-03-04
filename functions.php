<?php 

include 'autocracy/autocracy.php';

function themename_scripts() {
	//Stylesheets
	wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'normalize' );
	wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'style' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'responsive' );

	//Scripts
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'function', get_template_directory_uri() . '/js/function.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'themename_scripts' );

function themename_title( $title )
{
	if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		return __( 'Home', 'theme_domain' ) . ' | '. get_bloginfo( 'name' ). ' | '. get_bloginfo( 'description' );
	}
	return $title;
}
add_filter( 'wp_title', 'themename_title' );

?>