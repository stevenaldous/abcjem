<?php
/**
 * Single Location Layout
 *
 * @package Understrap
 * 
 * 
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

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

?>
<div class="<?php echo esc_attr( $container ); ?> loc-info mb-5">
    <div class="row mb-3">
        <div class="col-12 col-md-7 col-lg-8 order-md-1">
            <?php // check for content and print out 'img' if it exists
                if($img): 
            ?>
                <div class="ratio ratio-2x1">
                    <div class="ratio-inner">
                        <div class="img-wrap obj">
                            <?php echo wp_get_attachment_image( $img , 'full ' ); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-5 col-lg-4 order-md-0 d-flex flex-column justify-content-center align-items-start">
            
            <?php // check for content and print out 'phone' if it exists
                if($pho): 
            ?>
                <div class="pho-wrap">
                    <p class="pho">P:&nbsp;<?php echo phone( $ctry, $pho, '' ); ?></p>
                </div>
            <?php endif; ?>
            
            <?php // check for content and print out 'email' if it exists
                if($ema): 
            ?>
                <div class="ema-wrap">
                    <p class="ema">E:&nbsp;<?php echo email($ema); ?></p>
                </div>
            <?php endif; ?>
            
            <?php // check for content and print out 'address' if it exists
                if($str): 
            ?>
                <div class="add-wrap">
                    <?php echo loc_address('block'); ?>
                </div>
            <?php endif; ?>

            <?php // check for content and print out 'map url' if it exists
                if($murl): 
            ?>
                <div class="btn-wrap">
                    <a class="btn btn-primary" href="<?php echo esc_url($murl); ?>" target="_blank">Get Directions</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php // check for content and print out 'img' if it exists
        if($con): 
    ?>
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <p><?php echo $con; ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php // check for and print out 'map' if it exists
    if($map): 
?>
    <div class="<?php echo esc_attr( $container ); ?> loc-info mb-3">
        <div class="row">
            <div class="col-12">
                <div class="map-wrap ratio ratio-21x9">
                    <?php echo $map; ?>
                </div>
            </div>
        </div>
    </div>
    <?php // check for content and print out 'map notes' if it exists
        if($mno): 
    ?>
        <div class="<?php echo esc_attr( $container ); ?> loc-info mb-5">
            <div class="row">
                <div class="col-12">
                    <p class="notes"><?php echo $mno; ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php


    /***** Related Content *****/

    // related practices
    get_template_part( 'template-parts/components/cpt', 'practices' ) ; 
    // related testimonials
    get_template_part( 'template-parts/components/cpt', 'testimonials' ); 
    // related blogs
    get_template_part( 'template-parts/components/cpt', 'blogs' ) ;  
?>