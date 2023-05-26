<?php
/**
 * Single Testimonial Layout
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

// cases vars
$con    = get_field('content');
$exc    = get_field('excerpt');

?>
<div class="<?php echo esc_attr( $container ); ?> test-info mb-5">
    <?php // check for content and print out 'img' if it exists
        if($exc): 
    ?>
        <div class="row mb-4">
            <div class="col-12">
                <div class="content">
                    <p class="h2">"<?php echo $exc; ?>"</p>
                </div>
            </div>
        </div>
    <?php endif; ?>
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
    // related practices
    get_template_part( 'template-parts/components/cpt', 'practices' ); 
    // related team
    get_template_part( 'template-parts/components/cpt', 'team' ) ; 
    // related locations
    get_template_part( 'template-parts/components/cpt', 'locations' ); 
    // related blogs
    get_template_part( 'template-parts/components/cpt', 'blogs' ) ;  
?>
