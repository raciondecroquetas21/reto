<?php
if (isset($_POST["acceder"])) {
  include "db.php";
  include_once "funciones.php";
  $dni =  $_POST["dni"];
  $pass = $_POST["pass"];
  $login = check_user($dni,$pass);
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
