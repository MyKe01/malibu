<?php
//display errors
   $errors = array('email'=>'', 'submitted' =>'', 'added' => ' ');

   if(isset($_POST["submit"])){
      $email = htmlspecialchars($_POST["mail"]);
      $name = htmlspecialchars($_POST["name"]);
      $surname = htmlspecialchars($_POST["surname"]);
   }
//check email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      //add new record to db
      $addNews = require ("./db/addNews.php"); 
      
      $errors['added'] = $addNews.addToNewsletter($name, $surname, $email);
      
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

<DOCTYPE html>
  <html lang="it">
    <!----------  HEAD  ---------->
    <head>
      <style>
        /* Style the form element with a border around it */
        form {
          border: 4px solid #f1f1f1;
        }

        /* Add some padding and a grey background color to containers */
        .container {
          padding: 20px;
          background-color: #f1f1f1;
        }

        /* Style the input elements and the submit button */
        input[type=text], input[type=submit] {
          width: 100%;
          padding: 12px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }

        /* Add margins to the checkbox */
        input[type=checkbox] {
          margin-top: 16px;
        }

        /* Style the submit button */
        input[type=submit] {
          background-color: #04AA6D;
          color: white;
          border: none;
        }

        input[type=submit]:hover {
          opacity: 0.8;
        }
      </style>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <!----------  FavIcon e Title ---------->
      <link rel="icon" type="image/x-icon" href="src/favicon/favicon.ico" />
      <title>Malibù</title>
  
      <!----------  Bootstrap CSS  ---------->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
      <!----------  FontAwensome  ---------->
      <script src="https://kit.fontawesome.com/b77f5fdcdb.js" crossorigin="anonymous"></script>
      <!----------  Our CSS  ---------->
      <link rel="stylesheet" href="src/style.css" type="text/css">
  
      <script src="https://use.fontawesome.com/351be3174f.js"></script>
    </head>
  
    <!----------  BODY  ---------->
    <body>
      
    <?php include("templates/btt-button.php"); ?>

    <?php include("templates/navbar.php"); ?>
      
    <?php include("templates/header.php"); ?>   
      
      <div class="spaziatore"></div>
      
    <form id="newsletter" action="sendmail.php" method ="POST">
    
      <div class="container" style="background-color:white"> 
        <input type="text" placeholder="Name" name="name" required value="<?php echo $_POST["name"]?>">
        <input type="text" placeholder="Surname" name="surname" required value="<?php echo $_POST["surname"]?>">
        <input type="text" placeholder="Email address" name="mail" required value="<?php echo $_POST["mail"]?>">
        <div><?php echo $errors["email"] ?></div>
        <div><?php echo $errors["added"] ?></div>
      </div>
    
      <div class="container">
        <input type="submit" value="submit" name = "submit">
        <div><?php echo $errors["submitted"] ?></div>
      </div>
    </form>
      <!----------  CONTENUTO  ---------->
      <section class="content text-center">
        <div class="container-immagine-contenuto">
        </div>
      </section>
    <?php include("templates/footer.php"); ?>
     
      <!----------  JS Scripts Bootstrap  ---------->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
      <!---------- Our Scripts  ---------->
      <script src="src/script.js"></script>
    </body>
  </html>