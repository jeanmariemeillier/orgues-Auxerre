<?php
// Check for empty fields
if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['tel']) || isset($_POST['message']))
{   
   $name = strip_tags(htmlspecialchars($_POST['nom']));
   $email_address = strip_tags(htmlspecialchars($_POST['mail']));
   $phone = strip_tags(htmlspecialchars($_POST['tel']));
   $message = strip_tags(htmlspecialchars($_POST['message']));

   $to = 'infos@reperechoppe89.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "demande d'info:  $name";
$email_body = "Vous avez reçu un message du site reperechoppe89.com.\n\nNom: $name\n\nEmail: $email_address\n\nTel: $phone\n\nMessage:\n$message";
$headers = "From: infos@reperechoppe89.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
}   
header('Location: ../../index.php?pg=6&asi=arm6&aupg=pg_vv');   
?>
