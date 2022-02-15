<?php
session_start();
include 'include/db.php';

if(isset($_SESSION['user'])){
  header("location: index.php");
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

  $email = $_POST['mail'];
  $pass = $_POST['pass'];
  $_SESSION['profesor'] = 0;
  $_SESSION['alumno'] = 0;

  $sql_login = "SELECT nombre, apellido1 FROM alumnos WHERE email='".$email."'";

  $login_stmt = oci_parse($conn, "$sql_login");

  oci_execute($login_stmt);

  while($datos = oci_fetch_assoc($login_stmt)) {
    $nombre = $datos['NOMBRE'];
    $apellido = $datos['APELLIDO1'];
  }

  if ($nombre == null) {
    $alumno = 0;
  } else {
    $sql_login = "SELECT id_alumno, contrasena, foto_perfil FROM alumnos WHERE email='".$email."'";

    $login_stmt = oci_parse($conn, "$sql_login");

    oci_execute($login_stmt);

      while($datos = oci_fetch_array($login_stmt, OCI_BOTH) ) {
        $alumnos = array(
          'id' => $datos['ID_ALUMNO'],
          'contrasena' => $datos['CONTRASENA'],
          'imgUsu' => $datos['FOTO_PERFIL'],
        );
    }


    if ($pass == $alumnos['contrasena']) {
      $_SESSION['user'] = $nombre;
      $_SESSION['apellido'] = $apellido;
      $_SESSION['email'] = $email;
      $_SESSION['alumno'] = 1;
      $_SESSION['profesor'] = 0;
      $_SESSION['usuID'] = $alumnos['id'];
      $_SESSION['imgUsu'] = $alumnos['imgUsu'];
      header("location: index.php");
    } else {
      echo "Login incorrecto";
      header("location: login.php");
    }

  }


  if ($alumno == 0) {
    $sql_login = "SELECT nombre, apellido1 FROM profesores WHERE email='".$email."'";

    $login_stmt = oci_parse($conn, $sql_login);

    oci_execute($login_stmt);

    while($datos = oci_fetch_assoc($login_stmt)) {
      $nombre = $datos['NOMBRE'];
      $apellido = $datos['APELLIDO1'];

    }

    if ($nombre == null) {
      $profesor = 0;
      echo "Usuario incorrecto";
      header("location: login.php");
      exit;
    } else {
      $sql_login = "SELECT id_profesor, contrasena, foto_perfil FROM profesores WHERE email='".$email."'";

      $login_stmt = oci_parse($conn, $sql_login);

      oci_execute($login_stmt);

      while($datos = oci_fetch_array($login_stmt)) {
        $profesores = array(
          'id' => $datos['ID_PROFESOR'],
          'contrasena' => $datos['CONTRASENA'],
          'imgUsu' => $datos['FOTO_PERFIL'],
        );
      }

      if ($pass == $profesores['contrasena']) {
        $_SESSION['user'] = $nombre;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['email'] = $email;
        $_SESSION['alumno'] = 0;
        $_SESSION['profesor'] = 1;
        $_SESSION['usuID'] = $profesores['id'];
        $_SESSION['imgUsu'] = $profesores['imgUsu'];
        header("location: index.php");
      } else {
        echo "Login incorrecto";
        header("location: login.php");
      }
    }
  }

 ?>
