<?php
            include_once 'inc/db.php';
            include_once 'inc/nav.html';

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
                    <form action="inc\registrar.php" method="post">
                        <h1>Registro</h1>
                        <label for="">Nombre:</label>
                        <input type="text" name="nombre">
                        <label for="">Contraseña:</label>
                        <input type="text" name="contrasena">
                        <input type="submit" name="submit">
                    </form>
            </body>
            </html>