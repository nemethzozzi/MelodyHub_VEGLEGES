<?php
include "user_operators.php";
session_start();

if(isset($_POST['bejelentkezes-button'])) {

    /*
    $szabi = [
        "firstname" => "Nemeskó",
        "lastname" => "Szabolcs",
        "birth-date" => "2003-03-26",
        "username" => "nemesko.szabolcs",
        "liked-genres" => "pop, instrumental, hip-hop",
        "email" => "szabolcsnemesko@gmail.com",
        "password" => "password123",
        "profile-picture" => "../images/szabikep.jpg",
        "introduction" => 'Szia, Szabi vagyok, és én vagyok a "null" csapat egyik csapattagja.'
    ];

    $users = [$szabi];
    saveUsers($users);
    */

    
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
        }
    }

    if($sikeres===FALSE) {
        header("Location:../warnings/no_user.php");
        exit();
    } else if($sikeres===TRUE) {
        //be van jelentkezve sikeresen
        header("Location:./main_page.php"); 
    }
    
    
}


?>