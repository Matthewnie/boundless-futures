<?php
/**
 * Archive
 *
 * @package      BEStarter
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

// Full width.
add_filter( 'be_page_layout', 'be_return_full_width_content' );

function archive_top_wrapper(){
	if(!is_singular()){
		echo '<div class="archive-articles-container">';
		echo '<div class="archive-articles-content">';
		echo '<div class="archive-articles-posts">';
	}
}
add_action('tha_content_while_before', 'archive_top_wrapper', 25);
function archive_bottom_wrapper(){
	if(!is_singular()){
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
}
add_action('tha_content_while_after', 'archive_bottom_wrapper', 25);

/**
 * Body Class
 *
 * @param array $classes Body classes.
 */
function be_archive_body_class( $classes ) {
	$classes[] = 'archive';
	return $classes;
}
add_filter( 'body_class', 'be_archive_body_class' );

// Build the page.
require get_template_directory() . '/index.php';
