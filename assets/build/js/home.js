(function ($) {
  class HomePage {
    constructor() {
      this.animateCategory();
      this.initiateCarousel();
    }

    initiateCarousel() {
      $('.slider-home').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 1000,
      });
    }


    animateCategory() {
      $('a.categories-link .categories-product ').hover(function () {
        $(this).addClass('.animate__animated');
        $(this).addClass('.animate__bounce');
      })
    }



  }

  new HomePage();

})(jQuery);