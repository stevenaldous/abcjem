<?php // Flex Template for BLANK Block

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

$theme = ' bg-white';

?>

<div class="home-section <?php echo $theme; ?> py-5">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row">
            <div class="col-12 ">
                <h1>Home Section One</h1>
            </div>
        </div>
    </div>
</div>