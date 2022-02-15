<?php
session_start();
if (isset($_SESSION["usu"])) :
?>
  <!DOCTYPE html>
  <html lang="es">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/índice.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/subirF.css">
    <title>APPLMI | subir</title>
  </head>

  <body>
    <div class="contenedor">
      <?php $page = 63;
      require "inc/header.php" ?>
      <div class="container">
        <form action="inc/subir.php" method="POST" enctype="multipart/form-data">
          <label for="img">Imagen:</label>
          <input type="file" name="img" placeholder="Selecciona una imagen" value="">
          <input type="submit" name="subir" value="Subir">
          <input type="reset" name="borrar" value="Borrar">
        </form>
      </div>
      <?php require "inc/footer.php" ?>
  </body>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/script.js"></script>

  </html>
<?php else :
  header("location:index.php");
  exit();
endif;
?>