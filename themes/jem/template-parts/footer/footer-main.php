<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );


?>
<div class="footer-main footer pb-5">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row">
            <?php /*** Form Column ***/ ?>
            <div class="col-12 col-md-6 col-lg-7 col-end order-md-1 d-flex flex-column align-items-center justify-content-start "> 
                <div class="d-md-none text-center">
                    <?php get_template_part( 'template-parts/footer/partials/logo' ); ?>
                </div>
                <?php /*** Form ***/ ?>
                 
                <?php get_template_part( 'template-parts/footer/partials/form' ); ?>
            </div>
            <?php /*** Form Column ***/ ?>


            <?php /*** Info Column ***/ ?>
            <div class="col-12 col-md-6 col-lg-5 col-start order-md-0">
                <div class="d-none d-md-block">
                    <?php get_template_part( 'template-parts/footer/partials/logo' ); ?>
                </div>
                <?php /*** Location + Logo ***/ ?>
                <div class="f-loc text-center text-md-start">
                    <?php get_template_part( 'template-parts/footer/partials/loc' ); ?>
                </div>               
            </div>
           
        </div>

        <?php /*** copyright bar Column ***/ ?>
        <div class="row py-5">
            <?php /*** Social ***/ ?>
            <div class="col-12 col-md-6 order-md-1">
                <div class="social-wrap justify-content-center justify-content-md-end mb-2">
                    <?php get_template_part('template-parts/components/social'); ?>
                </div>
            </div>

            <?php /*** Copyright info ***/ ?>
            <div class="col-12 col-md-6 order-md-0">
                <?php get_template_part( 'template-parts/footer/partials/copy' ); ?>
            </div>
        </div>
    </div>
</div>