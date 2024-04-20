<?php
// Define paths for the music and image directories
define('MUSIC_DIR', '../music/');
define('IMAGE_DIR', '../images/');
$jsonFilePath = '../uploads/musicSource.json';
$jsonFilePath2 = '../uploads/musicSourceForMainPage.json';

// Function to get the next ID
function getNextId($array) {
    return empty($array) ? 1 : end($array)['id'] + 1;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Read existing data for both JSON files
    $existingData = json_decode(file_get_contents($jsonFilePath), true) ?? [];
    $existingData2 = json_decode(file_get_contents($jsonFilePath2), true) ?? [];
    $newId = getNextId($existingData); // ID should be the same for both entries

    // Process file upload for music
    $musicFileName = basename($_FILES['file']['name']);
    $musicFilePath = MUSIC_DIR . $musicFileName;
    $musicFilePath2 = './music/' . $musicFileName; // Relative path for the main page
    if (!move_uploaded_file($_FILES['file']['tmp_name'], $musicFilePath)) {
        die('Failed to upload music file.');
    }

    // Process file upload for cover image
    $imageFileName = basename($_FILES['coverImage']['name']);
    $imageFilePath = IMAGE_DIR . $imageFileName;
    $imageFilePath2 = './images/' . $imageFileName; // Relative path for the main page
    if (!move_uploaded_file($_FILES['coverImage']['tmp_name'], $imageFilePath)) {
        die('Failed to upload image file.');
    }

    // Construct new entry with proper paths for the admin page
    $newEntry = [
        'id' => $newId,
        'file' => $musicFilePath,
        'coverImage' => $imageFilePath,
        'author' => $_POST['author'],
        'title' => $_POST['title'],
        'genre' => $_POST['mufaj-select'],
        'minute' => (int) $_POST['minute'],
        'sec' => (int) $_POST['sec']
    ];

    // Append new entry to existing data for the admin page
    $existingData[] = $newEntry;

    // Construct new entry with relative paths for the main page
    $newEntry2 = [
        'id' => $newId,
        'file' => $musicFilePath2,
        'coverImage' => $imageFilePath2,
        'author' => $_POST['author'],
        'title' => $_POST['title'],
        'genre' => $_POST['mufaj-select'],
        'minute' => (int) $_POST['minute'],
        'sec' => (int) $_POST['sec']
    ];

    // Append new entry to existing data for the main page
    $existingData2[] = $newEntry2;

    // Write the updated data back to both JSON files
    file_put_contents($jsonFilePath, json_encode($existingData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    file_put_contents($jsonFilePath2, json_encode($existingData2, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
}

// Redirect back to the admin page
header("Location: ./admin.php");
exit; // Always call exit after a redirect header
?>
