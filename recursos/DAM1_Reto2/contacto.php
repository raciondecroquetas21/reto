<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contacto | Centro de Estudios Almi</title>
    <link rel="icon" type="image/png" href="images/logoalmi.png">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/contacto.css">
  </head>
  <body>

    <?php
      $page = 'five';
      include 'include/menu.php';
     ?>

     <section>
       <article class="mapa">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.0316388164288!2d-2.950954684514584!3d43.271712979136254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e503d5d438179%3A0x280c2779aeabb54b!2sAlmi%20Bilbao!5e0!3m2!1ses!2ses!4v1582633723172!5m2!1ses!2ses" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
       </article>

       <article class="datos">
         <p class="destacado">Avda Lehendakari Aguirre, 29 - 1º (Deusto)</p>
         <p>48014 Bilbao (Bizkaia)</p>
         <p><span class="destacado">Teléfono : </span> 94 410 38 37</p>
         <p><span class="destacado">Horario : </span> 8:00 - 20:00 (LUNES A VIERNES)</p>
         <p><span class="destacado">E-mail : </span> centrodeestudiosalmi@gmail.com</p>
         <img src="images/almiportal.jpg" alt="">
       </article>

       <p id="enviarsugerencia"><a href="#suge">Enviar una sugerencia</a></p>

       <article class="sugerencias" id="suge">
         <form class="form" action="index.php" method="post">
             <label for="usuario">Nombre:</label>
             <input type="text" name="usuario"/><br />
             <label for="correo">Correo electrónico:</label>
             <input type="text" name="correo"/><br />
             <label for="tlfcontacto">Teléfono de contacto:</label>
             <input type="text" name="tlfcontacto"/><br />
             <label for="asunto">Asunto:</label>
             <input type="text" name="asunto"/><br />
             <label for="sugerencia">Sugerencia : </label> <br/>
     		    <textarea class="textarea" name="sugerencia" rows="10"></textarea> <br/>
         </form>
         <p id="cerrarsugerencias"><a href="contacto.php#!">Cerrar sugerencias</a></p>
       </article>
     </section>

     <?php
        include 'include/footer.php';
      ?>

  </body>
</html>
