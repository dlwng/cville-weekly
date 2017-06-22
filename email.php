<?php 
if (empty($_POST) === false) {
	$errors = array();

	$name = $_POST['name'];
	$email = $_POST['email'];

if (empty($name) === true || empty($email) === true){
		$errors[] = 'Name and email are required!';
	} else {
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'That\'s not a valid email address';
		}
		if (ctype_alpha($name) === false) {
			$errors[] = 'Name must only contain letters!';
		}
	}

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if (empty($errors) === false) {
			echo '<ul>';
			foreach($errors as $error) {
				echo'<li>', $error, '</li>'; 
			echo '</ul>';
			}
		}

		if(empty($errors) === true) {
			//send email
			//redirect user
		}
	 ?>

</body>
</html>
