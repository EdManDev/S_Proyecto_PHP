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
<style>
.error {color: #FF0000;}
</style>
<body>  

<?php
// define variables and set to empty values
$nombreErr =$estado_civilErr= $estado_civil = $limite_de_creditoErr= $limite_de_credito = $fecha_de_registro= $fecha_de_registroErr = $emailErr = $genderErr = "";
$nombre = $email = $gender  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"])) {
    $nombreErr = "nombre is required";
  } else {
    $nombre = test_input($_POST["nombre"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
      $nombreErr = "Only letters and white space allowed";
    }
  }

// //   estado_civil 
  if (empty($_POST["estado_civil"])) {
    $estado_civilErr = "Estado Civil is required";
  } else {
    $estado_civil = test_input($_POST["estado_civil"]);
  }

// //   limite_de_credito 
  if (empty($_POST["limite_de_credito"])) {
    $limite_de_creditoErr = "limite_de_credito is required";
  } else {
    $limite_de_credito = test_input($_POST["limite_de_credito"]);
  }

// //   fecha_de_registro 
  if (empty($_POST["limite_de_credito"])) {
    $fecha_de_registroErr = "fecha_de_registro is required";
  } else {
    $fecha_de_registro = test_input($_POST["fecha_de_registro"]);
  }

// //   E Mail
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
// // Sex
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

// // connect the config
// include_once("./config.php");

// Escape user inputs for security
$id = $mysqli->real_escape_string($_REQUEST['id']);
$nombre = $mysqli->real_escape_string($_REQUEST['nombre']);
$last_name = $mysqli->real_escape_string($_REQUEST['estado_civil']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$limite_de_credito = $mysqli->real_escape_string($_REQUEST['limite_de_credito']);
$fecha_de_registro = $mysqli->real_escape_string($_REQUEST['fecha_de_registro']);
$gender = $mysqli->real_escape_string($_REQUEST['gender']);

// // Attempt insert query execution
// $sql = "INSERT INTO cliente (id, nombre, estado_civil, email) VALUES ('$id','$nombre', '$estado_civil', '$email', '$limite_de_credito' ,'$fecha_de_registro','$gender')";

// if($mysqli->query($sql) === true){
//     echo "Records inserted successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
// }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">(*) required field</span></p>

  <div class="layout">
    <div class="service-info">
      <div class="card card-1">
        <form action="./insert.php" method="POST"  class="formBox" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          Name:
          <br>
          <input type="text" name="nombre" value="<?php echo $nombre;?>">
          <span class="error">* <?php echo $nombreErr;?></span>
          <br>
          Estado Civil:
          <br>
          <input type="text" name="estado_civil" value="<?php echo $estado_civil;?>">
          <span class="error">* <?php echo $estado_civilErr;?></span>
          <br>
          Limite de Credito: 
          <br>
          <input type="text" name="limite_de_credito" value="<?php echo $limite_de_credito;?>">
          <span class="error">* <?php echo $limite_de_creditoErr;?></span>
          <br>
          Fecha de registro: 
          <br>
          <input type="text" name="fecha_de_registro" value="<?php echo $fecha_de_registro;?>">
          <span class="error">* <?php echo $fecha_de_registroErr;?></span>
          <br>
          E-mail:
          <br>
          <input type="text" name="email" value="<?php echo $email;?>">
          <span class="error">* <?php echo $emailErr;?></span>
          <br>
          Sexo:
          <br>
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
          <span class="error">* <?php echo $genderErr;?></span>
          <br><br>
          <input type="submit" name="submit" value="Submit">  
        </form>
      </div>

      <div class="card card-2">
        <div class="input">
            <?php
            echo "<h2>Your Input Are:</h2>";
            echo $nombre;
            echo "<br>";
            echo $estado_civil;
            echo "<br>";
            echo $limite_de_credito;
            echo "<br>";
            echo $fecha_de_registro;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $gender;
            ?>
        </div>
      </div>

</body>
</html>