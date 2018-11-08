<?php 
// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

add_shortcode( 'lastPosts', 'showLastPosts' );

function showLastPosts($atts){

	$atts = shortcode_atts( array(
		'number_posts' => 3
		), $atts );

	$last_posts = '';

	$data = new WP_Query(['post_type' => 'post', 'posts_per_page' => $atts['number_posts']]);


	if($data->have_posts()){
		$last_posts .= '<ul>';

		while($data->have_posts()){

			$data->the_post();

			$last_posts .= '<a href="'.get_permalink().'">'.get_the_title().'</a><br>';

		}

		$last_posts .= '</ul>';

		//return $last_posts;
		return $last_posts;
	}

	return $last_posts;

}
// [last_posts]