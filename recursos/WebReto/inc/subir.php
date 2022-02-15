<?php
if (isset($_POST['subir'])) {
  session_start();
  foreach ($_POST as $key => $value) {
    $$key = $value;
    if ($value == "") {
      echo "Rellena todos los campos";
      header("refresh:2;url=subirnoticias.php");
    }
  }
  $user = $_SESSION["usu"];
  $user = str_replace(" ", "", $user);

  $file = $_FILES['img']; //Recoge el archivo
  $fileName = $file["name"]; //Recoge el nombre del archivo
  $fileTipo = $file["type"]; //Recoge el tipo del archivo
  $fileTmpName = $file["tmp_name"]; //Recoge la ruta temporal del archivo
  $fileError = $file["error"]; //Recoge si hay algun error
  $fileSize = $file["size"]; //Recoge el tamaño del archivo en bytes

  $fileDivide = explode(".", $fileName); //Divide un string en varios que nos los da en un array ,en este caso lo que esta antes y despues del .
  $fileExtension = strtolower(end($fileDivide)); // Convierte el ultimo elemento del array en minusculas
  $permitir = array("jpg", "jpeg", "png");

  $newFileName = strtolower(str_replace(" ", "_", $fileName));
  $newFileName = "avatar-" . $user;

  if (in_array($fileExtension, $permitir)) {
    if ($fileError == 0) {
      if ($fileSize < 209715200) {
        $imgNombreCompleto = $newFileName . "." . $fileExtension; //Renombra el archivo con el nombre de la variable, un prefijo que queramos y la extension
        $carpeta = '../images/userPic/' . $_SESSION['usu'] . '';
        if (!file_exists($carpeta)) {
          mkdir($carpeta, 0770, true);
        }
        $fileDest = '../images/userPic/'.$_SESSION['usu']. '/' . $imgNombreCompleto;
        $fileDB = 'images/userPic/' . $_SESSION['usu'] . '/' . $imgNombreCompleto;
        move_uploaded_file($fileTmpName, $fileDest);
        include_once "funciones.php";
        if (cambiarFoto($fileDB, $_SESSION["dni"])) {
          echo "Subida correcta";
          header("refresh:2;url=../perfil.php");
        } else {
          echo "Error en la subida";
          header("refresh:2;url=../subirfotop.php");
        }
      } else {
        echo "Archivo demasiado grande";
        header("refresh:2;url=../subirfotop.php");
        exit();
      }
    } else {
      echo "Hubo un error!";
      header("refresh:2;url=../subirfotop.php");
      exit();
    }
  } else {
    echo "Tipo de archivo no permitido";
    header("refresh:2;url=../subirfotop.php");
    exit();
  }
} else {
  header("location:../index.php");
}
