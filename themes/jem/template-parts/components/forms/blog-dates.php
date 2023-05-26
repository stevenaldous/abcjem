<?php
/**
 * Blog Dates Form
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$args = array(
    'type'      => 'monthly',
	'order'     => 'DESC',
    'post_type' => 'post',
    'format'    => 'option',
);
?>

<form id="date-form" action="" method="post" class="blog-category-search">
    <div class="form-input-group">
        <div class="select-wrapper">
            <label for="select-dates" class="visually-hidden">Archives</label>
            <select id="select-dates" class="selectNative js-selectNative" onchange="location = this.value;">
                <option selected="selected" disabled="disabled">Show by Post Date</option>
                <?php wp_get_archives( $args ); ?>
            </select>   
            <div class="selectCustom js-selectCustom" aria-hidden="true">
                <div class="selectCustom-trigger">Show by Post Date</div>
                <div class="selectCustom-options">
                    <div id="date-opt" class="selectCustom-options-inner">
                        <?php // this is filled out by a function in custom-filter.js ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>