<?php
// Aqui recibimos los datos del formulario de index.php
echo "<h1>" .$_GET['nombre']."</h1>"; // $_GET Muestra los datos recogidos en el metodo $_GET, en este caso nombre
echo "<h1>" .$_GET['apellidos']."</h1>";
echo "<h1>" .$_GET['email']."</h1>";


var_dump($_GET); // Nos muestra TODOS los datos que nos van a llegar del metodo $_GET, el array super-global y los datos que se encuentran en el


