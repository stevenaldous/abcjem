<?php
/**
 * Flex Posts Output/card
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
$url = get_the_permalink();
$subt = '';

?>
<article class="post-card h-100 d-flex flex-column justify-content-between">
    <a href="<?php echo $url; ?>" class="ratio img-link">
        <div class="ratio-inner">
            <div class="img-wrap obj">
                <?php echo wp_get_attachment_image( $img, 'full' ); ?>
            </div>
        </div>
    </a>
    <div class="copy-wrap d-flex flex-column justify-content-start flex-grow-1 px-3 py-4 mt-4">
        <header class="flair mb-3 mb-lg-4 pb-2">
        <p class="title h4 text-capitalize mb-0"><?php strtolower( the_title() ); ?></p>
        <?php if($subt) { echo '<p class="subt mt-2">'.$subt.'</p>'; } ?>
        </header>
        <div class="text-wrap">
            <?php echo the_excerpt(); ?>
        </div>
    </div>

</article>