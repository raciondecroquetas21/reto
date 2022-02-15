<?php
session_start();
if (!isset($_SESSION['usu'])) {
  //header("location:../index.php");
  echo "dddd";
  exit();
}
if (!isset($_GET["id"])) {
  header("location:../index.php");
  exit();
}
$idbo = $_GET["id"];
include_once "funciones.php";
borraValoracion($idbo);
