<?php
$to = $_POST["mail"];
$subject = "Hello ".$_POST["name"]." from XAMPP!";
$message = 'This is a test';
$headers = "From: themodelist@gmail.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
   header("Location: http://localhost/modelist");
} else {
   echo "ERROR";
}
exit();
?>