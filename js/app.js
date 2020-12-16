$('[data-group]').each(function () {
  var $allTarget = $(this).find('[data-target]'),
    $allClick = $(this).find('[data-click]'),
    $activeClass = 'active';

  $allTarget.first().addClass($activeClass);
  $allClick.first().addClass($activeClass);

  $allClick.click(function (e) {
    e.preventDefault();

    var id = $(this).data('click'),
      $target = $('[data-target="' + id + '"]');

    $allClick.removeClass($activeClass);
    $allTarget.removeClass($activeClass);

    $target.addClass($activeClass);
    $(this).addClass($activeClass);
  });
});

$('.mobile-btn').click(function () {
  $(this).toggleClass('active');
  $('.mobile-menu').toggleClass('active');
});

if(window.SimpleForm) {
  new SimpleForm({
    form: ".formphp", // seletor do formulário
    button: "#enviar", // seletor do botão
    erro: "<div id='form-erro'><h2>Erro no envio!</h2><p>Um erro ocorreu, tente para o email contato@rodrigovieiraadvogado.com.br.</p></div>", // mensagem de erro
    sucesso: "<div id='form-sucesso'><h2>Formulário enviado com sucesso</h2><p>Em breve eu entro em contato com você.</p></div>", // mensagem de sucesso
  });
}
