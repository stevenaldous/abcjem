<?php
/**
 * Blog Featured Posts
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$feat_posts = get_field('feat_posts','options');

if( $feat_posts ):     

?>
<div class="row">
    <div class="col-12">
        <h2 class="h1 text-uppercase">Featured Posts</h2>
        <div class="row">
            <?php // list featured posts limited to top 3
                $i = 0;
                foreach( $feat_posts as $post ){
                    if ( $i < 3) {
                        setup_postdata( $post );
                            
                        echo '<div class="col-12 col-md-6 col-lg-4 pb-4">';
                        
                        get_template_part('template-parts/cards/cptcard', 'postfeat');
                        
                        echo '</div>';
                    }
                    $i++;
                }
            ?>
        </div>
    </div>
</div>
<?php endif; ?>