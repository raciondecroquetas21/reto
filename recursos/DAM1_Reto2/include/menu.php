<?php
  session_start();

  $clasOne = "";
  $clasTwo = "";
  $clasThree = "";
  $clasFour = "";
  $clasFive = "";
  $clasSix = "";
  if($page == "one") {
    $clasOne = "active";
  } elseif ($page == "two") {
    $clasTwo = "active";
  } elseif ($page == "three") {
    $clasThree = "active";
  } elseif ($page == "four") {
    $clasFour = "active";
  } elseif ($page == "five") {
    $clasFive = "active";
  } elseif ($page == "six") {
    $clasSix = "active";
  }

echo "
<div class='top'></div>
<header>
  <ul id='menu'>
    <li class='".$clasOne."'><a href='index.php'>INICIO</a></li>
    <li class='".$clasTwo."'><a href='noticias.php'>NOTICIAS</a></li>
    <li class='".$clasThree."'><a href='oferta.php'>OFERTA EDUCATIVA</a></li>";
    if(isset($_SESSION['user'])) {
      if ($_SESSION['alumno'] == 1) {
        echo "
        <li class='".$clasFour."'><a href='asignaturas.php'>ASIGNATURAS</a></li>";
      }else if ($_SESSION['profesor'] == 1) {
        echo "
          <li class='".$clasFour."'><a href='asignaturas.php?seccion=0'>ASIGNATURAS</a></li>";
      }
    }
    echo"
    <li class='".$clasFive."'><a href='contacto.php'>CONTACTO</a></li>
  </ul>

  <ul id='usuarios'>";
  if(isset($_SESSION['user'])) {
    echo"
      <li>
        <a href='verperfil.php' class='$clasSix'>".$_SESSION['user']."</a>
      <li>
        <a href='cerrarsesion.php'>cerrar sesion</a>
      </li>";
      } else{
          echo"<li class='sesion ".$clasSix."'><a href='login.php'>INICIAR SESION</a></li>";
      }
      echo"
  </ul>
</header>";
 ?>
