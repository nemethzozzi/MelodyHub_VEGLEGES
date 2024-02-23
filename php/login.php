<?php
  session_start();
  include "login_operator.php";
  
  if(isset($_SESSION['session-user'])) {
      echo '<script>changeLinks()</script>';
      echo '<script>setToActiveLinks()</script>';

      header("Location:./main_page.php");

  } 
?>


<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MelodyHub | Bejelentkezés</title>
  <link rel="icon" href="../images/icon.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="stylesheet" type="text/css" href="../css/navbar.css">
  <link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
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
    <a class="nav-links disabled-link">Zenék</a>
    <a class="nav-links disabled-link">Fórum</a>
    <span id="nav-span">
      <a href="about_us.php" class="nav-links">Rólunk</a>
      <a class="nav-links disabled-link">Jelentkezz be</a>
      <a href="signin.php" class="nav-links">Regisztrálj</a>
    </span>
  </nav>
</header>

<h1 class="cim opacity-zero start-animation">
  MelodyHub
</h1>
<h2 class="alcim opacity-zero start-animation">
  Share your love for music and connect with the community.
</h2>

<form action="login_operator.php" method="post" class="opacity-zero start-animation">
  <table id="login-form-table">
    <caption id="login-form-table-caption">Bejelentkezés</caption>
    <tr class="login-form-table-tr">
      <td class="login-form-table-td">Felhasználónév:</td>
      <td class="login-form-table-td">
        <input type="text" name="felhnev-login" id="felhnev-login" size="40" maxlength="40" required>
      </td>
    </tr>

    <tr class="login-form-table-tr">
      <td class="login-form-table-td">Jelszó:</td>
      <td class="login-form-table-td">
        <input type="password" name="jelszo-login" id="jelszo-login" size="40" maxlength="40" required>
      </td>
    </tr>

    <tr>
      <td>
        <input type="submit" value="Bejelentkezés" id="bejelentkezes-button" name="bejelentkezes-button">
      </td>
      <td>
        <p id="regisztracio-kerdes-p"> Még nem regisztáltál be?
          <a href="signin.php" id="goto-reg-link">Regisztrálok</a>
        </p>
      </td>
    </tr>


  </table>
</form>

</body>
</html>