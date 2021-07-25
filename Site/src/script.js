// BOTTONE BACK-TO-TOP
          let mybutton = document.getElementById("btn-back-to-top");

          // Quando l'utente scolla in giù di 20px dall'inizio del sito, il bottone compare
          window.onscroll = function () {
            scrollFunction();
          };

          function scrollFunction() {
            if (
              document.body.scrollTop > 100 ||
              document.documentElement.scrollTop > 100
            ) {
              mybutton.style.display = "block";
            } else {
              mybutton.style.display = "none";
            }
          }
          // Quando l'utente clicca il bottone, scrollo in cima del sito
          mybutton.addEventListener("click", backToTop);

          function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }