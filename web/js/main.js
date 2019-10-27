$(document).ready(function() {
  $("[href]").each(function() {
      if (this.href == window.location.href) {
          $(this).addClass("actives");
      }
  });
});

/************* Главная parallax ************/
$('.parallax-window').parallax({imageSrc: 'img/f2.jpg'});

/************* Реєстрація parallax ************/
$('.parallax-window-registration').parallax({imageSrc: 'img/f7.jpg'});
