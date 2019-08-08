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
		print "Oeps... onze server begrijpt uw e-mailadres niet. Probeer even opnieuw, als u wil."; 
		exit; 
	} 
	if ( ( !$name ) ||
		 ( strlen($name) > 100 ) ||
		 ( preg_match("/[:=@\<\>]/", $name) ) 
	   )
	{ 
		print "Onze server begrijpt uw naam niet. Probeer het nog eens."; 
		exit; 
	} 
	if ( preg_match("#cc:#i", $message, $matches) )
	{ 
		print "Error: Found Invalid Header Field"; 
		exit; 
	} 
	if ( !$message )
	{
		print "Oei, u bent een boodschap vergeten. Met een leeg e-mailtje kunnen we niet veel beginnen..."; 
		exit; 
	} 
	if (eregi("\r",$email) || eregi("\n",$email)){ 
		print "Oeps... onze server begrijpt uw e-mailadres niet. Probeer even opnieuw, als u wil."; 
		exit; 
	} 
	if (FALSE) { 
		print "Sorry, u kunt geen e-mail sturen binnen hetzelfde domein."; 
		exit; 
	} 
	

	// CREATE THE EMAIL
	$headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers	.= "From: {$name} <$email>\n";
	$recipient	= "daniela@brazilianhair.be";
	$subject	= "Berichtje van de Nederlandse website! :-)";
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
	header("location: bedankt.html");
?>
