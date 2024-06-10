<?php include ("includes/session.php"); ?>
<?php include ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>

    <?php include("includes/head.php")  ;?> 
    <title><?php echo $headTitle . '(2/3)';?></title>
</head>
<body>
    <!-- header -->
    <?php include ("includes/cabecera.php"); ?>
    <!-- contenido pagina -->
    <h1>Paso 2</h1>
    <?php
        if ($_POST){  // VENIMOS por post DE INDEX.PHP
            // inicilizacion var formulario 2
            $direccion = $localidad = ''; 
            $error = false;
            // creacion de las variables de session de los post de  formulario 1 (index.php)
            $nombre = $apellidos='';
            if (isset($_POST['nombre'])) {$_SESSION['nombre'] = $_POST['nombre'];}$nombre = $_POST['nombre']; 
            if (isset($_POST['apellidos'])) {$_SESSION['apellidos'] = $_POST['apellidos'];$apellidos = $_POST['apellidos'];}

            if (empty($nombre) || empty($apellidos )) { header("Location:index.php");}
        } else {
            // venimos de paso3
            $localidad = $poblacion = ''; $error = false;
            if (isset($_SESSION['direccion'])) {$direccion=$_SESSION['direccion'];$error = true;}
            if (isset($_SESSION['localidad'])) {$localidad=$_SESSION['localidad'];$error = true;}
            if (isset($_SESSION['nombre'])) {$nombre=$_SESSION['nombre'];}
            if (isset($_SESSION['apellidos'])) {$apellidos=$_SESSION['apellidos'];}
            if ($error) { echo '<p>Revisa el formulario, tienes al menos un error</p>'; }       
       
        }
        
        
        
    
    ?>
    <form method="post" action="paso3.php">
        dirección :  <input name="direccion" id="direccion" type="text" value="<?php echo $direccion ?>"><br>
        localidad  :  <input name="localidad" id="localidad" type="text" value="<?php echo $localidad ?>"><br>
        <input type="hidden" name="nombre" value="<?php echo $nombre;?>">
        <input type="hidden" name="apellidos" value="<?php echo $apellidos;?>">
                <input type="submit" name="submit" value="ir a paso 3">
    </form>


    <!-- footer -->
   <?php include ("includes/pie.php"); ?>
</body>
</html>