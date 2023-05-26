<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * 
 * 
 * 
 *  This built from the Bootstrap Offcanvas Navbar: https://getbootstrap.com/docs/5.2/components/navbar/#offcanvas
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

?>

<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>

	<div class="<?php echo esc_attr( $container ); ?> lg-p-x">

        <?php get_template_part('template-parts/header/partials/logo');  // Site Logo ?>

		<div class="nav-inner d-flex flex-grow-1 align-self-center align-items-center justify-content-end align-self-start py-2 pt-lg-0">

            <?php get_template_part('template-parts/header/partials/phone'); // phone button ?>

			<button class="navbar-toggler ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
				<i class="fa-regular fa-bars"></i>
			</button>

			<?php get_template_part('template-parts/header/partials/menu', 'main'); // Main Menu ?>

		</div>

	</div><!-- .container(-fluid) -->

</nav><!-- .site-navigation -->
