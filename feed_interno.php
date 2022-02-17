<?php 
   
    include_once 'inc/db.php';

    $sql = echo 'BEGIN noticias_orden(); END;';
    
    $stmt = oci_parse($conn,$sql);
    
    oci_execute($stmt); 
    
?>
