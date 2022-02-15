<?php
  session_start();
  $page = 'one';
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Centro de Estudios Almi</title>
    <link rel="icon" type="image/png" href="images/logoalmi.png">
    <link rel="stylesheet" href="css/galeria.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css">
    <?php
    if ($_SESSION['user'] == 'ander') {
      echo "<link rel='stylesheet' href='css/ander.css'>";
    } ?>
  </head>
<body>

      <?php
        include 'include/menu.php';
      ?>

    <img src="images/FondoCielo.jpg" id="fotocarousel" alt="">

    <div id="fondoindex">
    </div>

    <div id="textoarriba">
      <p id="cea">centro de estudios almi</p>
    </div>

    <section>
      <img src="images/TexturaFondo.png" id="texturafondo">
      <!--en caso de segundo articulo no introducir la clase de indexarriba-->

        <article class="articuloindex indexarriba">
          <div class="objetoarticle">
            <h2>¿QUIÉNES SOMOS?</h2>
            <hr class="divisoria">
            <p>El Centro de Estudios ALMI es un centro privado, concertado y
              homologado por el Departamento de Educación, Política Lingüística
              y Cultura para impartir enseñanzas de FP, en las ramas
              administrativa, informática y sanitaria. La formación se imparte
              tanto a alumnado procedente de sistema educativo, como a personas
              en activo que desean reciclarse o están en situación de
              desempleo.</p>
            <h2>¿POR QUÉ ALMI?</h2>
            <hr class="divisoria">
            <p>Ser un Centro reconocido en : <br>
              El desarrollo de los nuevos modelos de relación Empresa/Centro <br>
              El fomento del emprendizaje entre sus alumnos <br>
              La excelencia en la gestión <br>
              El nivel de Compromiso social con el entorno <br>
              Clases impartidas en la lengua de Cervantes</p>
          </div>
          <div class="objetoarticle">
            <img src="images/ALMIQUIENESOMOS.jpg" alt="">
          </div>
        </article>

    </section>

    <div class="carousel">
      <div class="container">
        <div class="filas">
          <div id="slider" class="carousel2">
            <div class="tarjetas">
              <span class="icon fa fa-graduation-cap"></span>
              <p class="description">
                 Nacida en Bilbao, 1985. <br>
                 Ha desarrollado sus estudios en la Universidad de Deusto. Licenciada en Administración y
                 Dirección de Empresas.
              </p>
              <div class="tarjetas-content">
                <div class="pic">
                  <img src="images/mujer1.jpg" alt="">
                </div>
                <h3 class="name">Amarna Miller</h3>
                <span class="title">Directora</span>
              </div>
            </div>
            <div class="tarjetas">
              <span class="icon fa fa-address-book"></span>
              <p class="description">
                Nacido en Madrid, 1990. <br>
                Ha desarrollado sus estudios en la Universidad de San Pablo. Presenta una carrera en
                Marketing además de un Doctorado en Marketing Digital.
              </p>
              <div class="tarjetas-content">
                <div class="pic">
                  <img src="images/hombre1.jpg" alt="">
                </div>
                <h3 class="name">Johnny Sins</h3>
                <span class="title">Subdirector</span>
              </div>
            </div>
            <div class="tarjetas">
              <span class="icon fa fa-book"></span>
              <p class="description">
                Nacido en Bilbao, 1980. <br>
                Ha desarrollado sus estudios en la Universidad del País Vasco. Licenciado en Ingeniería
                Informática con la obtención del Máster en Inteligencia Artificial.
              </p>
              <div class="tarjetas-content">
                <div class="pic">
                  <img src="images/hombre2.jpg" alt="">
                </div>
                <h3 class="name">Jordi ENP</h3>
                <span class="title">Jefe de Estudios</span>
              </div>
            </div>
            <div class="tarjetas">
              <span class="icon fa fa-pen"></span>
              <p class="description">
                Nacida en Bilbao, 1984. <br>
                Ha desarrollado sus estudios en la Universidad de Deusto. Titulada en Relaciones Laborales con Máster en Administración y Dirección de Empresas.
              </p>
              <div class="tarjetas-content">
                <div class="pic">
                  <img src="images/mujer2.jpg" alt="">
                </div>
                <h3 class="name">Apolonia Lapi</h3>
                <span class="title">Secretaria</span>
              </div>
            </div>
            <div class="tarjetas">
              <span class="icon fa fa-user-md"></span>
              <p class="description">
                Nacida en Barcelona, 1987. <br>
                Ha desarrollado sus estudios en la Universitat de Barcelona. Licenciada en Enfermería. Tiene
                un carisma especial.
              </p>
              <div class="tarjetas-content">
                <div class="pic">
                  <img src="images/mujer3.jpg" alt="">
                </div>
                <h3 class="name">Lucia Lapi</h3>
                <span class="title">Enfermera</span>
              </div>
            </div>
                    <div class="tarjetas">
              <span class="icon fa fa-dumbbell"></span>
              <p class="description">
                Nacido en Bilbao, 1975. <br>
                Ha desarrollado sus estudios en la Universidad del País Vasco. Licenciado en Ciencias del Deporte. Con más de 20 años de experiencia en el sector.
              </p>
              <div class="tarjetas-content">
                <div class="pic">
                  <img src="images/hombre3.jpg" alt="">
                </div>
                <h3 class="name">Ricardo Milos</h3>
                <span class="title">Profesor de Gimnasia</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<hr id="separaciongaleria">

<div id="caja">

  <div class="contenedor">

	<h1 class="heading">Construyendo Empleabilidad</h1>

	<div class="gallery">

		<div class="gallery-item">
			<img class="gallery-image" src="images/GRADOSALMI/GradoMedCAE.JPG" alt="">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="images/GRADOSALMI/GradoMedGA.jpg" alt="">
        </div>

		<div class="gallery-item">
			<img class="gallery-image" src="images/GRADOSALMI/GradoMedSMR.jpg" alt="">
        </div>

		<div class="gallery-item">
			<img class="gallery-image" src="images/GRADOSALMI/GradoSupASIR.jpg" alt="">
        </div>

		<div class="gallery-item">
			<img class="gallery-image" src="images/GRADOSALMI/GradoSupAYF.jpg" alt="">
        </div>

		<div class="gallery-item">
			<img class="gallery-image" src="images/GRADOSALMI/GradoSupDAM.jpg" alt="">
        </div>

	</div>

</div>

</div>

  <?php
      include 'include/footer.php';
   ?>

    <button onclick="topFunction()" id="btnup" title="Ir arriba"><img class="imgbtn" src="images/arriba.png"></button>

  </body>
  <script type="text/javascript" src="js/irarriba.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/galeria.js"></script>
</html>
