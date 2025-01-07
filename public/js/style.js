var multipleCardCarousel = document.querySelector(
    "#carouselExampleControls"
  );
  if (window.matchMedia("(min-width: 768px)").matches) {
    var carousel = new bootstrap.Carousel(multipleCardCarousel, {
      interval: false,
    });
    var carouselWidth = $(".inner")[0].scrollWidth;
    var cardWidth = $(".item").width();
    var scrollPosition = 0;
    $("#carouselExampleControls .next").on("click", function () {
      if (scrollPosition < carouselWidth - cardWidth * 1) {
        scrollPosition += cardWidth;
        $("#carouselExampleControls .inner").animate(
          { scrollLeft: scrollPosition },
          600
        );
      }
    });
    $("#carouselExampleControls .prev").on("click", function () {
      if (scrollPosition > 0) {
        scrollPosition -= cardWidth;
        $("#carouselExampleControls .inner").animate(
          { scrollLeft: scrollPosition },
          600
        );
      }
    });
  } else {
    $(multipleCardCarousel).addClass("slide");
  }
