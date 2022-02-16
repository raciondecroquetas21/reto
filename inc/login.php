<?php
include "db.php";
include_once "funciones.php";
session_start();
if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 1800)) {
    session_unset(); 
    session_destroy(); 
    echo "session destroyed"; 
}
$_SESSION['start'] = time();

?>
