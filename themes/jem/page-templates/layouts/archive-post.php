<?php
/**
 * Posts Archive Layout
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

$t = get_field('news_title', 'options') ? get_field('news_title', 'options') : 'Join Us for News';
$f = get_field('news_form', 'options');

?>

<div class="bg-light">
    <div class="<?php echo esc_attr( $container ); ?> mb-5">
        <?php 
            get_template_part('template-parts/components/blog', 'filter'); 

            if( is_home() ) {
                get_template_part('template-parts/components/blog', 'featured');
            }      
        ?>
    </div>
</div>
<div class="<?php echo esc_attr( $container ); ?> mb-5">
    <div class="row mb-5">
        <div class="col mb-4 mb-md-0 d-flex align-items-end justify-content-center justify-content-md-start">
            <h2 class="h1 text-uppercase">Recent Posts</h2>
        </div>
        <?php if($f): ?>
        <div class="col-12 col-md-8 su-col d-flex flex-column flex-lg-row justify-content-md-end align-items-center align-items-md-end align-items-lg-center ">
            <div class="join mb-2 mb-lg-0">
                <p class="h4"><i class="fa-solid fa-envelope me-2"></i><?php echo $t; ?></p>
            </div>
            <div class="su-form-inline ms-md-5"><?php echo gravity_form( $f, false, false, false, false, true, false, false ); ?></div>
        </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <?php while ( have_posts() ): the_post(); ?>
            <div class="col-12 col-md-6 col-lg-4 pb-4">
                <?php get_template_part('template-parts/cards/cptcard', 'post'); ?>
            </div>
        <?php endwhile; ?>
    </div>
</div>