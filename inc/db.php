<?php
//  $conn = oci_connect('dropdb', 'Almi12345',' 192.168.1.42:1539/XE');
$conn = oci_connect('RETOALMI','Almi123','192.168.4.14:1521/ORCL');
//var_dump($conn);
if (!$conn) { 
    $e = oci_error();
    trigger_error (htmlentities ($e['message'], ENT_QUOTES), E_USER_ERROR);
} 
?>