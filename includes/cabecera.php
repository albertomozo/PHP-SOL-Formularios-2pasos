<header>
        <div>
            <h1>Formulario 2 pasos</h1>
            <a href="session_cerrar.php">CERRAR</a>
        </div>
        
        <ul class="pasos">
            <!-- distintas formas de aplicar la clase active -->
            <li <?PHP if($pagina=='index.php') {echo "class='active'";} else { echo "class=''";}?>>Paso 1</li>
            <li <?php echo ($pagina == 'paso2.php') ? "class='active'" : "class=''"; ?>>Paso 2</li>
            <!-- esta forma permite usar mas clases, es la mejor -->
            <li class="otrasclases <?php echo ($pagina == 'paso3.php') ? 'active' : ""; ?>" >Paso 3</li>
        </ul>
</header>