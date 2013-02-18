<?php

remove_action( 'after_setup_theme', 'twentytwelve_setup' );
add_action( 'after_setup_theme', 'tck_setup', 11 );

function tck_setup() {
	load_theme_textdomain( 'twentytwelve', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array() );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'twentytwelve' ) );

	/*
	 * This theme supports custom background color and image, and here
	 * we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size($width = 100, $height = 120, $crop = false);
}

function tck_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'tck' ),
		'id' => 'primary',
		'description' => __( 'Main sidebar', 'tck' ),
		'before_widget' => '<div class="nav-section">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Bar 1', 'tck' ),
		'id' => 'footer-1',
		'description' => __( 'Footer bar', 'tck' ),
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Bar 2', 'tck' ),
		'id' => 'footer-2',
		'description' => __( 'Footer bar', 'tck' ),
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Bar 3', 'tck' ),
		'id' => 'footer-3',
		'description' => __( 'Footer bar', 'tck' ),
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
}

add_action( 'widgets_init', 'tck_widgets_init' );

?>
