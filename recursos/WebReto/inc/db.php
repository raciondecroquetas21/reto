<?php
// Conectar al servicio XE en la máquina "192.168.1.42"
$conn = oci_connect('dropdb', 'Almi12345', '192.168.1.42:1539/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
