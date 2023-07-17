<?php
/**
 * Singular partial
 *
 * @package      BEStarter
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

echo '<article class="' . esc_attr( join( ' ', get_post_class() ) ) . '">';

if ( be_has_action( 'tha_entry_top' ) ) {
	echo '<header class="entry-header leader" >';
		echo '<div class="entry-header-content" style="background-image: url('.get_the_post_thumbnail_url().');">';
			echo '<div class="title">';
				echo '<h1 class="entry-title">' . esc_html( get_the_title() ) . '</h1>';
				echo '<p>'.get_field('role').'</p>';
			echo '</div>';
		echo '</div>';
	echo '</header>';
}

echo '<div class="entry-content">';
tha_entry_content_before();
the_content();

wp_link_pages(
	[
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bestarter_textdomain' ),
		'after'  => '</div>',
	]
);

tha_entry_content_after();
echo do_blocks('<!-- wp:separator --><hr class="wp-block-separator has-alpha-channel-opacity alignwide"/><!-- /wp:separator -->');
echo '</div>';

if ( be_has_action( 'tha_entry_bottom' ) ) {
	echo '<footer class="entry-footer">';
	tha_entry_bottom();
	echo '</footer>';
}

echo '</article>';

$leaders = get_posts([
	'post_type' => 'leader',
	'exclude' => [get_the_ID()],
	'orderby' => 'menu_order',
	'tax_query' => array(
		array(
				'taxonomy' => 'leadership-type',
				'field'    => 'slug',
				'terms'    => 'leadership-team'
		)
	)
]);
$advisors = get_posts([
	'post_type' => 'leader',
	'exclude' => [get_the_ID()],
	'orderby' => 'menu_order',
	'tax_query' => array(
		array(
				'taxonomy' => 'leadership-type',
				'field'    => 'slug',
				'terms'    => 'advisory-committee'
		)
	)
]);


echo '<div class="more-leaders-container">';
	echo '<h2>Explore More Leaders</h2>';
	echo '<div class="leaders">';
		foreach ($leaders as $key => $leader) {
			echo do_blocks('<!-- wp:le/bf-leader-card {"name":"le/bf-leader-card","data":{"leader":'.$leader->ID.',"_leader":"field_64b552e8ca6cb"},"align":"center","mode":"preview"} /-->');
		}
	echo '</div>';
echo '</div>';
echo '<div class="more-leaders-container">';
	echo '<h2>Explore More Leaders</h2>';
	echo '<div class="leaders">';
		foreach ($advisors as $key => $leader) {
			echo do_blocks('<!-- wp:le/bf-leader-card {"name":"le/bf-leader-card","data":{"leader":'.$leader->ID.',"_leader":"field_64b552e8ca6cb"},"align":"center","mode":"preview"} /-->');
		}
	echo '</div>';
echo '</div>';