<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modelist</title>
  <!--favicon-->
  <link rel="icon" href="/malibu/Coming/src/favicon/favicon.ico" type="image/x-icon"/>
  <!--Icone FontAwnsome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--Foglio di Style-->
  <link rel="stylesheet" href="/malibu/Coming/src/style/style.css">
  <!--FONT-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
    <!-- VIDEO BACKGROUND -->
  <video autoplay muted loop id="myVideo" poster="/malibu/Coming/src/img/bg-img2.png">
    <source src="/malibu/Coming/src/video/bg-video2.mp4" type="video/mp4">
  </video>

  <header>
    <section>
      <a href="/malibu/Coming/">Modelist</a>
    </section>
    <ul class="menu">
      <li><a href="#">Contatti</a></li>
      <li><a href="/malibu/Coming/src/Pages/Il_Progetto.php">Il progetto</a></li>
    </ul>
  </header>

  <div class="main">
    <p class="title">Il Progetto</p>
    <div class="separator"></div>
    <p class="message">Modelist è un progetto nato Modelist è un progetto nato Modelist è un progetto nato<p>
    <p class="message">Modelist è un progetto nato Modelist è un progetto nato Modelist è un progetto nato<p>
    
    <!-- NEWSLETTER FORM  -->
    <input type="checkbox" name="" id="toggle">
    <label for="toggle" class="show-btn">Per Saperne Di Più</label>
    <div class="wrapper">
      <label for="toggle" class="cancel-btn"><i class="fas fa-times"></i></label>
      <div class="icon"><i class="far fa-envelope"></i></div>
      <div class="content">
        <p class="header">Rimani Aggiornato</p>
        <p class="after">Iscriviti alla nostra newsletter e ricevi gli ultimi aggiornamenti direttamente nella tua casella di posta</p>
      </div>
      <form action="../../sendmail.php">
        <div class="field">
          <input type="text" placeholder="Nome*" required>
        </div>
        <div class="field">
          <input type="text" placeholder="Email*" required>
        </div>
        <div class="field btn">
          <input type="submit" value="AVVISAMI!">
        </div>
      </form>
      <div class="text">Non condividiamo le tue informazioni con terze parti.</div>
      <div class="text">Per saperne di più leggi la nostra <a href="/malibu/Coming/src/privacy&policy.pdf" target="_blank" class="policy">privacy & policy</a>.</div>
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