<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./Style.css">
  <title>S Proyecto final</title>
  <header>
      <a href="./index.php" style="text-decoration: none;" >
          <h1>Formulario de Cliente</h1>
      </a>
  </header>
</head>
<body>
  <?php
  // // connect the config
  include_once("./config.php");

  // Escape user inputs for security
  $id = $mysqli->real_escape_string($_REQUEST['id']);
  $nombre = $mysqli->real_escape_string($_REQUEST['nombre']);
  $estado_civil = $mysqli->real_escape_string($_REQUEST['estado_civil']);
  $email = $mysqli->real_escape_string($_REQUEST['email']);
  $limite_de_credito = $mysqli->real_escape_string($_REQUEST['limite_de_credito']);
  $fecha_de_registro = $mysqli->real_escape_string($_REQUEST['fecha_de_registro']);
  $sexo = $mysqli->real_escape_string($_REQUEST['sexo']);

  // Attempt insert query execution
  $sql = "INSERT INTO cliente (id, nombre, estado_civil, email, limite_de_credito, fecha_de_registro, sexo ) VALUES ('$id','$nombre', '$estado_civil', '$email', '$limite_de_credito' ,'$fecha_de_registro','$sexo')";

  if($mysqli->query($sql) === true){
      echo " ✅ Congratulation data has inserted successfully.";

  } else{
      echo "❌ ERROR: Could not able to execute $sql. " . $mysqli->error;
  }

  //Show the data after submit
  $sql = "SELECT id, firstname, lastname FROM cliente";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<br> id: ". $row["id"]. " - nombre: ". $row["estado_civil"]. " " . $row["email"] . "<br>";
      }
  } else {
      echo "0 results";
  }

  ?>
  
</body>
</html>


