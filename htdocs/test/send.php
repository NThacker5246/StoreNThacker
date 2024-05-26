<?php
	// get an a form
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	//me
	$em = "nytrecover@gmail.com";
	$mess = $email;
	$mess .= "; ";
	$mess .= $message;
	$header = $email;

	//send mail

	$res = mail($em, $header, $mess);

	if ($res == 1) {
		echo "Done, we sent to admin, let's go to <a href=\"/\">home</a>";
	} else {
		echo "error";
	}

	echo "$res";

	
?>