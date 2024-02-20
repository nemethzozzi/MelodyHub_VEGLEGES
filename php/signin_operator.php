<?php
  session_start();
  include "user_operators.php";
  $users = loadUsers();
  $hibak = 0;

  // űrlapfeldolgozás

  if (isset($_POST["regisztracio-button"])){
    // ha az űrlapot elküldték...
    // a kötelezően kitöltendő mezők ellenőrzése
 
    if (!isset($_POST["vezeteknev"]) || trim($_POST["vezeteknev"]) === ""){
      $hibak += 1;
      header("Location:../warnings/empty_lastname.php");
    exit();
}


    if (!isset($_POST["keresztnev"]) || trim($_POST["keresztnev"]) === ""){
      $hibak += 1;
      header("Location:../warnings/empty_firstname.php");
    exit();
}

    if (!isset($_POST["felhnev"]) || trim($_POST["felhnev"]) === ""){
      $hibak += 1;
      header("Location:../warnings/empty_username_signin.php");
    exit();
}

    if (!isset($_POST["szuletesi-datum"]) || trim($_POST["szuletesi-datum"]) === ""){
        $hibak += 1;
      header("Location:../warnings/empty_birthdate.php");
    exit();
}

    if (!isset($_POST["email"]) || trim($_POST["email"]) === ""){
        $hibak += 1;
      header("Location:../warnings/empty_email.php");
    exit();
}


    if (!isset($_POST["jelszo"]) || trim($_POST["jelszo"]) === "" || !isset($_POST["jelszo-ismet"]) || trim($_POST["jelszo-ismet"]) === ""){
        $hibak += 1;
      header("Location:../warnings/empty_password_signin.php");
    exit();
}




//ha nem tölt fel képet akkor a blank imaget tárolja el 
$destination = "";
$sikeresfajl = 0;

//nincs semmi baj a képfeltöltéssel
if($_FILES["profilkep"]["error"]===0) {
  
  echo "belementem a blokkba, lesz prof kép";
  $destination = "../images/".$_FILES["profilkep"]["name"];
  
  if(move_uploaded_file($_FILES["profilkep"]["tmp_name"], $destination)){
    $sikeresfajl=1;
  }

} else {

  echo "blank image lesz";
  $destination = '../images/blank-image.png';
  $sikeresfajl=1;
}


    // foglalt felhasználónév ellenőrzése
    foreach ($users as $current_users) {
      if ($current_users["username"] === $_POST["felhnev"]){  // ha egy regisztrált felhasználó neve megegyezik az űrlapon megadott névvel...
        header("Location:../warnings/used_username_signin.php");
        exit();
    }
  }

    // túl rövid jelszó
    if (strlen($_POST["jelszo"]) < 8){
        header("Location:../warnings/not_enough_password.php");
        exit();
    }

    // a két jelszó nem egyezik
    if ($_POST["jelszo"] !== $_POST["jelszo-ismet"]){
      header("Location:../warnings/notthesame_password.php");
      exit();
    } 

    
    if($sikeresfajl === 0){
      header("Location:../warnings/failed_file_upload.php");
      exit();
    }


$selectedgenres = $_POST["mufaj-select"]; 
$selectedgenre = "";
    foreach($selectedgenres as $genre){
      if($genre === "osszes"){
        $selectedgenre="pop, hiphop, classical, rock, metal, blues, jazz, instrumental, indie-folk";
      }
    } 
$selectedgenre = implode(", ",$selectedgenres);

//adatok behelyezése a tömbbe amit beteszek a users.txtbe
if ($hibak === 0) {   // sikeres regisztráció
$new_user_object = [
    
  "firstname" => $_POST["vezeteknev"],
  "lastname" => $_POST["keresztnev"],
  "birth-date" => $_POST["szuletesi-datum"],
  "username" => $_POST["felhnev"], 
  "liked-genres" => $selectedgenre,
  "email" => $_POST["email"],
  "password" => password_hash($_POST["jelszo"], PASSWORD_DEFAULT),
  "profile-picture" => $destination,
  "introduction" => $_POST["bemutatkozo-szoveg"]
];

  $sikeres = TRUE;
  $new_user = [$new_user_object];
  saveUsers($new_user);
  
  header("Location:./login.php");
} else {             
  // sikertelen regisztráció       
  $sikeres = FALSE;
}



}
?>
