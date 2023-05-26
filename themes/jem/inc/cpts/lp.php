<?php //this sheet holds the CPT settings for Landing Pages

// create CPT
add_action( 'init','create_lps' );

// CPT function
function create_lps() {
  $slug = get_field('lp_slug', 'option') ?: 'ads';

  $labels = array(
    'name' => _('Landing Pages'),
    'singular_name' => _('Landing Page'),
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('with_front' => false, 'slug' => $slug ),
    'menu_icon' => 'dashicons-welcome-view-site',
    'taxonomies' => array('lp_category')
  );
  register_post_type('lp', $args );
  flush_rewrite_rules();
}
/////////////////////////////////////
// CPT Taxonomy /////////////////////
/////////////////////////////////////
if( get_field('gcpt_lp_tax', 'options') ) {
    add_action( 'init', 'create_lps_taxonomy', 0);
  }

// CPT taxonomy function
function create_lps_taxonomy() {
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
        'rewrite'           => array( 'slug' => 'category' ),
    );
    register_taxonomy( 'lps_category', 'lps', $args );
}