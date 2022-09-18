<?php
global $selected;
$selected = "portfolio";

 ?>

<!doctype html>

<html>
  <head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@200;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/479b50a13e.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/nav.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
  </head>

  <body>
    <div class="background">

      <?php include "include/header.php" ?>

      <div class="main">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="portfolio.php">Portfolio</a></li>
          </ol>
        </nav>
        <div class="portfolio-grid">
          <div class="portfolio web" role="button" onclick="webClick();"><h3 class="portfolio-text">Web</h3></div>
          <div class="portfolio design"><h3 class="portfolio-text">Design</h3></div>
          <div class="portfolio art"><h3 class="portfolio-text">Art</h3></div>
        </div>
      </div>

      <?php include "include/footer.php" ?>
    </div>

  </body>

</html>
