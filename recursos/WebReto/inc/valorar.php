<?php
if (isset($_POST["valorar"])) {
  include_once "funciones.php";
  session_start();
  $msg = $_POST["msg"];
  $curso = $_POST["curso"];
  valorarCurso($_SESSION['dni'],$msg,$curso);
} else {
  header("location:../index.php");
}

?>