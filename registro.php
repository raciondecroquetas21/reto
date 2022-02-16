<?php
            include_once 'inc/db.php';
            include_once 'inc/nav.html';



// meter formulario con los campo0s de registro 

            ?>

            <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="css/registro.css">
            </head>
            <body>
                    <form action="" method="post">
                        <h1>Registro</h1>
                        <label for="">Nombre:</label>
                        <input type="text" name="nombre">
                        <label for="">Edad:</label>
                        <input type="text" name="edad">
                        <label for="">Correo:</label>
                        <input type="text" name="correo">
                        <input type="submit" name="submit">
                    </form>
            </body>
            </html>