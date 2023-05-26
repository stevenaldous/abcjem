<?php // Flex Template for Cases Block

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// Load spacing/class options
include( locate_template( 'template-parts/flex/flex-options.php', false, false ) );

// options - id
$id     = get_sub_field('id') ? 'id="'. get_sub_field('id') .'" ' : '';

// content vars
$align  = get_sub_field('align') ? ' justify-content-' . get_sub_field('align') : '';
$type   = get_sub_field('type');
$tf     = get_sub_field('tf');

// check for cases and only pront out if selected
$cases  = get_sub_field('cases');

// layout on choices
$open = '';
$close = '';

if($type  == 'slider' ) {
    $open = '<div class="col-12 slider-wrap"><div id="casesSlider" class="v-center">';
    $close = '</div></div>';
}

if( $cases ):        
?>

<div <?php echo $id; ?> class="flex-cases<?php echo $cl . $pt . $pb . $theme; ?>">
    <div class="<?php echo esc_attr( $container ); ?> py-5 inner">
        <div class="row">
            <?php 
                if( get_sub_field('head_tf') ) { get_template_part('template-parts/flex/rows/partials/flex-header'); }
                // if opening text selected
                if($tf){
                    // content vars
                    $txt    = get_sub_field('text');
                    // print txt
                    if( $txt ) { echo '<div class="col-12 mb-4"><div class="txt-wrap">'. $txt .'</div></div>'; }
                }
            ?>
        </div>
        <div class="row<?php echo $align; ?> gy-4">
            <?php 
                echo $open;
                // loop through selected team members
                foreach( $cases as $post ){
                    setup_postdata( $post );

                    //open case wrap matching display type selection
                    if( $type === 'slider' ) {
                        echo '<div class="px-2">';     
                    }
                    else {
                        echo '<div class="col-10 col-sm-6 col-md-4 mb-4 mb-md-0">';
                    }
                    // get cases card
                    get_template_part('template-parts/cards/cptcard', 'cases');
                    // close case wrap
                    echo '</div>';
                } wp_reset_postdata();
                echo $close;
            ?>

            <?php if( $type === 'slider' ): // activate JS for slider?>
                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $('#casesSlider').slick({
                            infinite: true,
                            speed: 500,
                            prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style=""><i class="fa fa-chevron-left" aria-hidden="true"></i><span class="sr-only">See Previous Slides</span></button>',
                            nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button" style=""><i class="fa fa-chevron-right" aria-hidden="true"></i><span class="sr-only">See Next Slides</span></button>',
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            responsive: [
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