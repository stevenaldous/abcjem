<?php  // Flex Template for Super Block - Testimonial
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//layout/options vars
$align  = ' text-' . get_sub_field('align');
$pb     = get_sub_field('b_pad') ? ' pb-'.get_sub_field('b_pad') : '';
$class  = get_sub_field('class') ? ' ' . get_sub_field('class') : '';
$mw_lg  = get_sub_field('mw_lg') ? ' mw-lg-'. get_sub_field('mw_lg') : '';
$bg     = get_sub_field('bg') ?: 'bg-white';


// post vars
$cpt = get_sub_field('cpt_posts');

if( $cpt ): foreach($cpt as $post): setup_postdata($post);
?>

<div class="super-row super-testimonial<?php echo $align . $pb . $class; ?>">
    <div class="p-5 test-wrap <?php echo $bg . $mw_lg; ?>">
        <?php

            if( $bg == 'bg_pastel_p' ) {
                echo '<div class="icon-wrap mb-4"><img src="'
                .get_stylesheet_directory_uri().'/images/svg/quotations.svg" 
                alt="quotaion mark" role="presentation"></div>';
            }

            get_template_part('template-parts/cards/cptcard', 'testimonials');
        ?>
    </div>
</div>

<?php endforeach; wp_reset_postdata(); endif; ?>