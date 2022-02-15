<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">
  <title>Almi | Contact</title>
</head>

<body>
  <?php $page = 5;
  include "inc/header.php"; ?>
  <span id="btnup" title="Ir arriba"><img src="images/arrowup.png" alt=""></span>
  <div class="main">
    <div class="textHeader">
      <h1>Contactanos!</h1>
    </div>
  </div>
  <div class="todo">
    <div class="txtf">
      <div class="forms">
        <label>Nombre <span>*</span></label>
        <input type="text" name="nombre" placeholder="Escriba su nombre" required>
        <label>Email <span>*</span></label>
        <input type="email" name="email" placeholder="Escriba su Email" required>
        <label>Telefono</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{9}" placeholder="Escriba su telefono" required>
        <label>Asunto <span>*</span></label>
        <input type="text" name="asunto" placeholder="Cual es el asunto?" required>
        <label>Mensaje <span>*</span></label>
        <textarea name="msg" cols="30" rows="10" placeholder="Escribe el mensaje aqui"></textarea>
        <div class="politicas">
          <input type="checkbox" name="leido"> He leido <a href="https://www.aepd.es/agencia/politica-privacidad-aviso-legal.html" target="_blank">las politicas de privacidad</a>
        </div>
        <div class="btn">
          <input type="submit" name="enviar" value="Enviar">
          <input type="reset" name="borrar" value="Borrar">
        </div>
      </div>
    </div>
    <div class="mapa">
      <div class="txt">
        <strong>CENTRO DE ESTUDIOS ALMI</strong>
        <p><strong>Direccion:</strong>Avda Lehendakari Aguirre,29-1º (Deusto) Junto a la boca de metro 48014 Bilbao (Bizkaia)</p>
        <p><strong>Telefono:</strong>94 410 38 37</p>
        <p><strong>Horario:</strong>8:00 – 20:00 (LUNES A VIERNES)</p>
        <p><strong>E-mail:</strong>c.estudios.almi@gmail.com</p>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.031638821322!2d-2.950960048909831!3d43.271712979033744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e503d5d438179%3A0x280c2779aeabb54b!2sAlmi+Bilbao!5e0!3m2!1ses!2ses!4v1557920870707!5m2!1ses!2ses" style="width: 100%;" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
  <?php include "inc/footer.php"; ?>
</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/script.js"></script>
<script src="js/prefixfree.min.js"></script>
<script src="https://kit.fontawesome.com/655484ca0f.js" crossorigin="anonymous"></script>

</html>