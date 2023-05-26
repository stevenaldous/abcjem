<?php // Flex Template for Posts Block

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// Load spacing/class options
include( locate_template( 'template-parts/flex/flex-options.php', false, false ) );

// options - id
$id = get_sub_field('id') ? 'id="'. get_sub_field('id') .'" ' : '';

// get posts vars
$p_tf   = get_sub_field('posts_tf');
$tax_query = '';

if( $p_tf == 1 ) {
    $term = get_sub_field('posts_tax');

    // if tax, create array for mq
    if($term) {
        $tax_query = array( array(
            'taxonomy' => 'category',
            'field' => 'id', //can be set to ID
            'terms' => $term //if field is ID you can reference by cat/term number
        ) );
    }
}

// args 
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
    'tax_query' => $tax_query,
);

// wpQuery
$blogs = new WP_Query( $args );

?>
<div <?php echo $id; ?> class="flex-posts <?php echo $cl . $pt . $pb . $theme; ?> ">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row">
            <?php if( get_sub_field('head_tf') ) { get_template_part('template-parts/flex/rows/partials/flex-header'); } ?>
            <?php 
                // put loop here
                if ( $blogs->have_posts()) {

                    while ( $blogs->have_posts() ) {

                        $blogs->the_post();
                        
                        echo '<div class="col-12 col-md-6">';

                        get_template_part('template-parts/cards/cptcard' , 'postflex');

                        echo '</div>';
                    }
                } wp_reset_postdata();
            ?>
        </div>
    </div>
</div>