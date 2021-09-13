<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo ' 
        <script>
            alert("Inicia sesion");
            window.location = "../index.php";
         </script>
        ';
     
        session_destroy();
        die();
    }
  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mi pagina de prueba</title>
  </head>
  <body>
    <h1></h1>
    <a href="php/cerrar_sesion.php">cerrar_sesion</a>
  </body>
</html> 