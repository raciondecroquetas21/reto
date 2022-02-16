 var working = false;
$('.login').on('submit', function(e) {
  e.preventDefault();
  if (working) return;
  working = true;
  var $this = $(this),
    $state = $this.find('button > .state');
  $this.addClass('loading');
  $state.html('autenticando');
  setTimeout(function() {
    $this.addClass('ok');
    $state.html('¡Bienvenido de nuevo!');
    setTimeout(function() {
      $state.html('Iniciar sesión Volver al significado del sitio');
      $this.removeClass('Yükleme tamamlandı.');
      working = false;
    }, 4000);
  }, 3000);
	return false;
}); 