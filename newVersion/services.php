<!DOCTYPE html>
<html lang="it">
<?php
session_start();
if(!isset($_SESSION['user'])){
	$err = "Dati scaduti";
	header("Location:loginStudente.php?err=$err");
	exit();
}
?>
  <head>
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta content="IE=edge" http-equiv="X-UA-Compatible"> -->
    <!-- <meta content="width=device-width,initial-scale=1" name="viewport"> -->
    <!-- <meta content="description" name="description"> -->
    <!-- <meta name="google" content="notranslate" /> -->
    <!-- <meta content="Mashup templates have been developped by Orson.io team" name="author"> -->

    Pagina temporanea
    <!-- <meta name="msapplication-tap-highlight" content="no"> -->

    <!-- <link href="./assets/apple-icon-180x180.png" rel="apple-touch-icon"> -->
    <!-- <link href="./assets/favicon.ico" rel="icon"> -->



    <!-- <title>jmTUTORING</title>   -->

  <!-- <link href="./css/studStyle.css" rel="stylesheet"> -->
  </head>
  <body>
  <ul class="nav">
    <li><a href="./studente.php" title="">Home</a></li>
    <li><a href="./services.php" title="">Servizi</a></li>
    <li><a href="./contact.php" title="">Contatti</a></li>
   </ul>
  <!-- <header class=""> -->
    <!-- <div class="navbar navbar-default visible-xs"> -->
      <!-- <button type="button" class="navbar-toggle collapsed"> -->
        <!-- <span class="sr-only"></span> -->
        <!-- <span class="icon-bar"></span> -->
        <!-- <span class="icon-bar"></span> -->
        <!-- <span class="icon-bar"></span> -->
      <!-- </button> -->
      <!-- <a href="./index.html" class="navbar-brand">jmTUTORING</a> -->
    <!-- </div> -->

    <!-- <nav class="sidebar"> -->
      <!-- <div class="navbar-collapse" id="navbar-collapse"> -->
        <!-- <div class="site-header hidden-xs"> -->
            <!-- <a class="site-brand" href="./index.html" title=""> -->
              <!-- <img class="img-responsive site-logo" alt="" src="./assets/images/jmlogo_.svg"> -->
              <!-- jmTUTORING -->
            <!-- </a> -->
          <!-- <p>Il Tinder scolastico.</p> -->
        <!-- </div> -->
        <!-- <ul class="nav"> -->
          <!-- <li><a href="./index.html" title="">Home</a></li> -->
          <!-- <li><a href="./services.html" title="">Servizi</a></li> -->
          <!-- <li><a href="./contact.html" title="">Contatti</a></li> -->
        <!-- </ul> -->
        <!-- <nav class="nav-footer"> -->

          <!-- <p>INSTAGRAM</P> -->
          <!-- <p class="nav-footer-social-buttons"> -->
            <!-- <a class="fa-icon" href="https://www.instagram.com/" title=""> -->
              <!-- <i class="fa fa-instagram"></i> -->
            <!-- </a> -->
            <!-- <!--<a class="fa-icon" href="https://dribbble.com/" title=""> -->
              <!-- <i class="fa fa-dribbble"></i> -->
            <!-- </a>--> 
            <!-- <!--<a class="fa-icon" href="https://twitter.com/" title=""> -->
              <!-- <i class="fa fa-twitter"></i> -->
            <!-- </a> -->
          <!-- </p> -->
          <!-- <p>© Untitled | Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></p>--> -->
        <!-- </nav>   -->
      <!-- </div>  -->
    <!-- </nav> -->
  <!-- </header> -->
  <!-- <main class="" id="main-collapse"> -->


  <!-- <div class="row"> -->
    <!-- <div class="col-xs-12 section-container-spacer"> -->
      <!-- <h1>Services</h1> -->
      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod -->
        <!-- tempor incididunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, -->
        <!-- quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo -->
        <!-- consequat.</p> -->
    <!-- </div> -->

    <!-- <div class="col-xs-12 col-md-4 section-container-spacer"> -->
      <!-- <img class="img-responsive" alt="" src="./assets/images/img-12.jpg"> -->
      <!-- <h2>Consectetur</h2> -->
      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
      <!-- <a href="./contact.html" class="btn btn-primary" title=""> Get in touch</a> -->
    <!-- </div> -->

    <!-- <div class="col-xs-12 col-md-4 section-container-spacer"> -->
      <!-- <img class="img-responsive" alt="" src="./assets/images/img-13.jpg"> -->
      <!-- <h2>Adipiscing</h2> -->
      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
      <!-- <a href="./contact.html" class="btn btn-primary" title=""> Get in touch</a> -->
    <!-- </div> -->

    <!-- <div class="col-xs-12 col-md-4 section-container-spacer"> -->
      <!-- <img class="img-responsive" alt="" src="./assets/images/img-14.jpg"> -->
      <!-- <h2>Dolor</h2> -->
      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
      <!-- <a href="./contact.html" class="btn btn-primary" title=""> Get in touch</a> -->
    <!-- </div> -->

  <!-- </div> -->


  <!-- </main> -->

  <!-- <script> -->
  <!-- document.addEventListener("DOMContentLoaded", function (event) { -->
    <!-- navbarToggleSidebar(); -->
    <!-- navActivePage(); -->
  <!-- }); -->
  <!-- </script> -->

  <!-- <!-- Google Analytics: change UA-XXXXX-X to be your site's ID  -->

  <!-- <script> -->
    <!-- (function (i, s, o, g, r, a, m) { -->
      <!-- i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () { -->
        <!-- (i[r].q = i[r].q || []).push(arguments) -->
      <!-- }, i[r].l = 1 * new Date(); a = s.createElement(o), -->
        <!-- m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m) -->
    <!-- })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga'); -->
    <!-- ga('create', 'UA-XXXXX-X', 'auto'); -->
    <!-- ga('send', 'pageview'); -->
  <!-- </script> -->

  <!--<script type="text/javascript" src="./main.85741bff.js"></script> -->
  </body>
</html>