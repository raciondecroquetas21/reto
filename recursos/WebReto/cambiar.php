<?php
session_start();
if (isset($_SESSION["usu"])) :
?>
  <!doctype html>
  <html lang="es">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pwd.css">
    <title>Almi | Cambiar</title>
  </head>

  <body>
    <span id="btnup" title="Ir arriba"><img src="images/arrowup.png" alt=""></span>
    <?php $page = 62;
    include "inc/header.php";
    include_once "inc/funciones.php";
    ?>
    <div class="textHeader">
      <h1>Cambiar Contraseña</h1>
    </div>
    <div class="forms">
      <form class="form" action="inc/pwd.php" method="POST">
        <span class="pass">Contraseña</span>
        <input type="password" name="pass" id="pass" placeholder="Escribe tu contraseña">
        <span class="pass">Confirmar Contraseña</span>
        <input type="password" name="repass" id="repass" placeholder="Escribe tu contraseña otra vez">
        <input type="submit" name="cambiar"id="submit" class="btn" value="Cambiar">
      </form>
    </div>
    <?php include "inc/footer.php"; ?>
  </body>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/prefixfree.min.js"></script>
  <script src="https://kit.fontawesome.com/655484ca0f.js" crossorigin="anonymous"></script>

  </html>
<?php else :
  header("location:index.php");
  exit();
endif;
?>