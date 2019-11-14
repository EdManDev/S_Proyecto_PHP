<?php

// connect the config
include_once("./config.php");

// Attempt insert query execution
$sql = "INSERT INTO cliente (id, nombre, estado_civil, email) VALUES ('$id','$nombre', '$estado_civil', '$email', '$limite_de_credito' ,'$fecha_de_registro','$gender')";

if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}



?>

<?php
    // // // insert multiple data (multi_query) to database
    // require_once("./config.php");

    // $sql = "INSERT INTO `cliente` (id, nombre, gender, email, estado_civil, limite_de_credito, fecha_de_registro)
    //     VALUES ('1', 'marie', 'femal', 'marie@gmail.com', 'no', '90dop', '30');";

    // $sql .= "INSERT INTO `cliente` (id, nombre, gender, email, estado_civil, limite_de_credito, fecha_de_registro)
    // VALUES ('2', 'juan', 'mal', 'juan@gmail.com', 'cansado', '20dop', '23');";


    // if ($conn->multi_query($sql) === TRUE) {
    //   echo "New Data Are created successfully";
    // } else {
    //   echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // $conn->close();
?>