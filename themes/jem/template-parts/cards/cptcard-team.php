<?php
/**
 * Single Team Member Output/card
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

    $img    = get_field('image');
    $pos    = get_field('pos');

?>


<div class="team-card">
    <a href="<?php the_permalink(); ?>" class="tc-inner">
        <?php if($img): ?>
            <div class="ratio ratio-1x1">
                <div class="ratio-inner">
                    <div class="img-wrap obj">
                        <?php echo wp_get_attachment_image( $img , 'full ' ); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="name-wrap text-center">
            <p class="name h3"><?php echo the_title(); ?></p>
            <?php if($pos): ?>
                <p class="pos"><?php echo $pos; ?></p>
            <?php endif; ?>
        </div>
    </a>
</div>