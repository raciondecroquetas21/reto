<link rel="stylesheet" href="css\nav.css">

<?php session_start() ?>

  <header class="site-header">
    <img  class="logo_header" src="img\logo.png" alt="musicalmi">
   
    <nav class="site-nav">
      <ul>
        <?php
          if (!isset($_SESSION['usu'])) {
            echo '<li class="active"><a href="index.php">Login</a></li>';
          }
        ?>
        <?php
          if (isset($_SESSION['usu'])) {
            if ($_SESSION['admin']) {
              echo '
              <li><a href="home_admin.php">Home</a></li>';
            } else {
          echo  '<li><a href="home_normal.php">Home</a></li>';
            }
          }
        ?>
        <li><a href="feed_interno.php">Noticias</a></li>
        <li><a href="feed_web.php">Feed externo</a></li>
        <?php
          if (!isset($_SESSION['usu'])) {
            echo '
            <li><a href="registro.php">Registro</a></li>';
          }
        ?>
      </ul>
    </nav>
    <?php
    if (isset($_SESSION['usu'])){
    echo '
    <div class="account-actions">
      <div class="account-dropdown">
          ' . $_SESSION['usu'] . '
      </div>
      <a href="inc/logout.php" class="sign-out-link">⚙ Sign Out</a>
    </div>
    ';}
    ?>
  </header>
  
  