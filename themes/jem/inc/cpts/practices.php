<?php //this sheet holds the CPT settings for practices

// establish taxonomy
function practices_tax(){
  $tax = '';
  if( get_field('practices_tax', 'options') == 'def' ) {
    $tax = 'category';
  }
  elseif( get_field('practices_tax', 'options') == 'cpt' ) {
    $tax = 'practices_cat';
  }
  return $tax;
}

// create CPT
add_action( 'init','create_practices' );

// CPT function
function create_practices() {
  $slug = get_field('practices_slug', 'option') ?: 'practice-areas';
  $tax = practices_tax();

  $labels = array(
    'name' => _('Practice Areas'),
    'singular_name' => _('Practice Area'),
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'show_in_nav_menus' => true,
    'rewrite' => array('with_front' => false, 'slug' => $slug ),
    'menu_icon' => 'dashicons-superhero',
    'taxonomies' => array($tax)
  );
  register_post_type('practices', $args );
  flush_rewrite_rules();
}
/////////////////////////////////////
// CPT Taxonomy /////////////////////
/////////////////////////////////////
if( get_field('practices_tax', 'options') == 'cpt' ) {
  add_action( 'init', 'practices_custom_taxonomy', 0);
  // CPT taxonomy function
  function practices_custom_taxonomy() {
    $tax = practices_tax();
    $tax_slug = get_field('practices_tax_slug', 'option') ?: $tax;

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
        'rewrite'           => array( 'with_front' => false, 'slug' => $tax_slug ),
    );
    register_taxonomy( $tax, 'practices', $args );
  }
}