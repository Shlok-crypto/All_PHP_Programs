<?php

/* Already defined variables:
   
   $PHPMailer: a PHPMailer object
   $PDO: a PDO connection resource
   $user_id: the ID of the user associated with the login session
   $user_email: the user's email address
*/

/* Generate a 6-digits random token  */
$token = random_int(100000, 999999);

/* Cast the token to string */
$token = strval($token);

try {
   /* Set the mail sender. */
   $PHPMailer->setFrom('noreply@yoursite.com');

   /* Set the user's email as recipient. */
   $PHPMailer->addAddress($user_email);

   /* Set the subject. */
   $PHPMailer->Subject = 'Access Token';

   /* Set the message body. */
   $PHPMailer->Body = 'Please use the following security token to login: ' . $token;

   /* Finally send the mail. */
   $PHPMailer->send();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage();
   die();
}