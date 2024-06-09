<?php include ("includes/session.php"); ?>
<?php include ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>

    <?php include("includes/head.php")  ;?> 
    <title>Formulario</title>
</head>
<body>
    <!-- header -->
    <?php include ("includes/cabecera.php"); ?>
    <!-- contenido pagina -->
    <h1>Confirmacion</h1>
    <?php 
    if (isset($_POST['nombre'])) {$nombre = $_POST['nombre'];} else {$nombre ='';}
    if (isset($_POST['apellido'])) {$apellido = $_POST['apellido'];} else {$apellido ='';}
    if (isset($_POST['direecion'])) {$direccion = $_POST['direccion'];} else {$direccion ='';}
    if (isset($_POST['localidad'])) {$localidad = $_POST['localidad'];} else {$localidad ='';}   
    $mensaje = "Estimad@ $nombre $apellido <br>Le informamos que anotammos la siguiente dirección de envio : <br> $direccion $localidad <br>
    Atentamente ";
    echo "<p>$mensaje</p>";
    ?>
    <!-- footer -->
   <?php include ("includes/pie.php"); ?>
</body>
</html>