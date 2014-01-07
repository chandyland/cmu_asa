<?php
	if (isset($_REQUEST['email']))
	//if "email" is filled out, send email
	{
	//send email
	$email = $_REQUEST['email'] ;
	$name = $_REQUEST['name'] ;
	$message = $_REQUEST['message'] ;
	mail("cchan@cmu.edu", $name,
	$message, "From:" . $email);
	echo "Message Sent!";
	}
?>