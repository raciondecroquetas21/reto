<?php
function check_user($dni, $pass) {
  require "db.php";
  $contador = false;
  $stid = oci_parse($conn, "SELECT PASSWORD_ALUM, NOMBRE, APELLIDO1 FROM alumno WHERE dni=:dni");
  oci_bind_by_name($stid, ":dni", $dni);
  oci_execute($stid);
  $rows = oci_fetch_assoc($stid);
  if (!$rows) {
    echo "Usuario o Contraseña incorrectos";
  } else {
    if ($rows["PASSWORD_ALUM"] == $pass) {
      $contador = true;
      $usuario = $rows["NOMBRE"]." ".$rows["APELLIDO1"];
      session_start();
      $_SESSION['usu'] = $usuario;
      $_SESSION['dni'] = $dni;
    }
  }
  oci_free_statement($stid);
  oci_close($conn);
  return  $contador ? true : false ;
}