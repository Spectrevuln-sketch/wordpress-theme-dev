<?php

/**
 *  Page about-us template
 *
 * @package Ecommerce_theme
 */
get_header();
?>




<body>


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
  <div class="block-entry fixed-background" style="background-image: url(./style/img/background-22.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="cell-view simple-banner-height text-center">
            <div class="empty-space col-xs-b35 col-sm-b70"></div>
            <h1 class="h1 light">SR12 HERBALSKINCARE</h1>
            <div class="title-underline center"><span></span></div>
            <div class="simple-article light transparent size-4">SR12 HerbalskinCare mengajak anda untuk ikut bergabung menjadi bagian dari SR12 herbalskincare family yang terjaring dalam Distributor / agen SR12 herbalskincare di kota anda.</div>
            <div class="empty-space col-xs-b35 col-sm-b70"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row nopadding">
    <div class="col-md-6">
      <div class="block-entry" style="background-image: url(./style/img/background-23.jpg);">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="cell-view simple-banner-height middle text-center">
                <div class="empty-space col-xs-b35 col-sm-b70"></div>
                <div class="simple-article size-3 light transparent uppercase col-xs-b5">Fokus</div>
                <h2 class="h2 light">Kami</h2>
                <div class="title-underline light center"><span></span></div>
                <div class="simple-article light transparent size-4">Bisnis kami memberikan kontribusi yang signifikan bagi masyarakat. Kami meningkatkan kehidupan masyarakat melalui merek kami dan membantu melatih dan mengembangkan orang untuk dapat menjadi wirausaha.</div>
                <div class="empty-space col-xs-b35 col-sm-b70"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
            <div class="cell-view simple-banner-height middle">
              <div class="empty-space col-xs-b35 col-sm-b70"></div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6" style="height:180px;">
                    <div class="col-xs-text-center col-sm-text-left">
                      <div class="simple-article size-2 uppercase color col-xs-b5">SERVICE</div>
                      <h5 class="h5 col-xs-b5">TERBAIK</h5>
                      <div class="simple-article size-2">Kami berkomitmen untuk memberikan service yang terbaik untuk pelanggan setia SR12 herbalskincare</div>
                    </div>
                    <div class="empty-space col-xs-b30 col-sm-b60"></div>
                  </div>
                  <div class="col-sm-6" style="height:180px;">
                    <div class="col-xs-text-center col-sm-text-left">
                      <div class="simple-article size-2 uppercase color col-xs-b5">PRODUK TERPERCAYA</div>
                      <h5 class="h5 col-xs-b5">DAN MEMILIKI LEGALITAS RESMI</h5>
                      <div class="simple-article size-2">SR12 Herbalskincare sudah mendapatkan izin Badan POM</div>
                    </div>
                    <div class="empty-space col-xs-b30 col-sm-b60"></div>
                  </div>
                  <div class="col-sm-6" style="height:180px;">
                    <div class="col-xs-text-center col-sm-text-left">
                      <div class="simple-article size-2 uppercase color col-xs-b5">CUSTOMER SUPPORT</div>
                      <h5 class="h5 col-xs-b5">ONLINE 24 JAM</h5>
                      <div class="simple-article size-2">Kami memiliki tim customer support yang online 24 jam siap menangani segala permintaan anda</div>
                    </div>
                    <div class="empty-space col-xs-b30 col-sm-b60"></div>
                  </div>
                  <div class="col-sm-6" style="height:180px;">
                    <div class="col-xs-text-center col-sm-text-left">
                      <div class="simple-article size-2 uppercase color col-xs-b5">JAMINAN</div>
                      <h5 class="h5 col-xs-b5">AMAN</h5>
                      <div class="simple-article size-2">produk perawatan herbal yang sudah bpom dan aman untuk berbagai macam kebutuhan kecantikan dan kesehatan</div>
                    </div>
                    <div class="empty-space col-xs-b30 col-sm-b60"></div>
                  </div>
                  <div class="col-sm-6" style="height:180px;">
                    <div class="col-xs-text-center col-sm-text-left">
                      <div class="simple-article size-2 uppercase color col-xs-b5">PELUANG</div>
                      <h5 class="h5 col-xs-b5">BISNIS SR12 HERBALSKINCARE</h5>
                      <div class="simple-article size-2">Anda dapat berkontribusi menjadi Agen, Sub Agen, Reseller dan Marketer Sr12 Skincare</div>
                    </div>
                    <div class="empty-space col-xs-b30 col-sm-b60"></div>
                  </div>
                  <div class="col-sm-6" style="height:180px;">
                    <div class="col-xs-text-center col-sm-text-left">
                      <div class="simple-article size-2 uppercase color col-xs-b5">PRODUK BERKUALITAS</div>
                      <h5 class="h5 col-xs-b5">HARGA TERJANGKAU</h5>
                      <div class="simple-article size-2">Di SR12 Herbalskincare Produk kecantikan dengan harga terjangkau namun memiliki hasil yang memuaskan</div>
                    </div>
                    <div class="empty-space col-xs-b30 col-sm-b60"></div>
                  </div>
                </div>
              </div>
              <div class="empty-space col-xs-b35 col-sm-b70"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="empty-space col-xs-b35 col-md-b70"></div>
  <div class="empty-space col-xs-b35 col-md-b70"></div>

  <div class="container">
    <div class="text-center">
      <div class="simple-article size-3 grey uppercase col-xs-b5">Bagaimana Cara </div>
      <div class="h2">menjadi tim member sr12 herbalskincare </div>
      <div class="title-underline center"><span></span></div>
    </div>
  </div>

  <div class="empty-space col-sm-b15 col-md-b50"></div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="icon-description-shortcode style-1">
          <img class="icon-image" src="https://sr12herbalskincare.co.id/gambar/registrasicommunity/icon-22.png" alt="" />
          <div class="title h6">CARA DAFTAR MEMBER</div>
          <div class="description simple-article size-2">anda dapat menghubungi distributor sr12 melalui https://sr12herbalskincare.co.id/distributor/list/35 jika anda hendak menjadi member</div>
        </div>
        <div class="empty-space col-xs-b40"></div>
      </div>
      <div class="col-sm-4">
        <div class="icon-description-shortcode style-1">
          <img class="icon-image" src="https://sr12herbalskincare.co.id/gambar/registrasicommunity/icon-23.png" alt="" />
          <div class="title h6">DISTRIBUTOR SR12 SKINCARE</div>
          <div class="description simple-article size-2">anda dapat menghubungi distributor sr12 di kota anda apabila anda ingin menjadi distributor melalui https://sr12herbalskincare.co.id/distributor/list/35</div>
        </div>
        <div class="empty-space col-xs-b40"></div>
      </div>
      <div class="col-sm-4">
        <div class="icon-description-shortcode style-1">
          <img class="icon-image" src="https://sr12herbalskincare.co.id/gambar/registrasicommunity/icon-24.png" alt="" />
          <div class="title h6">AGEN SR12 SKINCARE</div>
          <div class="description simple-article size-2">level setelah distributor yang dimana jumlahnya dibatasi di berbagai kota di indonesia, agen ini tentunya direkomendasikan khusus mencari sub agen ataupun reseller untuk berjualan produk sr12</div>
        </div>
        <div class="empty-space col-xs-b40"></div>
      </div>
      <div class="col-sm-4">
        <div class="icon-description-shortcode style-1">
          <img class="icon-image" src="https://sr12herbalskincare.co.id/gambar/registrasicommunity/icon-25.png" alt="" />
          <div class="title h6">SUB AGEN SR12 SKINCARE</div>
          <div class="description simple-article size-2">level setelah agen yang dimana jumlahnya dibatasi di berbagai kota di indonesia, agen ini tentunya direkomendasikan khusus mencari reseller untuk berjualan produk sr12</div>
        </div>
        <div class="empty-space col-xs-b40"></div>
      </div>
      <div class="col-sm-4">
        <div class="icon-description-shortcode style-1">
          <img class="icon-image" src="https://sr12herbalskincare.co.id/gambar/registrasicommunity/icon-26.png" alt="" />
          <div class="title h6">RESELLER SR12 SKINCARE</div>
          <div class="description simple-article size-2">reseller ini tentunya direkomendasikan khusus mencari end user atau juga bisa merekrut marketer untuk berjualan produk sr12 yang bisa secara langsung ke end user atau customer.</div>
        </div>
        <div class="empty-space col-xs-b40"></div>
      </div>
      <div class="col-sm-4">
        <div class="icon-description-shortcode style-1">
          <img class="icon-image" src="https://sr12herbalskincare.co.id/gambar/registrasicommunity/icon-27.png" alt="" />
          <div class="title h6">MARKETER SR12 SKINCARE</div>
          <div class="description simple-article size-2">level ini memang paling banyak peminatnya selain dari reseller, karena syaratnya yang paling ringan dan bisa dropship juga.</div>
        </div>
        <div class="empty-space col-xs-b40"></div>
      </div>

    </div>

  </div>

  <div class="empty-space col-sm-b15 col-md-b50"></div>
  <div class="empty-space col-xs-b35 col-md-b70"></div>

  <div class="slider-wrapper">
    <div class="swiper-button-prev visible-lg"></div>
    <div class="swiper-button-next visible-lg"></div>
    <div class="swiper-container" data-parallax="1" data-auto-height="1">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="block-entry" style="background-image: url(./style/img/background-18.jpg);">
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <div class="cell-view simple-banner-height big">
                    <div class="empty-space col-xs-b35 col-sm-b70"></div>
                    <div data-swiper-parallax-x="-600">
                      <h2 class="h1 light">Apa kata mereka</h2>
                      <div class="title-underline left light"><span></span></div>
                    </div>
                    <div data-swiper-parallax-x="-400">
                      <div class="simple-article light size-4">alhamdulillah setelah bergabung menjadi keluarga komunitas SR12 herbalskincare, saya merasakan dampak yang baik bagi perekonomian saya dan keluarga</div>
                    </div>
                    <div class="empty-space col-xs-b70"></div>
                  </div>
                </div>
              </div>
              <div class="row-background right hidden-xs">
                <img src="https://sr12herbalskincare.co.id/gambar/testimoni/background-19.png" alt="" data-swiper-parallax-x="-600" />
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="block-entry" style="background-image: url(./style/img/background-18.jpg);">
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <div class="cell-view simple-banner-height big">
                    <div class="empty-space col-xs-b35 col-sm-b70"></div>
                    <div data-swiper-parallax-x="-600">
                      <h2 class="h1 light">Apa kata mereka</h2>
                      <div class="title-underline left light"><span></span></div>
                    </div>
                    <div data-swiper-parallax-x="-400">
                      <div class="simple-article light size-4">SR12 HerbalskinCare bukan hanya soal menjual sebuah produk, tapi mengenai bagaimana tumbuh bersama</div>
                    </div>
                    <div class="empty-space col-xs-b70"></div>
                  </div>
                </div>
              </div>
              <div class="row-background right hidden-xs">
                <img src="https://sr12herbalskincare.co.id/gambar/testimoni/background-13.png" alt="" data-swiper-parallax-x="-600" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination swiper-pagination-white hidden-lg"></div>
    </div>
  </div>

  <div class="empty-space col-xs-b35 col-md-b70"></div>

  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6">
        <div class="cell-view simple-banner-height text-center">
          <div class="empty-space col-sm-b35"></div>
          <div class="simple-article grey uppercase size-5 col-xs-b5"><span class="color">SPECIAL OFFERS</span> for subscribers</div>
          <h3 class="h3 col-xs-b15">NEW OFFERS EVERY WEEK DISCOUNT SYSTEM BEST PRICES</h3>
          <div class="simple-article size-3 col-xs-b25 col-sm-b50">Dapatkan penawaran khusus dan berbagai tips berguna untuk bisnis, langsung di email Anda</div>
          <div class="single-line-form">
            <input class="simple-input" type="text" value="" placeholder="Enter your email" name="email" id="email">
            <div class="button size-2 style-3">
              <span class="button-wrapper">
                <span class="icon"><img src="https://sr12herbalskincare.co.id/gambar/subscribe/nuy_nunjukkk.png" alt=""></span>
                <span class="text">submit</span>
              </span>
              <input type="button" id="newsletter" value="">
            </div>
            <script type="text/javascript">
              $(document).ready(function() {


                $("#newsletter").click(function() {

                  var email = $("#email").val();
                  //alert(user);
                  if (email == '') {
                    alert('Maaf, Email tidak boleh kosong');
                    $("#email").focus();
                    return false();
                  }

                  $.ajax({
                    type: "POST",
                    url: "https://sr12herbalskincare.co.id/newsletter/insert",
                    data: "email=" + email,
                    beforeSend: function() {
                      // setting a timeout
                      $.LoadingOverlay("show");
                    },
                    success: function(msg) {
                      alert('Terima kasih, email sudah berhasil dikirim');
                      //document.location.href="administrator/page";
                      location.reload();
                    }
                  });

                });

              });
            </script>
          </div>
          <div class="empty-space col-xs-b35"></div>
        </div>
      </div>
    </div>
    <div class="row-background left hidden-xs">
      <img src="https://sr12herbalskincare.co.id/gambar/subscribe/nuy_nunjukkk.png" alt="" />
    </div>
  </div>

  </div>
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