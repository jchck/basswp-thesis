<?php

namespace basswp\thss\excerpt;

function clean(){
	/**
	 *
	 * This removes default [...] from end of the_excerpt()
	 * @see https://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_more
	 *
	 */
	
	return '';
}

add_filter('excerpt_more', __NAMESPACE__ . '\\clean');