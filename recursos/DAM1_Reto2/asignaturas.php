<?php
  session_start();
  if(!isset($_SESSION['user'])) {
    header('location: index.php');
  }

  $page = 'four';
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Asignaturas | Centro de Estudios Almi</title>
     <link rel="icon" type="image/png" href="images/logoalmi.png">
     <link rel="stylesheet" href="css/general.css">
     <link rel="stylesheet" href="css/asignaturas.css">
     <script type="text/javascript" src="js/asignaturas.js"></script>
   </head>
   <body onload="asignaturas()">
     <?php
      include 'include/menu.php';
      ?>

      <?php
      include 'include/funciones.php';
        if($_SESSION['profesor'] == 1) {
        $asignaturas = getAsignaturasProfesor($_SESSION['usuID']);
        $size = sizeof($asignaturas);
        echo '<ul id="menuasignaturas">';
        for ($i=0; $i < $size; $i++) {
          /*if (!$asignaturas.is_null()) {
            prueba
          }*/
          echo '
          <li class="asignaturas">
            <a href="asignaturas.php?seccion='.$i.'">'.$asignaturas[$i]['NOMBRE'].'</a>
          </li>';
        }

        $num=$_GET['seccion'];
        $notas = getNotasAsignatura($asignaturas[$num]['NOMBRE']);
        $size = sizeof($notas);
        echo '</ul>
        <div id="cajaasignaturasmax">
        <div id="cajaasignaturas">';
          echo '
          <div class="seccionasignatura" id="seccion'.$num.'">
          <table>
          <tr>
              <th>NOMBRE</th>
              <th>1ºEv</th>
              <th>2ºEv</th>
              <th>3ºEv</th>
              <th>final</th>
          </tr>
          ';
          for ($i=0; $i < $size; $i++) {
            echo '
            <tr>
              <td>'.$notas[$i]['NOMBRE'].'</td>';
            for ($j=1; $j < 5; $j++) {
              echo '
              <td>'.$notas[$i][$j].'</td>';
            }
            echo '</tr>';
          }
          echo '
          </table>
          </div>';
        echo '</div>';
      echo '</div>';

      }else if ($_SESSION['alumno'] == 1) {
        $asignaturas = getAsignaturasAlumno($_SESSION['usuID']);
        $size = sizeof($asignaturas);
        echo '
        <div id="cajaasignaturasAlumno">
        <table>
        <tr>
            <th>Asignatura</th>
            <th>1ºEvaluacion</th>
            <th>2ºEvaluacion</th>
            <th>3ºEvaluacion</th>
            <th>final</th>
        </tr>
        ';
        for ($i=0; $i < $size; $i++) {
          echo '<tr>
            <td>'.$asignaturas[$i]['NOMBRE'].'</td>';
          $alumno = getNotasAlumno($asignaturas[$i]['NOMBRE'], $_SESSION['user']);
          }
          $size = sizeof($alumno);
          for ($i=0; $i < $size; $i++) {
            for ($j=1; $j < 5; $j++) {
              echo '
                <td>'.$alumno[$i][$j].'</td>';
              }
          }
        echo '
        </tr>
        </table>
        </div>
        ';
      }
       ?>

      <?php
        include 'include/footer.php';
      ?>
   </body>
 </html>
