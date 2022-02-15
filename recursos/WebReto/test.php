<?php
include "inc/db.php";

$stid = oci_parse($conn, 'SELECT id_alumno, nombre, apellido1, apellido2, dni, fecha_nacimiento, telefono, password_alum, foto FROM alumno ORDER BY id_alumno asc');
oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
  echo "<tr>\n";
  foreach ($row as $item) {
    echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "") . "</td>\n";
  }
  echo "</tr>\n";
}
echo "</table>\n";
