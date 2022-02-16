
<?php

include_once 'inc/db.php';


oci_parse($conn, "insert into PASSWORD_ALUM, NOMBRE, APELLIDO1 FROM alumno WHERE dni=:dni");
?>