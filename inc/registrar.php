
<?php

include_once 'db.php';

function insertar_usuario($conn, $dni, $nombre, $apellido, $direccion, $localidad, $nombre_usuario, $password)
    {
        $sql = "INSERT INTO clientes VALUES ('".$dni."','".$nombre."','".$apellido."','".$direccion."','".$localidad."','".$nombre_usuario."','".$password."')";
         $stmt = oci_parse($conexion, $sql);     
         $ok   = oci_execute( $stmt );          
         oci_free_statement($stmt);             
        return $ok;
    }
?>