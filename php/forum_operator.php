<?php
session_start();
include "message_operators.php";
include "user_operators.php";

if(isset($_SESSION['session-user'])) {

    //elsonek kell a beirt uzenet, es az adatai
    $newest_message_text = $_POST['input-text'];

    if(!isset($_POST['input-text']) || trim($newest_message_text)==="") {
        header("Location:../warnings/empty-text.php");
        exit();
    }

    $newest_message_author = $_SESSION['session-user']['username'];
    
    $users = loadUsers();

    /*
    echo "Message text: ".$newest_message_text.'<br>';
    echo "Message author: ".$newest_message_author.'<br>';

    foreach($users as $user) {
        echo $user['username'].'<br>';
    }
    */
    
    
    //az a felhasznalo milyen műfajokat kedvel
    foreach($users as $current_user) {
        if($current_user['username']===$newest_message_author) {
            $newest_message_author_liked_genres = $current_user['liked-genres'];
        }
    }

    $newest_message = [
        "liked-genres" => $newest_message_author_liked_genres,
        "message-author" => $newest_message_author,
        "message-text" => $newest_message_text
    ];

    $message=[$newest_message];

    /*
    $all_messages=loadMessages();
    $all_messages[]=$newest_message;
    */

    saveMessages($message);

    header('Location:./forum.php');
    
    

}




?>