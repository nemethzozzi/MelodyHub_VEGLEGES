<?php

function loadMessages() {
    $messages = [];
    $forumMessagesFile = fopen("forum_messages.txt","r");
    if($forumMessagesFile===FALSE) {
        die("Hiba a fórum fájl olvasásánál!");
    }

    while(($current_line = fgets($forumMessagesFile))!==FALSE) {
        $current_message = unserialize($current_line);
        $messages[] = $current_message;
    }
    fclose($forumMessagesFile);

    //a fájlból kiolvasott és un-szerializált felhasználókat visszaadjuk
    return $messages;
}

function saveMessages($messages) {
    $forumMessagesFile = fopen("forum_messages.txt", "a");
    if($forumMessagesFile === FALSE) {
        echo "Hiba a fórum fájl írásánál!";
    }
    foreach($messages as $current_message) {
        fwrite($forumMessagesFile, serialize($current_message)."\n");    
    }
    
    fclose($forumMessagesFile);
}

?>