
<?php

include_once 'db.php';

/*function insertar_usuario($conn,$dni, $nombre, $apellido, $direccion, $localidad, $nombre_usuario, $password)
    {*/
        /*$sql = "INSERT INTO clientes VALUES ('".$dni."','".$nombre."','".$apellido."','".$direccion."','".$localidad."','".$nombre_usuario."','".$password."')";
         $stmt = oci_parse($conexion, $sql);     
         $ok   = oci_execute( $stmt );          
         oci_free_statement($stmt);             
        return $ok;*/
        $stid = oci_parse($conexión,"INSERT INTO clientes VALUES(:dni, :nombre, :apellido, :direccion, :localidad, :nom_usu, :con_usu)");


oci_bind_by_name($stid, ":dni", $dni);
oci_bind_by_name($stid, ":nombre", $nombre);
oci_bind_by_name($stid, ":apellido", $apellido);
oci_bind_by_name($stid, ":direccion", $direccion);
oci_bind_by_name($stid, ":localidad", $localidad);
oci_bind_by_name($stid, ":nom_usu", $nombre_usuaio);
oci_bind_by_name($stid, ":con_usu", $contrasena);
oci_execute($stid);
    /*}*/
?>