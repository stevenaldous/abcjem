<?php
/**
 * Single Team Member Layout
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// team bio vars
$img    = get_field('image');
$pos    = get_field('pos');
$ctry   = get_field('pho_code');
$pho    = get_field('phone');
$ema    = get_field('email');
$bio    = get_field('bio');


?>
<div class="<?php echo esc_attr( $container ); ?> team-bio mb-5">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-5 order-md-1">
            <?php if($img): ?>
                <div class="ratio ratio-1x1">
                    <div class="ratio-inner">
                        <div class="img-wrap obj">
                            <?php echo wp_get_attachment_image( $img , 'full ' ); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-6 col-lg-7 order-md-0">
            <div class="pos-wrap">
                <p class="pos h3"><?php echo $pos; ?></p>
            </div>
            <div class="pho-wrap">
                <p class="pho">P:&nbsp;<?php echo phone( $ctry, $pho, '' ); ?></p>
            </div>
            <div class="ema-wrap">
                <p class="ema">E:&nbsp;<?php echo email($ema); ?></p>
            </div>
            <div class="bio">
                <p><?php echo $bio; ?></p>
            </div>

        </div>
    </div>
</div>

<?php
    /***** Team Member Content *****/
    // education
    get_template_part( 'template-parts/components/team', 'edu' );
    // publication
    get_template_part( 'template-parts/components/team', 'pub' ) ; 
    // honors
    get_template_part( 'template-parts/components/team', 'hon' ) ; 



    /***** Related Content *****/
    // related cases
    get_template_part( 'template-parts/components/cpt', 'cases' ) ; 
    // related locations
    get_template_part( 'template-parts/components/cpt', 'locations' ) ; 
    // related practices
    get_template_part( 'template-parts/components/cpt', 'practices' ) ; 
    // related testimonials
    get_template_part( 'template-parts/components/cpt', 'testimonials' ) ; 
    // related blogs
    get_template_part( 'template-parts/components/cpt', 'blogs' ) ;  
?>