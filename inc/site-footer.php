<?php
/**
 * Site Footer
 *
 * @package      BEStarter
 * @subpackage   site-header/01
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

use BEStarter\Blocks\Social_Links;

/**
 * Site Footer
 */
function be_site_footer() {
?>
    <div class="footer-info-block">
        <?php echo do_blocks('<!-- wp:site-logo {"width":265,"shouldSyncIcon":true} /-->'); ?>
        <hr>
        <?php echo do_blocks('<!-- wp:cwp/social-links {"name":"cwp/social-links","data":{},"mode":"preview","alignText":"center"} /-->'); ?>
    </div>
    <nav class="footer-nav-menu" role="navigation">
    <?php
	if ( has_nav_menu( 'footer' ) ) {
		wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu', 'container_class' => 'nav-footer' ) );
	}
    ?>
	</nav>
<? }
add_action( 'tha_footer_top', 'be_site_footer' );