(function ($) {
  class HomePage {
    constructor() {
      this.animateCategory();
      this.initiateCarousel();
      // this.check_article();
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

    // check_article() {
    //   var addChild = $('.simple-article').html('<p><?= $content1[0]->meta_value; ?></p>');
    //   var article = $('.simple-article.size-4.grey').html();
    //   if (article.length > 2) {
    //     addChild += '<p><?= $content1[0]->meta_value; ?></p>';
    //   }
    //   console.log(addChild)
    // }




  }

  new HomePage();

})(jQuery);