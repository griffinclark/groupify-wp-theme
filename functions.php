<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

function groupify_define_font_sizes() {
	add_theme_support(
        'editor-font-sizes', 
        array(
            array(
                'name'      => __( 'Normal', 'understrap-child' ),
                'shortName' => __( 'N', 'understrap-child' ),
                'size'      => 20,
                'slug'      => 'groupify-normal'
            ),
            array(
                'name'      => __( 'Medium', 'understrap-child' ),
                'shortName' => __( 'M', 'understrap-child' ),
                'size'      => 16,
                'slug'      => 'groupify-medium'
            ),
            array(
                'name'      => __( 'Small', 'understrap-child' ),
                'shortName' => __( 'S', 'understrap-child' ),
                'size'      => 14,
                'slug'      => 'groupify-small'
            )
        )
    );
}
add_action( 'after_setup_theme', 'groupify_define_font_sizes' );

function srbe_support_reusable_block_export( $post_type_args, $post_type ) {
	if ( 'wp_block' === $post_type ) {
		$post_type_args['can_export'] = true;
	}
	return $post_type_args;
}
add_filter( 'register_post_type_args', 'srbe_support_reusable_block_export', 10, 2 );

