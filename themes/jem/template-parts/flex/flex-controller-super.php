<?php
/**
 * Flex Field Controller
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// check if the flexible content field has rows of data
if( have_rows('super_flex') ):

     // loop through the rows of data
    while ( have_rows('super_flex') ) : the_row();

        if( get_row_layout() == 'title' ):

            get_template_part('template-parts/flex/rows/partials/title');

        elseif( get_row_layout() == 'text' ):

            get_template_part('template-parts/flex/rows/partials/text');

        elseif( get_row_layout() == 'buttons' ):

            get_template_part('template-parts/flex/rows/partials/buttons');

        elseif( get_row_layout() == 'form' ):

            get_template_part('template-parts/flex/rows/partials/form');

        elseif( get_row_layout() == 'image' ):

            get_template_part('template-parts/flex/rows/partials/image');

        elseif( get_row_layout() == 'video' ):

            get_template_part('template-parts/flex/rows/partials/video');

        elseif( get_row_layout() == 'quote' ):

            get_template_part('template-parts/flex/rows/partials/quote');

        elseif( get_row_layout() == 'testimonial' ):

            get_template_part('template-parts/flex/rows/partials/testimonial');

        elseif( get_row_layout() == 'spacer' ):

            get_template_part('template-parts/flex/rows/partials/spacer');


        endif; 


    endwhile;

endif;