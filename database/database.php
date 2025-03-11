<?php
$Servername = "localhost";
$Username = "root";
$Password = "";
$Database = "music_database";

$conn=new mysqli("$Servername","$Username","$Password","$Database");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 echo "connected successfully";

?>