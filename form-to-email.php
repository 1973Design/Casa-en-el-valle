<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$visitor_email = $_POST['visitor_email'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$question = $_POST['question'];
$message = $_POST['message'];

//Validate first
if(empty($visitor_email)) 
{
    echo "Email is verplicht!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Het email adres is onjuist!";
    exit;
}

$email_from = 'administratie@polair.nl';//<== update the email address
$email_subject = "Formulier Casa en el Valle website";
$email_body = "";
$email_body .= "Je hebt een bericht ontvangen van: " .$visitor_email." \r\n" ;
$email_body .= "Naam: " .$name." \r\n ";
$email_body .= "Achternaam: " .$surname." \r\n ";
$email_body .= "Hoeveel personen: " .$question." \r\n ";
$email_body .= "Waarin het volgende gevraagd wordt: " .$message." \r\n ";
$email_body .= "";
    
$to = "info@vakantie-in-andalusie.com";//<== update the email address
$headers = "From:  $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.php');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 