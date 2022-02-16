<?php
            include_once 'inc/db.php';

            //https://codigolite.com/como-crear-ejecutar-y-eliminar-un-procedimiento-almacenado-en-oracle/
      
      
            ////    meter cosas oracle en php https://programmerclick.com/article/5191939387/   
            BEGIN
                noticias_orden ();
            COMMIT;
         END;
////////////////////////////////////////////////////
            PROCEDURE NOTICIAS_ORDEN
            AS
            CURSOR ORDEN_N IS
            SELECT titulo, contenido FROM noticias_web order by fecha_noticias desc;
            v_titulo varchar2(60);
            v_contenido varchar2(1000);
            BEGIN
            OPEN ORDEN_N;
            FETCH ORDEN_N INTO v_titulo, v_contenido;
            WHILE ORDEN_N%FOUND LOOP
            DBMS_OUTPUT.PUT_LINE(V_TITULO||'*'||V_CONTENIDO);
            FETCH ORDEN_N INTO v_titulo, v_contenido;
            END LOOP;
            CLOSE ORDEN_N;
            END NOTICIAS_ORDEN;

            for ($i=0; $i < ; $i++) { 
                # code...
            }

            ?>


<?php 
    $conn = oci_connect('SCOTT','TIGER') or die;
    
    
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


<?php 
   
    include_once 'inc/db.php';

    $sql = 'BEGIN noticias_orden(); END;';
    
    $stmt = oci_parse($conn,$sql);
    
    oci_execute($stmt); 
?>
