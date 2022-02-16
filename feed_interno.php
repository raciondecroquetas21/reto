<?php 
   
    include_once 'inc/db.php';

    $sql = 'BEGIN noticias_orden(); END;';
    
    $stmt = oci_parse($conn,$sql);
    
    oci_execute($stmt); 

    

BEGIN
   noticias_orden();
   COMMIT;
END;

?>
