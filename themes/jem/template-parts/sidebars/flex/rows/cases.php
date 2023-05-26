<?php // Flex Template for SB Cases
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// template vars
$t = get_sub_field('title');

$l = get_sub_field('link');

if($l) {
    $lu = $l['url'];
    $lt = $l['title'];
    $lx = $l['target'] ? $l['target'] : '_self';
}

// check for cases and only pront out if selected
$featured_posts   = get_sub_field('sb_cases');

if( $featured_posts ):

?>

<div class="row sb-cases mb-5">
    <div class="col-12">
        <div class="cases-wrap bg-jem2 p-5">
            <?php 
                // title
                if($t){ echo '<p class="title h2 mb-3 text-center">'.$t.'</p>'; }; 
            ?>

            <div id="casesSb" class="slider-cases">
                <?php // loop through selected team members and make slides
                    foreach( $featured_posts as $post ):  
                        setup_postdata( $post );
                ?>
                    <div class="px-2">        
                        <?php get_template_part('template-parts/components/cards/cptcard', 'cases'); ?>
                    </div>
                <?php  
                        endforeach;  
                    wp_reset_postdata();
                ?>
            </div>

            <?php if($l): ?>
                <div class="btn-wrap text-center pt-4">
                    <?php echo '<a class="btn btn-secondary" href="' . esc_url($lu). '" target="' .esc_attr($lx). '" >' .esc_html($lt). '</a>'; ?>
                </div>
            <?php endif;  ?>


        </div>
    </div>


    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#casesSb').slick({
                // dots: true,
                infinite: true,
                speed: 500,
                prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style=""><i class="fa-light fa-chevron-left" aria-hidden="true"></i><span class="sr-only">See Previous Slides</span></button>',
                nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button" style=""><i class="fa-light fa-chevron-right" aria-hidden="true"></i><span class="sr-only">See Next Slides</span></button>',
                slidesToShow: 1,
                slidesToScroll: 1,
            });	
        });

    </script>
</div>

<?php endif; ?>