<?php

// It adds the user name and email to the mailing_list.txt file
function add_registered_user ($name, $by, $status, $rating) {
	// file_put_contents('data.txt', "Plugin Name: $name\nBy: $by\nStatus: $status\nRating: $rating stars\n\n", FILE_APPEND);
	file_put_contents('data.txt', "$name $by $status $rating\n", FILE_APPEND);
}

// It allows to insert only particular characters into the input fields
function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Retreive old value
function old($key) {
	if ( !empty($_POST[$key]) ) {
		return htmlspecialchars( $_POST[$key] );
	}
	return '';
}
// 
function valid_email($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL); #returns true or false
}

?>