<?php //this sheet holds the CPT settings for this portfolio.

$filepath = '/inc/cpts/';


// CPT list for ACF check and template
$jem_cpts = array(
  'team',
  'practices',
  'locations',
  'cases',
  'testimonials',
  'faqs',
  'awards',
  'lp',
);

// loop through each possible CPT and see if it is selected in ACF
foreach ( $jem_cpts as $cpt ) {

  if( get_field('gcpt_' . $cpt , 'option') ) {

    $filepath = locate_template( '/inc/cpts/' . $cpt .'.php' );

    if ( ! $filepath ) {
        trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
    }
    require_once $filepath;
  }

}