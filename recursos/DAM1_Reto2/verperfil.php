<?php
  session_start();
  $page = 'six';
  if(!isset($_SESSION['user'])){
    header("location: login.php");
  }

  $usuId = $_SESSION['usuID'];
  $imgUsu = $_SESSION['imgUsu']; ?>
 <!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil | Centro de Estudio Almi</title>
    <link rel="icon" type="image/png" href="images/logoalmi.png">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/verperfil.css">
  </head>
  <body>

    <?php
      include_once 'include/menu.php';
     ?>
     <div id="contpr">

     <section id="barraVertical">
       <article id="imagenUsu">
         <?php
            echo "
              <img id='imgUsu' src='".$imgUsu."' alt=''>";
         ?>
       </article>

       <article id="nombre">
         <?php
         echo '
          <h2>'.$_SESSION['user'].' '.$_SESSION['apellido'].'</h2>
         ';
          ?>
          <hr>
       </article>

       <article class="perfilCambios">
         <hr>
         <a href='#imagenPerfil'><h3>Cambiar imagen</h3></a>
         <hr>
         <a href='#contraseñaPerfil'><h3>Cambiar contraseña</h3></a>
         <hr>
       </article>

     </section>

     <div id='contraseñaPerfil'>
       <img id="cuadradoContraseña" src="images/cuadradoazul.png" alt="">
     <div id='cajaCambios'>
       <form id='login' action='cambiarcontraseña.php' method='POST' enctype='multipart/form-data'>
         <label>Contraseña actual:</label>
         <input type='password' class='inputs' name='contraseñaActual'/><br />

         <label>Nueva contraseña:</label>
         <input type='password' class='inputs' name='contraseñaNueva'/><br />

         <label>Repetir contraseña:</label>
         <input type='password' class='inputs' name='contraseñaNueva2'/><br />

         <button class="env" type="submit" name="enviarContraseña" value="enviarContraseña">Cambiar Contraseña</button>
       </form>
       <a href='#' class='close'>X</a>
       </div>
     </div>

     <div id='imagenPerfil'>
       <img id="cuadradoImagen" src="images/cuadradoazul.png" alt="">
     <div id='cajaCambiosImagen'>
        <form id='login' action='subirimagen.php' method='POST' enctype='multipart/form-data'>
           <label class='act'>Imagen Actual</label><br />
           <?php
              echo "
                <img id='imgActual' src='".$imgUsu."' alt=''><br /><br />";
           ?>

           <hr class='cambiarc'>
           <!--<label>Imagen Nueva:</label><br />-->
           <!--<input type='file' class='inputs' name='imagenNueva'/><br />-->

           <input type='file' id='files' class='inputfile' name="imagenNueva"> <br/>
           <label for='files' id='eligeimg'>Examinar</label>

           <button class="env" type="submit" name="enviar" value="enviar">Actualizar Imagen</button>
         </form>
       <a href='#' class='close'>X</a>
       </div>
     </div>

</div>
  </body>
</html>
