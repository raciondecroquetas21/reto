<?php

    session_start();
    include_once 'db.php';
    if (!$conn) { $m = oci_error();
    echo $m['message'], '\n';
    exit;}
    $query = 'SELECT *  FROM clientes WHERE nombre_usuario_cliente = :usu and contrasena_cliente = :pwd' ;
    $stid = oci_parse($conn, $query);
    if (isset($_POST['usu']) || isset($_POST['pwd'])){          
    $user=$_POST['usu'];
    $pass=$_POST['pwd'];
    }
    oci_bind_by_name($stid, ':usu', $user);
    oci_bind_by_name($stid, ':pwd', $pass);
    oci_execute($stid);
    $row = oci_fetch_array($stid, OCI_ASSOC);
    if ($row) {
    $_SESSION['usu']=$_POST['usu'];
    echo'log in successful';
    }
    else {
    header('Location: ../index.php');
    exit;}

    oci_free_statement($stid);
    oci_close($conn);
    header('Location: ../home_normal.php');

?>
