<?php
  // //retreive Data from from 
  if (!empty($_POST['submit'])) {
    if (empty($_POST['nombre']) || empty($_POST['gender']) || empty($_POST['email']) || empty($_POST['estado_civil']) ||  empty($_POST['limite_de_credito']) || empty($_POST['fecha_de_registro'])) {
      exit("Porfavor llenar todos los espacios");
    }
    
    // // Insert data from the form
    $sql = "INSERT INTO `cliente` SET  `nombre`='{$_POST['nombre']}', `gender`='{$_POST['gender']}', `email`='{$_POST['email']}', `estado_civil`='{$_POST['estado_civil']}', `limite_de_credito`='{$_POST['limite_de_credito']}', `fecha_de_registro`='{$_POST['fecha_de_registro']}' ";

    require_once("/config.php");
    $result=$db->query($sql);
    if ($result===true) {
      echo"new row added</br>";
    } else {
      echo"error.</br>";
    }
  }
?>


<title>New Form</title>
<form action="" method="POST">
  nombre:<input type="nombre" type="text" value=""/><br/>
  gender:<input type="gender" type="text" value=""/><br/>
  email:<input type="email" type="text" value=""/><br/>
  estado_civil:<input type="estado_civil" type="text" value=""/><br/>
  limite_de_credito:<input type="limite_de_credito" type="text" value=""/><br/>
  fecha_de_registro:<input type="fecha_de_registro" type="text" value=""/><br/>
  <input type="submit" type="submit" value="submit"/><br/>
</form>




<?php 
// require_once("config.php");
// if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
// {
//  require_once("contact_mail.php
// $yourName = $conn->real_escape_string($_POST['your_name']);
// $yourEmail = $conn->real_escape_string($_POST['your_email']);
// $yourPhone = $conn->real_escape_string($_POST['your_phone']);
// $comments = $conn->real_escape_string($_POST['comments']);
// $sql="INSERT INTO contact_form_info (name, email, phone, comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";
// if(!$result = $conn->query($sql)){
// die('There was an error running the query [' . $conn->error . ']');
// }
// else
// {
// echo "Thank you! We will contact you soon";
// }
// }
// else
// {
// echo "Please fill Name and Email";
// }
?>