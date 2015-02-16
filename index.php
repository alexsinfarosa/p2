<?php 

require 'php/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name 				= check_input( $_POST['name'] );
	$by 				= check_input( $_POST['by'] );
	$status 			= 			   $_POST['status'];
	$rating 			= 			   $_POST['rating'];

	$success = true;
	$errors = "";
	$check = true;
	
	if ( empty($name) || empty($by) || ($status == "status") ) {
		$errors = "Please provide the plugin name, author and status";
		$check = false;
	} 
	if ($check && strlen($name) < 3) {
		$errors = "Name should be more than two characters";
		$check = false;
	}

	if ( $check && ((strlen($name) || strlen($by)) < 30) ) {
		$errors = "Not a valid entry";
		$check = false;
	}

	// if ( filter_var($name, FILTER_SANITIZE_STRING) ) {
	// 	$errors = "Please, enter a valid name";
	// }


	$success = !$errors && $success;

	if ($success) {
		$lines = file("data.txt");
		$match = true;

		foreach ($lines as $line) {
			$entry = explode(' ', $line);
			if ( strcasecmp($name, $entry[0]) == 0 ) {
				$errors = "The plugin you entered is alredy in the list.";
				$match = false;
			}
		}

		if	($match) {
			add_registered_user($name, $by, $status, $rating);
			$errors = "The plugin has been added.";
		}

	}
		
}	


require 'php/index.tmpl.php';

 ?>