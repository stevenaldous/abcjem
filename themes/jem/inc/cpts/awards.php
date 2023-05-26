<?php //this sheet holds the CPT settings for Awards

// create CPT
add_action( 'init','create_awards' );

// CPT function
function create_awards() {
    $labels = array(
      'name' => _('Awards'),
      'singular_name' => _('Award'),
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => false,
      'show_in_nav_menus' => false,
      'rewrite' => array('slug' => 'awards' ),
      'menu_icon' => 'dashicons-awards',
    );
    register_post_type('awards', $args );
    flush_rewrite_rules();
  }
