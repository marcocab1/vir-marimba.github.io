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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Virtual Marimba</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylemenu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="assets/js/script3.js" defer></script>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Virtual Marimba</label>
      <ul>
        <li><a class="active" href="#">Inicio</a></li>
        <li><a href="#">Historia</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
              
      </ul>
    </nav>
   
    

    <div class="piano">
      <div data-note="C" class="key white"></div>
      <div data-note="Db" class="key black"></div>
      <div data-note="D" class="key white"></div>
      <div data-note="Eb" class="key black"></div>
      <div data-note="E" class="key white"></div>
      <div data-note="F" class="key white"></div>
      <div data-note="Gb" class="key black"></div>
      <div data-note="G" class="key white"></div>
      <div data-note="Ab" class="key black"></div>
      <div data-note="A" class="key white"></div>
      <div data-note="Bb" class="key black"></div>
      <div data-note="B" class="key white"></div>

      <div data-note="C" class="key white"></div>
      <div data-note="Db" class="key black"></div>
      <div data-note="D" class="key white"></div>
      <div data-note="Eb" class="key black"></div>
      <div data-note="E" class="key white"></div>
      <div data-note="F" class="key white"></div>
      <div data-note="Gb" class="key black"></div>
      <div data-note="G" class="key white"></div>
      <div data-note="Ab" class="key black"></div>
      <div data-note="A" class="key white"></div>
      <div data-note="Bb" class="key black"></div>
      <div data-note="B" class="key white"></div>
    </div>


    <audio id="C" src="assets/notes/C.mp3"></audio>
    <audio id="Db" src="assets/notes/Db.mp3"></audio>
    <audio id="D" src="assets/notes/D.mp3"></audio>
    <audio id="Eb" src="assets/notes/Eb.mp3"></audio>
    <audio id="E" src="assets/notes/E.mp3"></audio>
    <audio id="F" src="assets/notes/F.mp3"></audio>
    <audio id="Gb" src="assets/notes/Gb.mp3"></audio>
    <audio id="G" src="assets/notes/G.mp3"></audio>
    <audio id="Ab" src="assets/notes/Ab.mp3"></audio>
    <audio id="A" src="assets/notes/A.mp3"></audio>
    <audio id="Bb" src="assets/notes/Bb.mp3"></audio>
    <audio id="B" src="assets/notes/B.mp3"></audio>
         

    
  </body>
</html>
