<?php
//display errors
   $errors = array('email'=>'', 'submitted' =>'', 'added' => ' ');

   if(isset($_POST["submit"])){
      $email = htmlspecialchars($_POST["email"]);
      $name = htmlspecialchars($_POST["name"]);
  }
//check email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      //add new record to db
      $addNews = require ("./db/addNews.php"); 
      
      $errors['added'] = $addNews.addToNewsletter($name, $email);
      
      $subject = "Hello ".$name." from The Modelist!";
      $message = 'This is a test';
      $headers = "From: gokuinstapage@gmail.com\r\n";
      if (mail($email, $subject, $message, $headers)) {
         $errors["submitted"] ="SUCCESS";
      } else {
         $errors["submitted"] = "ERROR";
      }
    }else{
      $errors["email"] = "The email insert is not valid";
    }
?>