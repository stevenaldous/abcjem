<?php
/**
 * Single Cases Layout
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// cases vars
$img    = get_field('image');
$con    = get_field('content');
$exc    = get_field('excerpt');
$awd    = get_field('awarded');

?>
<div class="<?php echo esc_attr( $container ); ?> pa-info mb-5">
    <div class="row mb-3">
        <div class="col order-0 order-md-1 mb-3 mb-md-0">
            <?php // check for and print out 'img' if it exists
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

        <?php if( $exc || $awd ): ?>
            <div class="col-12 col-md-5 col-lg-4 order-1 order-md-0 d-flex flex-column justify-content-center align-items-start">

            <?php // check for and print out 'award' if it exists
                if( $awd ): 
            ?>
                <div class="awd-wrap">
                    <p class="h3 awd">Awarded: <?php echo $awd; ?></p>
                </div>
            <?php endif; ?>

            <?php // check for and print out 'excerpt' if it exists
                if( $exc ): 
            ?>
                <div class="awd-wrap">
                    <p class="excerpt"><?php echo $exc; ?></p>
                </div>
            <?php endif; ?>

            </div>
        <?php endif; ?>

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
    // related testimonials
    get_template_part( 'template-parts/components/cpt', 'testimonials' ); 
    // related locations
    get_template_part( 'template-parts/components/cpt', 'locations' ); 
    // related blogs
    get_template_part( 'template-parts/components/cpt', 'blogs' ) ;  
?>