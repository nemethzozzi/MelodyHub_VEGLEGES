
<?php
        session_start();
        include "login_operator.php";
        if(isset($_SESSION['session-user'])) {
            echo '<script>changeLinks()</script>';
            echo '<script>setToActiveLinks()</script>';
        }
  ?>


<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MelodyHub | Rólunk</title>
  <link rel="icon" href="../images/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="../css/others.css">
  <link rel="stylesheet" href="../css/scrollbar.css">
  <script src="../js/jquery-3.4.1.min.js"></script>
    <script>
        function changeLinks() {
            $("#login-id").attr("href", "profil_adatok.php");
            $("#login-id").text("Profil");
            $("#signin-id").attr("href", "logout.php");
            $("#signin-id").text("Kijelentkezés");
        }
        function setToActiveLinks() {
            $("#music-id").attr("href", "music.php");
            $("#music-id").removeClass("disabled-link");
            $("#forum-id").attr("href", "forum.php");
            $("#forum-id").removeClass("disabled-link");
        }
        
  </script>
</head>
<body>



<header>
  <nav>
    <a href="main_page.php" class="nav-links">Főoldal</a>
    <a class="nav-links disabled-link" id="music-id">Zenék</a>
    <a class="nav-links disabled-link" id="forum-id">Fórum</a>
    <span id="nav-span">
      <a class="nav-links disabled-link">Rólunk</a>
      <a href="login.php" class="nav-links" id="login-id">Jelentkezz be</a>
      <a href="signin.php" class="nav-links" id="signin-id">Regisztrálj</a>
    </span>
  </nav>
</header>

<h1 class="cim opacity-zero start-animation">
  MelodyHub
</h1>
<h2 class="alcim opacity-zero start-animation">
  Share your love for music and connect with the community.
</h2>


<div class="aboutus-section opacity-zero start-animation">
    <h1 id="aboutus-section-h1">Rólunk</h1>
    <p id="introduction">Mi vagyunk a 'null' webfejlesztő csapat, és ez a weboldal első közös munkánk gyümölcse.</p>
</div>
  
  <h2 id="ourteam" class="opacity-zero start-animation">Csapatunk</h2>

  <main id="about-us-main" class="opacity-zero start-animation">



  <!-- Zoli info -->
    <div class="aboutus-column">
      <div class="card">
        <img src="../images/profile_images/zolikep.jpg" alt="Zoli" class="kepek-rolunk">
        <div class="container">
          <h2 class="nev">Németh Zoltán</h2>
          <p class="job">Webfejlesztő</p>
          <p class="adatok-p">SZTE üzemmérnök informatikus hallgató</p>
          <p class="adatok-p">nemethzoltan0524@gmail.com</p>
          <p><button class="contact-button">Contact</button></p>
        </div>
      </div>
    </div>
    
    <!-- Ágoston info -->
    <div class="aboutus-column">
      <div class="card">
        <img src="../images/profile_images/agostonkep.jpg" alt="Ágoston" class="kepek-rolunk">
        <div class="container">
          <h2 class="nev">Guba Ágoston Márk</h2>
          <p class="job">Webfejlesztő</p>
          <p class="adatok-p">SZTE gazdaságinformatikus hallgató</p>
          <p class="adatok-p">agoston.guba@gmail.com</p>
          <p><button class="contact-button">Contact</button></p>
        </div>
      </div>
    </div>

  </main>

  
</body>

</html>
