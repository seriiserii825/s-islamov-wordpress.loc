<?php 

add_action('after_setup_theme', 'create_post_formats');

function create_post_formats(){
	add_theme_support( 'post-formats', ['gallery', 'video', 'aside'] );
}