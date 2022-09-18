<?php
global $selected;
$selected = "portfolio";

?>

<!doctype html lang="en">
<html>
<head>
  <title>Web</title>
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
  <?php include 'include/header.php'?>
    <div class="main">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="portfolio.php">Portfolio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Web</li>
        </ol>
      </nav>
      <div id="carousel" class="carousel carousel-dark slide" data-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <a href="https://blog.cameronscholes.com" class="carousel-item active">
              <img class="d-block w-100" src="https://cdn.cameronscholes.com/images/main/portfolio/web/blog-carousel-screenshot.png" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Joe's Blog</h5>
                <p>My own personal blog built by hand!</p>
              </div>
          </a>
          <div class="carousel-item">
              <img class="d-block w-100" src="https://picsum.photos/id/15/1200/400" alt="Second slide">
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="https://picsum.photos/id/13/1200/400" alt="Third slide">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  <?php include 'include/footer.php'?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
