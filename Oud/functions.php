<?php

function jozien_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'jozien_resources');

// Navigation Menus
register_nav_menus(array(
'primary' => __( 'Primary Menu'),
));

// custom header

$args = array(
	'flex-width'    => true,
	'width'         => 200,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/Logo.png',
);
add_theme_support( 'custom-header', $args );

// Customize excerpt word count length
function custom_excerpt_length() {
	return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');

//Theme Setup
function lerenwordpress_setup() {
	
	
// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 1920, 800, true);
	
	// Add post format support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'lerenwordpress_setup');
