<?php
/**
 * Related Team Members
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

$team = get_field('team');

if($team):  

?>
<div class="<?php echo esc_attr( $container ); ?> mb-5">
    <div class="row">
        <div class="col-12">
            <h2 class="h3">Team Members</h2>
        </div>
    </div>
    <div class="row">
        <?php foreach( $team as $post ): setup_postdata($post); ?>
            <div class="col-12 col-md-6 col-lg-3">
                <?php get_template_part('template-parts/cards/cptcard', 'team'); ?>
            </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
</div>
<?php endif; ?>


