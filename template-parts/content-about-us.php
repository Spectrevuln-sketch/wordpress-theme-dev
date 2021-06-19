<?php

/**
 *  Page about-us template
 *
 * @package Ecommerce_theme
 */
get_header();
?>
<div class="page-about-us">

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
  <div class="block-entry fixed-background" style="background-image: url(./style/img/background-24.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="cell-view simple-banner-height text-center">
            <div class="empty-space col-xs-b35 col-sm-b70"></div>
            <h1 class="h1 light">About Us</h1>
            <div class="title-underline center"><span></span></div>
            <!-- <div class="simple-article light transparent size-4">In feugiat molestie tortor a malesuada. Etiam a venenatis ipsum. Proin pharetra elit at feugiat commodo vel placerat tincidunt sapien nec</div> -->
            <div class="empty-space col-xs-b35 col-sm-b70"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="empty-space col-xs-b35 col-md-b70"></div>
  <div class="empty-space col-xs-b35 col-md-b70"></div>

  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <div class="simple-article size-3 grey uppercase col-xs-b5">about us</div>
        <div class="h2">PT SR12 HERBAL PERKASA</div>
        <div class="title-underline left"><span></span></div>
      </div>
      <div class="col-sm-7">
        <div class="simple-article size-3">
          <p>PT SR12 Herbal Perkasa, merupakan perusahaan yang bergerak di bidang Herbal &amp; Skin Care berdiri tahun 2015 oleh Toni Firmansyah, S.Farm.,Apt. &amp; Asrianty Salam, S. Farm. Mempunyai visi yang besar untuk memberikan nilai manfaat bagi semua orang, telah membawa perusahaan ini bertumbuh dengan cepat dan disambut baik oleh masyarakat.</p>

          <p>Formula-formula SR12 Herbal Skin Care merupakan hasil penelitian dari beberapa saintis yang bersertifikasi, sehingga dihasilkan produk-produk kosmetik yang baik dan aman digunakan serta telah teruji di laboratorium Sucofindo bebas Mercury &amp; Hydroquinon dan telah terdaftar di BPOM RI.</p>

          <p>PT SR12 Herbal Perkasa saat ini memiliki 3 pabrik yang terletak di Provinsi Jawa Barat, ditangani oleh tenaga profesional di bidangnya. Tercatat sampai oktober 2019, SR12 memiliki ratusan Distributor dan belasan ribu Mitra yang tersebar di seluruh indonesia sebagai penyalur produk yang dihasilkan.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="empty-space col-xs-b35 col-md-b70"></div>

  <div class="block-entry" style="background-image: url(./style/img/background-4b.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-6">
          <div class="cell-view simple-banner-height">
            <div class="empty-space col-xs-b35"></div>
            <div class="simple-article light transparent size-3 uppercase col-xs-b5">VISI</div>
            <h2 class="h2 light">KAMI</h2>
            <div class="title-underline left light"><span></span></div>
            <div class="simple-article light size-4 col-xs-b20">Menebarkan manfaat bagi semua orang</div>
            <div class="empty-space col-xs-b35"></div>
          </div>
        </div>
      </div>
      <div class="row-background big left hidden-xs">
        <img src="https://sr12herbalskincare.co.id/gambar/profilperusahaan/profil_perusahaan_2020-05-111430_background-13b.png" alt="" />
      </div>
    </div>
  </div>

  <div class="empty-space col-xs-b35 col-md-b70"></div>
  <div class="container">
    <div class="text-center">
      <div class="simple-article size-3 grey uppercase col-xs-b5">MISI</div>
      <div class="h2">KAMI</div>
      <div class="title-underline center"><span></span></div>
    </div>
  </div>

  <div class="container">
    <div class="slider-wrapper">
      <div class="swiper-button-prev hidden"></div>
      <div class="swiper-button-next hidden"></div>
      <div class="swiper-container" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lt-slides="3" data-slides-per-view="3" data-space="30">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="icon-description-shortcode style-2">
              <img class="image-icon image-thumbnail rounded-image" src="https://sr12herbalskincare.co.id/style/img/thumbnail-35.jpg" alt="" />
              <div class="content">
                <h6 class="title h6">Menghasilkan produk yang berkualitas secara berkesinambungan</h6>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="icon-description-shortcode style-2">
              <img class="image-icon image-thumbnail rounded-image" src="https://sr12herbalskincare.co.id/style/img/thumbnail-36.jpg" alt="" />
              <div class="content">
                <h6 class="title h6">Membangun SDM yang berkualitas dan profesional</h6>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="icon-description-shortcode style-2">
              <img class="image-icon image-thumbnail rounded-image" src="https://sr12herbalskincare.co.id/style/img/thumbnail-37.jpg" alt="" />
              <div class="content">
                <h6 class="title h6">Melakukan perbaikan secara berkesinambungan untuk memberikan nilai tambah</h6>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="icon-description-shortcode style-2">
              <img class="image-icon image-thumbnail rounded-image" src="https://sr12herbalskincare.co.id/style/img/thumbnail-38.jpg" alt="" />
              <div class="content">
                <h6 class="title h6">Menjalin kerjasama yang berlandaskan asas kemanfaatan bersama</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination relative-pagination"></div>
      </div>
    </div>
  </div>

  <div class="empty-space col-xs-b35 col-md-b70"></div>
  <div class="empty-space col-xs-b35 col-md-b70"></div>

  <div class="container">
    <div class="text-center">
      <div class="simple-article size-3 grey uppercase col-xs-b5">our team</div>
      <div class="h2">SUSUNAN DIREKSI DAN DEWAN KOMISARIS</div>
      <div class="title-underline center"><span></span></div>
    </div>
  </div>

  <div class="empty-space col-xs-b35 col-md-b70"></div>

  <div class="container">
    <div class="slider-wrapper our-team-slider">
      <div class="swiper-button-prev hidden-xs hidden-sm"></div>
      <div class="swiper-button-next hidden-xs hidden-sm"></div>
      <div class="swiper-container" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lt-slides="4" data-slides-per-view="4">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="product-shortcode style-9">
              <div class="preview">
                <img src="https://sr12herbalskincare.co.id/gambar/pegawai/Direktur-Utama.png" alt="" />
              </div>
              <div class="content">
                <div class="title">
                  <div class="simple-article size-1 uppercase color col-xs-b5">direktur utama</div>
                  <div class="h6">Toni Firmansyah</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-shortcode style-9">
              <div class="preview">
                <img src="https://sr12herbalskincare.co.id/gambar/pegawai/Komisaris-Utama1.png" alt="" />
              </div>
              <div class="content">
                <div class="title">
                  <div class="simple-article size-1 uppercase color col-xs-b5">komisaris utama</div>
                  <div class="h6">Asrianty Salam</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-shortcode style-9">
              <div class="preview">
                <img src="https://sr12herbalskincare.co.id/gambar/pegawai/Shendy-Yulian.png" alt="" />
              </div>
              <div class="content">
                <div class="title">
                  <div class="simple-article size-1 uppercase color col-xs-b5">komisaris</div>
                  <div class="h6">Shendy Yulian</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-shortcode style-9">
              <div class="preview">
                <img src="https://sr12herbalskincare.co.id/gambar/pegawai/Deni-Abdul-Hakim.png" alt="" />
              </div>
              <div class="content">
                <div class="title">
                  <div class="simple-article size-1 uppercase color col-xs-b5">komisaris</div>
                  <div class="h6">Deni Abdul Hakim</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-shortcode style-9">
              <div class="preview">
                <img src="https://sr12herbalskincare.co.id/gambar/pegawai/Saefulloh-Lukman.png" alt="" />
              </div>
              <div class="content">
                <div class="title">
                  <div class="simple-article size-1 uppercase color col-xs-b5">komisaris</div>
                  <div class="h6">Saefulloh Lukman</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-shortcode style-9">
              <div class="preview">
                <img src="https://sr12herbalskincare.co.id/gambar/pegawai/sr12komisaris.png" alt="" />
              </div>
              <div class="content">
                <div class="title">
                  <div class="simple-article size-1 uppercase color col-xs-b5">komisaris</div>
                  <div class="h6">H. Jafri</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination relative-pagination visible-xs visible-sm"></div>
      </div>
    </div>
  </div>

  <div class="empty-space col-xs-b35 col-md-b70"></div>
  <div class="empty-space col-xs-b35 col-md-b70"></div>
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
  <script>
    /* when document is ready */
    $(function() {
      /* initiate plugin */
      $("div.holder").jPages({
        containerID: "itemContainer"
      });
    });
  </script>
  <!-- pagination -->



  <?php get_footer(); ?>