<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>AppsMatu Almi | Home</title>
</head>

<body>
  <div class="container">
  <?php $page = 6;
  include "inc/header.php"; ?>
    <span id="btnup" title="Ir arriba"><img src="images/arrowup.png" alt=""></span>
    <div id="login">
      <div class="left"></div>
      <div class="right">
        <div class="wrap">
        <div>
          <a href="login.php">
            <img src="images/logo.png">
          </a>
        </div>
        <form  class="loginform" action="inc/login.php" method="post">
          <p class="username">
            <span class="dni">DNI</span>
            <i class="fas fa-user"></i>
            <input type="text" name="dni" class="input" placeholder="Escribe tu DNI">
          </p>
          <p class="password">
            <span class="pass">Contraseña</span>
            <i class="fas fa-lock"></i>
            <input type="password" name="pass" class="input" placeholder="Escribe tu contraseña">
          </p>
          <p class="submit">
            <input type="submit" name="acceder" class="btn" value="Acceder">
          </p>
        </form>
        </div>
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