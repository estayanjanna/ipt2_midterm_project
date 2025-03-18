<?php
session_start();
include('database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['ID']; // Get the ID from the POST data
    $song = $_POST['Song'];
    $artist = $_POST['Artist'];
    $genre = $_POST['Genre'];
    $album = $_POST['Album'];

    $sql = "UPDATE music SET Song='$song', Artist='$artist', Genre='$genre', Album='$album' WHERE ID='$id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "updated";
    } else {
        $_SESSION['status'] = "error";
    }

    mysqli_close($conn);
    header("Location: ../index.php");
    exit();
}
?>