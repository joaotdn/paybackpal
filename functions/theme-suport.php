<?php

function ps_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	add_theme_support('post-thumbnails', array(
		'post',
		'page'
	));

	// Default thumbnail size
	set_post_thumbnail_size( 125, 125, true );

	// Custom sizes
	// add_image_size( 'ps-thumb-medium', 354, 142, true );

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );

	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );

	// Add HTML5 Support
	add_theme_support( 'html5',
		array(
			'search-form',
			'gallery',
		)
	);

	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	// Adding post format support
	add_theme_support( 'post-formats',
		array(
			'gallery',           // gallery of images
			'video',             // video
		)
	);

	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'ps_theme_support', 1200 );

	// Hide admin bar
	show_admin_bar( false );

}

add_action( 'after_setup_theme', 'ps_theme_support' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );