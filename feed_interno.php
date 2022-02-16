<?php
            include_once 'inc/db.php';
            include_once 'inc/nav.html';

            ?>


<?php 
    $conn = oci_connect('A.Asburgo','Almi123') or die;
    
    
    $sql = 'BEGIN sayHello(:name, :message); END;';
    
    $stmt = oci_parse($conn,$sql);
    
    //  Bind the input parameter
    oci_bind_by_name($stmt,':name',$name,32);
    
    // Bind the output parameter
    oci_bind_by_name($stmt,':message',$message,32);
    
    // Assign a value to the input 
    $name = 'Harry';
    
    oci_execute($stmt);
    
    // $message is now populated with the output value
    print "$message\n";
?>