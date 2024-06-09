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
    <h1>Paso 1</h1>
    <?php
        $nombre = $apellido = ''; 
    ?>
    <form method="post" action="paso2.php">
        Nombre :  <input name="nombre" id="nombre" type="text" value="<?php echo $nombre ?>"><br>
        Apellido  :  <input name="apellido" id="apellido" type="text" value="<?php echo $apellido ?>"><br>
        <input type="submit" name="submit" value="ir a paso 2">
    </form>


    <!-- footer -->
   <?php include ("includes/pie.php"); ?>
</body>
</html>