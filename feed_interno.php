<?php
            include_once 'inc/db.php';

            //https://codigolite.com/como-crear-ejecutar-y-eliminar-un-procedimiento-almacenado-en-oracle/

            BEGIN
            noticias_orden ();
            COMMIT;
         END;
////////////////////////////////////////////////////
         PROCEDURE noticias_orden(
            status_out OUT NUMBER,
            status_msg_out OUT VARCHAR2,
            id_inout IN OUT INTEGER,
            title_in IN VARCHAR2,
            text_out OUT CLOB,
            categories_in IN list_of_numbers
            );

            for ($i=0; $i < ; $i++) { 
                # code...
            }

            ?>