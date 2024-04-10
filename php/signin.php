<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MelodyHub | Regisztráció</title>
    <link rel="icon" href="../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/signin.css">
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
        <li><a class="nav-links disabled-link" id="music-id">Zenék</a></li>
        <li><a class="nav-links disabled-link" id="forum-id">Fórum</a></li>
        <span id="nav-span">
        <li><a class="nav-links disabled-link">Rólunk</a></li>
        <li><a href="login.php"class="nav-links" id="login-id">Jelentkezz be</a></li>
        <li><a href="signin.php" class="nav-links disabled-link" id="signin-id">Regisztrálj</a></li>
      </ul>
    </nav>
    </header>

<h1 class="cim opacity-zero start-animation">MelodyHub</h1>
<h2 class="alcim opacity-zero start-animation">Share your love for music and connect with the community.</h2>

    <form action="signin_operator.php" method="POST" class="opacity-zero start-animation" enctype="multipart/form-data">
        <table id="signin-form-table">
            <caption id="signin-form-table-caption">Regisztráció</caption>
            <tr>
                <td>
                <span id="kotelezo-kitolteni">*: kötelező kitölteni</span>
                </td>
            </tr>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">
                    Vezetéknév:<span id="csillag">*</span>
                </td>
                <td class="signin-form-table-td">
                    <input type="text" name="vezeteknev" id="vezeteknev" size="40" maxlength="40" required>
                </td>
            </tr>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">
                    Keresztnév:<span id="csillag">*</span>
                </td>
                <td class="signin-form-table-td">
                    <input type="text" name="keresztnev" id="keresztnev" size="40" maxlength="40" required>
                </td>
            </tr>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">
                    Születési dátum:<span id="csillag">*</span>
                </td>
                <td class="signin-form-table-td signin-form-table-td-date">
                    <input type="date" name="szuletesi-datum" id="szuletesi-datum" size="40"required>
                </td>
            </tr>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">
                    Felhasználónév:<span id="csillag">*</span>
                </td>
                <td class="signin-form-table-td">
                    <input type="text" name="felhnev" id="felhnev" size="40" maxlength="40" required>
                </td>
            </tr>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">Műfajok:</td>
                <td class="signin-form-table-td">

                    <!--- 
                    Mivel a "select"-en rajta van a multiple attribútum, a navbar bugosan fog működik,
                    az okát nem tudom, de a multiple attribútum fontos
                    (chromiumnál és operánál volt baj, firefoxnál nem merült fel ez a probléma)
                    -->
                    <select name="mufaj-select[]" id="mufaj-select" multiple>
                        <option value="osszes" selected>Összes</option>
                        <option value="pop">Popzene</option>
                        <option value="hiphop">Hip Hop</option>
                        <option value="classical">Klasszikus zene</option>
                        <option value="rock">Rock</option>
                        <option value="metal">Metál</option>
                        <option value="blues">Blues</option>
                        <option value="jazz">Jazz</option>
                        <option value="instrumental">Instrumentális zene</option>
                        <option value="indie-folk">Indie-folk</option>
                    </select>
                </td>
            </tr>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">
                    E-mail:<span id="csillag">*</span>
                </td>
                <td class="signin-form-table-td">
                    <input type="email" name="email" id="email" size="40" maxlength="50" required>
                </td>
            </tr>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">
                    Jelszó(minimum 8 karakter):<span id="csillag">*</span>
                </td>
                <td class="signin-form-table-td">
                    <input type="password" name="jelszo" id="jelszo" size="40" maxlength="40" required>
                </td>
            </tr>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">
                    Jelszó ismét:<span id="csillag">*</span>
                </td>
                <td class="signin-form-table-td">
                    <input type="password" name="jelszo-ismet" id="jelszo-ismet" size="40" maxlength="40" required>
                </td>
            </tr>

            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">Profilkép: </td>
                <td class="signin-form-table-td">
                    <img src="../images/info-icon.svg" alt="Információ icon" id="info-icon" onclick="infoAlert()">
                    <input type="file" name="profilkep" id="profilkep" accept="image/*">
                </td>
            </tr>

            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">Bemutatkozó szöveg:</td>
                <td class="signin-form-table-td">
                <textarea id="bemutatkozo-szoveg"name="bemutatkozo-szoveg" placeholder="Bemutatkozó szöveg" maxlength="200" ></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Regisztrál" name="regisztracio-button" id="regisztracio-button">
                </td>
                <td>
                    <p id="belepes-kerdes-p"> Van már fiókod?
                        <a href="login.php" id="goto-log-link">Belépek</a>
                    </p>
                </td>
            </tr>

        </table>



        <input type="reset" value="Visszaállít kezdőértékekre" id="reset-button">


    </form>

<script src="../js/alerts.js"></script>

</body>
</html>
