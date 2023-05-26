<?php
/**
 * Single Location Output/card
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// loc vars
$img    = get_field('image');
$ctry   = get_field('pho_code') ? get_field('pho_code') : '1';
$pho    = get_field('phone');
$ema    = get_field('email');
$con    = get_field('content');
$str    = get_field('str');
$murl   = get_field('map_url');
$map    = get_field('map_embed');
$mno    = get_field('map_notes');

$pid = get_the_id();

?>
<div class="loc-card">
    <a href="<?php the_permalink(); ?>" class="lc-inner">
        <?php if($img): ?>
            <div class="ratio ratio-2x1">
                <div class="ratio-inner">
                    <div class="img-wrap obj">
                        <?php echo wp_get_attachment_image( $img , 'full ' ); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="name-wrap text-left pt-3">
            <p class="name h3"><?php echo the_title(); ?></p>
        </div>

        <?php if( $str ): ?>
            <div class="add-wrap">
                <?php echo loc_address( 'inline' ); ?>
            </div>
        <?php endif; ?>
    </a>
</div>