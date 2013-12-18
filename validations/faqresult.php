<?php    
		
		/**
		*
		* this file contains validation logic
		*
		*
		**/
		
		/**
		*
		* User arrives either by POST or GET
		* POST means user submitted a form to arrive here
		* GET means user click on hyperlink or type url to arrive here
		*
		*/
		
		// store !empty($_POST) into a more readable variable
		$userArriveBySubmittingAForm = !empty($_POST);
		
		// user arrives by GET
		$userArriveByClickingOrDirectlyTypeURL = !$userArriveBySubmittingAForm;
		
		// check if user arrives here via a POSTBACK
		if ($userArriveBySubmittingAForm) {
		
				
				$nameNotGiven = empty($_POST['name']);
				
				if ($nameNotGiven) {
						$errors['name'] = "Name is required";
				
				} 
				
				$surnameNotGiven = empty($_POST['surname']);
				
				if ($surnameNotGiven) {
						$errors['surname'] = "Surname is required";
				
				} 
				
				$emailNotGiven = empty($_POST['email']);
				
				if ($emailNotGiven) {
						$errors['email'] = "Email is required";
				
				} 
				
				$messageNotGiven = empty($_POST['message']);
				
				if ($messageNotGiven) {
						$errors['message'] = "message is required";
				
				} 
				
				
				
				
				// @TODO code expected here validations such as contactno, sex radio buttons, interests checkbox, diploma dropdown, email textbox,
				
				/** end of validation **/
				
				
				/** @NEW
				*
				* Part 2 proceed as normal if no errors
				***/
				
				
				$noErrors = (count($errors) == 0);
				
				// haveErrors is the opposite of noErrors
				$haveErrors = !$noErrors;
				
				
				
				if (!empty($_POST['name'])) {
				$name = $_POST['name'];
				}
				
				if (!empty($_POST['surname'])) {
				$surname = $_POST['surname'];
				}
				
				if (!empty($_POST['email'])) {
				$email = $_POST['email'];
				}
				
				if (!empty($_POST['message'])) {
				$message = $_POST['message'];
				}

		
		
		
		// @TODO code expected here to assign the variables in Ex1-5/registerform.php lines 10-17
		// remember that $interests is an array, so we need to check $_POST['interests'] for empty and also ????
		
		
		/** end of proceed as normal **/
		
		} // end if user arrives here via a POSTBACK


?>

