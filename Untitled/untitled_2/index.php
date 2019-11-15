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
    <div class="layout">
    <div class="service-info">
      <div class="card card-1">
        <form action="./insert_it.php" method="POST"  class="formBox" >
          Id:
          <br>
          <input name="id">
          <br>
          Name:
          <br>
          <input type="text" name="nombre">
          <br>
          Estado Civil:
          <br>
          <input type="text" name="estado_civil">
          <br>
          Limite de Credito: 
          <br>
          <input type="text" name="limite_de_credito">
          <br>
          Fecha de registro: 
          <br>
          <input type="date" name="fecha_de_registro">
          <br>
          E-mail:
          <br>
          <input type="text" name="email">
          <br>
          Sexo:
          <br>
          <input type="radio" name="sexo" <?php if (isset($sexo) && $sexo=="male") echo "checked";?> value="male">Male
          <input type="radio" name="sexo" <?php if (isset($sexo) && $sexo=="female") echo "checked";?> value="female">Female
          <input type="radio" name="sexo" <?php if (isset($sexo) && $sexo=="other") echo "checked";?> value="other">Otros  
          <br><br>
          <input type="submit" name="submit" value="Submit">  
        </form>
      </div>
</body>
</html>