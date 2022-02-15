<?php
if (isset($_POST["cambiar"])) {
  session_start();
  include_once "funciones.php";
  $pass = $_POST["pass"];
  $repass = $_POST["repass"];

  if ($pass != $repass) {
    echo "No coinciden";
    header("refresh:2;url=../cambiar.php");
  } else {
    if ($pass == ""  || $repass == "") {
      echo "Vacio";
      header("refresh:2;url=../cambiar.php");
    } else {
      cambiarPwd($_SESSION["dni"], $pass);
      echo "Cambiada correctamente";
      header("refresh:2;url=../perfil.php");
    }
  }
} else {
  header("location:../index.php");
}
