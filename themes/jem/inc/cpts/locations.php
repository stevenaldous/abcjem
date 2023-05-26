<?php //this sheet holds the CPT settings for locations

function locations_tax_slug() {
  $tax = '';
  if( get_field('locations_tax', 'options') == 'def' ) {
    $tax = 'category';
  }
  elseif( get_field('locations_tax', 'options') == 'cpt' ) {
    $tax = 'locations_cat';
  }
  return $tax;
}

// create CPT
add_action( 'init','create_locations' );

// CPT function
function create_locations() {

  $slug = get_field('locations_slug', 'option') ?: 'locations';

  $tax = locations_tax_slug();

  $labels = array(
    'name' => _('Locations'),
    'singular_name' => _('Location'),
  );
  $args = array(
    'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('with_front' => false , 'slug' => $slug ),
      'menu_icon' => 'dashicons-store',
      'taxonomies' => array( $tax )
  );
  register_post_type('locations', $args );
  flush_rewrite_rules();
}

/////////////////////////////////////
// CPT Taxonomy /////////////////////
/////////////////////////////////////
if( get_field('locations_tax', 'options') == 'cpt' ) {
  
  add_action( 'init', 'locations_custom_taxonomy', 0);
  // CPT taxonomy function
  function locations_custom_taxonomy() {

    $tax = locations_tax_slug();
    $tax_slug = get_field('locations_tax_slug', 'option') ?: $tax;

    $labels = array(
        'name'              => _x( 'Location Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Location Category', 'taxonomy singular name' ),
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
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'with_front' => false, 'slug' => $tax_slug ),
    );
    register_taxonomy( $tax , 'locations', $args );
  }
}