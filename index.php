<?php
   //ob_start();
 //  session_start();
?>

<?php
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>CroquetasTeam</title>
      <link href = "css/style.css" rel = "stylesheet">
   </head>
   <body>

         <h2>Introduzca usuario y contraseña</h2>
         <div class = "container form-signin">

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
               $msg = '';

               if (isset($_POST['login'



               ]) && !empty($_POST['username'])
                  && !empty($_POST['password'])) {

                  if ($_POST['username'] == '' &&
                     $_POST['password'] == '1234') {
                     $_SESSION['valid'] = true;
                     $_SESSION['timeout'] = time();
                     $_SESSION['username'] = 'jorge';

                     echo 'You have entered valid use name and password';
                  }else {
                     $msg = 'Wrong username or password';
                  }
               }
            ?>
            
         </div> <!-- /container -->

         <div class = "container">

            <form class = "form-signin" role = "form"
               action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
               ?>" method = "post">
               <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
               <input type = "text" class = "form-control"
                  name = "username" placeholder = "username = jorge"
                  required autofocus></br>
               <input type = "password" class = "form-control"
                  name = "password" placeholder = "password = 1234" required>
               <button class = "btn btn-lg btn-primary btn-block" type = "submit"
                  name = "login">Login</button>
            </form>

            Borrar formulario <a href = "logout.php" tite = "Logout">Session.

         </div>
      </body>
   </html>
