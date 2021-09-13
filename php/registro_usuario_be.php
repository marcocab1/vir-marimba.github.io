<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // ENCRIPTAR CONTRASENA
    $contrasena  = md5($_POST['contrasena']);


    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena) 
                         VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";



  //VERIFICAR QUE EL CORREO NO SE REPITA EN LA BASE DE DATOS

  $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

  if(mysqli_num_rows($verificar_correo) > 0) {
      echo '
          <script>
              alert("Correo ya existe");
              window.location = "../index.php";
          </script>
      ';
      exit();
  }

  //VERIFICAR QUE EL USUARIO NO SE REPITA EN LA BASE DE DATOS

  $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

  if(mysqli_num_rows($verificar_usuario) > 0) {
      echo '
          <script>
              alert("Usuario ya existe");
              window.location = "../index.php";
          </script>
      ';
      exit();
  }


   // SE GUARDA CON EXITO EL REGISTRO DE LOS USUARIOS EN LA BASE DE DATOS
    $ejecutar = mysqli_query($conexion, $query);
    
    if($ejecutar){
        echo ' 
        <script>
            alert("Usuario registrado con exito");
            window.location = "../index.php";
        </script>
        ';
           
    } else{
        echo ' 
        <script>
            alert("Error, Usuario NO registrado");
            window.location = "../index.php";
        </script>
        ';
    }
    

    mysqli_close($conexion);

?>