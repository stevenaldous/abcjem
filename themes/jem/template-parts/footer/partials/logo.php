<?php
/**
 * The template for displaying the footer location and logo
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get customizer foot logo
$flogo  = get_theme_mod('footer_logo');

?>
<div class="foot-logo-wrap">
    <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
        <?php if( $flogo ): ?>
            <img class="foot-logo" src="<?php echo esc_url( $flogo ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
        <?php else: ?>
            <?php bloginfo( 'name' ); ?>
        <?php endif; ?>
    </a>
</div>