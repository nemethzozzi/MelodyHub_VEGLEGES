<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MelodyHub | Profil</title>
  <link rel="icon" href="../images/icon.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="../css/profile.css">
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
      <ul>
        <li><a href="main_page.php" class="nav-links">Főoldal</a></li>
        <li><a  href="music.php" class="nav-links" id="music-id">Zenék</a></li>
        <li><a  href="forum.php"class="nav-links" id="forum-id">Fórum</a></li>
        <span id="nav-span">
        <li><a href="about_us.php"class="nav-links">Rólunk</a></li>
        <li><a class="nav-links disabled-link" id="login-id">Jelentkezz be</a></li>
        <li><a href="signin.php" class="nav-links" id="signin-id">Regisztrálj</a></li>
      </ul>
    </nav>
  </header>

  <h1 class="cim opacity-zero start-animation">MelodyHub</h1>
  <h2 class="alcim opacity-zero start-animation">Share your love for music and connect with the community.</h2>

  <img src="<?php echo $_SESSION['session-user']['profile-picture']; ?>" class="profil_adat_profilkep" alt="Profilkép">

  <div class="container">
    <table id="profil-adatok-table">
        <caption id="profil-adatok-caption">Profilom</caption>
        <tr class="signin-form-table-tr">
            <td class="signin-form-table-td">Felhasználónév:</td>
            <td class="signin-form-table-td"><?php echo $_SESSION["session-user"]["username"]; ?></td>
        </tr>
        <tr class="signin-form-table-tr">
            <td class="signin-form-table-td">Vezetéknév:</td>
            <td class="signin-form-table-td"><?php echo $_SESSION["session-user"]["firstname"]; ?></td>
        </tr>
        <tr class="signin-form-table-tr">
            <td class="signin-form-table-td">Keresztnév:</td>
            <td class="signin-form-table-td"><?php echo $_SESSION["session-user"]["lastname"]; ?></td>
        </tr>
        <tr class="signin-form-table-tr">
            <td class="signin-form-table-td">Születési dátum:</td>
            <td class="signin-form-table-td"><?php echo $_SESSION["session-user"]["birth-date"]; ?></td>
        </tr>
        <tr class="signin-form-table-tr">
            <td class="signin-form-table-td">Műfajok:</td>
            <td class="signin-form-table-td"><?php echo $_SESSION["session-user"]["liked-genres"]; ?></td>
        </tr>
        <tr class="signin-form-table-tr">
            <td class="signin-form-table-td">E-mail:</td>
            <td class="signin-form-table-td"><?php echo $_SESSION["session-user"]["email"]; ?></td>
        </tr>
        <tr class="signin-form-table-tr">
            <td class="signin-form-table-td">Bemutatkozó szöveg:</td>
            <td class="signin-form-table-td"><?php echo $_SESSION["session-user"]["introduction"]; ?></td>
        </tr>
    </table>
</div>


  <?php
    include "login_operator.php";
    if(isset($_SESSION['session-user'])) {
      echo '<script>changeLinks()</script>';
      echo '<script>setToActiveLinks()</script>';
    } else {
      header("Location: ./main_page.php");
      exit;
    }
  ?>
</body>
</html>
