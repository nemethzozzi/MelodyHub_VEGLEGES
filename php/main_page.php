<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MelodyHub | Főoldal</title>
    <link rel="icon" href="../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/main_page.css">
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

<body onload="waitFor_DownArrowChangeClass(); listOffers()">




    
    <header>
        <nav>
            <a class="nav-links disabled-link">Főoldal</a>
            <a class="nav-links disabled-link" id="music-id">Zenék</a>
            <a class="nav-links disabled-link" id="forum-id">Fórum</a>
            <span id="nav-span">
                <a href="about_us.php" class="nav-links">Rólunk</a>
                <a href="login.php" class="nav-links" id="login-id">Jelentkezz be</a>
                <a href="signin.php" class="nav-links" id="signin-id">Regisztrálj</a>
            </span>
        </nav>
    </header>

    

        

        <section id="cimek-section">
            <h1 id="cim">MelodyHub</h1>
            <h2 id="motto">Share your love for music and connect with the community.</h2>

            <img src="../images/down-arrow.svg" alt="Down Arrow" id="down-arrow" class="down-arrow-start-animation">

        </section>

        <main>
            
        <!--zene ajánlások-->
        <h2 id="music-offer-h2">Ajánlatok</h2>
        <section id="music-offers-section">

            
            
        </section>
        
        </main>

        
        <!-- teszt -->
        <!--
        <audio id="audio-player">
            <source src="../music/Azahriah_szosziazi.mp3" type="audio/mpeg">
        </audio>
        -->
        
        <script src="../js/down-arrow-animation.js"></script>
        <!--<script src="../js/play-audio-test.js"></script>-->

        <script src="../js/randomized-music-offers-setup.js"></script>
        
        <?php
        include "login_operator.php";
        session_start();
        if(isset($_SESSION['session-user'])) {
            echo '<script>changeLinks()</script>';
            echo '<script>setToActiveLinks()</script>';
        }

    ?>

</body>
</html>

