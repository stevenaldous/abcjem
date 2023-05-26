<?php
/**
 * The template for displaying the header Main Menu
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<div class="offcanvas offcanvas-end" tabindex="-1" id="navbarNavOffcanvas">
	
	<div class="offcanvas-header justify-content-end">
		<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close">
			<i class="fa-regular fa-xmark" aria-hidden="true"></i>
		</button>
	</div><!-- .offcanvas-header -->

	<!-- The WordPress Menu goes here -->
	<?php
	wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'container_class' => 'offcanvas-body',
			'container_id'    => '',
			'menu_class'      => 'navbar-nav justify-content-end flex-grow-1',
			'fallback_cb'     => '',
			'menu_id'         => 'main-menu',
			'depth'           => 3,
			'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
		)
	);
	?>
</div><!-- .offcanvas -->