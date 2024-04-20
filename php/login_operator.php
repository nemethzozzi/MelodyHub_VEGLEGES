<?php
include "user_operators.php";
if (!isset($_SESSION)) {
    session_start();
}


if(isset($_POST['bejelentkezes-button'])) {
    
    $entered_username = $_POST['felhnev-login'];
    $entered_password = $_POST['jelszo-login'];

    $sikeres = FALSE;
    

    //ha nincs kitöltve a felhasználónév doboz
    if(!isset($_POST['felhnev-login']) || trim($entered_username==="")) {
        header("Location:../warnings/empty_username.php");
        exit();
    }

    //ha nincs kitöltve a jelszó
    if(!isset($_POST['jelszo-login']) || trim($entered_password==="")) {
        header("Location:../warnings/empty_password.php");
        exit();
    }

    //ha ide eljut akkor nem-üresek a mezők
    //ha minden oké akkor átirányít a main_page-re
    //ott is kell változtatni dolgokat

    $current_users = loadUsers();
    foreach($current_users as $current_user) {
        //ha talál ilyet
        if(($current_user['username']===$entered_username) and (password_verify($entered_password, $current_user["password"]))) {
            $_SESSION['session-user']=$current_user;
            $sikeres = TRUE;
            // Check if the username is admin and redirect to admin.php
            if ($entered_username === 'admin' && $entered_password === 'Admin123') {
                $_SESSION['session-user'] = $current_user;
                $_SESSION['is_admin'] = true; // Set a session variable indicating admin status
                header("Location: admin.php");
                exit();
            }

            break; // Break the loop after successful authentication
        }
    }

    if($sikeres===FALSE) {
        header("Location:../warnings/no_user.php");
        exit();
    } else if($sikeres===TRUE) {
        //be van jelentkezve sikeresen
        header("Location: ../index.php"); 
    }
    
    
}


?>