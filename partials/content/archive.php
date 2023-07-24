<?php
/**
 * Archive partial
 *
 * @package      BEStarter
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

 echo '<article class="post-summary">';
 be_post_summary_image('medium');

 echo '<div class="post-summary__content" >';
    echo '<div>';
        echo '<p class="post-summary__meta">';
            echo be_entry_category_inline() . ' - '. do_shortcode('[rt_reading_time postfix="min read"]');
        echo '</p>';
        be_post_summary_title();
    echo '</div>';
     echo '<div class="post-summary__byline">';
         echo 'Writer Call Out - BFF';
     echo '</div>';
 echo '</div>';
echo '</article>';