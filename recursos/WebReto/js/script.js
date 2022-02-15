// Cuando se baja de 20px del top de la web el boton sale
window.onscroll = function () {
  scrollFunction();

  } //Funcion de scroll
function scrollFunction() {
  // Si el body de la pagina baja 20px del top de la pagina
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("btnup").style.display = "block"; //Le da la propiedad Display block al elemento con id btup
  } else {
    document.getElementById("btnup").style.display = "none"; //Le da la propiedad Display none al elemento con id btup
  } if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600 && t == false) {
    circuloProgreso();
  }
}
//Jquery, Busca la etiqueta span y cuando se haga click ejecuta la funcion
$("#btnup").click(function () {
  //Usa la propiedad animate de jquery para ir desde cualquier punto de la web al top de la pagina
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false; // Cuando llega al top devuelve falso para que se pare
});
//Slider de la pagina principal (Manual)
$(function () {
  $('#slider img:gt(0)').hide();
  setInterval(function () {
    $('#slider :first-child')
      .fadeOut(1000)
      .next('img')
      .fadeIn(1000)
      .end()
      .appendTo('#slider');
  }, 3500);
});
//Slider de la pagina de Instalacioes (Slick)
$('.instalaciones').slick({
  accessibility : true,
  dots: true,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3500,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});
//Carta de los profesores/directores
$(function () {
  $('.material-card > .mc-btn-action').click(function () {
    var card = $(this).parent('.material-card');
    var icon = $(this).children('i');
    icon.addClass('fa-spin-fast');

    if (card.hasClass('mc-active')) {
      card.removeClass('mc-active');

      window.setTimeout(function () {
        icon
          .removeClass('fa-arrow-left')
          .removeClass('fa-spin-fast')
          .addClass('fa-bars');
      }, 800);
    } else {
      card.addClass('mc-active');
      window.setTimeout(function () {
        icon
          .removeClass('fa-bars')
          .removeClass('fa-spin-fast')
          .addClass('fa-arrow-left');
      }, 800);
    }
  });
});
//Slider para el apatardo de profesores/directores (Slick)
$('.carrusel').slick({
  accessibility: true,
  adaptiveHeight: true,
  dots: true,
  dotsClass: 'slick-dots',
  infinite: true,
  autoplay: true,
  autoplaySpeed: 3500,
  slidesToShow: 3,
  slidesToScroll: 3,
});

function confirmarborrar(id) {
  if (confirm("Realmente deseas eliminar la valoracion?")) {
    location.href = "inc/borrarVal.php?id=" + id;
    return true;
  } else {
    return false;
  }
}