<?php

namespace basswp\thss\assets;

/*
	Add CSS & JS to the front
*/

function assets(){
	wp_enqueue_style( 'css', get_template_directory_uri() . '/dest/thesis.css', false, null );

	wp_enqueue_script('js', get_template_directory_uri() . '/dest/thesis.js', ['jquery'], null, true);

	if ( is_single() && comments_open() && get_option( 'thread_comments' );)) {
		wp_enqueue_script( 'comment-reply' );
	}

	/*
		Enqueue external stylesheets as such:
	*/
	/* wp_enqueue_style( 'gFont', '//fonts.googleapis.com/css?family=...', false, null ); */
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

/*
	Use main CSS file for visual editor
*/

function visual_editor(){
	add_editor_style( get_template_directory_uri() . '/dest/thesis.css' );
}

add_action( 'after_theme_setup', __NAMESPACE__ . '\\visual_editor' );