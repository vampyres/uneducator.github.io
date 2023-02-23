<?php
	if($_SERVER['REQUEST_METHOD'] != 'GET') {
		header('HTTP/1.1 405 Method Not Allowed');
		header('Allow: GET');
		exit;
	}

	$name = $_GET['name'];
	$email = $_GET['email'];
	$suggestion = $_GET['suggestion'];

	$to = 'wyvernated@gmail.com';
	$subject = 'New Suggestion';
	$message = "Name: $name\nEmail: $email\nSuggestion: $suggestion";
	$headers = 'From: suggestion@yourdomain.com' . "\r\n" .
	    'Reply-To: suggestion@yourdomain.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	header('Location: thank-you.html');
	exit;
?>
