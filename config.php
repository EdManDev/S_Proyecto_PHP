<?php
$servername = "localhost";
$dbname = "s_proyecto";
$username = "cliente";
$password = "root";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($mysqli === false){
  die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>