<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header("location: login.php");
  }

    require 'include/db.php';
    $idNoticia = $_POST['idNoticia'];
    $sql = "DELETE from noticias where id_noticia = $idNoticia";
    $stmt = oci_parse($conn, "$sql");
    oci_execute($stmt);
    oci_close($conn);
    echo "<script> alert('La noticia a sido borrada correctamente');</script>";
    echo "<script> location.href='noticias.php';</script>";
    die();
 ?>
