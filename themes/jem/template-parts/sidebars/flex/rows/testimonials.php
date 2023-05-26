<?php // Flex Template for SB Testimonial
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// content vars
$pret   = get_sub_field('pret') ? get_sub_field('pret') : 'Why Clients Trust Us';
$sh     = get_sub_field('sem_hx') ? get_sub_field('sem_hx') : 'p';
$t      = get_sub_field('title') ? get_sub_field('title') : 'Testimonials';

// check for cases and only pront out if selected
$tests   = get_sub_field('testimonials');

if( $tests ):  
?>

<div class="row sb-test flex-testimonials mb-5">
    <div class="col-12">
        <div class="test-wrap text-center">
            <img src="<?php echo get_stylesheet_directory_uri(  ). '/images/quotes.svg'; ?>" class="quotes" alt="" aria-hidden="true" />
            <?php 
                    if($pret){ echo '<p class="pret mb-1 mt-4">'.$pret.'</p>';}
                    if($t) { echo '<'.$sh.' class="h2 title mb-4">'.$t.'</'.$sh.'>'; }
            ?>
            <div id="testSbSlider" class="slider-test v-center">
                <?php // loop through selected team members and make slides
                    foreach( $tests as $post ){
                        setup_postdata( $post );
                        get_template_part('template-parts/components/cards/cptcard', 'testimonials');
                    }
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#testSbSlider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style=""><i class="fa-light fa-chevron-left" aria-hidden="true"></i><span class="sr-only">See Previous Slides</span></button>',
            nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button" style=""><i class="fa-light fa-chevron-right" aria-hidden="true"></i><span class="sr-only">See Next Slides</span></button>',
            slidesToShow: 1,
            slidesToScroll: 1,
        });	
    });

</script>

<?php endif; ?>