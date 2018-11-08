<?php 

add_action('wp_enqueue_scripts', 'theme_scripts');

function theme_scripts() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('default', get_stylesheet_directory_uri() . '/assets/css/default.css' );
	wp_enqueue_style('layout', get_stylesheet_directory_uri() . '/assets/css/layout.css' );
	wp_enqueue_style('media_queries', get_stylesheet_directory_uri() . '/assets/css/media-queries.css' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.10.2.min.js', [], null, true);
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'jquery.easeScroll.js', get_template_directory_uri() . '/assets/js/jquery.easeScroll.js', ['jquery'], null, true);
	wp_enqueue_script( 'jquery.flexslider.js', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', ['jquery'], null, true);
	wp_enqueue_script( 'doubletaptogo.js', get_template_directory_uri() . '/assets/js/doubletaptogo.js', ['jquery'], null, true);
	wp_enqueue_script( 'init.js', get_template_directory_uri() . '/assets/js/init.js', ['jquery'], null, true);
	wp_enqueue_script( 'jquery-migrate-1.2.1.min', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js', ['jquery'], null, true);
}