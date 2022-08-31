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
		print "Oups, notre serveur est incapable de lire votre adresse email. Veuillez réessayer svp.."; 
		exit; 
	} 
	if ( ( !$name ) ||
		 ( strlen($name) > 100 ) ||
		 ( preg_match("/[:=@\<\>]/", $name) ) 
	   )
	{ 
		print "Notre serveur ne reconnaît pas votre nom. Veuillez réessayer svp..."; 
		exit; 
	} 
	if ( preg_match("#cc:#i", $message, $matches) )
	{ 
		print "Error: Found Invalid Header Field"; 
		exit; 
	} 
	if ( !$message )
	{
		print "Vous avez oublié d’écrire un message ? Dans ce cas, nous ne pouvons malheureusement pas vous aider"; 
		exit; 
	} 
	if (eregi("\r",$email) || eregi("\n",$email)){ 
		print "Oups… notre serveur ne reconnaît pas votre adresse email. Veuillez réessayer svp"; 
		exit; 
	} 
	if (FALSE) { 
		print "Désolé, vous ne pouvez pas envoyer d’email dans le même domaine."; 
		exit; 
	} 
	

	// CREATE THE EMAIL
	$headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers	.= "From: {$name} <$email>\n";
	$recipient	= "daniela@brazilianhair.be";
	$subject	= "Berichtje van de Franse website! :-)";
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
	header("location: merci.html");
?>
