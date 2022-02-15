<?php
session_start();
include 'include/db.php';

if(!isset($_SESSION['user'])){
  header("location: login.php");
}

foreach ($_POST as $key=>$value){
    if ($value==""){
      echo "
      <script>
        alert('Debes de rellenar todos los campos');
        location.href='verperfil.php';
      </script>";
      die();
    }
    $$key=$value;
  }
  $usuId = $_SESSION['usuID'];

  $imagenNueva = $_FILES['imagenNueva'];
  $nombre = $imagenNueva['name'];
  $fileTmpName = $imagenNueva['tmp_name'];
  $fileError = $imagenNueva['error'];

  $extension = explode(".",$nombre);
  $extensionActual = strtolower(end($extension));
  $nombreActual = strtolower(reset($extension));
  $extensiones = array('jpg', 'png', 'jpeg');

  if ($fileError == 0) {
      if (in_array($extensionActual, $extensiones)) {
        $archivoNombreCompleto = $_SESSION['email'].".".$extensionActual;
        $fileDest = 'images/foto_user/'.$archivoNombreCompleto;
        move_uploaded_file($fileTmpName, $fileDest);

        if ($_SESSION['profesor'] == 1) {
            $sql_pass = "UPDATE profesores SET foto_perfil='".$fileDest."' WHERE id_profesor ='".$usuId."'";

                  $login_stmt = oci_parse($conn, "$sql_pass");

                  oci_execute($login_stmt);
                  $_SESSION['imgUsu'] = $fileDest;

                  echo "
                  <script>
                    alert('La imagen se ha subido correctamente')
                  </script>";

                  header("location: verperfil.php");

                }else if($_SESSION['alumno'] == 1) {

                  $sql_pass = "UPDATE alumnos SET foto_perfil='".$fileDest."' WHERE id_alumno ='".$usuId."'";

                  $login_stmt = oci_parse($conn, "$sql_pass");

                  oci_execute($login_stmt);
                  $_SESSION['imgUsu'] = $fileDest;

                  echo "
                  <script>
                    alert('La imagen se ha subido correctamente')
                  </script>";

                  header("location: verperfil.php");
                }

      } else {
          echo "Tipo de archivo no permitido";
          exit();
      }
  } else {
      echo "Hubo un error";
      exit();
    }

 ?>
