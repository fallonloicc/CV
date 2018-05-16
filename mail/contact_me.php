<?php
   
// Create the email and send the message
$to = 'fallonloic@hotmail.fr'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = $_POST['name'];
$message = $_POST['message'];
$headers = $_POST['headers'] . "\r\n" . 
'Reply-To: fallonloic@hotmail.fr' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to,$subject,$message,$headers);
         
?>
