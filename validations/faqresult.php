<?php    
	
	$userArriveBySubmittingAForm = !empty($_POST);
		
	// user arrives by GET
	$userArriveByClickingOrDirectlyTypeURL = !$userArriveBySubmittingAForm;
		
	// check if user arrives here via a POSTBACK
	if ($userArriveBySubmittingAForm) {
		
		$nameNotGiven = empty($_POST['name']);
				
		if ($nameNotGiven) {
			$errors['name'] = "Name is required";		
		}
				
		$emailNotGiven = empty($_POST['email']);

		if ($emailNotGiven) {
			$errors['email'] = "Email is required";
		} 
				
		$messageNotGiven = empty($_POST['message']);
				
		if ($messageNotGiven) {
			$errors['message'] = "Message is required";
		} 
				
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
	}

?>

