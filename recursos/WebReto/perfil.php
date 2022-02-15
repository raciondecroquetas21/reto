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
    <link rel="shortcut icon" href="images/índice.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Almi | Perfil</title>
  </head>

  <body>
    <span id="btnup" title="Ir arriba"><img src="images/arrowup.png" alt=""></span>
    <?php $page = 61;
    include "inc/header.php";
    include_once "inc/funciones.php";
    $datos = datosPerfil($_SESSION['dni']);
    $curso = getCurso($_SESSION['dni']);
    /*var_dump($datos);
    die();*/
    $size = "";
    if ($datos[0] == null) {
      echo '<p style="color: black;text-align: center;font-size: 2rem;">No estas en ningun curso</p>';
    } else {
      $size = sizeof($datos);
    }
    ?>
    <div class="perfil">
      <div class="left">
        <div class="profile-picture">
          <span class="edit"><a href="subirfoto.php"><i class="fas fa-edit"></i>Editar Imagen</a></span>
          <?php echo '<img src="' . $datos[0]["FOTO"] . '" alt="Imagen de perfil">'; ?>
        </div>
        <div class="nombre">
          <p><?= $_SESSION["usu"] ?></p>
        </div>
        <div class="cursos">
          <div class="titulo">Modulos</div>
          <div class="item-list">
            <ul>
              <?php
              for ($i = 0; $i < $size; $i++) {
                $test = str_replace(ucwords(strtolower($curso[0]["NOMBRE"])), "", $datos[$i]["ASIGNATURA"]);
                echo '<li>' . $test . '</li>';
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="calif">
          <h1>Calificaciones:</h1>
          <h2><?= $curso[0]["NOMBRE"] ?></h2>
          <button>Valorar Curso</button>
          <table style="width:100%">
            <tr>
              <th>Modulo</th>
              <th>1º Trim</th>
              <th>2º Trim</th>
              <th>3º Trim</th>
              <th>Eval. Final 1</th>
              <th>Eval. Final 2</th>
            </tr>
            <?php
            for ($i = 0; $i < $size; $i++) {
              $test = str_replace(ucwords(strtolower($curso[0]["NOMBRE"])), "", $datos[$i]["ASIGNATURA"]);
              echo '
                  <tr>
                    <td class="prim">' . $test . '</td>
                    <td>' . $datos[$i]["TRIM1"] . '</td>
                    <td>' . $datos[$i]["TRIM2"] . '</td>
                    <td>' . $datos[$i]["TRIM3"] . '</td>
                    <td>' . $datos[$i]["EVFINAL1"] . '</td>
                    <td>' . $datos[$i]["EVFINAL2"] . '</td>
                  </tr>
                ';
            }
            ?>
          </table>
        </div>
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