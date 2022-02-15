<?php
  session_start();
  if(isset($_SESSION['user'])){
    header("location: index.php");
  }
  $page = 'six';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="images/logoalmi.png">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Iniciar Sesion | Centro de Estudios Almi</title>
  </head>
  <body>

    <?php
      include 'include/menu.php';
    ?>

<div id="salchicha">

  <div id="left">
    <img id="fotologin" src="images/registro.jpg" alt="">
  </div>

  <div id="right">

    <form id="login" action="procesarlogin.php" method="post">
      <label for="name">Email</label>
        <input type="text" name="mail"/><br />

      <label for="pass">Contraseña</label>
      <input type="password" name="pass" /><br />

      <button class="env" type="submit" name="enviar" value="enviar">Iniciar Sesion</button>
    </form>

  </div>

</div>



  </body>
</html>
