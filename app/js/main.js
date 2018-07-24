validate.init();
$('a[data-modal]').click(function(event) {
  $(this).modal({
    fadeDuration: 200,
    fadeDelay: .5
  });
  return false;
});
