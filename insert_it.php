<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./Style.css">
  <title>S Proyecto final</title>
  <header>
      <h1>Formulario de Cliente</h1>
  </header>
</head>
<body>
  <?php
  // // connect the config
  include_once("");

  // Escape user inputs for security
  $id = $mysqli->real_escape_string($_REQUEST['id']);
  $nombre = $mysqli->real_escape_string($_REQUEST['nombre']);
  $estado_civil = $mysqli->real_escape_string($_REQUEST['estado_civil']);
  $email = $mysqli->real_escape_string($_REQUEST['email']);
  $limite_de_credito = $mysqli->real_escape_string($_REQUEST['limite_de_credito']);
  $fecha_de_registro = $mysqli->real_escape_string($_REQUEST['fecha_de_registro']);
  $gender = $mysqli->real_escape_string($_REQUEST['gender']);

  // Attempt insert query execution
  $sql = "INSERT INTO cliente (id, nombre, estado_civil, email, limite_de_credito, fecha_de_registro, gender ) VALUES ('$id','$nombre', '$estado_civil', '$email', '$limite_de_credito' ,'$fecha_de_registro','$gender')";

  if($mysqli->query($sql) === true){
      echo "Congratulation data has inserted successfully.";
 
  } else{
      echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
  }

  ?>
  
</body>
</html>


