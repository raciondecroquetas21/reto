<?php

    session_start();
    if(!isset($_SESSION['user'])){
      header("location: index.php");
    }

    $_SESSION['profesor'] = 0;
    $_SESSION['alumno'] = 0;

    session_unset();
	  session_destroy();
	  header("Location: index.php");
?>
