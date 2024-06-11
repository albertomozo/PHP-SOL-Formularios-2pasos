# FORMULARIO EN 2 PASOS

  

Solución a una petición de datos en 3 pasos, 2 formularios y una confirmación

  

## ficheros

   - 📁 css
	 -  estilo.css 
 - 📂 includes    
	 -  cabecera.php
	 -  config.php
	 -  head.php
	 -  pie.php 	
	 -  session.php 
 - caducada.php 
 - index.php 
 - modelo.html 
 - modelo.php
 - paso2.php 
 - paso3.php

La sessión o conjunto de paginas enlazadas,  empieza por la página **index.php,** posteriormente  hay que seguir los botones de envio.

### modelo.html 
Es el primer boceto realizado en HTML
### modelo.php
Una copia de **modelo.html,** pero separando las partes comunes en ficheros aparte que van a ser incluidos en los  ficheros  *.php que están en la carpeta 📁  includes.
### index.php, paso2.php, paso3.php 
copas de **modelo.php** con sus particularidades. 
### caducada.php 
Página a la que redirigimos cuando se cierra la sessión o intentanis aceder sin pasar por la primera página
## Flujo
![enter image description here](https://github.com/albertomozo/PHP-SOL-Formularios-2pasos/_doc/FORMUsESION.drawio.png)


  
  

## commit

*

86dc6f4 (HEAD -> main, origin/main, origin/HEAD) clase active en navegacion y titulo del head diamico

* f161080 update README.md

* 3ef6dcf update README.md

* aaac9cf creacion de sesion y manejo basico de errores

* a7713d6 creacion de formulario 3 pasos con includes con input hidden