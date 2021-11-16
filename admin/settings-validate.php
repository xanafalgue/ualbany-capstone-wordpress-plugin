<?php //UA Capstone - Validate Settings


//Prevents direct access. 
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}


// callback: validate options
function uacapstone_callback_validate_options( $input ) {
	
    //Duplicate this for as many fields as you would like to add
	if ( isset( $input['phone_number'] ) ) {
		
		$input['phone_number'] = wp_kses_post( $input['phone_number'] );
		
	}

	// // custom url
	// if ( isset( $input['custom_url'] ) ) {
	// 	$input['custom_url'] = esc_url( $input['custom_url'] );
	// }
	// // custom title
	// if ( isset( $input['custom_title'] ) ) {	
	// 	$input['custom_title'] = sanitize_text_field( $input['custom_title'] );
	// }
	// // custom style
	// $radio_options = myplugin_options_radio();
	// if ( ! isset( $input['custom_style'] ) ) {
	// 	$input['custom_style'] = null;
	// }
	//     // $radio_optionsがarrayにあるかの確認
	// if ( ! array_key_exists( $input['custom_style'], $radio_options ) ) { 
	// 	$input['custom_style'] = null;
	// }
	// // custom message
	// if ( isset( $input['custom_message'] ) ) {	
	// 	$input['custom_message'] = wp_kses_post( $input['custom_message'] );
	// }
	// // custom footer
	// if ( isset( $input['custom_footer'] ) ) {	
	// 	$input['custom_footer'] = sanitize_text_field( $input['custom_footer'] );
	// }
	// // custom toolbar
	// if ( ! isset( $input['custom_toolbar'] ) ) {	
	// 	$input['custom_toolbar'] = null;
	// }
	// $input['custom_toolbar'] = ($input['custom_toolbar'] == 1 ? 1 : 0);  // true or false
	
	// // custom scheme
	// $select_options = myplugin_options_select();
	// if ( ! isset( $input['custom_scheme'] ) ) {	
	// 	$input['custom_scheme'] = null;
	// }
	//     // $select_optionsがarrayにあるかの確認
	// if ( ! array_key_exists( $input['custom_scheme'], $select_options ) ) {	 
	// 	$input['custom_scheme'] = null;
	// }

	
	return $input;
	
}