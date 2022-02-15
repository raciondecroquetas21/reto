<?php
  session_start();
  putenv("NLS_LANG=SPANISH_SPAIN.WE8ISO8859P15");
  $conn = oci_connect('gestion','Almi12345','192.168.6.161:1539/XE', 'SPANISH_SPAIN.WE8ISO8859P15');

  if(!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['error en la conexion'], ENT_QUOTES), E_USER_ERROR);
  }
?>
