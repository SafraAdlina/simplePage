<?php 
	if (isset($_POST))
	{
		$submitted_name = $_POST['myname'];
		$submitted_password = $_POST['mypassword'];

		if ($submitted_name == 'admin' && $submitted_password == 'admin') 
		{
			$cookie_name = 'username';
			$cookie_value = $submitted_name;
			setcookie($cookie_name, $cookie_value, time()+(86400*30),"/");
			header('Location: index.php');
		}
		else
			echo "Entry denied";
	}
	else
	{
		die('Step aside pheasant');
	}
 ?>