<?php
session_start();
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    // If there is no admin session, redirect to the login page.
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MelodyHub | Admin oldal</title>
    <link rel="icon" href="../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="../js/jquery-3.4.1.min.js"></script>
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
                    <li><a href="music.php" class="nav-links">Zenék</a></li>
                    <li><a href="forum.php" class="nav-links">Fórum</a></li>
                </ul>
                <ul class="nav-links-right">
                    <li><a href="logout.php" class="nav-links">Kijelentkezés</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <h1 class="cim">MelodyHub</h1>
    <h2 class="alcim">Share your love for music and connect with the community.</h2>
        <form action="admin_operator.php" method="POST" enctype="multipart/form-data">
        <table id="admin-form-table">
            <caption id="admin-form-table-caption">Zene feltöltés</caption>
            <tr>
                <td colspan="2"><span id="kotelezo-kitolteni">*: kötelező kitölteni</span></td>
            </tr>
            <tr class="admin-form-table-tr">
                <td class="admin-form-table-td">Zene:<span class="csillag">*</span></td>
                <td class="admin-form-table-td">
                    <img src="../images/info-icon.svg" alt="Információ icon" class="info-icon" onclick="infoAlert()">
                    <input type="file" name="file" id="file" accept=".mp3" required>
                </td>
            </tr>
            <tr class="admin-form-table-tr">
                <td class="admin-form-table-td">Borító:<span class="csillag">*</span></td>
                <td class="admin-form-table-td">
                    <img src="../images/info-icon.svg" alt="Információ icon" class="info-icon" onclick="infoAlert()">
                    <input type="file" name="coverImage" id="coverImage" accept="image/*" required>
                </td>
            </tr>
            <tr class="admin-form-table-tr">
                <td class="admin-form-table-td">Előadó:<span class="csillag">*</span></td>
                <td class="admin-form-table-td">
                    <input type="text" name="author" id="author" size="40" maxlength="40" required>
                </td>
            </tr>
        <tr class="admin-form-table-tr">
                <td class="admin-form-table-td">Cím:<span class="csillag">*</span></td>
                <td class="admin-form-table-td">
                    <input type="text" name="title" id="title" size="40" maxlength="50" required>
                </td>
            </tr>
            <tr class="admin-form-table-tr">
                <td class="admin-form-table-td">Műfaj:<span class="csillag">*</span></td>
                <td class="admin-form-table-td">
                    <select name="mufaj-select" id="mufaj-select-id">
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
            <tr class="admin-form-table-tr">
                <td class="admin-form-table-td">Időtartam:<span class="csillag">*</span></td>
                <td class="admin-form-table-td">
                    <input type="text" name="minute" id="minute" size="16" maxlength="2" placeholder="perc" required>
                    <input type="text" name="sec" id="sec" size="16" maxlength="2" placeholder="másodperc" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Feltölt" name="feltolt-button" id="feltolt-button">
                </td>
            </tr>
        </table>
        <input type="reset" value="Visszaállít kezdőértékekre" id="reset-button">
    </form>

    <script src="../js/alerts.js"></script>
</body>
</html>