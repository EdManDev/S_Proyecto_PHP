<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "s_proyecto";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($mysqli === false){
  die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>
