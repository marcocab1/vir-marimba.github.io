<?php

    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena  = md5($_POST['contrasena']);


    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
    and contrasena='$contrasena'");


    if(mysqli_num_rows($validar_login) > 0 ){

    $_SESSION['usuario'] = $correo;

        header("location: ../menu2.php");
        exit;
    }else{
        echo ' 
        <script>
            alert("Error, Usuario no existe");
            window.location = "../index.php";
        </script>
        ';
        exit;
    }


?> 