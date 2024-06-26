<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MelodyHub | Főoldal</title>
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main_page.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="css/scrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
        function changeLinks() {
            $("#login-id").attr("href", "php/profil_adatok.php");  
            $("#login-id").text("Profil");
            $("#signin-id").attr("href", "php/logout.php");  
            $("#signin-id").text("Kijelentkezés");
        }
        function setToActiveLinks() {
            $("#music-id").attr("href", "php/music.php");  
            $("#music-id").removeClass("disabled-link");
            $("#forum-id").attr("href", "php/forum.php");
            $("#forum-id").removeClass("disabled-link");
        }
    </script>
    
</head>

<body onload="waitFor_DownArrowChangeClass(); listOffers()">
<header>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <div class="navbar-container">
                <ul class="nav-links-left">
                 <li><a class="nav-links disabled-link">Főoldal</a></li>
                 <li><a class="nav-links disabled-link" id="music-id">Zenék</a></li>
                 <li><a class="nav-links disabled-link" id="forum-id">Fórum</a></li>
                </ul>
                <ul class="nav-links-right">
                <li><a href="php/about_us.php" class="nav-links">Rólunk</a></li>
                <li><a href="php/login.php" class="nav-links" id="login-id">Jelentkezz be</a></li>
                <li><a href="php/signin.php" class="nav-links" id="signin-id">Regisztrálj</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="cimek-section">
        <h1 id="cim">MelodyHub</h1>
        <h2 id="motto">Share your love for music and connect with the community.</h2>
        <img src="images/down-arrow.svg" alt="Down Arrow" id="down-arrow" class="down-arrow-start-animation">
    </section>

    <main>
        <h2 id="music-offer-h2">Ajánlatok</h2>
        <div id="music-offers-section">
            <!-- Music offers will be dynamically loaded here -->
        </div>
    </main>

    <script src="js/down-arrow-animation.js"></script>
    <script src="js/randomized-music-offers-setup.js"></script>
        
        <?php
        include "php/login_operator.php";
        if(isset($_SESSION['session-user'])) {
            echo '<script>changeLinks()</script>';
            echo '<script>setToActiveLinks()</script>';
        }

    ?>

</body>
</html>

