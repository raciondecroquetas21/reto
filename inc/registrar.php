
<?php

include_once 'db.php';

       $stid = oci_parse($conn,"INSERT INTO clientes VALUES( :dni , :nombre, :apellido, :direccion, :localidad, :nom_usu, :con_usu)");
      
        $dni=$_POST['dni'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $direccion=$_POST['direccion'];
        $localidad=$_POST['localidad'];
        $nombre_usuario=$_POST['nom_usu'];
        $password=$_POST['con_usu'];
                    

        oci_bind_by_name($stid, ":dni", $dni);
        oci_bind_by_name($stid, ":nombre", $nombre);
        oci_bind_by_name($stid, ":apellido", $apellido);
        oci_bind_by_name($stid, ":direccion", $direccion);
        oci_bind_by_name($stid, ":localidad", $localidad);
        oci_bind_by_name($stid, ":nom_usu", $nombre_usuario);
        oci_bind_by_name($stid, ":con_usu", $password);
        oci_execute($stid);
        header('Location: ../index.php');

?>