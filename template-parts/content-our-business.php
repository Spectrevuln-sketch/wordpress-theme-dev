<?php

/**
 *  Page about-us template
 *
 * @package Ecommerce_theme
 */
get_header();
?>
<div class="page-our-business">







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
            <h1 class="h1 light">Our Business</h1>
            <div class="title-underline center"><span></span></div>
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
        <div class="simple-article size-4 grey">Bergerak dalam bidang Distribusi Produk Herbal & Skin Care. </div>
      </div>
      <div class="col-sm-7">
        <div class="simple-article size-3">
          <p>Menebar manfaat ke masyarakat indonesia pada khususnya dan masyarakat dunia pada umumnya adalah visi dari perusahaan ini berawal dari sebuah usaha kecil menengah di sebuah Ruko di daerah jakarta selatan dengan produk yang masih sedikit, jumlah mitra dalam hitungan jari pada tahun 2015.Berbekal kerja keras dan semangat menebar manfaat, saat ini PT SR Herbal Perkasa telah berkantor di daerah Jakarta Selatan, memiliki Karyawan lebih dari 200 orang.</p>

          <p>Memiliki 3 gudang distribusi dengan didukung 3 Pabrik yang berdiri di daerah Gunung Sindur Kabupaten Bogor Jawa Barat. 15.000 mitra tersebar di wilayah indonesia, dengan 157 Distributor Utama Semangat Menebar manfaat saat ini menjadi semangat bersama antara manajemen, staf dan mitra SR12, dengan slogan. #suksesmaksimal #gointernasional</p>
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

            <div class="empty-space col-xs-b35"></div>
          </div>
        </div>
      </div>
      <div class="row-background big left hidden-xs">
        <img src="https://sr12herbalskincare.co.id/gambar/bisnis/profil_bisnis_2020-05-111441_background-13b.png" alt="" />
      </div>
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