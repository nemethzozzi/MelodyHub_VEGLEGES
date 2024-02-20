<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MelodyHub | Regisztráció</title>
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
            <a class="nav-links disabled-link">Zenék</a>
            <a class="nav-links disabled-link">Fórum</a>
            <span id="nav-span">
                <a href="about_us.php" class="nav-links">Rólunk</a>
                <a href="login.php" class="nav-links">Jelentkezz be</a>
                <a class="nav-links disabled-link">Regisztrálj</a>
            </span>
        </nav>
    </header>

    <h1 class="cim opacity-zero start-animation">
        MelodyHub
    </h1>
    <h2 class="alcim opacity-zero start-animation">
        Share your love for music and connect with the community.
    </h2>

    <form action="signin_operator.php" method="POST" class="opacity-zero start-animation" enctype="multipart/form-data">
        <table id="signin-form-table">
            <caption id="signin-form-table-caption">Regisztráció</caption>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">*Vezetéknév:</td>
                <td class="signin-form-table-td">
                    <input type="text" name="vezeteknev" id="vezeteknev" size="30" maxlength="30" required>
                </td>
            </tr>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">*Keresztnév:</td>
                <td class="signin-form-table-td">
                    <input type="text" name="keresztnev" id="keresztnev" size="30" maxlength="30" required>
                </td>
            </tr>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">*Születési dátum:</td>
                <td class="signin-form-table-td signin-form-table-td-date">
                    <input type="date" name="szuletesi-datum" id="szuletesi-datum" size="30"required>
                </td>
            </tr>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">*Felhasználónév:</td>
                <td class="signin-form-table-td">
                    <input type="text" name="felhnev" id="felhnev" size="30" maxlength="30" required>
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
                <td class="signin-form-table-td">*E-mail:</td>
                <td class="signin-form-table-td">
                    <input type="email" name="email" id="email" size="30" maxlength="50" required>
                </td>
            </tr>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">*Jelszó:</td>
                <td class="signin-form-table-td">
                    <input type="password" name="jelszo" id="jelszo" size="30" maxlength="30" required>
                </td>
            </tr>
            <tr class="signin-form-table-tr">
                <td class="signin-form-table-td">*Jelszó ismét:</td>
                <td class="signin-form-table-td">
                    <input type="password" name="jelszo-ismet" id="jelszo-ismet" size="30" maxlength="30" required>
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

            <tr class="signin-form-tabla-tr">
                <td class="signin-form-table-td">
                <span>* kötelező megadni</span>
                </td>
            </tr>




        </table>

        <input type="submit" value="Regisztrál" name="regisztracio-button" id="regisztracio-button">
        <input type="reset" value="Visszaállít kezdőértékekre" id="reset-button">


    </form>

    <script src="../js/alerts.js"></script>


</body>
</html>