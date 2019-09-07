
<?php
    // // insert multiple data (multi_query) to database
    require_once("./config.php");

    $sql = "CREATE TABLE cliente (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    gender VARCHAR(50),
    email VARCHAR(50),
    estado_civil VARCHAR(30) NOT NULL,
    limite_de_credito VARCHAR(30) NOT NULL,
    fecha_de_registro VARCHAR(50)
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table <b>cliente</b> was created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // INSERT

    $sql = "INSERT INTO `cliente` (id, nombre, gender, email, estado_civil, limite_de_credito, fecha_de_registro)
    VALUES ('1', 'marie', 'femal', 'marie@gmail.com', 'no', '90dop', '30');";

    $sql .= "INSERT INTO `cliente` (id, nombre, gender, email, estado_civil, limite_de_credito, fecha_de_registro)
    VALUES ('2', 'juan', 'mal', 'juan@gmail.com', 'cansado', '20dop', '23');";


    if ($conn->multi_query($sql) === TRUE) {
    echo "New Data Are created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();

?>