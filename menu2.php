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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Marimba</title>
    <link rel="stylesheet" href="assets/css/menu2.css">



    <meta name="description" content="Bienvenidos">

<meta name="theme-color" content="#F0DB4F">
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="shortcut icon" type="image/png" href="assets/images/vm_16.png">
<link rel="apple-touch-icon" href="assets/images/vm_16.png">
<link rel="apple-touch-startup-image" href="assets/images/vm_16.png">
<link rel="manifest" href="./manifest.json">

<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">







</head>
<body>
    <header>
        <nav>
            <a href="#"><img class="logo" src="assets/images/icon_1024.png" alt="logo"></a>

            <ul class="enlaces-menu">
                <li><a href="/Login-registro/menu2.php">Inicio</a></li>
                <li><a href="/Login-registro/marimba1.html">Práctica</a></li>
                <li><a href="/Login-registro/marimba2.html">Notas Musicales</a></li>
                <li><a href="/Login-registro/Historia.php">Historia</a></li>
                <li><a href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>

            <button class="ham" type="button">   
                <span class="br-1"></span>
                <span class="br-2"></span>
                <span class="br-3"></span>
            </button>                       
        </nav>
    </header>

    <script src="assets/js/scriptmenu.js"></script>
    <script src="./assets/js/script01.js"></script>
</body>
</html>