<?php
/**
 * Single Practice Area Layout
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// practice area vars
$img    = get_field('image');
$con    = get_field('content');

?>
<div class="<?php echo esc_attr( $container ); ?> pa-info mb-5">
    <div class="row">
        <div class="col-12">
            <?php // check for content and print out 'img' if it exists
                if($img): 
            ?>
                <div class="ratio ratio-21x9">
                    <div class="ratio-inner">
                        <div class="img-wrap obj">
                            <?php echo wp_get_attachment_image( $img , 'full ' ); ?>
                        </div>
                    </div>
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

<?php

    /***** Related Content *****/
    // related team
    get_template_part( 'template-parts/components/cpt', 'team' ) ; 
    // related cases
    get_template_part( 'template-parts/components/cpt', 'cases' ) ; 
    // related testimonials
    get_template_part( 'template-parts/components/cpt', 'testimonials' ); 
    // related locations
    get_template_part( 'template-parts/components/cpt', 'locations' ); 
    // related blogs
    get_template_part( 'template-parts/components/cpt', 'blogs' ) ;  
?>