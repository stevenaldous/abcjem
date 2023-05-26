<?php
/**
 * Practices Area Sidebar
 *
 * @package Understrap
 * 
 */


$pt     = get_field('practice_area') ? get_field('practice_area') : get_post_type();

//check for post type to get correct content 
if( $pt == 'practices') { // aka legal services
    $pa = 'controller';
}
elseif ($pt == 'elderlaw') { 
    $pa = 'elder';
}
elseif ($pt == 'estatelaw') {
    $pa = 'estate';
}

if($pt): 

 ?>
<aside class="col-4 d-none d-md-block sidebar sb-pa">
    <?php get_template_part('template-parts/sidebars/flex/sbflex', $pa); ?>
</aside>

<?php endif; ?>
