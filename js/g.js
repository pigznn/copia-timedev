// ================================================
// PORTFÓLIO (página portfolio.php) - Carrossel Slick
// Só roda se a classe existir, então não afeta a index
// ================================================
$(document).ready(function () {
  if (!$('.portfolio-carrossel').length) return;

  $('.portfolio-carrossel').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    infinite: true,
    dots: true,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 4000,
    pauseOnHover: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          centerPadding: '40px',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
});
