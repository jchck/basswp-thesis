<?php

namespace basswp\thss\setup;

function setup(){

	/**
	 *
	 * Let plugins manage document title
	 * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
	 *
	 */
	add_theme_support( 'title-tag' );

	/**
	 *
	 * Register navigation menus
	 * @see http://codex.wordpress.org/Function_Reference/register_nav_menus
	 *
	 */
	register_nav_menus( [
		'primary_nav'	=> __( 'Primary Navigation', 'jchck' )
	] );

	/**
	 *
	 * Turn on post thumbnails
	 * @see http://codex.wordpress.org/Post_Thumbnails
	 * @see http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
	 * @see http://codex.wordpress.org/Function_Reference/add_image_size
	 *
	 */
	add_theme_support('post-thumbnails');

	/**
	 *
	 * Turn on HTML5 support
	 * @see http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
	 *
	 */
	add_theme_support( 'html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form'] );
}

add_action('after_setup_theme', __NAMESPACE__ . '\\setup');