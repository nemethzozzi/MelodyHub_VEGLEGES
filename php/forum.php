<?php
if (!isset($_SESSION)) {
    session_start();
}
?>


<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MelodyHub | Fórum</title>
  <link rel="icon" href="../images/icon.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="../css/forum.css">
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
    <a href="music.php" class="nav-links">Zenék</a>
    <a class="nav-links disabled-link">Fórum</a>
    <span id="nav-span">
      <a href="about_us.php" class="nav-links">Rólunk</a>
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

<div id="input-text-div" class="opacity-zero start-animation">
  <form action="forum_operator.php" method="post">
    <textarea id="input-text" name="input-text" placeholder="Mi jár a fejedben?" maxlength="250"></textarea>
    <input type="submit" id="post-button" name="post-button" value="Közzététel" onclick="clearPosts()">
  </form>
</div>

<div id="wrapper">

  <?php
        include "login_operator.php";
        include "message_operators.php";
        if(isset($_SESSION['session-user'])) {
            echo '<script>changeLinks()</script>';
            echo '<script>setToActiveLinks()</script>';

          $messages = loadMessages();
          foreach($messages as $current_message) {
            echo '<div class="forum-container opacity-zero start-animation">';
              echo '<h2 class="post-author" name="post-author">@'.$current_message['message-author'].'</h2>';
              echo '<p class="liked-genres" name="liked-genres">'.$current_message['liked-genres'].'</p>';
              echo '<div class="post-content" name="post-content">';
                echo '<p>'.$current_message['message-text'].'</p>';
              echo '</div>';
            echo '</div>';
          }

        } else {
          header("Location:./main_page.php");
        } 
  ?>
  
  </div>



  <!-- valamiért a css nem működik -->
  <script>
    $(".liked-genres").css("font-family", "BasisGrotesqueArabicPro-Regular");
    $(".liked-genres").css("color", "rgb(173, 173, 173)");

        function clearPosts() {
          setTimeOut(clear, 100);
        }
        function clear() {
          $("#wrapper").empty();
        }

  </script>
	
</body> 


</html>
