<?php


global $selected;
$selected = "home";


 ?>

<!doctype html>

<html lang="en">

  <head>

    <title>Cameron Scholes | Front-end Developer</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@200;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/479b50a13e.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/nav.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>

  </head>

  <body onload="pageLoad();">

    <div class="background">
      <?php
      include "include/header.php";
      ?>

    <main>
      <div class="main">

        <div class="main-banner">

          <h2 class="main-bnr-text">I <span class="main-bnr-txt-spn">make</span> websites and stuff...</h2>
          <div class="main-bnr-link-cntr"><h3 class="main-bnr-link-ln">1</h3><h3 class="main-bnr-link" id="main-bnr-link"><span class="main-bnr-link-a">&lt;a</span> <span class="main-bnr-link-href">href</span><span class="main-bnr-link-eq">=</span><span class="main-bnr-link-link">"contact.php"</span><span class="main-bnr-link-a">&gt;</span><a href="contact.php" class="main-bnr-link-main">Hire Me!</a><span class="main-bnr-link-a">&lt;a&gt;</span></h3><div class="main-bnr-link-crs"></div></div>

        </div>
        <div class="main-border"></div>
        <div class="main-grid">

        <div class="main-1 shadow" >
          <div class="main-logo">
            <i class="fa-brands fa-html5 main-img"></i>
            <h2 class="main-header">HTML5</h2>
          </div>
          <p class="main-text">With over a decades experience in HTML5, <br>sometimes it feels easier than writing in English!</p>

        </div>

        <div class="main-2 shadow" >
          <div class="main-logo">
          <i class="fa-brands fa-css3-alt main-img"></i>
          <h2 class="main-header">CSS3</h2>
        </div>
          <p class="main-text">With HTML comes CSS,<br>the fire for the proverbial houses!<br>CSS brings this website the style it has!</p>

        </div>
        <div class="main-3 shadow" >
          <div class="main-logo">
          <i class="fa-brands fa-square-js main-img"></i>
          <h2 class="main-header">JavaScript</h2>
        </div>
          <p class="main-text">JavaScript allows me to make websites <span class="main-text-spn">fun</span>!</p>

        </div>

      </div>
    </main>
    <?php
    include "include/footer.php";
     ?>
</div>
  </body>

</html>
