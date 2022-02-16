<?php
include "db.php";
include_once "funciones.php";
session_start();
if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 1800)) {
    session_unset(); 
    session_destroy(); 
    echo "session destroyed"; 
}
$_SESSION['start'] = time();




// referencia borrar al terminar
if (isset($_POST["acceder"])) {
  include "db.php";
  include_once "funciones.php";
  $user=$_POST['usu'];
  $pass=$_POST['pwd'];
  $login = check_user('SELECT contraseña_cliente  FROM clientes WHERE nombre_usuario_cliente = :usu');
  if ($login){
    echo "Sesion inicida!";
    header("refresh:2;url=../index.php");
  } else if (!$login){
    echo "Usuario o contraseña incorrectos";
    header("refresh:2;url=../login.php");
  }
} else {
  header("location:../index.php");
}
?>
