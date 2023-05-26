<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

?>
	<div id="wrapper-footer">
		<footer class="site-footer" id="colophon">
			<?php 
				if( is_page_template( 'page-templates/contact.php' ) ) {
					get_template_part( 'template-parts/footer/footer', 'contact' );
				}
				else {
					get_template_part( 'template-parts/footer/footer', 'main' );
				}
			?>
		</footer>
	</div><?php // wrapper end ?>
</div><?php // #page we need this extra closing tag here ?>

<?php // check for page Javascript

	// Global JS
	$fjs = get_field('js_foot','options');
	if($fjs){
		echo $fjs;
	}
?>
<?php wp_footer(); ?>
</body>
</html>
