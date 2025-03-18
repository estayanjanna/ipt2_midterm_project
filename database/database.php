<?php
$Servername = "localhost";
$Username = "root";
$Password = "";
$Database = "ipt2_midterm_project";

$conn=new mysqli("$Servername","$Username","$Password","$Database");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 echo "connected successfully";

?>