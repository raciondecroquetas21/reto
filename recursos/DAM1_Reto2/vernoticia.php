<?php
  session_start();
  $page = 'two';
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/general.css">
     <link rel="stylesheet" href="css/vernoticia.css">
     <title>NOTICIAS</title>
   </head>
   <body>
     <?php
        include 'include/menu.php';
      ?>

      <div id="contenedor">
        <?php
        include_once 'include/funciones.php';
        $idNoticia=$_GET['idNoticia'];
        $noticias = getNoticiasId($idNoticia);
        echo "<h1 class='titulo'>".$noticias[0]['TITULO']."</h1>
        <p class='fecha'>Posted on: ".$noticias[0]['FECHA']."</p>
        <img src='".$noticias[0]['FOTO']."' alt='".$noticias[0]['TITULO']."'/>
        <p class='texto'>".$noticias[0]['TEXTO']."</p>";
        if($_SESSION['profesor'] == 1){
          echo "
            <form action='modificarnoticias.php' method='POST'>
              <input class='editar' type='hidden' name='idNoticia' value='$idNoticia'/>
              <input class='editar' type='submit' name='modificarnoticia' value='Modificar Noticia'/>
            </form>
            <form action='borrar.php' method='POST'>
              <input class='editar' type='hidden' name='idNoticia' value='$idNoticia'/>
              <input class='editar' type='submit' name='borrarnoticia' value='Borrar Noticia'/>
            </form>";
        }
        ?>
      </div>

      <?php
         include 'include/footer.php';
       ?>
   </body>
 </html>
