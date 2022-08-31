<?php
	// VALUES FROM THE FORM
	$name		= $_POST['name'];
	$email		= $_POST['email'];
	$land		= $_POST['land'];
	$message	= $_POST['msg'];

	// ERROR & SECURITY CHECKS
	if ( ( !$email ) ||
		 ( strlen($_POST['email']) > 200 ) ||
	     ( !preg_match("#^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$#", $email) )
       ) 
	{ 
		print "Oops... our server does not understand your e-mail address... Please try again"; 
		exit; 
	} 
	if ( ( !$name ) ||
		 ( strlen($name) > 100 ) ||
		 ( preg_match("/[:=@\<\>]/", $name) ) 
	   )
	{ 
		print "Our server does not quite understand your name. Please try once more."; 
		exit; 
	} 
	if ( preg_match("#cc:#i", $message, $matches) )
	{ 
		print "Error: Found Invalid Header Field"; 
		exit; 
	} 
	if ( !$message )
	{
		print "Oh my, you forgot to enter a message. Please remember: e-mail stands for electronic mail, not empty mail :-)... Please have another go..."; 
		exit; 
	} 
	if (eregi("\r",$email) || eregi("\n",$email)){ 
		print "Oops... our server does not quite understand your e-mail address.please try once more"; 
		exit; 
	} 
	if (FALSE) { 
		print "We're sorry, you cannot send an e-mail within the same domain."; 
		exit; 
	} 
	

	// CREATE THE EMAIL
	$headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers	.= "From: {$name} <$email>\n";
	$recipient	= "daniela@brazilianhair.be";
	$subject	= "Berichtje van de Engelse website! :-)";
	$bericht	=
	"
	Naam afzender: {$name}
	Land: {$land}
	E-mail: {$email}
	
	Bericht van de klant: 
	";
	$bericht	.= wordwrap($message, 1024);
	
	 
	// SEND THE EMAIL TO YOU
	mail($recipient, $subject, $bericht, $headers);

	// REDIRECT TO THE THANKS PAGE
	header("location: thanks.html");
?>
