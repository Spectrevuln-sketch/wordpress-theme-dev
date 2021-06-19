<?php

/**
 *  Page about-us template
 *
 * @package Ecommerce_theme
 */
get_header();
?>
<div class="page-mitra">


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

  </header>

  <div class="header-empty-space"></div>
  <div class="container">
    <div class="empty-space col-xs-b15 col-sm-b30"></div>
    <div class="breadcrumbs">
      <a href="#">home</a>
      <a href="#">distributor area</a>
    </div>

    <div class="text-center">
      <div class="h2">Distributor Area</div>
      <div class="title-underline center"><span></span></div>
    </div>
  </div>

  <div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 5%;">No</th>
          <th>Provinsi</th>
          <th>Lihat Distributor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-title=" ">1</td>
          <td data-title=" ">
            <h6 class="h6">Aceh
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/11">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">2</td>
          <td data-title=" ">
            <h6 class="h6">Bali
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/51">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">3</td>
          <td data-title=" ">
            <h6 class="h6">Banten
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/36">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">4</td>
          <td data-title=" ">
            <h6 class="h6">Bengkulu
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/17">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">5</td>
          <td data-title=" ">
            <h6 class="h6">DI Yogyakarta
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/34">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">6</td>
          <td data-title=" ">
            <h6 class="h6">DKI Jakarta
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/31">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">7</td>
          <td data-title=" ">
            <h6 class="h6">Gorontalo
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/75">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">8</td>
          <td data-title=" ">
            <h6 class="h6">Jambi
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/15">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">9</td>
          <td data-title=" ">
            <h6 class="h6">Jawa Barat
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/32">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">10</td>
          <td data-title=" ">
            <h6 class="h6">Jawa Tengah
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/33">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">11</td>
          <td data-title=" ">
            <h6 class="h6">Jawa Timur
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/35">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">12</td>
          <td data-title=" ">
            <h6 class="h6">Kalimantan Barat
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/61">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">13</td>
          <td data-title=" ">
            <h6 class="h6">Kalimantan Selatan
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/63">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">14</td>
          <td data-title=" ">
            <h6 class="h6">Kalimantan Tengah
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/62">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">15</td>
          <td data-title=" ">
            <h6 class="h6">Kalimantan Timur
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/64">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">16</td>
          <td data-title=" ">
            <h6 class="h6">Kalimantan Utara
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/65">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">17</td>
          <td data-title=" ">
            <h6 class="h6">Kepulauan Bangka Belitung
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/19">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">18</td>
          <td data-title=" ">
            <h6 class="h6">Kepulauan Riau
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/21">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">19</td>
          <td data-title=" ">
            <h6 class="h6">Lampung
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/18">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">20</td>
          <td data-title=" ">
            <h6 class="h6">Maluku
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/81">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">21</td>
          <td data-title=" ">
            <h6 class="h6">Maluku Utara
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/82">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">22</td>
          <td data-title=" ">
            <h6 class="h6">Nusa Tenggara Barat
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/52">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">23</td>
          <td data-title=" ">
            <h6 class="h6">Nusa Tenggara Timur
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/53">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">24</td>
          <td data-title=" ">
            <h6 class="h6">Papua
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/92">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">25</td>
          <td data-title=" ">
            <h6 class="h6">Papua Barat
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/91">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">26</td>
          <td data-title=" ">
            <h6 class="h6">Riau
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/14">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">27</td>
          <td data-title=" ">
            <h6 class="h6">Sulawesi Barat
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/76">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">28</td>
          <td data-title=" ">
            <h6 class="h6">Sulawesi Selatan
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/73">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">29</td>
          <td data-title=" ">
            <h6 class="h6">Sulawesi Tengah
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/72">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">30</td>
          <td data-title=" ">
            <h6 class="h6">Sulawesi Tenggara
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/74">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">31</td>
          <td data-title=" ">
            <h6 class="h6">Sulawesi Utara
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/71">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">32</td>
          <td data-title=" ">
            <h6 class="h6">Sumatera Barat
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/13">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">33</td>
          <td data-title=" ">
            <h6 class="h6">Sumatera Selatan
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/16">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td data-title=" ">34</td>
          <td data-title=" ">
            <h6 class="h6">Sumatera Utara
          </td>
          <td data-title=" ">
            <div>
              <a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/distributor/list/12">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Lihat Distributor</span>
                </span>
              </a>
            </div>
          </td>
        </tr>

      </tbody>
    </table>
  </div>

  <div class="empty-space col-xs-b35 col-md-b70"></div><!-- FOOTER -->
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