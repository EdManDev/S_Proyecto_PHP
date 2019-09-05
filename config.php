<?php
$servername = "localhost";
$dbname = "s_proyecto";
$username = "cliente";
$password = "root";

// Create connection
$conn = new mysqli($id, $nombre, $gender, $estado_civil, $limite_de_credito,  $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>