<?php


$selected = "contact";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Contact | Cameron Scholes</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/479b50a13e.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="scripts/nav.js"></script>
  <script type="text/javascript" src="scripts/main.js"></script>
  <script>window.onbeforeunload = function () {
    window.scrollTo(0, 0);
  }</script>
</head>

<body>

  <div class="background">
    <?php include "include/header.php" ?>
    <main>


      <div class="contact-text-container">

        <p class="contact-text">Unsure what you are looking for?<br>Need help building or optimising your website?</p>
        <p class="contact-text">Get in contact today for a quote and I can share my years of knowledge!</p>

      </div>
      <div class="form-container shadow">
        <form class="form" action="include/contactForm.php" method="POST">
          <h2 class="form-header">Get in contact</h2>
          <h3 class="form-subheader text-muted">Lets discuss what you want!</h3>
          <input class="contact-form-input form-control" type="text" placeholder="Name" name="Name">
          <input class="contact-form-input form-control" type="email" placeholder="Email" name="Email">
          <input class="contact-form-input form-control" type="tel" placeholder="Phone Number" name="Number">
          <textarea class="form-control contact-form-input-message" type="text" placeholder="Message..." name="Message" rows="1"></textarea>
          <button class="contact-form-button btn btn-outline-info text-nowrap" >Send Message</button>
        </form>
      </div>
    </main>
    <?php
    include "include/footer.php";
    ?>
  </div>
</body>
</html>
