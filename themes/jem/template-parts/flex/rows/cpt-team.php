<?php // Flex Template for Team Block

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// Load spacing/class options
include( locate_template( 'template-parts/flex/flex-options.php', false, false ) );

// options - id
$id     = get_sub_field('id') ? 'id="'. get_sub_field('id') .'" ' : '';

// content vars
$align  = get_sub_field('align') ? ' justify-content-' . get_sub_field('align') : '' ;
$type   = get_sub_field('type');

$team   = get_sub_field('team');

// layout on choices
$open = '';
$close = '';

if($type  == 'slider' ) {
    $open = '<div class="col-12 slider-wrap"><div class="slick-controls team-controls"></div><div id="teamSlider">';
    $close = '</div></div></div>';
}

if( $team ):        
?>
<div <?php echo $id; ?> class="flex-team<?php echo $cl . $pt . $pb . $theme; ?>">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row"><?php if( get_sub_field('head_tf') ) { get_template_part('template-parts/flex/rows/partials/flex-header'); } ?></div>
        <div class="row">
            <?php 
                echo $open;
                // loop through selected team members
                foreach( $team as $post ){
                    setup_postdata( $post );

                    //open team wrap matching display type selection
                    if( $type === 'slider' ) {
                        echo '<div class="px-2">';     
                    }
                    else {
                        echo '<div class="col-12 col-sm-6 col-md-4 col-lg-2">';
                    }
                    // get team card
                    get_template_part('template-parts/cards/cptcard', 'team');
                    // close team wrap
                    echo '</div>';
                } wp_reset_postdata();
                echo $close;
            ?>

            <?php if( $type === 'slider' ): // slider JS ?>
                <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            $('#teamSlider').slick({
                                dots: true,
                                infinite: true,
                                speed: 500,
                                appendArrows: '.team-controls',
                                appendDots: '.team-controls',
                                prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style=""><i class="fa fa-chevron-left" aria-hidden="true"></i><span class="sr-only">See Previous Slides</span></button>',
                                nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button" style=""><i class="fa fa-chevron-right" aria-hidden="true"></i><span class="sr-only">See Next Slides</span></button>',
                                slidesToShow: 6,
                                slidesToScroll: 6,
                                responsive: [
                                    {
                                        breakpoint: 992,
                                        settings: {
                                            slidesToShow: 4,
                                            slidesToScroll: 4,
                                            infinite: true,
                                            dots: true
                                        }
                                    },
                                    {
                                        breakpoint: 768,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 2
                                        }
                                    },
                                    {
                                        breakpoint: 576,
                                        settings: {
                                            slidesToShow: 1,
                                            slidesToScroll: 1
                                        }
                                    }
                                ],
                            });	
                        });
                    </script>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>