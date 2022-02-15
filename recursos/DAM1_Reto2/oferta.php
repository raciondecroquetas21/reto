<?php
  session_start();
  $page = 'three';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
    <title>Oferta Educativa | Centro de Estudios Almi</title>
    <link rel="icon" type="image/png" href="images/logoalmi.png">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/oferta.css">
  </head>
  <body>
    <?php
      include 'include/menu.php';
    ?>

    <h2>Formacion Profesional Básica</h2>
      <div class="basica">
          <h3>Módulos de Ciencias Aplicadas</h3>
          <p>Para quien está trabajando o parado y desea seguir formándose. Esta formación es capitalizable y en el futuro se puede obtener el correspondiente título.</p>
          <a href="#">Saber más</a>
      </div>
      <div class="basica">
          <h3>Módulos de FCT</h3>
          <p>La competencia general de este título consiste en realizar tareas administrativas y de gestión básicas con autonomía, responsabilidad e iniciativa personal, operando con calidad.</p>
          <a href="#">Saber más</a>
      </div>

      <hr>

    <h2>Ciclos Formativos de Grado Medio</h2>
      <div class="basica">
          <h3>Sistemas Microinformaticos y Redes</h3>
          <p>La competencia general de este título consiste en realizar tareas administrativas y de gestión básicas con autonomía, responsabilidad e iniciativa personal, operando con calidad.</p>
          <a href="#">Saber más</a>
      </div>
      <div class="basica">
          <h3>Gestión Administrativa</h3>
          <p>Para quien está trabajando o parado y desea seguir formándose. Esta formación es capitalizable y en el futuro se puede obtener el correspondiente título.</p>
          <a href="#">Saber más</a>
      </div>
      <div class="basica">
          <h3>Cuidados Auxiliares de Enfermeria</h3>
          <p>Para quien está trabajando o parado y desea seguir formándose. Esta formación es capitalizable y en el futuro se puede obtener el correspondiente título.</p>
          <a href="#">Saber más</a>
      </div>

      <hr>

    <h2>Ciclos Formativos de Grado Superior</h2>
      <div class="basica">
          <h3>DAM</h3>
          <p>La competencia general de este título consiste en realizar tareas administrativas y de gestión básicas con autonomía, responsabilidad e iniciativa personal, operando con calidad.</p>
          <a href="#">Saber más</a>
      </div>
      <div class="basica">
          <h3>Administración y Finanzas</h3>
          <p>Para quien está trabajando o parado y desea seguir formándose. Esta formación es capitalizable y en el futuro se puede obtener el correspondiente título.</p>
          <a href="#">Saber más</a>
      </div>

      <button onclick="topFunction()" id="btnup" title="Ir arriba"><img class="imgbtn" src="images/arriba.png"></button>

    <?php
      include 'include/footer.php';
    ?>
  </body>
  <script type="text/javascript" src="js/irarriba.js"></script>
</html>
