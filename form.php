<?php
	// set both the user name and password
	if (($_POST["email"]=="user@gmail.com") && ($_POST["pw"]=="password")) {
		header("Location: homepage.html");
	}
	else  {
		echo "Please enter the correct username/ password.";
	}
		

?>