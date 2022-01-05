<?php
	$name = $_POST['usr'];
	$visitor_email = $_POST['email'];
	$message = $_POST['comment'];
	$email_from = 'david.m.sellers@gmail.com';
	$email_subject = "Contact from website";
	$email_body = "You have received an email from $name.\n".
		"Here is the message:\n $message"
?>
