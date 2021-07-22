<?php
  //display errors
  $errors = array('email'=>'', 'submitted' =>'', 'added' => '');

  if(isset($_POST["submit"])){
    $email = htmlspecialchars($_POST["email"]);
    $name = htmlspecialchars($_POST["name"]);
  }

  include("db/db_connect.php");

    //check email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      //add new record to db
      $addNews = require ("./db/addNews.php"); 
      
      $errors['added'] = $addNews.addToNewsletter(mysqli_real_escape_string($conn, $name), mysqli_real_escape_string($conn, $email));
      
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



<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modelist</title>
  <!--favicon-->
  <link rel="icon" href="src/favicon/favicon.ico" type="image/x-icon"/>
  <!--Icone FontAwnsome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--Foglio di Style-->
  <link rel="stylesheet" href="src/style/style.css">
  <!--FONT-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
    <!-- INCLUDO L'HEADER -->
    <?php include("templates/header.php"); ?>

    <!-- INCLUDO IL MAIN -->
  <div class="main">
    <?php include("templates/main.php"); ?>

   <!-- NEWSLETTER FORM  -->
<input type="checkbox" name="" id="toggle">
    <label for="toggle" class="show-btn">avvisami!</label>
    <div class="wrapper">
      <label for="toggle" class="cancel-btn"><i class="fas fa-times"></i></label>
      <div class="icon"><i class="far fa-envelope"></i></div>
      <div class="content">
        <p class="header">Rimani Aggiornato</p>
        <p class="after">Iscriviti alla nostra newsletter e ricevi gli ultimi aggiornamenti direttamente nella tua casella di posta</p>
      </div>
      <form action="sendmail.php" method = "POST">
        <div class="field">
          <input type="text" placeholder="Nome*" name = "name" value="<?php echo $_POST["name"]?>" required >
        </div>
        <div class="field">
          <input type="text" placeholder="Email*" name = "email" value="<?php echo $_POST["email"]?>" required>
        </div>
        <p class = "message"><?php echo $errors["email"] ?></p>
        <div class="field btn">
          <input type="submit" name = "submit" value="AVVISAMI!">
        </div>
        <p class = "message"><?php echo $errors["submitted"] ?></p>
        <p class = "message"><?php echo $errors["added"] ?></p>
      </form>
      <div class="text">Non condividiamo le tue informazioni con terze parti.</div>
      <div class="text">Per saperne di più leggi la nostra <a href="#" class="policy">privacy & policy</a>.</div>
    </div>
  </div>
  <footer>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
  </footer>
  
</body>
<script src="src/script/script.js"></script>
</html>