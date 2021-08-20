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
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


</head>
<body>
    <!-- VIDEO BACKGROUND -->
  <video autoplay muted loop id="myVideo" poster="src/img/bg-img.png">
    <source src="src/video/bg-video.mp4" type="video/mp4">
  </video>
    <!-- INCLUDO L'HEADER -->
    <?php include("templates/header.php"); ?>

    <!-- INCLUDO IL MAIN -->
  <div class="main">
    <?php include("templates/main.php"); ?>

    <!-- INCLUDO IL FORM PER LA NEWSLETTER -->
    <?php include("templates/form.php"); ?>

    
  </div>
  <footer>
    <a href="#https://www.facebook.com/francesco.trementozzi"><i class="fab fa-facebook-f"></i></a>
    <a href="#https://www.instagram.com/ftrement/"><i class="fab fa-instagram"></i></a>
    <a href="#https://twitter.com/f3ment"><i class="fab fa-twitter"></i></a>
  </footer>
  
</body>


<script src="src/script/script.js"></script>



</html>
