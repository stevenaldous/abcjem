<?php /* Template Name: Contact Page 
*
*
*
*/
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); 


// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// template vars
$title 	= get_field('title') ? get_field('title') : get_bloginfo( 'name' );
$ctry 	= get_field('pho_ctry','options');
$pho 	= get_field('pho','options');
$faxc   = get_field('fax_ctry','options');
$fax    = get_field('fax','options');
$ema 	= get_field('email','options' );

// map
$mtf    = get_field('map_tf');
$gmap   = get_field('map_url','options');


// global form vars
$gft1	= get_field('gf_t1','options');
$gft2	= get_field('gf_t2','options');
$gfid 	= get_field('gf_fid', 'options');


?>
<div class="page-wrapper" id="contact-wrapper">
	<div id="content" tabindex="-1">
        <?php get_template_part('template-parts/hero/hero', 'page' ); ?>
        <main class="site-main" id="main">
            <div class="<?php echo esc_attr( $container ); ?> my-5">
                <?php // info + Form row  ?>
                <div class="row">
                    <?php // start of info column ?>
                    <div class="col info-col d-flex align-items-center mb-4 mb-md-0">
                        <div class="inner-wrap">
                        <?php // start of add info ?>
                            <div class="add-wrap">
                                <?php if($title) { echo '<p class="h1 title mb-2">'.$title.'</p>'; } ?>
                                <?php echo main_address('block' ); ?>
                            </div>
                            <div class="pho-wrap">
                                <?php // Check for phone number
                                    if($ctry && $pho){
                                        echo '<div class="item mb-2"><i class="fa-regular fa-phone c-jem2" aria-hidden="true"></i>'.
                                        phone( $ctry, $pho, 'dashes' ) . '</div>';
                                    }

                                    if($faxc && $fax){
                                        echo '<div class="item mb-2"><i class="fa-regular fa-fax c-jem2" aria-hidden="true"></i>'.
                                        phone( $faxc, $fax, 'dashes' ) . '</div>';
                                    }
                                    
                                    if($ema){
                                        echo '<div class="item mb-2"><i class="fa-regular fa-envelope c-jem2" aria-hidden="true"></i>'.
                                        email($ema) . '</div>';
                                    }
                                ?>
                            </div>
                            <div class="social-wrap justify-content-start d-flex">
                                <?php get_template_part('template-parts/components/social', 'inline'); ?>
                            </div>
                        </div>
                    </div>
                    <?php // end of info column ?>

                    <?php // start of form column ?>
                    <div class="col-12 col-md-6 col-xxl-7 form-col">
                        <div class="form-wrap bg-jem1 p-5 h-100 d-flex flex-column justify-content-center align-items-start rounded">
                            <?php 
                                if( $gft1 || $gft2) { echo '<p class="ft h3 text-uppercase mb-4">'.$gft1.'<span class="d-block">'.$gft2.'</span></p>'; }
                                echo gravity_form( $gfid, false, true, false, false, true, false, false ); 
                            ?>
                        </div>
                    </div>
                    <?php // end of form column ?>
                </div>
            </div>
            <?php if($mtf): ?>
                <div class="bg-dark py-5">
                    <div class="<?php echo esc_attr( $container ); ?>">
                        <?php // map row  ?>
                        <div class="row">
                            <?php // start of map wrap ?>
                            <div class="map-wrap mb-4 ">
                                <div class="ratio ratio-16x9 rounded">
                                    <?php echo map_embed(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap text-center text-md-start">
                            <?php if($gmap){echo '<a class="btn btn-primary" href="'.esc_url($gmap).'" target="_blank">View Larger Map</a>' ; } ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </main>
    </div>
</div>

<?php  get_footer(); ?>