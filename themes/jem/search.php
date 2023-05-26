<?php
/**
 * The template for displaying search results pages
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );


$bg    = get_field( 'hbg_search' ,'options' ); 



?>

<div class="search-wrapper" id="search-wrapper">
	<div id="content" tabindex="-1">
		<main class="site-main mb-5" id="main">

			<?php if( $bg ): ?>
					<div class="hero bg-img hero-archive pt-5 pb-3 mb-5" style="background-image: url('<?php echo wp_get_attachment_image_url($bg,'full' ); ?>');">
						<div class="abs-cover overlay"></div>
				<?php else: ?>
					<div class="hero bg-jem1 pt-5 pb-3 mb-5">
				<?php endif; ?>
					<div class="<?php echo esc_attr( $container ); ?> lg-px">
						<div class="row">
							<div class="col-12 mt-5 pt-5">
								<header class="pt-5 text-center text-uppercase">
									<?php
										// print title w/options
										echo '<h1 class="h1 pt-5">Search Results For: ' . get_search_query() . '</h1>'; 
									?>
								</header>
							</div>
						</div>
					</div>
				</div>
				<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
					<div class="row">
						<?php if ( have_posts() ) {
								/* Start the Loop */
								while ( have_posts() ) {
									the_post();

									echo '<div class="col-12 col-md-6 col-lg-4 pb-4">';
										get_template_part('template-parts/cards/cptcard', 'post');
									echo '</div>';
								}
							}
							else{
								echo '<div class="col-12">';
								
								get_template_part( 'loop-templates/content', 'none' ); 

								echo '</div>';
							} 
							/* end of loop */
						 ?>
				</div>
			</div>

		</main><!-- #main -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
						// Display the pagination component.
						understrap_pagination();
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
