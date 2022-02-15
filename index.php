<?php
//ob_start();
//  session_start();
?>

<?php
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
?>

<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CroquetasTeam</title>
   <link href="css/style.css" rel="stylesheet">
  <script src="js\login.js"></script>
</head>


<?php
   //include 'inc/db.php';
   include_once 'inc/db.php';

   /*  //borrar si esto pinta todo ok
                     $array = null;
                     $sql = oci_parse($conn, 'SELECT * FROM empleados');
                     oci_execute($sql);
                     while ($row = oci_fetch_array($sql)) {
                        $array[] = $row;
                  }
                  
                  //https://www.php.net/manual/es/ref.oci8.php
                  var_dump($array);
               */
   //  LOGIN EJEMPLO https://phpocitutorial.wordpress.com/log-in-page/          
   $msg = '';

   if (
      isset($_POST['login']) && !empty($_POST['username'])
      && !empty($_POST['password'])
   ) {

      if (
         $_POST['username'] == '' &&
         $_POST['password'] == '1234'
      ) {
         $_SESSION['valid'] = true;
         $_SESSION['timeout'] = time();
         $_SESSION['username'] = 'jorge';

         echo 'You have entered valid use name and password';
      } else {
         $msg = 'Wrong username or password';
      }
   }
?>
<body>

<div class="wrapper">
      <img class="logo animated  zoomIn" data-wow-delay="200ms" src="\img\logo.png" width="250px">
      <form class="login animated  flipInX"  role = "form" action = "login.php" method = "post">
         <p class="titular">LOGIN</p>
         <input type="text" placeholder="Usuario" autofocus />
         <i class="fa fa-user"></i>
         <input type="password" placeholder="Password" />
         <i class="fa fa-key"></i>
         <button type = "submit">
            <i class="spinner"></i>
            <span class="state">Enviar</span>
         </button>
      </form>
      <p>Borrar formulario <a href="logout.php" tite="Logout">Session.</p>
</div>

   <!-- LO DE AKETZA        <div class = "container">

            <form class = "form-signin" role = "form"
               action = "<?php// echo htmlspecialchars($_SERVER['PHP_SELF']);
                           ?>" method = "post">
               <h4 class = "form-signin-heading"><?php //echo $msg; ?></h4>
               <input type = "text" class = "form-control"
                  name = "username" placeholder = "username = jorge"
                  required autofocus></br>
               <input type = "password" class = "form-control"
                  name = "password" placeholder = "password = 1234" required>
               <button class = "btn btn-lg btn-primary btn-block" type = "submit"
                  name = "login">Login</button>
            </form>

            Borrar formulario <a href = "logout.php" tite = "Logout">Session.

         </div>-->
</body>

</html>