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
    <link rel="stylesheet" href="css/valorar.css">
    <title>Almi | Valorar</title>
  </head>

  <body>
    <span id="btnup" title="Ir arriba"><img src="images/arrowup.png" alt=""></span>
    <?php $page = 63;
    include "inc/header.php";
    include_once "inc/funciones.php";
    $valoraciones = getValoraciones($_SESSION["dni"]);
    /*var_dump($valoraciones);
    die();*/
    ?>
    <h1>Danos tu opinion sobre el curso </h1>
    <div class="bar"></div>
    <div class="wrap">
      <?php
      if (isset($_GET["err"])) {
        if (isset($_GET["err"]) == "nocur") {
          echo '<p class="error"><strong>Error</strong>El alumno no pertenece al curso al que intenta reseñar</p>';
        }
      }
      if ($valoraciones[0] == null) {
        echo "<p class='nohay' >No hay valoraciones</p>";
      } else {
        $size = sizeof($valoraciones);

        for ($i = 0; $i < $size; $i++) {
          echo '
            <div class="contenedor">
              <p class="msg">' . $valoraciones[$i]["VALORACION"] . '</p>
              <div>
              <div class="fecha"><span>' . $valoraciones[$i]["FECHA_PUBLICACION"] . '</span></div>
                <button class="borrar"><a class="del" onclick="confirmarborrar(' . $valoraciones[$i]["ID_VALORACION"] . ');"href="#">Borrar</a></button>
              </div>
            </div>
          ';
        }
      }
      ?>
      <div class="forms">
        <form class="form" action="inc/valorar.php" method="POST">
          <span class="coment">Comentario: </span>
          <textarea name="msg" id="" cols="30" rows="10"></textarea>
          <select name="curso">
            <option value=1>DAM01</option>
            <option value=2>DAM02</option>
            <option value=3>ASIR01</option>
            <option value=4>ASIR02</option>
            <option value=5>AF01</option>
            <option value=6>AF02</option>
          </select>
          <div class="btn">
            <input type="submit" name="valorar" id="submit" class="btn" value="Valorar">
            <input type="reset" name="borrar" class="borrar" value="Limpiar">
          </div>
        </form>
      </div>
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