<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "s_proyecto";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($mysqli === false){
  die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>
<?php
// $servername = "localhost";
// $dbname = "s_proyecto";
// $username = "cliente";
// $password = "root";

// // Create connection
// $conn = new mysqli($estado_civil , $limite_de_credito , $fecha_de_registro ,
// $name , $email , $gender);
// // $conn = new mysqli($id, $nombre, $gender, $estado_civil, $limite_de_credito,  $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>