<?php 
function after_setup_theme_func() {
	register_nav_menu( 'header-menu', 'Меню в шапке' );
	register_nav_menu( 'footer-menu', 'Меню в подвале' );

	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'after_setup_theme_func' );

function change_menu_item_args( $args ) {
	if ( $args->theme_location == 'footer-menu' ) {
		
		$args->link_after = '.';
	}

	return $args;
}

add_filter( 'nav_menu_item_args', 'change_menu_item_args' );

