<link rel="stylesheet" href="css\nav.css">


  <header class="site-header">
    <img  class="logo_header" src="img\logo.png" alt="musicalmi">
   
    <nav class="site-nav">
      <ul>
        <li class="active"><a href="index.php">Login</a></li>
        <li><a href="feed_interno.php">Noticias</a></li>
        <li><a href="feed_web.php">Feed externo</a></li>
        <li><a href="registro.php">Registro</a></li>
      </ul>
    </nav>
    <div class="account-actions">
      <div class="account-dropdown">
        <?php
        session_start();
          echo '<p>' . $_SESSION['usu'] .'</p>';
        ?>
      </div>
      <a href="index.php" class="sign-out-link">⚙ Sign Out</a>
    </div>
  </header>
  
  