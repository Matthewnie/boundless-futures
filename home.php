<?php
/**
 * Home
 *
 * @package      BEStarter
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

/**
 * Home Content
 */
function be_home_content() {

	if ( get_query_var( 'paged' ) ) {
		return;
	}

	$page_id = get_option( 'page_for_posts' );
	if ( empty( $page_id ) ) {
		return;
	}

	$loop = new WP_Query( [ 'post_type' => 'page', 'p' => $page_id ] );
	if ( $loop->have_posts() ) {
		while( $loop->have_posts() ) {
			$loop->the_post();

			global $post;
			if ( ! empty( $post->post_content ) ) {
				echo '<div class="block-area block-area-home">';
				the_content();
				echo '</div>';
			}

		}
	}
	wp_reset_postdata();
}
add_action( 'tha_content_while_before', 'be_home_content', 20 );

function be_home_loop() {

	tha_content_while_before();
	// What We're Reading
	$category_id = 9;
	query_posts(array(
		'cat' => $category_id,
		'posts_per_page' => 6
	));

	if ( have_posts() ) :
		echo '<div class="archive-articles-container has-dark-background">';
		echo '<div class="archive-articles-content">';
			echo '<div class="archive-articles-content-title">';
				echo '<h2>'.get_cat_name($category_id).'</h2>';
				echo '<a href="'.get_category_link($category_id).'">View All</a>';
			echo '</div>';
		echo '<div class="archive-articles-posts">';
		/* Start the Loop */
		while ( have_posts() && ! is_404() ) :
			the_post();
			tha_entry_before();
			$partial = is_singular() ? 'content' : 'archive';
			get_template_part( 'partials/content/' . $partial , get_post_type());
			tha_entry_after();
		endwhile;

		echo '</div>';
		echo '<a href="'.get_category_link($category_id).'" class="archive-articles-view-all">View All</a>';
			echo '</div>';
		echo '</div>';

	endif;

	// What We're Learning
	$category_id = 8;
	query_posts(array(
		'cat' => $category_id,
		'posts_per_page' => 6
	));
	
	if ( have_posts() ) :
		echo '<div class="archive-articles-container">';
		echo '<div class="archive-articles-content">';
			echo '<div class="archive-articles-content-title">';
				echo '<h2>'.get_cat_name($category_id).'</h2>';
				echo '<a href="'.get_category_link($category_id).'">View All</a>';
			echo '</div>';
		echo '<div class="archive-articles-posts">';
		/* Start the Loop */
		while ( have_posts() && ! is_404() ) :
			the_post();
			tha_entry_before();
			$partial = is_singular() ? 'content' : 'archive';
			get_template_part( 'partials/content/' . $partial , get_post_type());
			tha_entry_after();
		endwhile;
		echo '</div>';
		echo '<a href="'.get_category_link($category_id).'" class="archive-articles-view-all">View All</a>';
			echo '</div>';
		echo '</div>';
	endif;
	tha_content_while_after();
}
remove_action('tha_content_loop', 'be_default_loop');
add_action( 'tha_content_loop', 'be_home_loop');

// Build the page.
// Full width.
add_filter( 'be_page_layout', 'be_return_full_width_content' );
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
