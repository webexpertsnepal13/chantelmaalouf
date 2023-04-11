<?php
/**
 * Gravity form validation
 */

 //text validation
add_filter( 'gform_validation', 'custom_name_validation' );
function custom_name_validation( $validation_result ) {
	$form = $validation_result['form'];
	$name_field_ids = array( 1 , 2 );
	foreach ( $name_field_ids as $name_field_id ) {

		if( !preg_match("/^[a-zA-Z\s]*$/", rgpost( 'input_'.$name_field_id ) ) ) {
            // set the form validation to false
			$validation_result['is_valid'] = false;

            //finding Field with ID of 1 and marking it as failed validation
			foreach( $form['fields'] as &$field ) {

                //NOTE: replace 1 with the field you would like to validate
				if ( $field->id == $name_field_id ) {
					$field->failed_validation = true;
					$field->validation_message = 'Please enter text only';
					break;
				}
			}

		}
	}

    //Assign modified $form object back to the validation result
	$validation_result['form'] = $form;
	return $validation_result;
}

//gravity form custom submit button
function gravity_form_custom_submit_button( $button, $form ) {
	$button_text = 'Submit';
	$button = '<button class="btn-cm btn-outline" id="gform_submit_button_1" type="submit" value="' . $button_text . '">' . $button_text . '</button>';
	return $button;
 }
 add_filter( 'gform_submit_button', 'gravity_form_custom_submit_button', 10, 2 ); 