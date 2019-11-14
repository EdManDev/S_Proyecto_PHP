<?php
  $servername = "localhost";
  $dbname = "utesa_paginaweb1";
  $username = "cliente";
  $password = "root";

  // $connection=mysql_connect("localhost", "", "root", "utesa_paginaweb1");

  $connection=mysql_connect($servername, $username, $password, $dbname);

  $db=mysql_select_db("utesa_paginaweb1");
?>