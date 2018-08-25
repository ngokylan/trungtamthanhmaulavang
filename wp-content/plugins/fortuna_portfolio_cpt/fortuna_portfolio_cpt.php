<?php

/*
Plugin Name: Fortuna Portfolio CPT
Plugin URI: http://themeforest.net/user/blueowlcreative
Description: This Plugin creates a Portfolio Custom Post Type for Fortuna WordPress Theme.
Version: 1.0
Author: blueowlcreative
Author URI: http://blueowlcreative.com
License: Custom
License URI: http://themeforest.net/licenses 
*/

/* ----------------------------------------------------- */
/* Add Portfolio Custom Post Type
/* ----------------------------------------------------- */
function boc_portfolio_register() {  

	register_post_type(
		'portfolio',
		array(
			'labels' => array(
				'name' => 'Portfolio',
				'singular_name' => 'Portfolio'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'portfolio_item'),
			'supports' => array('title', 'editor', 'thumbnail'),
			'can_export' => true,
			'show_in_nav_menus' => true,
		)
	);

	register_taxonomy('portfolio_category', 'portfolio', array('hierarchical' => true, 'label' => 'Portfolio Categories', 'query_var' => true, 'rewrite' => true));
	
	
	// Remove post_format URL param so we can use PREVIEW on portfolio items
	function remove_post_format_parameter( $url ) {
		$url = remove_query_arg( 'post_format', $url );
		return $url;
	}
	add_filter( 'preview_post_link', 'remove_post_format_parameter', 9999 );	 
}
add_action('init', 'boc_portfolio_register', 1);   



// Register the Custom Templates for the Custom Post Type Portfolio
function boc_cpt_post_types( $post_types ) {
	$post_types = array();
	$post_types[] = 'portfolio';
	return $post_types;
}
add_filter( 'cpt_post_types', 'boc_cpt_post_types' );



/* ----------------------------------------------------- */
/* EOF 
/* ----------------------------------------------------- */