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
            <?php /*** Left Column ***/ ?>
            <div class="col-12 col-md-5 col-lg-6 col-start">

                <?php /*** Location + Logo ***/ ?>
                <div class="f-loc text-center text-md-start">
                    <?php get_template_part( 'template-parts/footer/partials/loc' ); ?>
                </div>               
            </div>
            <?php /*** Right Column ***/ ?>
            <div class="col-12 col-md-7 col-lg-6 col-end d-flex flex-column align-items-end justify-content-end">	

                <?php /*** Social ***/ ?>
                <div class="social-wrap justify-content-center justify-content-md-end mb-2">
                    <?php get_template_part('template-parts/components/social'); ?>
                </div>
                <?php /*** Copyright info ***/ ?>
                <div class="site-info d-flex flex-column flex-lg-row justify-content-end align-items-center align-items-md-end align-items-lg-center">
                    <?php get_template_part( 'template-parts/footer/partials/copy' ); ?>
                </div>
            </div>
            <?php /*** Right Column ***/ ?>
        </div>
    </div>
</div>