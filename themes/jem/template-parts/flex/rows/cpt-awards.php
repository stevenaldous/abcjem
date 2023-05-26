<?php // Flex Template for Awards Block

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// Load spacing/class options
include( locate_template( 'template-parts/flex/flex-options.php', false, false ) );

// options - id
$id     = get_sub_field('id') ? 'id="'. get_sub_field('id') .'" ' : '';

// content vars
$align  = ' justify-content-' . get_sub_field('align');
$type   = get_sub_field('type');

$featured_posts   = get_sub_field('awards');

if( $featured_posts ):        
?>

<div <?php echo $id; ?> class="flex-awards<?php echo $cl . $pt . $pb . $theme; ?>">
    <div class="<?php echo esc_attr( $container ); ?> py-4">

        <?php if( $type === 'grid' ):  // grid layout ?>
            <div class="row<?php echo $align; ?>" >
                <?php // loop through selected team members
                    foreach( $featured_posts as $post ):  
                        setup_postdata( $post );
                ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">        
                        <?php get_template_part('template-parts/cards/cptcard', 'awards'); ?>
                    </div>
                <?php  
                        endforeach;  
                    wp_reset_postdata();
                        
                ?>
            </div>
        <?php elseif( $type === 'slider' ): // slider layout ?>
            <div class="row">
                <div class="col-12 slider-wrap">
                    <!-- <div class="slick-controls awards-controls"></div> -->
                    <div id="awardsSlider" class="v-center">

                    <?php // loop through selected team members and make slides
                        foreach( $featured_posts as $post ):  
                            setup_postdata( $post );
                    ?>
                        <div class="px-2">        
                            <?php get_template_part('template-parts/cards/cptcard', 'awards'); ?>
                        </div>
                    <?php  
                            endforeach;  
                        wp_reset_postdata();
                            
                    ?>
                    </div>

                </div>
            </div>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $('#awardsSlider').slick({
                        // dots: true,
                        infinite: true,
                        speed: 500,
                        // appendArrows: '.awards-controls',
                        // appendDots: '.awards-controls',
                        prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style=""><i class="fa-light fa-chevron-left"></i><span class="sr-only">See Previous Slides</span></button>',
                        nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button" style=""><i class="fa-light fa-chevron-right"></i><span class="sr-only">See Next Slides</span></button>',
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
<?php endif; ?>