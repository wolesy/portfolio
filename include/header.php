<?php
session_start();
global $selected;

?>

<nav>
  <div class="nav-container">
    <div class="nav-item nav-exit" onclick="navClose()"><i class="fa-regular fa-circle-xmark fa-xs nav-item-exit"></i></div>
    <div class="nav-item"><a class="nav-link <?php if($selected == "home") echo "selected";?>" href="index.php">home</a><div class="nav-item-border"></div></div>
    <div class="nav-item"><a class="nav-link <?php if($selected == "portfolio") echo "selected";?>" href="portfolio.php">portfolio</a><div class="nav-item-border"></div></div>
    <div class="nav-item"><a class="nav-link <?php if($selected == "resume") echo "selected";?>" href="resume.php">resume</a><div class="nav-item-border"></div></div>
    <div class="nav-item"><a class="nav-link <?php if($selected == "contact") echo "selected";?>" href="contact.php">contact</a></div>
  </div>
</nav>
<header>

<div class="header">

  <h1 class="header-text">
    <a href="index.php" class="header-link"><span class="header-span">Cameron</span> Scholes</a>
  </h1>

  <div class="menu-button-container"><i class="fa-solid fa-chevron-down menu-button" onclick="navOpen()"></i></div>
  <div class="header-quote"><a href="contact.php">Get a quote</a> <i class="fa-regular fa-file-lines"></i></div>

</div>

</header>
