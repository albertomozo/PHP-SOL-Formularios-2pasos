<?php include ("includes/session.php"); ?>
<?php include ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>

    <?php include("includes/head.php")  ;?> 
    <title><?php echo $headTitle . '(3/3)';?></title>
</head>
<body>
    <!-- header -->
    <?php include ("includes/cabecera.php"); ?>
    <!-- contenido pagina -->
    <h1>Confirmacion</h1>
    <?php 
    if (isset($_POST['nombre'])) {$nombre = $_POST['nombre'];} else {$nombre ='';}
    if (isset($_POST['apellidos'])) {$apellidos = $_POST['apellidos'];} else {$apellidos ='';}
    if (isset($_POST['direccion'])) {$direccion = $_POST['direccion'];} else {$direccion ='';}
    if (isset($_POST['localidad'])) {$localidad = $_POST['localidad'];} else {$localidad ='';} 
    
    if (isset($_POST['direccion'])) {$_SESSION['direccion'] = $_POST['direccion'];}$direccion = $_POST['direccion']; 
    if (isset($_POST['localidad'])) {$_SESSION['localidad'] = $_POST['localidad'];$localidad = $_POST['localidad'];}

    if (empty($localidad) || empty($direccion )) { header("Location:paso2.php");exit;}
    $mensaje = "Estimad@ $nombre $apellidos <br>Le informamos que anotammos la siguiente dirección de envio : <br> $direccion $localidad <br>
    Atentamente ";
    echo "<p>$mensaje</p>";
    ?>
    <!-- footer -->
   <?php include ("includes/pie.php"); ?>
</body>
</html>