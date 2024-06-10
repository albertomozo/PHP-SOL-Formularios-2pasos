<?php session_start();
$_SESSION['navegador'] = $_SERVER['HTTP_USER_AGENT']; ?>
<?php include ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>

    <?php include("includes/head.php")  ;?> 
    <title><?php echo $headTitle . '(1/3)';?></title>
</head>
<body>
    <!-- header -->
    <?php include ("includes/cabecera.php"); ?>
    <!-- contenido pagina -->
    <h1>Paso 1</h1>
    <?php
        // si existe variable de sesion cogemos el valor de la variable de session
        $nombre = $apellidos = ''; $error = false;
        if (isset($_SESSION['nombre'])) {$nombre=$_SESSION['nombre'];$error = true;}
        if (isset($_SESSION['apellidos'])) {$apellidos=$_SESSION['apellidos'];$error = true;}
        if ($error) { echo '<p>Revisa el formulario, tienes al menos un error</p>'; }

        
    ?>
    <form method="post" action="paso2.php">
        Nombre :  <input name="nombre" id="nombre" type="text" value="<?php echo $nombre ?>"><br>
        Apellido  :  <input name="apellidos" id="apellidos" type="text" value="<?php echo $apellidos ?>"><br>
        <input type="submit" name="submit" value="ir a paso 2">
    </form>


    <!-- footer -->
   <?php include ("includes/pie.php"); ?>
</body>
</html>