<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
echo '
<header>
  <div class="logo">
    <a href="index.php"><img class="puff-in-center" src="images/logoAM.png" alt=""></a>
  </div>
  <nav>
    <ul>
      <li><a ' . ($page=='1' ? ' class="activa"' : '' ) . ' href="index.php">Inicio</a></li>
      <li><a ' . ($page=='2' ? ' class="activa"' : '' ) . ' href="cursos.php">Cursos</a></li>
      <li><a ' . ($page=='3' ? ' class="activa"' : '' ) . ' href="instalaciones.php">Aulas</a></li>
      <li><a ' . ($page=='4' ? ' class="activa"' : '' ) . ' href="centro.php">Centro</a></li>
      <li><a ' . ($page=='5' ? ' class="activa"' : '' ) . ' href="contact.php">Contacto</a></li>';
      if (!isset($_SESSION['usu'])) {
          echo '<li><a '.($page == '6' ? ' class="activa"' : ''). ' href="login.php">Acceder</a></li>';
        } else {
          echo '
          <li><a class="' . ($page == '6' || $page == '61' ? ' activa' : '') . '" href="#">'.$_SESSION['usu']. '</a><i class="fas fa-sort-down"></i>
          <ul class="dropdown">
            <li><a ' . ($page == '61' ? ' class="activa"' : '') . 'href="perfil.php">Perfil</a></li>
            <li><a ' . ($page == '62' ? ' class="activa"' : '') . 'href="cambiar.php">Cambiar Contraseña</a></li>
            <li><a ' . ($page == '63' ? ' class="activa"' : '') . 'href="valorar.php">Valorar Curso</a></li>
            <li><a href="inc/logout.php">Cerrar Sesion</a></li>
          </ul>';
        }
        ?>
    </ul>
  </nav>
</header>