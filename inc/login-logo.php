<?php
/**
 * Login Logo
 *
 * @package      BEStarter
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

/**
 * Login Logo URL
 *
 * @param string $url URL.
 */
function be_login_header_url( $url ) {
	return esc_url( home_url() );
}
add_filter( 'login_headerurl', 'be_login_header_url' );
add_filter( 'login_headertext', '__return_empty_string' );

/**
 * Login Logo
 */
function be_login_logo() {

	$logo_path   = '/assets/icons/logo/bf-logo.png';
	$logo_width  = 268;
	$logo_height = 91;

	if ( ! file_exists( get_theme_file_path( $logo_path ) ) ) {
		return;
	}

	$logo   = get_theme_file_uri( $logo_path );
	$height = floor( $logo_height / $logo_width * 312 );
	$styles = sprintf(
		'.login h1 a {
			background-image: url(%s);
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center center;
			display: block;
			overflow: hidden;
			text-indent: -9999em;
			width: 312px;
			height: %dpx;
		}',
		esc_url( $logo ),
		$height
	);
	
	wp_add_inline_style( 'login', $styles );
}
add_action( 'login_enqueue_scripts', 'be_login_logo' );
