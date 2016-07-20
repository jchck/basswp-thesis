<?php

namespace basswp\thss\titles;

/**
 *
 * Set the page title as defined below
 *
 */

function title(){
	if (is_home()) {
        if ($home = get_option('page_for_posts', true)) {
            return get_the_title($home);
        }
        return __('Latest Posts', 'thss');
    }
    if (is_archive()) {
        return get_the_archive_title();
    }
    if (is_search()) {
        return sprintf(__('Search Results for %s', 'thss'), get_search_query());
    }
    if (is_404()) {
        return __('Not Found', 'thss');
    }
    return get_the_title();
}