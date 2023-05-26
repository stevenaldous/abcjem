<?php 
/////////////////////////////////////
// ** Gravity Form Functions **
/////////////////////////////////////
// enable hide form labels in Gravity Forms
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );
// disable form focus
add_filter( 'gform_confirmation_anchor', '__return_false' );

// add vertical to contact form submission
// add_filter('gform_field_value_vertical', 'populate_vertical');

// function populate_vertical() {
//   return $_SESSION['vert'];
// };
// filter the Gravity Forms button type
// add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
// function form_submit_button( $button, $form ) {
//     return "<button class='button' type='submit' id='gform_submit_button_{$form['id']}'><span>Submit</span></button>";
// }

// add_filter( 'gform_confirmation', function ( $confirmation, $form, $entry, $ajax ) {
//     if ( isset( $confirmation['redirect'] ) ) {
//         $url          = esc_url_raw( $confirmation['redirect'] );
//         $confirmation = 'Thanks for contacting us! We will get in touch with you shortly.';
//         $confirmation .= "<script type=\"text/javascript\">window.open('$url', '_blank');</script>";
//     }
 
//     return $confirmation;
// }, 10, 4 );