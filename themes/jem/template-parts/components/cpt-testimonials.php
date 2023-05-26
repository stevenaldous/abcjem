<?php
/**
 * Related Testimonials
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

$tests = get_field('testimonials');

if($tests):  

?>
<div class="<?php echo esc_attr( $container ); ?> mb-5">
    <div class="row">
        <div class="col-12">
            <h2 class="h3">Testimonials</h2>
        </div>
    </div>
    <div class="row">
        <?php foreach( $tests as $post ): setup_postdata($post); ?>
            <div class="col-12">
                <?php get_template_part('template-parts/cards/cptcard', 'testimonials'); ?> 
            </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <?php endif; ?>
</div>

