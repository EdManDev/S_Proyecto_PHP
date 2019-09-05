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
$nameErr =$estado_civilErr= $estado_civil = $limite_de_creditoErr= $limite_de_credito = $emailErr = $genderErr = "";
$name = $email = $gender  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
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

//   E Mail
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
// Sex
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">(*) required field</span></p>
<form method="post" class="formBox" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name:
  <br>
   <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br>
  Estado Civil:
  <br>
  <input type="text" name="estado_civil" value="<?php echo $estado_civil;?>">
  <span class="error">* <?php echo $estado_civilErr;?></span>
  <br>
  limite_de_credito: 
  <br>
  <input type="text" name="limite_de_credito" value="<?php echo $limite_de_credito;?>">
  <span class="error">* <?php echo $limite_de_creditoErr;?></span>
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

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $estado_civil;
echo "<br>";
echo $limite_de_credito;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
?>

</body>
</html>