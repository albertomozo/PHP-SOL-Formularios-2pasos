<?php include ("includes/session.php"); ?>
<?php include ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>

    <?php include("includes/head.php")  ;?> 
    <title> - Paso 1</title>
</head>
<body>
    <!-- header -->
    <?php include ("includes/cabecera.php"); ?>
    <!-- contenido pagina -->
    <h1>Paso 2</h1>
    <?php
        // inicilizacion var formulario 2
        $direccion = $localidad = ''; 
        // recogida variables formulario 1 (index.php)
        if (isset($_POST['nombre'])) {$nombre = $_POST['nombre'];} else {$nombre ='';}
        if (isset($_POST['apellido'])) {$apellido = $_POST['apellido'];} else {$apellido ='';}
    ?>
    <form method="post" action="paso3.php">
        dirección :  <input name="direccion" id="direccion" type="text" value="<?php echo $direccion ?>"><br>
        localidad  :  <input name="localidad" id="localidad" type="text" value="<?php echo $localidad ?>"><br>
        <input type="hidden" name="nombre" value="<?php echo $nombre;?>">
        <input type="hidden" name="apellido" value="<?php echo $apellido;?>">
                <input type="submit" name="submit" value="ir a paso 3">
    </form>


    <!-- footer -->
   <?php include ("includes/pie.php"); ?>
</body>
</html>