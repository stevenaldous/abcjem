<?php
/**
 * Featured Posts Output/card
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// content vars
$d = get_the_date('M j , Y');
$a = get_the_author();
$img = get_post_thumbnail_id() ? get_post_thumbnail_id() : get_field('fb_blogimg','options') ;

?>
<div class="post-card feat bg-white h-100 d-flex flex-column justify-content-between">
    <div class="ratio">
        <div class="ratio-inner">
            <div class="img-wrap obj">
                <?php echo wp_get_attachment_image( $img, 'full' ); ?>
            </div>
        </div>
    </div>
    <div class="copy-wrap d-flex flex-column justify-content-between flex-grow-1 px-3 py-4">
        <p class="title h3 text-capitalize mb-3 mb-md-4"><?php strtolower( the_title() ); ?></p>
        <div class="byline c-dark">
            <p class="date d-inline"><?php echo $d; ?></p>    
            <p class="auth d-inline text-capitalize">By: <?php echo $a; ?></p>    
            <?php 
                // get and print primary category
                $term_list = wp_get_post_terms($post->ID, 'category', ['fields' => 'all']);
                foreach($term_list as $term) {
                   if( get_post_meta($post->ID, '_yoast_wpseo_primary_category',true) == $term->term_id ) {
                    echo '<p class="term d-inline text-capitalize">'.$term->name.'</p>';
                   }
                }
            ?>
        </div>
    </div>
    <div class="btn-wrap text-end px-2 pb-2">
        <a href="<?php the_permalink(); ?>" class="btn no-btn">Read More <i class="fa-regular fa-arrow-right" aria-hidden="true"></i></a>
    </div>
</div>