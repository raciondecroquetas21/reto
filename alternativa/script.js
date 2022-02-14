var working = false;
$('.login').on('submit', function(e) {
  e.preventDefault();
  if (working) return;
  working = true;
  var $this = $(this),
    $state = $this.find('button > .state');
  $this.addClass('loading');
  $state.html('Kimlik doğrulanıyor');
  setTimeout(function() {
    $this.addClass('ok');
    $state.html('Tekrar hoşgeldiniz!');
    setTimeout(function() {
      $state.html('Giriş Yapıldı Siteye Dön');
      $this.removeClass('Yükleme tamamlandı.');
      working = false;
    }, 4000);
  }, 3000);
	return false;
});