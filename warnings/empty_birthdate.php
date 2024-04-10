<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MelodyHub | Figyelmeztetés</title>
    <link rel="stylesheet" href="../css/others.css">
    <link rel="icon" href="../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/scrollbar.css">
</head>
<body>

    <h1 class="cim opacity-zero start-animation" style="margin-top: 20px;">
        MelodyHub
      </h1>
      <h2 class="alcim opacity-zero start-animation">
        Share your love for music and connect with the community.
      </h2>

      <div class="message-div opacity-zero start-animation">
        <h2 class="empty-input-problem">
            <span style="font-family: 'MonumentExtended-Regular';font-size: 90%;">
                Figyelmeztetés:
            </span>
            <br><br>
            Nem töltötte ki a születési dátumot
        </h2>

        <a href="../php/signin.php" class="back-to-login-link">Vissza a regisztrációhoz</a>
      </div>

      <?php
        include "../php/login_operator.php";
        if(isset($_SESSION['session-user'])) {
          header("Location:../index.php");
        }
      ?>
    
</body>
</html>