<?php
/**
 * Red Rock Concrete Coatings — Theme functions
 */

function redrock_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'after_setup_theme', 'redrock_setup' );

function redrock_block_styles() {
	register_block_style(
		'core/gallery',
		array(
			'name'  => 'swatches',
			'label' => 'Swatches',
		)
	);
}
add_action( 'init', 'redrock_block_styles' );

function redrock_scripts() {
	wp_enqueue_style(
		'redrock-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Work+Sans:wght@400;600&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'redrock-style',
		get_stylesheet_uri(),
		array(),
		filemtime( get_stylesheet_directory() . '/style.css' )
	);

	wp_enqueue_script(
		'redrock-scroll-header',
		get_stylesheet_directory_uri() . '/js/scroll-header.js',
		array(),
		filemtime( get_stylesheet_directory() . '/js/scroll-header.js' ),
		true
	);
	wp_enqueue_script(
		'redrock-nav-toggle',
		get_stylesheet_directory_uri() . '/js/nav-toggle.js',
		array(),
		filemtime( get_stylesheet_directory() . '/js/nav-toggle.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'redrock_scripts' );

function redrock_service_pages() {
	$services_page = get_page_by_path( 'services' );

	if ( ! $services_page ) {
		return array();
	}

	return get_pages(
		array(
			'parent'      => $services_page->ID,
			'sort_column' => 'menu_order,post_title',
		)
	);
}