<?php
  session_start();
  $page = 'two';
  if(!isset($_SESSION['user'])){
    header("location: index.php");
  }
  if(!$_SESSION['profesor']) {
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insertar Noticia | Centro de Estudios Almi</title>
    <link rel="icon" type="image/png" href="images/logoalmi.png">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <?php
      include 'include/menu.php';
    ?>

    <div id="salchicha">

      <div id="left">
        <img id="fotologin" src="images/InsertarNoticias.jpg" alt="">
      </div>

      <div id="right">

        <form id="login" action="procesarnoticia.php" method="post" enctype="multipart/form-data">
          <label for="titulo">Titulo</label>
          <input type="text" name="titulo"/><br />
          <label for="texto">Texto : </label> <br/>
  		    <textarea class="textarea" name="texto"></textarea> <br/>
          <input type='file' id='files' class='inputfile' name="imagennoticia"> <br/>
          <label for='files' id='eligeimg'>Elige una imagen</label>

          <button class="env" type="submit" name="enviar" value="enviar">Publicar</button>
        </form>

      </div>

    </div>

  <!--  <form id="insertarnot" action="procesarnoticia.php" method="post" enctype="multipart/form-data">
		    <label for="titulo">Titulo : </label> <br/>
		    <input class="input" type="text" name="titulo"> <br/>
		    <label for="texto">Texto : </label> <br/>
		    <textarea class="textarea" name="texto"></textarea> <br/>
		    <label for="imagenNoticia">Foto : </label>
		    <input type='file' class='inputs' name="imagennoticia"> <br/>
		    <input class="botones" type="submit">
		</form>-->

  </body>
</html>
