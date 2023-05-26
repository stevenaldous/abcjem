<?php // Flex Template for SB Blog
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// template vars
$t  = get_sub_field('title');
$l  = get_sub_field('link');

if($l) {
    $lu = $l['url'];
    $lt = $l['title'] ? $l['title'] : 'Read More Blog News';
    $lx = $l['target'] ? $l['target'] : '_self';
}

$args = array (
    'post_type' => 'post',
    'posts_per_page'   => 2
);

$blog_query = new WP_Query($args);

if( $blog_query->have_posts() ):


?>
<div class="row sb-blog mb-5">
    <div class="col-12">
        <div class="blog-wrap bg-jem1 p-5">
            <?php 
                // title
                if($t){ echo '<div class="t-wrap"><p class="title h2 mb-2 c-white text-center">'.$t.'</p></div>'; }; 
                
                // loop through and display blog posts
                    while( $blog_query->have_posts() ){
                        // set post
                        $blog_query->the_post(); 
                        // get post text card template
                        echo '<div class="blog-wrap">';
                            get_template_part('template-parts/components/cards/cptcard','postflex');
                        echo '</div>';
                    } 
                    wp_reset_postdata();

            ?>
            <?php if($l): ?>
                <div class="btn-wrap">
                    <?php echo '<a class="btn btn-tertiary w-100" href="' . esc_url($lu). '" target="' .esc_attr($lx). '" >' .esc_html($lt). '</a>'; ?>
                </div>
            <?php endif;  ?>
        </div>

    </div>
</div>

<?php endif; ?>