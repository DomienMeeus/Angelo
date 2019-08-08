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
		print "Lamentamos, mas o nosso servidor não entende o seu endereço de e-mail. Tente novamente."; 
		exit; 
	} 
	if ( ( !$name ) ||
		 ( strlen($name) > 100 ) ||
		 ( preg_match("/[:=@\<\>]/", $name) ) 
	   )
	{ 
		print "Nosso servidor não entende o seu nome. Tente novamente."; 
		exit; 
	} 
	if ( preg_match("#cc:#i", $message, $matches) )
	{ 
		print "Error: Found Invalid Header Field"; 
		exit; 
	} 
	if ( !$message )
	{
		print "Você esqueceu de incluir a mensagem. Não podemos fazer muito com um e-mail vazio..."; 
		exit; 
	} 
	if (eregi("\r",$email) || eregi("\n",$email)){ 
		print "Lamentamos, mas o nosso servidor não entende o seu endereço de e-mail. Tente novamente."; 
		exit; 
	} 
	if (FALSE) { 
		print "Lamentamos, mas não é possível enviar um e-mail dentro do mesmo domínio"; 
		exit; 
	} 
	

	// CREATE THE EMAIL
	$headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers	.= "From: {$name} <$email>\n";
	$recipient	= "daniela@brazilianhair.be";
	$subject	= "Berichtje van de Braziliaanse website! :-)";
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
	header("location: obrigado.html");
?>
