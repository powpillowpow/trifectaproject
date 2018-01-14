$('.option').mouseenter(function() {
  $(this).find(".line-small").css('transform','rotate(0deg)');
  $(this).find(".line-small").css('margin-bottom','0.1rem');
});

$('.option').mouseleave(function() {
  $(this).find(".line-small").css('transform','rotate(90deg)');
  $(this).find(".line-small").css('margin-bottom','0.5rem');
});

$('.side-navbar ul li').mouseenter(function() {
  $(this).find(".sector").css('opacity','1');
});

$('.side-navbar ul li').mouseleave(function() {
  $(this).find(".sector").css('opacity','0');
});

$('.side-navbar ul li h2').mouseenter(function() {
  $(this).find(".line-small").css('transform','rotate(0deg)');
});

$('.side-navbar ul li h2').mouseleave(function() {
  $(this).find(".line-small").css('transform','rotate(90deg)');
});
