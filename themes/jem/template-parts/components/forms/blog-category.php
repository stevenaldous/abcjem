<?php
/**
 * Blog Category Form
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$args = array(
    'orderby' => 'name',
	'order'   => 'ASC'
);

$cats = get_categories( $args );

?>
<form id="cat-form" action="" method="post" class="blog-category-search">
    <div class="form-input-group">
        <div class="select-wrapper">
            <label for="select-category" class="visually-hidden">Categories</label>
            <select id="select-category" class="selectNative js-selectNative" onchange="location = this.value;">
                <option selected="selected" disabled="disabled">Show by Category</option>
                <?php 
                    foreach($cats as $cat) {
                        echo '<option value="'.esc_url( get_category_link( $cat->term_id ) ).'">'.esc_html( $cat->name ).'</option>';
                    }
                ?>
            </select>
            <div class="selectCustom js-selectCustom" aria-hidden="true">
                <div class="selectCustom-trigger">Show by Category</div>
                <div class="selectCustom-options">
                    <div class="selectCustom-options-inner">
                        <?php 
                            foreach($cats as $cat) { echo '<div class="selectCustom-option" data-value="'.esc_url( get_category_link( $cat->term_id ) ).'">'.esc_html( $cat->name ).'</div>'; }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>