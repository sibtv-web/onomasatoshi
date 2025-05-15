
/* toggle */
$(function() {
  $('#spMenuBtn').on('click', function() {
    $('nav').stop(true, false).slideToggle(300);
  });
});
