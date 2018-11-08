<?php 
add_action( 'after_setup_theme', 'img_setup' );

function img_setup(){
	add_theme_support( 'post-thumbnails' );
}