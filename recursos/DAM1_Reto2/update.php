<?php
session_start();
$user = $_SESSION['user'];
if(!isset($user))  {
 header("location: login.php");
}
include_once('include/funciones.php');
$res = actualizarNoticia($_POST['idNoticia'], $_POST['titulo'], $_POST['texto']);
echo "<script> alert('La noticia a sido modificada correctamente');</script>";
echo "<script> location.href='noticias.php';</script>";
die();;
?>
