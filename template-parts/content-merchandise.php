<?php

/**
 *  Page about-us template
 *
 * @package Ecommerce_theme
 */
get_header();
?>
<div class="page-merchandise">


  <script type="text/javascript">
    $(document).ready(function() {

      $("#cari_produk").click(function(data) {
        //alert('test');
        var cari_produk = $("#typelg").val();
        if (cari_produk == 0) {
          alert("Tidak Ada Produk Yang Dicari");
          return false();
        } else {
          //alert(cari_produk);
          cari_produk = cari_produk.replace(/ /g, "-").replace(/!/g, "").replace(/@/g, "").replace(/#/g, "").replace(/$/g, "").replace(/%/g, "").replace(/^/g, "").replace(/&/g, "").replace(/\*/g, "").replace(/\(/g, "").replace(/\)/g, "").replace(/\,/g, "").replace(/\./g, "").replace(/\//g, "").replace(/\+/g, "").replace(/\=/g, "").replace(/\{/g, "").replace(/\}/g, "").replace(/\[/g, "").replace(/\]/g, "").replace(/\:/g, "").replace(/\;/g, "").replace(/\\/g, "").replace(/\|/g, "");
          //alert(cari_produk);

          document.location.href = "https://sr12herbalskincare.co.id/search/cariproduk/" + cari_produk.toLowerCase();
        }

      });

      $("#typelg").keypress(function(data) {
        //alert('test');

        if (data.which == 13) {
          //alert('test');
          var cari_produk = $("#typelg").val();
          if (cari_produk == 0) {
            alert("Tidak Ada Produk Yang Dicari");
            return false();
          } else {
            //alert(cari_produk);
            cari_produk = cari_produk.replace(/ /g, "-").replace(/!/g, "").replace(/@/g, "").replace(/#/g, "").replace(/$/g, "").replace(/%/g, "").replace(/^/g, "").replace(/&/g, "").replace(/\*/g, "").replace(/\(/g, "").replace(/\)/g, "").replace(/\,/g, "").replace(/\./g, "").replace(/\//g, "").replace(/\+/g, "").replace(/\=/g, "").replace(/\{/g, "").replace(/\}/g, "").replace(/\[/g, "").replace(/\]/g, "").replace(/\:/g, "").replace(/\;/g, "").replace(/\\/g, "").replace(/\|/g, "");
            //alert(cari_produk);

            document.location.href = "https://sr12herbalskincare.co.id/search/cariproduk/" + cari_produk.toLowerCase();
          }
        }
      });

      ["LULUR REMPAH BENGKOANG", "SUNCARE LOTION", "SCRUB CREAM COFFEE", "MASSAGE OIL BULUS", "LIGHTENING BODY LOTION", "MILK KEFIR MASK", "ETAWA KEFIR MASK", "COFFEE KEFIR MASK", "COFFEE MASK", "BODY WASH", "BODY LOTION", "SUNBLOCK", "DEODORANT SPRAY", "DEODORANT SPRAY PREMIUM", "BRIGHTENING DAY CREAM", "BRIGHTENING NIGHT CREAM", "MILK CLEANSER", "GOLD SERUM", "KRASNY DAY CREAM", "KRASNY NIGHT CREAM", "KRASNY SERUM", "LIGHTENING SERUM", "REVITALIZING SERUM", "SKIN TIGHTENING CREAM", "SPOT ESSENCE DAY CREAM", "SPOT ESSENCE NIGHT CREAM", "COFFEE HERBAL SOAP", "FACIAL WASH BULUS", "FACIAL WASH MADU 100.ml", "FACIAL WASH MADU 250.ml", "FACIAL WASH COFFEE", "FACIAL WASH GREEN TEA 100.ml", "FACIAL WASH GREEN TEA 250.ml", "HONEY SOAP", "MILKY RICE SOAP", "RICE SOAP", "MICELLAR WATER", "NATURE ROSE WATER 60.ml", "NATURE ROSE WATER 100.ml", "NATURE SECRET WATER 60.ml", "NATURE SECRET WATER 100.ml", "MANJAKANI KAPSUL", "MANJAKANI PIL", "MADU HUTAN BADUY 300.gr", "MADU HUTAN BADUY 140.gr", "SALIMAH SLIM", "VICO OIL SR12 60.ml", "VICO OIL SR12 100.ml", "VICO OIL SR12 250.ml", "Vico Capsule SR12", "COMPACT POWDER NATURAL", "COMPACT POWDER SHEER PINK", "HAND GEL APPLE 60.ml", "HAND GEL APPLE 100.ml", "LIP CARE CHERRY", "LIP CARE NATURAL", "LIP CREAM SR01", "LIP CREAM SR04", "LIP CREAM SR13", "LIP MATTE CREAM CHERISH ME", "LIP MATTE CREAM NUDE BERRY", "LIP MATTE CREAM SWEET PINK", "TONER CHAMOMILLE", "SABUN BULUS"]
      var data = {
        produk: ["LULUR REMPAH BENGKOANG", "SUNCARE LOTION", "SCRUB CREAM COFFEE", "MASSAGE OIL BULUS", "LIGHTENING BODY LOTION", "MILK KEFIR MASK", "ETAWA KEFIR MASK", "COFFEE KEFIR MASK", "COFFEE MASK", "BODY WASH", "BODY LOTION", "SUNBLOCK", "DEODORANT SPRAY", "DEODORANT SPRAY PREMIUM", "BRIGHTENING DAY CREAM", "BRIGHTENING NIGHT CREAM", "MILK CLEANSER", "GOLD SERUM", "KRASNY DAY CREAM", "KRASNY NIGHT CREAM", "KRASNY SERUM", "LIGHTENING SERUM", "REVITALIZING SERUM", "SKIN TIGHTENING CREAM", "SPOT ESSENCE DAY CREAM", "SPOT ESSENCE NIGHT CREAM", "COFFEE HERBAL SOAP", "FACIAL WASH BULUS", "FACIAL WASH MADU 100.ml", "FACIAL WASH MADU 250.ml", "FACIAL WASH COFFEE", "FACIAL WASH GREEN TEA 100.ml", "FACIAL WASH GREEN TEA 250.ml", "HONEY SOAP", "MILKY RICE SOAP", "RICE SOAP", "MICELLAR WATER", "NATURE ROSE WATER 60.ml", "NATURE ROSE WATER 100.ml", "NATURE SECRET WATER 60.ml", "NATURE SECRET WATER 100.ml", "MANJAKANI KAPSUL", "MANJAKANI PIL", "MADU HUTAN BADUY 300.gr", "MADU HUTAN BADUY 140.gr", "SALIMAH SLIM", "VICO OIL SR12 60.ml", "VICO OIL SR12 100.ml", "VICO OIL SR12 250.ml", "Vico Capsule SR12", "COMPACT POWDER NATURAL", "COMPACT POWDER SHEER PINK", "HAND GEL APPLE 60.ml", "HAND GEL APPLE 100.ml", "LIP CARE CHERRY", "LIP CARE NATURAL", "LIP CREAM SR01", "LIP CREAM SR04", "LIP CREAM SR13", "LIP MATTE CREAM CHERISH ME", "LIP MATTE CREAM NUDE BERRY", "LIP MATTE CREAM SWEET PINK", "TONER CHAMOMILLE", "SABUN BULUS"]
      };

      $("#cari_produk3").click(function() {
        $('#typelg').val("");
        //$('.typeahead').typeahead('val', '');
        $('#typelg').closest('li').removeClass('active');
      });


      $('#typelg').typeahead({
        minLength: 1,
        order: "asc",
        group: true,
        groupMaxItem: 6,
        hint: true,
        //dropdownFilter: "All",
        href: "https://sr12herbalskincare.co.id/{{display}}",
        template: "{{display}}, <small><em>{{group}}</em></small>",
        source: {
          Produk: {
            data: data.produk
          }
        },
        callback: {
          onClickAfter: function(node, a, item, event) {

            $('#result-container').text('');
            //document.location.href="#";
            location.href = a;
          },
          onResult: function(node, query, obj, objCount) {

            var text = "";
            if (query !== "") {
              text = objCount + ' elements matching "' + query + '"';
            }
            $('#result-container').text(text);
          }
        },
        debug: true
      });


    });
  </script>


  <div class="header-empty-space"></div>
  <div class="container">
    <div class="empty-space col-xs-b15 col-sm-b30"></div>
    <div class="breadcrumbs">
      <a href="https://sr12herbalskincare.co.id/">home</a>
      <a href="javascript:;">Merchandise</a>
    </div>
    <div class="empty-space col-xs-b15 col-sm-b50 col-md-b50"></div>
    <div class="row">
      <div class="col-md-12">
        <!-- <div class="swiper-container rounded">
        <div class="swiper-button-prev style-1 hidden"></div>
        <div class="swiper-button-next style-1 hidden"></div>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="banner-shortcode style-1">
              <div class="background" style="background-image: url(./style/img/thumbnail-14.jpg);"></div>
              <div class="description valign-middle">
                <div class="empty-space col-xs-b60 col-sm-b0"></div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="banner-shortcode style-1">
              <div class="background" style="background-image: url(./style/img/thumbnail-10.jpg);"></div>
              <div class="description valign-middle">
                <div class="empty-space col-xs-b60 col-sm-b0"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div> -->

        <!-- <div class="align-inline spacing-1">
        <div class="h4">Sport gadgets</div>
      </div>
      <div class="align-inline spacing-1">
        <div class="simple-article size-1">SHOWING <b class="grey">15</b> OF <b class="grey">2 358</b> RESULTS</div>
      </div> -->
        <div class="align-inline spacing-1 hidden-xs">
          <a class="pagination toggle-products-view active"><img src="https://sr12herbalskincare.co.id/style/img/icon-14.png" alt="" /><img src="https://sr12herbalskincare.co.id/style/img/icon-15.png" alt="" /></a>
          <a class="pagination toggle-products-view"><img src="https://sr12herbalskincare.co.id/style/img/icon-16.png" alt="" /><img src="https://sr12herbalskincare.co.id/style/img/icon-17.png" alt="" /></a>
        </div>
        <div class="align-inline spacing-1">
          <div class="pager">
            <div class="holder"></div>
          </div>
        </div>
        <div class="align-inline spacing-1 filtration-cell-width-1">
          <select class="SlectBox small" id="merchandisesort">
            <option disabled="disabled" selected="selected">Product Sort</option>
            <option value="1">Sort A-Z</option>
            <option value="2">Sort Z-A</option>
          </select>
        </div>

        <script type="text/javascript">
          $(document).ready(function() {

            $("#merchandisesort").change(function() {

              var merchandisesort = $("#merchandisesort").val();

              if (merchandisesort == '1') {
                $.LoadingOverlay("show");
                document.location.href = "https://sr12herbalskincare.co.id/merchandises/msortaz";
              } else if (merchandisesort == '2') {
                $.LoadingOverlay("show");
                document.location.href = "https://sr12herbalskincare.co.id/merchandises/msortza";
              } else {
                $.LoadingOverlay("show");
                document.location.href = "https://sr12herbalskincare.co.id/merchandises/msortaz";
              }

            });
          });
        </script>

        <div class="empty-space col-xs-b25 col-sm-b30"></div>

        <div class="merchandise-content">
          <div class="merchandise-wrapper">
            <div class="row nopadding" id="itemContainer">
              <div style="text-align:center;">Belum ada produk</div>
            </div>
          </div>
        </div>
        <div class="empty-space col-xs-b35 col-sm-b0"></div>

        <div class="align-inline spacing-1 hidden-xs">
          <a class="pagination toggle-products-view active"><img src="https://sr12herbalskincare.co.id/style/img/icon-14.png" alt="" /><img src="https://sr12herbalskincare.co.id/style/img/icon-15.png" alt="" /></a>
          <a class="pagination toggle-products-view"><img src="https://sr12herbalskincare.co.id/style/img/icon-16.png" alt="" /><img src="https://sr12herbalskincare.co.id/style/img/icon-17.png" alt="" /></a>
        </div>
        <div class="align-inline spacing-1">
          <div class="pager">
            <div class="holder"></div>
          </div>
        </div>
        <!-- <div class="row">
      <div class="col-sm-3 hidden-xs">
      <a class="button size-1 style-5" href="#">
      <span class="button-wrapper">
      <span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
      <span class="text">prev page</span>
    </span>
  </a>
</div>
<div class="col-sm-6 text-center">
<div class="pagination-wrapper">
<a class="pagination active">1</a>
<a class="pagination">2</a>
<a class="pagination">3</a>
<a class="pagination">4</a>
<span class="pagination">...</span>
<a class="pagination">23</a>
</div>
</div>
<div class="col-sm-3 hidden-xs text-right">
<a class="button size-1 style-5" href="#">
<span class="button-wrapper">
<span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
<span class="text">prev page</span>
</span>
</a>
</div>
</div> -->

        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="empty-space col-md-b70"></div>
      </div>


      <div class="empty-space col-xs-b25 col-sm-b50"></div>


    </div>
  </div>
</div>

<div class="empty-space col-xs-b15 col-sm-b45"></div>

<!-- popup -->
<div class="popup-wrapper">
  <div class="bg-layer"></div>
  <div style="text-align:center;">Belum ada produk</div>
</div>
<!-- popup -->
<!-- FOOTER -->
<style>
  #snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 9999;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
  }

  #snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
  }

  @-webkit-keyframes fadein {
    from {
      bottom: 0;
      opacity: 0;
    }

    to {
      bottom: 30px;
      opacity: 1;
    }
  }

  @keyframes fadein {
    from {
      bottom: 0;
      opacity: 0;
    }

    to {
      bottom: 30px;
      opacity: 1;
    }
  }

  @-webkit-keyframes fadeout {
    from {
      bottom: 30px;
      opacity: 1;
    }

    to {
      bottom: 0;
      opacity: 0;
    }
  }

  @keyframes fadeout {
    from {
      bottom: 30px;
      opacity: 1;
    }

    to {
      bottom: 0;
      opacity: 0;
    }
  }
</style>



<?php get_footer(); ?>