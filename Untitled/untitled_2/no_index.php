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
    <form action="./config.php" method="post" class="formBox">
        <!-- Id:<br>
        <input type="id" placeholder="ingesar el id"> -->
        <br>Nombre:<br>
        <input type="nombre" placeholder="ingresar el nombre">
        <br>Sexo:<br>
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other
        <br> Estado Civil:<br>
        <input type="estado_civil" placeholder="ingresar el estado civil">
        <br>Limite de credito:<br>
        <input type="limite_de_credito" placeholder="ingesar el limite de credito">
        <br>Fechas de Registro:<br>
        <input type="Fecha_de_registro" placeholder="ingresar la Fechha de registro">
        <br>
        <br>
        <input type="button" value="submit">
        <br>
    </form>

</body>

</html>