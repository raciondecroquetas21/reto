<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header("location: login.php");
  }
  $page = 'two';
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/general.css">
     <link rel="stylesheet" href="css/login.css">
     <!--<link rel="stylesheet" href="css/vernoticia.css">-->
     <title>Modificar Noticia | Centro de Estudios Almi</title>
     <link rel="icon" type="image/png" href="images/logoalmi.png">
   </head>
   <body>
     <?php
        include 'include/menu.php';
      ?>

      <div id="salchicha">

        <div id="left">
          <img id="fotologin" src="images/ModificarNoticias.jpg" alt="">
        </div>

        <div id="right">

        <?php
            include_once 'include/funciones.php';
            $idNoticia = $_POST['idNoticia'];
            $noticias = getnoticiasId($idNoticia);
        ?>
        <?php
          echo "<form id='login' action='update.php' method='post'>
            <input name='idNoticia' type='hidden' value='".$idNoticia."'/>
            <label for='titulo'>Titulo</label>
            <input class='titulo' type='text' id='titulo' name='titulo' value='".$noticias[0]['TITULO']."'/><br>

            <label for='texto'>Texto</label><br>
            <textarea name='texto' class='textarea'>".$noticias[0]['TEXTO']."</textarea><br>
            ";
         ?>
         <button class="env" type="submit" name="enviar" value="enviar">Modificar</button>
      </form>
    </div>
  </div>

   </body>
 </html>
