<?php // Flex Template for SB Menu
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// template vars
$t = get_sub_field('title');
$m = get_sub_field('mb_nav_menus');

?>
<div class="row sb-menu mb-5">
    <div class="col-12">
        <?php 
            // title
            if($t){ echo '<p class="title h4 mb-3">'.$t.'</p>'; }; 
            
            if($m){
                wp_nav_menu(
					array(
                        'menu'            => $m,
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'pa-menu text-capitalize',
						'fallback_cb'     => '',
						'menu_id'         => 'sb-menu',
						'depth'           => 1,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
            }
            
            ?>

    </div>
</div>