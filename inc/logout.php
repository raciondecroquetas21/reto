<?php

//comprobar que chapa sesion
   session_start();
   session_unset();
   session_destroy();
   unset($_SESSION["usu"]);
   unset($_SESSION["password"]);

   echo 'You have cleaned session';
   header('Refresh: 0; URL = ../index.php');
?>
