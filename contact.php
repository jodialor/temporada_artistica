<?php

// Check for empty fields
if(empty($_POST['name2'])  		||
   empty($_POST['email2']) 		||
   empty($_POST['message2'])	||
   !filter_var($_POST['email2'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name2'];
$email_address = $_POST['email2'];
$message = $_POST['message2'];
	
// Create the email and send the message
$to = 'dseam.producao@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contacto pelo site da TA:  $name";
$email_body = "A Producao recebeu uma nova mensagem atraves do formulario de contacto do site da TA\n\n"."Aqui estao os detalhes:\n\nNome: $name\n\nEmail: $email_address\n\nMenssagem:\n$message";
$headers = "From: dseam.producao@gmail.com\n"; // This is the email address the generated message will be from. We reco mmend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
	
mail($to,$email_subject,$email_body,$headers);


header("Location: http://www.recursosonline.org/ta/index.html"); /* Redirect browser */
exit();	
return true;
		
?>