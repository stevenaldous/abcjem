<?php
/**
 * Sidebar Flex Field Controller
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// check if the flexible content field has rows of data
if( have_rows('sb-flex-estate','options') ):

    // loop through the rows of data
    while ( have_rows('sb-flex-estate','options') ) : the_row();

    if( get_row_layout() == 'form' ):

        get_template_part('template-parts/sidebars/flex/rows/form');

    elseif( get_row_layout() == 'menu' ):

        get_template_part('template-parts/sidebars/flex/rows/menu');

    elseif( get_row_layout() == 'cases' ):

        get_template_part('template-parts/sidebars/flex/rows/cases');

    elseif( get_row_layout() == 'video' ):

        get_template_part('template-parts/sidebars/flex/rows/video');

    elseif( get_row_layout() == 'testimonials' ):

        get_template_part('template-parts/sidebars/flex/rows/testimonials');

    elseif( get_row_layout() == 'blog' ):

        get_template_part('template-parts/sidebars/flex/rows/blog');


    endif; 


endwhile;

endif;
 

