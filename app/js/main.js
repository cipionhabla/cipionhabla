validate.init();
$('a[data-modal]').click(function(event) {
  $(this).modal({
    fadeDuration: 250,
    fadeDelay: 1.5
  });
  return false;
});
