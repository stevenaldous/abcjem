<?php //this sheet holds the CPT settings for testimonials

// establish taxonomy
function testimonials_tax(){
    $tax = '';
    if( get_field('testimonials_tax', 'options') == 'def' ) {
      $tax = 'category';
    }
    elseif( get_field('testimonials_tax', 'options') == 'cpt' ) {
      $tax = 'testimonials_cat';
    }
    return $tax;
  }

// create CPT
add_action( 'init','create_testimonials' );


// CPT function
function create_testimonials() {
    $slug = get_field('testimonials_slug', 'option') ?: 'testimonials';
    $tax = testimonials_tax();

    $labels = array(
      'name' => _('Testimonials'),
      'singular_name' => _('Testimonial'),
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'show_in_nav_menus' => true,
      'show_in_nav_menus' => true,
      'rewrite' => array('with_front' => false, 'slug' => $slug ),
      'menu_icon' => 'dashicons-thumbs-up',
      'taxonomies' => array($tax)
    );
    register_post_type('testimonials', $args );
    flush_rewrite_rules();
}

/////////////////////////////////////
// CPT Taxonomy /////////////////////
/////////////////////////////////////
if( get_field('testimonials_tax', 'options') == 'cpt' ) {
    add_action( 'init', 'testimonials_custom_taxonomy', 0);

    // CPT taxonomy function
    function testimonials_custom_taxonomy() {
        $tax = testimonials_tax();
        $tax_slug = get_field('testimonials_tax_slug', 'option') ?: $tax;

        $labels = array(
            'name'              => _x( 'Categories', 'taxonomy general name' ),
            'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
            'search_items'      => __( 'Search Categories' ),
            'all_items'         => __( 'All Categories' ),
            'parent_item'       => __( 'Parent Category' ),
            'parent_item_colon' => __( 'Parent Category:' ),
            'edit_item'         => __( 'Edit Category' ),
            'update_item'       => __( 'Update Category' ),
            'add_new_item'      => __( 'Add New Category' ),
            'new_item_name'     => __( 'New Category Name' ),
            'menu_name'         => __( 'Categories' ),
        );
        $args = array(
            'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array('with_front' => false, 'slug' => $tax_slug ),
        );
        register_taxonomy( $tax, 'testimonials', $args );
    }
}