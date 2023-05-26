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
if( have_rows('flex_content') ):

     // loop through the rows of data
    while ( have_rows('flex_content') ) : the_row();

        if(  get_row_layout() == 'super' ):

            get_template_part('template-parts/flex/rows/super');

        elseif( get_row_layout() == 'spacer' ):

            get_template_part('template-parts/flex/rows/spacer');

        elseif( get_row_layout() == 'cta' ):

            get_template_part('template-parts/flex/rows/cta');

        elseif( get_row_layout() == 'cpt_location' ):

            get_template_part('template-parts/flex/rows/cpt-locations');

        elseif( get_row_layout() == 'cpt_faqs' ):

            get_template_part('template-parts/flex/rows/cpt-faqs');

        elseif( get_row_layout() == 'cpt_team' ):

            get_template_part('template-parts/flex/rows/cpt-team');

        elseif( get_row_layout() == 'cpt_awards' ):

            get_template_part('template-parts/flex/rows/cpt-awards');

        elseif( get_row_layout() == 'cpt_cases' ):

            get_template_part('template-parts/flex/rows/cpt-cases');

        elseif( get_row_layout() == 'cpt_practices' ):

            get_template_part('template-parts/flex/rows/cpt-practices');

        elseif( get_row_layout() == 'posts' ):

            get_template_part('template-parts/flex/rows/posts');

        endif; 


    endwhile;

endif;