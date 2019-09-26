<?php
require_once('include/init.php');
extract($_GET);
extract($_POST);

//variable d'affichage :
$errorContact = "";
$successContact="";
$error="";
$nom = trim($_POST['nom']);
$phone = htmlspecialchars($_POST['phone']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

  
  // AJAX send email confirmation
  
 if($_POST)
  {



if(!$message || strlen($message) < 1)
{
$error .= "Il faut ecrir une message<br />";
}

if(!$error)
{
$name_tema = "=?utf-8?b?". base64_encode($nom) ."?=";
}
$subject ="New message from creal-web.com";
$subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";
/*
$message ="\n\nСообщение: ".$message."\n\nИмя: " .$name."\n\nТелефон: ".$tel."\n\n";
*/
$message1 ="\n\nName: ".$_POST['nom']."\n\nPhone: " .$_POST['phone']."\n\nE-mail: " .$_POST['email']."\n\nMessage: ".$_POST['message']."\n\n";    
 
 
$header = "Content-Type: text/plain; charset=utf-8\n";
 
$header .= "From: New message <yuliabelova2307@gmail.com>\n\n";  
$mail = mail("yuliabelova2307@gmail.com", $subject1, iconv ('utf-8', 'windows-1251', $message1), iconv ('utf-8', 'windows-1251', $header));
 
if($mail)
{
echo 'OK';
}
 

else
{
echo '<div class="notification_error">'.$error.'</div>';
}



  // AJAX send email confirmation end
}