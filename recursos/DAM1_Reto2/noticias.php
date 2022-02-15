<?php
  session_start();
  $page = 'two';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
    <title>Noticias | Centro de Estudios Almi</title>
    <link rel="icon" type="image/png" href="images/logoalmi.png">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/noticias.css">
  </head>
  <body>
    <?php
      include 'include/menu.php';
    ?>

    <?php
      if ($_SESSION['profesor'] == 1) {
        echo "
        <div id='fondoboton'></div>
        <h1 id='insertarnoticia'><a href='insertarnoticia.php'>Insertar nueva noticia</a></h1>";
      }
     ?>

      <h2 id="ultimasnoticias">Últimas noticias</h2>
     <section id="noticias">

       <?php
          include 'include/funciones.php';
          $noticias = getNoticias();
          $size = sizeof($noticias);
          for($i =0;$i < $size;$i++){
            $texto = substr($noticias[$i]['TEXTO'], 0, 600);
            echo "
            <article class='noticia'>
               <img src='".$noticias[$i]['FOTO']."' alt='".$noticias[$i]['TITULO']."'>
                 <h3><a href='vernoticia.php?idNoticia=".$noticias[$i]["ID_NOTICIA"]."'>".$noticias[$i]['TITULO']."</a></h3><br>
                 <p>".$texto."...</p>
            </article>
            ";
          }
        ?>

     </section>

     <button onclick="topFunction()" id="btnup" title="Ir arriba"><img class="imgbtn" src="images/arriba.png"></button>

    <?php
      include 'include/footer.php';
    ?>

  </body>
  <script type="text/javascript" src="js/irarriba.js"></script>
</html>
