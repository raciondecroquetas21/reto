<?php
session_start();
if(!isset($_SESSION['user'])) {
  header('location: index.php');
}
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

  $contraseñaActual = $_POST['contraseñaActual'];
  $contraseñaNueva = $_POST['contraseñaNueva'];
  $contraseñaNueva2 = $_POST['contraseñaNueva2'];

  if ($contraseñaNueva != $contraseñaNueva2) {
    echo "
      <script>
        alert('Las contraseñas no coinciden');
        location.href='verperfil.php';
      </script>";
    die();
  }

  $usuId = $_SESSION['usuID'];

  if ($_SESSION['profesor'] == 1) {
    $sql_pass = "UPDATE profesores SET contrasena='".$contraseñaNueva."' WHERE id_profesor ='".$usuId."'";

    $login_stmt = oci_parse($conn, "$sql_pass");

    oci_execute($login_stmt);

    echo "
    <script>
      alert('La contraseña se ha cambiado correctamente');
    </script>";

    header("location: verperfil.php");

  } else if($_SESSION['alumno'] == 1) {

    $sql_pass = "UPDATE alumnos SET contrasena='".$contraseñaNueva."' WHERE id_alumno ='".$usuId."'";

    $login_stmt = oci_parse($conn, "$sql_pass");

    oci_execute($login_stmt);

    echo "
    <script>
      alert('La contraseña se ha cambiado correctamente');
    </script>";

    header("location: verperfil.php");
  }

?>
