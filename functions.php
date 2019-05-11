<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

	$parent_style = 'parent-style'; // This is 'twentynineteen-style' for the Twenty Nineteen theme.

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_theme_support( 'custom-header' );

// hook in late to make sure the parent theme's registration
// has fired so you can undo it. Otherwise the parent will simply
// enqueue its script anyway.
add_action('wp_enqueue_scripts', 'remove_nav_js', 100);
function remove_nav_js()
{
	wp_dequeue_script('twentynineteen-priority-menu');
}
