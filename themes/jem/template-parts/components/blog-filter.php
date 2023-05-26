<?php
/**
 * Blog Filter
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


?>
<div class="row blog-filter py-5">
    <div class="col-12">
        <div class="row">
            <div class="col-12 col-md-4 mb-3 mb-md-0">
                <div class="select-wrap cats">
                    <?php get_template_part('template-parts/components/forms/blog', 'category'); ?>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3 mb-md-0">
                <div class="select-wrap dates">
                    <?php get_template_part('template-parts/components/forms/blog', 'dates'); ?>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3 mb-md-0">
                <div class="search-wrap">    
                    <?php get_template_part('template-parts/components/forms/searchform'); ?>
                </div>
            </div>
        </div>
    </div>
</div>