<?php
  require_once("./connection.php");
  
  $nombre=$__post["nombre"];
  $apellido=$__post["apellido"];

  $insert=mysql_query("INSERT INTO persona (nombre, apellido) VALUES ('$nombre', '$apellido')".$connection)
?>
✅ Guardardo 