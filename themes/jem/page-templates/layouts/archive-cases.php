<?php
/**
 * Cases Archive Layout
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

?>
<div class="<?php echo esc_attr( $container ); ?> mb-5">
    <div class="row">
        <?php while ( have_posts() ): the_post(); ?>
            <div class="col-12">
                <?php get_template_part('template-parts/cards/cptcard', 'cases'); ?>
            </div>
        <?php endwhile; ?>
    </div>
</div>