<?php
/**
 * The template for displaying the footer - contact page
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
<div class="footer-main footer-contact footer pb-5">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">	
                <?php /*** Copyright info ***/ ?>
                <div class="site-info d-flex flex-row justify-content-start align-items-center">
                    <?php get_template_part( 'template-parts/footer/partials/copy' ); ?>
                </div>
                <?php /*** Social ***/ ?>
                <div class="social-wrap justify-content-end">
                    <?php get_template_part('template-parts/components/social'); ?>
                </div>
            </div>
        </div>
    </div>
</div>