<?php
session_start();
include('../database.php'); // Ensure correct path

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = intval($_POST['id']); // Convert to integer for safety
        $song = mysqli_real_escape_string($conn, $_POST['song']);
        $artist = mysqli_real_escape_string($conn, $_POST['artist']);
        $genre = mysqli_real_escape_string($conn, $_POST['genre']);
        $date_published = mysqli_real_escape_string($conn, $_POST['date_published']);

        $sql = "UPDATE music SET Song = ?, Artist = ?, Genre = ?, Date_Published = ? WHERE ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $song, $artist, $genre, $date_published, $id);

        if ($stmt->execute()) {
            $_SESSION['status'] = "UPDATED";
        } else {
            $_SESSION['status'] = "error";
        }

        $stmt->close();
        $conn->close();
    } else {
        $_SESSION['status'] = "error";
    }

    header("Location: ../index.php");
    exit();
}
?>
