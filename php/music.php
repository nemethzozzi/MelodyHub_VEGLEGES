<?php
session_start(); // Start the session at the very top
include "login_operator.php";
if (!isset($_SESSION['session-user'])) {
    header("Location: ./main_page.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MelodyHub | Zenék</title>
  <link rel="icon" href="../images/icon.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="../css/music.css">
  <link rel="stylesheet" type="text/css" href="../css/navbar.css">
  <link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <div class="navbar-container">
            <ul class="nav-links-left">
      <li><a href="../index.php" class="nav-links">Főoldal</a></li>
        <li><a class="nav-links disabled-link">Zenék</a></li>
        <li><a href="forum.php"class="nav-links" id="forum-id">Fórum</a></li>
        </ul>
            <ul class="nav-links-right">
        <li><a href="about_us.php"class="nav-links">Rólunk</a></li>
        <li><a href="login.php"class="nav-links" id="login-id">Jelentkezz be</a></li>
        <li><a href="signin.php" class="nav-links" id="signin-id">Regisztrálj</a></li>
        </ul>
        </div>
    </nav>
</header>

<h1 class="cim opacity-zero start-animation">
  MelodyHub
</h1>
<h2 class="alcim opacity-zero start-animation">
  Share your love for music and connect with the community.
</h2>

<div id="genres-div" class="opacity-zero start-animation">
    <h3 id="genres-title">Műfajok</h3>
    <select name="genres-select" id="genres-select">
      <option value="osszes" selected>Összes</option>
      <option value="pop">Popzene</option>
      <option value="hiphop">Hip Hop</option>
      <option value="classical">Klasszikus zene</option>
      <option value="rock">Rock</option>
      <option value="metal">Metál</option>
      <option value="blues">Blues</option>
      <option value="jazz">Jazz</option>
      <option value="instrumental">Instrumentális zene</option>
      <option value="indie-folk">Indie folk</option>
    </select>
    <button id="genres-list-button" onclick="listMusic()">Listázás</button>

</div>


    <img src="../images/musical-note-icon.svg" alt="" id="musical-note-icon" class="start-animation-for-for-musical-note">

    <section id="music-section" class="opacity-zero start-animation"></section>

    <script src="../js/music-setup.js"></script>

</body>
</html>

<?php
  if(isset($_SESSION['session-user'])) {
      echo '<script>changeLinks()</script>';
      echo '<script>setToActiveLinks()</script>';
  } else {
    header("Location:./main_page.php");
  }
?>
