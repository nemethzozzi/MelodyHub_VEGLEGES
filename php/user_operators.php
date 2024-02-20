<?php

function saveUsers($users) {
    $userFile = fopen("users.txt", "a");
    if($userFile === FALSE) {
        echo "Hiba az írásnál!";
    }
    foreach($users as $current_user) {
        fwrite($userFile, serialize($current_user)."\n");    
    }
    
    fclose($userFile);
}

function loadUsers() {
    $users = [];
    $userFile = fopen("users.txt","r");
    if($userFile===FALSE) {
        die("Hiba az olvasásnál!");
    }

    while(($current_line = fgets($userFile))!==FALSE) {
        $current_user = unserialize($current_line);
        $users[] = $current_user;
    }
    fclose($userFile);

    //a fájlból kiolvasott és un-szerializált felhasználókat visszaadjuk
    return $users;
}

?>