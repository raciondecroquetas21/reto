<?php
session_start();
if(!isset($_SESSION['user'])){
  header("location: login.php");
}

foreach ($_POST as $key=>$value){
    if ($value==""){
      echo "
      <script>
        alert('Debes de rellenar todos los campos');
        location.href='login.php';
      </script>";
      die();
    }
    $$key=$value;
  }

  $imagenNoticia = $_FILES['imagennoticia'];
  $nombre = $imagenNoticia['name'];
  $fileTmpName = $imagenNoticia['tmp_name'];
  $fileError = $imagenNoticia['error'];

  $extension = explode(".",$nombre);
  $extensionActual = strtolower(end($extension));
  $nombreActual = strtolower(reset($extension));
  $extensiones = array('jpg', 'png', 'jpeg');

  if ($fileError == 0) {
      if (in_array($extensionActual, $extensiones)) {
        $archivoNombreCompleto = $nombreActual.".".$extensionActual;
        $fileDest = 'images/foto_noticia/'.$archivoNombreCompleto;
        move_uploaded_file($fileTmpName, $fileDest);

        include 'include/db.php';

        //$fecha = date('d-m-Y');

        $sql_pass ="INSERT INTO noticias(titulo, texto, foto, fecha) values (:titulo_bv,:texto_bv,:foto_bv,current_timestamp)";

        $login_stmt = oci_parse($conn, "$sql_pass");

        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];

        oci_bind_by_name($login_stmt, ":titulo_bv", $titulo);
        oci_bind_by_name($login_stmt, ":texto_bv", $texto);
        oci_bind_by_name($login_stmt, ":foto_bv", $fileDest);
        oci_bind_by_name($login_stmt, ":fecha_bv", $fecha);

        oci_execute($login_stmt);

        oci_commit($conn);

        oci_free_statement($login_stmt);
        oci_close($conn);

        header("location: noticias.php");
      } else {
          echo "Tipo de archivo no permitido";
          exit();
      }
  } else {
      echo "Hubo un error";
      exit();
    }


  ?>
