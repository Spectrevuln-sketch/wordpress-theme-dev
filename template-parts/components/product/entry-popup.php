<?php

/**
 * Template for entry content.
 *
 * To be used inside WordPress The Loop.
 *
 * @package Ecommerce_theme
 */

?>


<!-- popup -->
<div class="popup-wrapper">
  <div class="bg-layer"></div>
  <div class="popup-content" data-rel="102">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100005">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/produk_073411_LULUR-REMPAH-BENGKOANG.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/produk_073411_LULUR-REMPAH-BENGKOANG.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">BODY CARE</div>
            <div class="h3 col-xs-b25">LULUR REMPAH BENGKOANG</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp40,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100005</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    27200 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18200100281</p>

              <p>Netto 100 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100005" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100005" min="1" max="100" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '100';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100005");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100005").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100005").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100005").val();
                      var maximal = '100';
                      var min = $("#product-vqty3PRO100005").attr("min");
                      var max = $("#product-vqty3PRO100005").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100005").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100005").val(max);
                      } else {
                        $("#product-vqty3PRO100005").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/lulur-rempah-bengkoang">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100005").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100005').click(function() {
                    var kode_produk = 'PRO100005';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100005").val();
                    var catatan = $("#catatanPRO100005").val();
                    var jenis_variant = $("#jenis_variantPRO100005").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100005").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100005").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="103">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100006">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/produk_073454_SUNCARE-LOTION.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/produk_073454_SUNCARE-LOTION.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">BODY CARE</div>
            <div class="h3 col-xs-b25">SUNCARE LOTION</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp53,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100006</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    272000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18181700072</p>

              <p>Netto 15&nbsp;g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100006" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100006" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100006");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100006").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100006").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100006").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100006").attr("min");
                      var max = $("#product-vqty3PRO100006").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100006").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100006").val(max);
                      } else {
                        $("#product-vqty3PRO100006").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/suncare-lotion">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100006").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100006').click(function() {
                    var kode_produk = 'PRO100006';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100006").val();
                    var catatan = $("#catatanPRO100006").val();
                    var jenis_variant = $("#jenis_variantPRO100006").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100006").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100006").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="104">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100007">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/produk_073605_SCRUB-CREAM-COFFEE.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/produk_073605_SCRUB-CREAM-COFFEE.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">BODY CARE</div>
            <div class="h3 col-xs-b25">SCRUB CREAM COFFEE</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp40,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100007</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    272000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18170700284</p>

              <p>Netto 125 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100007" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100007" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100007");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100007").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100007").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100007").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100007").attr("min");
                      var max = $("#product-vqty3PRO100007").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100007").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100007").val(max);
                      } else {
                        $("#product-vqty3PRO100007").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/scrub-cream-coffee">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100007").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100007').click(function() {
                    var kode_produk = 'PRO100007';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100007").val();
                    var catatan = $("#catatanPRO100007").val();
                    var jenis_variant = $("#jenis_variantPRO100007").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100007").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100007").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="105">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100008">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/produk_074113_MASSAGE-OIL-BULUS.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/produk_074113_MASSAGE-OIL-BULUS.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">BODY CARE</div>
            <div class="h3 col-xs-b25">MASSAGE OIL BULUS</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp95,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100008</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    272000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18170101720</p>

              <p>Netto 20 ml</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100008" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100008" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100008");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100008").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100008").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100008").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100008").attr("min");
                      var max = $("#product-vqty3PRO100008").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100008").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100008").val(max);
                      } else {
                        $("#product-vqty3PRO100008").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/massage-oil-bulus">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100008").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100008').click(function() {
                    var kode_produk = 'PRO100008';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100008").val();
                    var catatan = $("#catatanPRO100008").val();
                    var jenis_variant = $("#jenis_variantPRO100008").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100008").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100008").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="106">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100009">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/produk_074416_LIGHTENING-BODY-LOTION.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/produk_074416_LIGHTENING-BODY-LOTION.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">BODY CARE</div>
            <div class="h3 col-xs-b25">LIGHTENING BODY LOTION</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp46,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100009</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    272000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18190122375</p>

              <p>Netto 100 ml</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100009" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100009" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100009");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100009").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100009").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100009").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100009").attr("min");
                      var max = $("#product-vqty3PRO100009").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100009").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100009").val(max);
                      } else {
                        $("#product-vqty3PRO100009").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/lightening-body-lotion">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100009").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100009').click(function() {
                    var kode_produk = 'PRO100009';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100009").val();
                    var catatan = $("#catatanPRO100009").val();
                    var jenis_variant = $("#jenis_variantPRO100009").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100009").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100009").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="109">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100012">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/MILK-KEFIR-MASK.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/MILK-KEFIR-MASK.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE MASK</div>
            <div class="h3 col-xs-b25">MILK KEFIR MASK</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp65,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100012</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    272000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18200200296</p>

              <p>Netto 50 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100012" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100012" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100012");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100012").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100012").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100012").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100012").attr("min");
                      var max = $("#product-vqty3PRO100012").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100012").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100012").val(max);
                      } else {
                        $("#product-vqty3PRO100012").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/milk-kefir-mask">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100012").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100012').click(function() {
                    var kode_produk = 'PRO100012';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100012").val();
                    var catatan = $("#catatanPRO100012").val();
                    var jenis_variant = $("#jenis_variantPRO100012").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100012").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100012").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="110">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100013">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/ETAWA-KEFIR-MASK.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/ETAWA-KEFIR-MASK.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE MASK</div>
            <div class="h3 col-xs-b25">ETAWA KEFIR MASK</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp65,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100013</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    272000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18200200348</p>

              <p>Netto 50 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100013" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100013" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100013");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100013").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100013").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100013").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100013").attr("min");
                      var max = $("#product-vqty3PRO100013").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100013").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100013").val(max);
                      } else {
                        $("#product-vqty3PRO100013").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/etawa-kefir-mask">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100013").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100013').click(function() {
                    var kode_produk = 'PRO100013';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100013").val();
                    var catatan = $("#catatanPRO100013").val();
                    var jenis_variant = $("#jenis_variantPRO100013").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100013").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100013").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="111">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100014">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/COFFEE-KEFIR-MASK.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/COFFEE-KEFIR-MASK.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE MASK</div>
            <div class="h3 col-xs-b25">COFFEE KEFIR MASK</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp65,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100014</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    272000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18200200349</p>

              <p>Netto 50 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100014" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100014" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100014");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100014").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100014").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100014").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100014").attr("min");
                      var max = $("#product-vqty3PRO100014").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100014").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100014").val(max);
                      } else {
                        $("#product-vqty3PRO100014").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/coffee-kefir-mask">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100014").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100014').click(function() {
                    var kode_produk = 'PRO100014';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100014").val();
                    var catatan = $("#catatanPRO100014").val();
                    var jenis_variant = $("#jenis_variantPRO100014").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100014").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100014").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="112">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100015">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/COFFEE-MASK.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/COFFEE-MASK.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE MASK</div>
            <div class="h3 col-xs-b25">COFFEE MASK</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp75,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100015</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    272000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18200200016</p>

              <p>Netto 12 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100015" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100015" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100015");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100015").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100015").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100015").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100015").attr("min");
                      var max = $("#product-vqty3PRO100015").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100015").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100015").val(max);
                      } else {
                        $("#product-vqty3PRO100015").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/coffee-mask">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100015").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100015').click(function() {
                    var kode_produk = 'PRO100015';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100015").val();
                    var catatan = $("#catatanPRO100015").val();
                    var jenis_variant = $("#jenis_variantPRO100015").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100015").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100015").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="113">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100016">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/Body-Wash.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/Body-Wash.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">BODY CARE</div>
            <div class="h3 col-xs-b25">BODY WASH</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp60,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100016</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    272000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18200700808</p>

              <p>Netto 250 ml</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100016" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100016" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100016");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100016").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100016").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100016").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100016").attr("min");
                      var max = $("#product-vqty3PRO100016").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100016").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100016").val(max);
                      } else {
                        $("#product-vqty3PRO100016").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/body-wash">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100016").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100016').click(function() {
                    var kode_produk = 'PRO100016';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100016").val();
                    var catatan = $("#catatanPRO100016").val();
                    var jenis_variant = $("#jenis_variantPRO100016").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100016").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100016").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="114">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100017">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/BODY-LOTION.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/BODY-LOTION.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">BODY CARE</div>
            <div class="h3 col-xs-b25">BODY LOTION</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp46,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100017</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    257900 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18170104162</p>

              <p>Netto 100 ml</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100017" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100017" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100017");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100017").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100017").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100017").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100017").attr("min");
                      var max = $("#product-vqty3PRO100017").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100017").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100017").val(max);
                      } else {
                        $("#product-vqty3PRO100017").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/body-lotion">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100017").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100017').click(function() {
                    var kode_produk = 'PRO100017';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100017").val();
                    var catatan = $("#catatanPRO100017").val();
                    var jenis_variant = $("#jenis_variantPRO100017").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100017").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100017").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="115">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100018">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/Sunblock.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/Sunblock.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">BODY CARE</div>
            <div class="h3 col-xs-b25">SUNBLOCK</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp55,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100018</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18201700201</p>

              <p>Netto 15 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100018" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100018" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100018");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100018").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100018").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100018").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100018").attr("min");
                      var max = $("#product-vqty3PRO100018").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100018").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100018").val(max);
                      } else {
                        $("#product-vqty3PRO100018").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/sunblock">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100018").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100018').click(function() {
                    var kode_produk = 'PRO100018';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100018").val();
                    var catatan = $("#catatanPRO100018").val();
                    var jenis_variant = $("#jenis_variantPRO100018").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100018").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100018").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="116">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100019">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/DEODORANT-SPRAY.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/DEODORANT-SPRAY.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">BODY CARE</div>
            <div class="h3 col-xs-b25">DEODORANT SPRAY</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp40,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100019</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    257900 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18200900002</p>

              <p>Netto 60 ml</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100019" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100019" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100019");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100019").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100019").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100019").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100019").attr("min");
                      var max = $("#product-vqty3PRO100019").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100019").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100019").val(max);
                      } else {
                        $("#product-vqty3PRO100019").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/deodorant-spray">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100019").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100019').click(function() {
                    var kode_produk = 'PRO100019';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100019").val();
                    var catatan = $("#catatanPRO100019").val();
                    var jenis_variant = $("#jenis_variantPRO100019").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100019").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100019").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="117">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100020">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/DEODORANT-SPRAY-PREMIUM.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/DEODORANT-SPRAY-PREMIUM.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">BODY CARE</div>
            <div class="h3 col-xs-b25">DEODORANT SPRAY PREMIUM</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp46,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100020</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    257900 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18200900002</p>

              <p>Netto 60 ml</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100020" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100020" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100020");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100020").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100020").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100020").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100020").attr("min");
                      var max = $("#product-vqty3PRO100020").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100020").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100020").val(max);
                      } else {
                        $("#product-vqty3PRO100020").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/deodorant-spray-premium">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100020").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100020').click(function() {
                    var kode_produk = 'PRO100020';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100020").val();
                    var catatan = $("#catatanPRO100020").val();
                    var jenis_variant = $("#jenis_variantPRO100020").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100020").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100020").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="120">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100021">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/BRIGHTENING-DAY-CREAM.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/BRIGHTENING-DAY-CREAM.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">BRIGHTENING DAY CREAM</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp115,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100021</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18200101461</p>

              <p>Netto 10 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100021" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100021" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100021");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100021").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100021").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100021").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100021").attr("min");
                      var max = $("#product-vqty3PRO100021").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100021").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100021").val(max);
                      } else {
                        $("#product-vqty3PRO100021").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/brightening-day-cream">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100021").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100021').click(function() {
                    var kode_produk = 'PRO100021';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100021").val();
                    var catatan = $("#catatanPRO100021").val();
                    var jenis_variant = $("#jenis_variantPRO100021").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100021").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100021").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="121">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100022">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/BRIGHTENING-NIGHT-CREAM.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/BRIGHTENING-NIGHT-CREAM.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">BRIGHTENING NIGHT CREAM</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp115,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100022</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18190122204</p>

              <p>Netto 10 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100022" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100022" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100022");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100022").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100022").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100022").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100022").attr("min");
                      var max = $("#product-vqty3PRO100022").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100022").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100022").val(max);
                      } else {
                        $("#product-vqty3PRO100022").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/brightening-night-cream">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100022").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100022').click(function() {
                    var kode_produk = 'PRO100022';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100022").val();
                    var catatan = $("#catatanPRO100022").val();
                    var jenis_variant = $("#jenis_variantPRO100022").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100022").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100022").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="122">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100023">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/MILK-CLEANSER.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/MILK-CLEANSER.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">MILK CLEANSER</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp65,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100023</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18201200127</p>

              <p>Netto 100 ml</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100023" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100023" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100023");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100023").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100023").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100023").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100023").attr("min");
                      var max = $("#product-vqty3PRO100023").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100023").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100023").val(max);
                      } else {
                        $("#product-vqty3PRO100023").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/milk-cleanser">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100023").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100023').click(function() {
                    var kode_produk = 'PRO100023';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100023").val();
                    var catatan = $("#catatanPRO100023").val();
                    var jenis_variant = $("#jenis_variantPRO100023").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100023").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100023").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="123">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100024">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/GOLD-SERUM.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/GOLD-SERUM.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">GOLD SERUM</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp140,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100024</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18191906262</p>

              <p>Netto 20 ml</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100024" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100024" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100024");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100024").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100024").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100024").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100024").attr("min");
                      var max = $("#product-vqty3PRO100024").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100024").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100024").val(max);
                      } else {
                        $("#product-vqty3PRO100024").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/gold-serum">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100024").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100024').click(function() {
                    var kode_produk = 'PRO100024';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100024").val();
                    var catatan = $("#catatanPRO100024").val();
                    var jenis_variant = $("#jenis_variantPRO100024").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100024").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100024").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="124">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100025">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/KRASNY-DAY-CREAM.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/KRASNY-DAY-CREAM.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">KRASNY DAY CREAM</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp75,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100025</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18130101724</p>

              <p>Netto 10 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100025" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100025" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100025");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100025").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100025").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100025").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100025").attr("min");
                      var max = $("#product-vqty3PRO100025").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100025").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100025").val(max);
                      } else {
                        $("#product-vqty3PRO100025").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/krasny-day-cream">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100025").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100025').click(function() {
                    var kode_produk = 'PRO100025';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100025").val();
                    var catatan = $("#catatanPRO100025").val();
                    var jenis_variant = $("#jenis_variantPRO100025").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100025").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100025").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="125">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100026">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/KRASNY-NIGHT-CREAM.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/KRASNY-NIGHT-CREAM.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">KRASNY NIGHT CREAM</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp75,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100026</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18130101725</p>

              <p>Netto 10 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100026" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100026" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100026");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100026").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100026").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100026").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100026").attr("min");
                      var max = $("#product-vqty3PRO100026").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100026").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100026").val(max);
                      } else {
                        $("#product-vqty3PRO100026").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/krasny-night-cream">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100026").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100026').click(function() {
                    var kode_produk = 'PRO100026';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100026").val();
                    var catatan = $("#catatanPRO100026").val();
                    var jenis_variant = $("#jenis_variantPRO100026").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100026").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100026").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="126">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100027">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/KRASNY-SERUM.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/KRASNY-SERUM.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">KRASNY SERUM</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp120,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100027</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18131900190</p>

              <p>Netto 20 ml</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100027" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100027" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100027");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100027").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100027").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100027").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100027").attr("min");
                      var max = $("#product-vqty3PRO100027").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100027").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100027").val(max);
                      } else {
                        $("#product-vqty3PRO100027").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/krasny-serum">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100027").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100027').click(function() {
                    var kode_produk = 'PRO100027';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100027").val();
                    var catatan = $("#catatanPRO100027").val();
                    var jenis_variant = $("#jenis_variantPRO100027").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100027").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100027").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="127">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100028">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/LIGHTENING-SERUM.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/LIGHTENING-SERUM.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">LIGHTENING SERUM</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp140,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100028</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18191906335</p>

              <p>Netto 20 ml</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100028" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100028" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100028");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100028").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100028").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100028").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100028").attr("min");
                      var max = $("#product-vqty3PRO100028").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100028").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100028").val(max);
                      } else {
                        $("#product-vqty3PRO100028").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/lightening-serum">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100028").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100028').click(function() {
                    var kode_produk = 'PRO100028';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100028").val();
                    var catatan = $("#catatanPRO100028").val();
                    var jenis_variant = $("#jenis_variantPRO100028").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100028").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100028").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="128">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100029">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/REVITALIZING-SERUM.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/REVITALIZING-SERUM.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">REVITALIZING SERUM</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp85,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100029</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18200100596</p>

              <p>Netto 15 ml</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100029" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100029" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100029");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100029").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100029").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100029").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100029").attr("min");
                      var max = $("#product-vqty3PRO100029").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100029").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100029").val(max);
                      } else {
                        $("#product-vqty3PRO100029").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/revitalizing-serum">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100029").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100029').click(function() {
                    var kode_produk = 'PRO100029';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100029").val();
                    var catatan = $("#catatanPRO100029").val();
                    var jenis_variant = $("#jenis_variantPRO100029").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100029").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100029").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="129">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100030">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/SKIN-TIGHTENING-CREAM.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/SKIN-TIGHTENING-CREAM.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">SKIN TIGHTENING CREAM</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp350,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100030</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18180104941</p>

              <p>Netto 20 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100030" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100030" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100030");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100030").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100030").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100030").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100030").attr("min");
                      var max = $("#product-vqty3PRO100030").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100030").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100030").val(max);
                      } else {
                        $("#product-vqty3PRO100030").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/skin-tightening-cream">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100030").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100030').click(function() {
                    var kode_produk = 'PRO100030';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100030").val();
                    var catatan = $("#catatanPRO100030").val();
                    var jenis_variant = $("#jenis_variantPRO100030").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100030").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100030").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="130">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100031">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/SPOT-ESSENCE-DAY-CREAM.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/SPOT-ESSENCE-DAY-CREAM.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">SPOT ESSENCE DAY CREAM</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp130,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100031</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18190124770</p>

              <p>Netto 10 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100031" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100031" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100031");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100031").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100031").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100031").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100031").attr("min");
                      var max = $("#product-vqty3PRO100031").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100031").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100031").val(max);
                      } else {
                        $("#product-vqty3PRO100031").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/spot-essence-day-cream">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100031").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100031').click(function() {
                    var kode_produk = 'PRO100031';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100031").val();
                    var catatan = $("#catatanPRO100031").val();
                    var jenis_variant = $("#jenis_variantPRO100031").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100031").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100031").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="131">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100032">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/SPOT-ESSENCE-NIGHT-CREAM.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/SPOT-ESSENCE-NIGHT-CREAM.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">SPOT ESSENCE NIGHT CREAM</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp130,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100032</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18190124771</p>

              <p>Netto 10 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100032" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100032" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100032");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100032").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100032").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100032").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100032").attr("min");
                      var max = $("#product-vqty3PRO100032").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100032").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100032").val(max);
                      } else {
                        $("#product-vqty3PRO100032").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/spot-essence-night-cream">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100032").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100032').click(function() {
                    var kode_produk = 'PRO100032';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100032").val();
                    var catatan = $("#catatanPRO100032").val();
                    var jenis_variant = $("#jenis_variantPRO100032").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100032").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100032").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="132">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100033">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/COFFEE-HERBAL-SOAP.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/COFFEE-HERBAL-SOAP.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE WASH</div>
            <div class="h3 col-xs-b25">COFFEE HERBAL SOAP</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp22,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100033</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18160500726</p>

              <p>Netto 60 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100033" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100033" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100033");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100033").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100033").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100033").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100033").attr("min");
                      var max = $("#product-vqty3PRO100033").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100033").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100033").val(max);
                      } else {
                        $("#product-vqty3PRO100033").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/coffee-herbal-soap">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100033").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100033').click(function() {
                    var kode_produk = 'PRO100033';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100033").val();
                    var catatan = $("#catatanPRO100033").val();
                    var jenis_variant = $("#jenis_variantPRO100033").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100033").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100033").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="133">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100034">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/FACIAL-WASH-BULUS.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/FACIAL-WASH-BULUS.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE WASH</div>
            <div class="h3 col-xs-b25">FACIAL WASH BULUS</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp55,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100034</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18171206942</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100034" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100034" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100034");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100034").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100034").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100034").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100034").attr("min");
                      var max = $("#product-vqty3PRO100034").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100034").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100034").val(max);
                      } else {
                        $("#product-vqty3PRO100034").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/facial-wash-bulus">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100034").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100034').click(function() {
                    var kode_produk = 'PRO100034';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100034").val();
                    var catatan = $("#catatanPRO100034").val();
                    var jenis_variant = $("#jenis_variantPRO100034").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100034").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100034").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="134">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100035">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/FACIAL-WASH-MADU.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/FACIAL-WASH-MADU.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE WASH</div>
            <div class="h3 col-xs-b25">FACIAL WASH MADU 100.ml</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp40,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100035</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18171201113</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100035" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100035" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100035");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100035").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100035").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100035").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100035").attr("min");
                      var max = $("#product-vqty3PRO100035").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100035").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100035").val(max);
                      } else {
                        $("#product-vqty3PRO100035").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/facial-wash-madu-100ml">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100035").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100035').click(function() {
                    var kode_produk = 'PRO100035';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100035").val();
                    var catatan = $("#catatanPRO100035").val();
                    var jenis_variant = $("#jenis_variantPRO100035").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100035").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100035").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="135">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100036">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/FACIAL-WASH-MADU_250.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/FACIAL-WASH-MADU_250.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE WASH</div>
            <div class="h3 col-xs-b25">FACIAL WASH MADU 250.ml</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp85,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100036</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18171201113</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100036" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100036" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100036");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100036").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100036").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100036").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100036").attr("min");
                      var max = $("#product-vqty3PRO100036").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100036").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100036").val(max);
                      } else {
                        $("#product-vqty3PRO100036").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/facial-wash-madu-250ml">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100036").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100036').click(function() {
                    var kode_produk = 'PRO100036';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100036").val();
                    var catatan = $("#catatanPRO100036").val();
                    var jenis_variant = $("#jenis_variantPRO100036").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100036").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100036").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="136">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100037">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/FACIAL-WASH-COFFEE.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/FACIAL-WASH-COFFEE.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE WASH</div>
            <div class="h3 col-xs-b25">FACIAL WASH COFFEE</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp58,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100037</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18201202317</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100037" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100037" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100037");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100037").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100037").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100037").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100037").attr("min");
                      var max = $("#product-vqty3PRO100037").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100037").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100037").val(max);
                      } else {
                        $("#product-vqty3PRO100037").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/facial-wash-coffee">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100037").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100037').click(function() {
                    var kode_produk = 'PRO100037';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100037").val();
                    var catatan = $("#catatanPRO100037").val();
                    var jenis_variant = $("#jenis_variantPRO100037").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100037").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100037").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="137">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100038">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/FACIAL-WASH-GREEN-TEA.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/FACIAL-WASH-GREEN-TEA.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE WASH</div>
            <div class="h3 col-xs-b25">FACIAL WASH GREEN TEA 100.ml</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp45,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100038</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18171208449</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100038" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100038" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100038");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100038").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100038").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100038").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100038").attr("min");
                      var max = $("#product-vqty3PRO100038").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100038").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100038").val(max);
                      } else {
                        $("#product-vqty3PRO100038").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/facial-wash-green-tea-100ml">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100038").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100038').click(function() {
                    var kode_produk = 'PRO100038';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100038").val();
                    var catatan = $("#catatanPRO100038").val();
                    var jenis_variant = $("#jenis_variantPRO100038").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100038").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100038").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="138">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100039">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/FACIAL-WASH-GREEN-TEA.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/FACIAL-WASH-GREEN-TEA.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE WASH</div>
            <div class="h3 col-xs-b25">FACIAL WASH GREEN TEA 250.ml</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp80,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100039</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18171208449</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100039" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100039" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100039");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100039").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100039").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100039").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100039").attr("min");
                      var max = $("#product-vqty3PRO100039").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100039").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100039").val(max);
                      } else {
                        $("#product-vqty3PRO100039").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/facial-wash-green-tea-250ml">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100039").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100039').click(function() {
                    var kode_produk = 'PRO100039';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100039").val();
                    var catatan = $("#catatanPRO100039").val();
                    var jenis_variant = $("#jenis_variantPRO100039").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100039").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100039").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="139">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100040">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/HONEY-SOAP.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/HONEY-SOAP.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE WASH</div>
            <div class="h3 col-xs-b25">HONEY SOAP</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp22,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100040</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18160500725</p>

              <p>Netto 60 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100040" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100040" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100040");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100040").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100040").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100040").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100040").attr("min");
                      var max = $("#product-vqty3PRO100040").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100040").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100040").val(max);
                      } else {
                        $("#product-vqty3PRO100040").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/honey-soap">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100040").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100040').click(function() {
                    var kode_produk = 'PRO100040';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100040").val();
                    var catatan = $("#catatanPRO100040").val();
                    var jenis_variant = $("#jenis_variantPRO100040").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100040").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100040").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="140">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100041">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/MILKY-RICE-SOAP.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/MILKY-RICE-SOAP.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE WASH</div>
            <div class="h3 col-xs-b25">MILKY RICE SOAP</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp22,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100041</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18170500702</p>

              <p>Netto 60 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100041" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100041" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100041");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100041").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100041").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100041").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100041").attr("min");
                      var max = $("#product-vqty3PRO100041").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100041").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100041").val(max);
                      } else {
                        $("#product-vqty3PRO100041").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/milky-rice-soap">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100041").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100041').click(function() {
                    var kode_produk = 'PRO100041';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100041").val();
                    var catatan = $("#catatanPRO100041").val();
                    var jenis_variant = $("#jenis_variantPRO100041").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100041").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100041").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="141">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100042">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/RICE-SOAP.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/RICE-SOAP.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE WASH</div>
            <div class="h3 col-xs-b25">RICE SOAP</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp22,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100042</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18160500687</p>

              <p>Netto 60 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100042" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100042" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100042");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100042").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100042").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100042").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100042").attr("min");
                      var max = $("#product-vqty3PRO100042").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100042").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100042").val(max);
                      } else {
                        $("#product-vqty3PRO100042").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/rice-soap">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100042").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100042').click(function() {
                    var kode_produk = 'PRO100042';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100042").val();
                    var catatan = $("#catatanPRO100042").val();
                    var jenis_variant = $("#jenis_variantPRO100042").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100042").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100042").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="142">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100043">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/MICELLAR-WATER.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/MICELLAR-WATER.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">MICELLAR WATER</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp45,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100043</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p><strong>BPOM NA18191233987</strong></p>

              <p><strong>Netto 100 ml</strong></p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100043" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100043" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100043");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100043").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100043").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100043").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100043").attr("min");
                      var max = $("#product-vqty3PRO100043").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100043").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100043").val(max);
                      } else {
                        $("#product-vqty3PRO100043").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/micellar-water">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100043").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100043').click(function() {
                    var kode_produk = 'PRO100043';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100043").val();
                    var catatan = $("#catatanPRO100043").val();
                    var jenis_variant = $("#jenis_variantPRO100043").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100043").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100043").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="143">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100044">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/NATURE-ROSE-WATER-60ml.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/NATURE-ROSE-WATER-60ml.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">NATURE ROSE WATER 60.ml</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp36,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100044</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p><strong>BPOM NA18191234157</strong></p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100044" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100044" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100044");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100044").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100044").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100044").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100044").attr("min");
                      var max = $("#product-vqty3PRO100044").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100044").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100044").val(max);
                      } else {
                        $("#product-vqty3PRO100044").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/nature-rose-water-60ml">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100044").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100044').click(function() {
                    var kode_produk = 'PRO100044';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100044").val();
                    var catatan = $("#catatanPRO100044").val();
                    var jenis_variant = $("#jenis_variantPRO100044").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100044").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100044").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="145">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100045">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/NATURE-ROSE.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/NATURE-ROSE.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">NATURE ROSE WATER 100.ml</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp50,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100045</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p><strong>BPOM NA18191234157</strong></p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100045" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100045" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100045");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100045").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100045").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100045").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100045").attr("min");
                      var max = $("#product-vqty3PRO100045").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100045").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100045").val(max);
                      } else {
                        $("#product-vqty3PRO100045").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/nature-rose-water-100ml">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100045").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100045').click(function() {
                    var kode_produk = 'PRO100045';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100045").val();
                    var catatan = $("#catatanPRO100045").val();
                    var jenis_variant = $("#jenis_variantPRO100045").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100045").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100045").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="146">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100046">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/NATURE-SECRET-WATER-60ml.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/NATURE-SECRET-WATER-60ml.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">NATURE SECRET WATER 60.ml</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp36,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100046</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p><strong>BPOM NA1819123158</strong></p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100046" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100046" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100046");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100046").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100046").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100046").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100046").attr("min");
                      var max = $("#product-vqty3PRO100046").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100046").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100046").val(max);
                      } else {
                        $("#product-vqty3PRO100046").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/nature-secret-water-60ml">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100046").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100046').click(function() {
                    var kode_produk = 'PRO100046';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100046").val();
                    var catatan = $("#catatanPRO100046").val();
                    var jenis_variant = $("#jenis_variantPRO100046").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100046").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100046").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="147">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100047">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/NATURE-SECRET-WATER.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/NATURE-SECRET-WATER.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">NATURE SECRET WATER 100.ml</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp50,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100047</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p><strong>BPOM NA1819123158</strong></p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100047" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100047" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100047");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100047").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100047").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100047").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100047").attr("min");
                      var max = $("#product-vqty3PRO100047").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100047").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100047").val(max);
                      } else {
                        $("#product-vqty3PRO100047").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/nature-secret-water-100ml">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100047").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100047').click(function() {
                    var kode_produk = 'PRO100047';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100047").val();
                    var catatan = $("#catatanPRO100047").val();
                    var jenis_variant = $("#jenis_variantPRO100047").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100047").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100047").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="151">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100048">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/MANJA-SR12-KAPSUL.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/MANJA-SR12-KAPSUL.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">HERBAL</div>
            <div class="h3 col-xs-b25">MANJAKANI KAPSUL</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp70,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100048</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM TR183311811</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100048" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100048" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100048");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100048").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100048").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100048").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100048").attr("min");
                      var max = $("#product-vqty3PRO100048").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100048").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100048").val(max);
                      } else {
                        $("#product-vqty3PRO100048").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/manjakani-kapsul">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100048").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100048').click(function() {
                    var kode_produk = 'PRO100048';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100048").val();
                    var catatan = $("#catatanPRO100048").val();
                    var jenis_variant = $("#jenis_variantPRO100048").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100048").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100048").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="152">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100049">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/MANJA-SR12-PIL.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/MANJA-SR12-PIL.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">HERBAL</div>
            <div class="h3 col-xs-b25">MANJAKANI PIL</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp70,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100049</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM TR183311811</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100049" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100049" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100049");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100049").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100049").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100049").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100049").attr("min");
                      var max = $("#product-vqty3PRO100049").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100049").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100049").val(max);
                      } else {
                        $("#product-vqty3PRO100049").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/manjakani-pil">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100049").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100049').click(function() {
                    var kode_produk = 'PRO100049';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100049").val();
                    var catatan = $("#catatanPRO100049").val();
                    var jenis_variant = $("#jenis_variantPRO100049").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100049").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100049").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="153">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100050">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/MADU-HUTAN-BADUY.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/MADU-HUTAN-BADUY.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">HERBAL</div>
            <div class="h3 col-xs-b25">MADU HUTAN BADUY 300.gr</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp88,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100050</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>PIRT No. 209.3601.01.0105.21</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100050" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100050" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100050");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100050").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100050").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100050").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100050").attr("min");
                      var max = $("#product-vqty3PRO100050").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100050").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100050").val(max);
                      } else {
                        $("#product-vqty3PRO100050").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/madu-hutan-baduy-300gr">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100050").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100050').click(function() {
                    var kode_produk = 'PRO100050';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100050").val();
                    var catatan = $("#catatanPRO100050").val();
                    var jenis_variant = $("#jenis_variantPRO100050").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100050").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100050").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="154">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100051">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/MADU-HUTAN-BADUY-140gr.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/MADU-HUTAN-BADUY-140gr.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">HERBAL</div>
            <div class="h3 col-xs-b25">MADU HUTAN BADUY 140.gr</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp48,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100051</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>PIRT No. 209.3601.01.0105.21</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100051" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100051" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100051");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100051").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100051").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100051").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100051").attr("min");
                      var max = $("#product-vqty3PRO100051").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100051").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100051").val(max);
                      } else {
                        $("#product-vqty3PRO100051").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/madu-hutan-baduy-140gr">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100051").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100051').click(function() {
                    var kode_produk = 'PRO100051';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100051").val();
                    var catatan = $("#catatanPRO100051").val();
                    var jenis_variant = $("#jenis_variantPRO100051").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100051").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100051").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="155">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100052">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/SALIMAH-SLIM.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/SALIMAH-SLIM.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">HERBAL</div>
            <div class="h3 col-xs-b25">SALIMAH SLIM</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp55,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100052</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM TR166396331</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100052" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100052" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100052");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100052").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100052").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100052").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100052").attr("min");
                      var max = $("#product-vqty3PRO100052").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100052").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100052").val(max);
                      } else {
                        $("#product-vqty3PRO100052").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/salimah-slim">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100052").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100052').click(function() {
                    var kode_produk = 'PRO100052';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100052").val();
                    var catatan = $("#catatanPRO100052").val();
                    var jenis_variant = $("#jenis_variantPRO100052").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100052").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100052").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="156">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100053">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/VICO-OIL-60.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/VICO-OIL-60.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">HERBAL</div>
            <div class="h3 col-xs-b25">VICO OIL SR12 60.ml</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp30,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100053</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM TR173606151</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100053" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100053" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100053");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100053").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100053").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100053").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100053").attr("min");
                      var max = $("#product-vqty3PRO100053").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100053").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100053").val(max);
                      } else {
                        $("#product-vqty3PRO100053").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/vico-oil-sr12-60ml">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100053").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100053').click(function() {
                    var kode_produk = 'PRO100053';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100053").val();
                    var catatan = $("#catatanPRO100053").val();
                    var jenis_variant = $("#jenis_variantPRO100053").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100053").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100053").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="157">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100054">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/VICO-OIL-100.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/VICO-OIL-100.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">HERBAL</div>
            <div class="h3 col-xs-b25">VICO OIL SR12 100.ml</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp42,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100054</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM TR173606151</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100054" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100054" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100054");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100054").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100054").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100054").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100054").attr("min");
                      var max = $("#product-vqty3PRO100054").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100054").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100054").val(max);
                      } else {
                        $("#product-vqty3PRO100054").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/vico-oil-sr12-100ml">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100054").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100054').click(function() {
                    var kode_produk = 'PRO100054';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100054").val();
                    var catatan = $("#catatanPRO100054").val();
                    var jenis_variant = $("#jenis_variantPRO100054").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100054").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100054").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="158">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100055">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/VICO-OIL-250.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/VICO-OIL-250.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">HERBAL</div>
            <div class="h3 col-xs-b25">VICO OIL SR12 250.ml</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp83,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100055</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM TR173606151</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100055" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100055" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100055");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100055").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100055").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100055").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100055").attr("min");
                      var max = $("#product-vqty3PRO100055").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100055").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100055").val(max);
                      } else {
                        $("#product-vqty3PRO100055").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/vico-oil-sr12-250ml">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100055").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100055').click(function() {
                    var kode_produk = 'PRO100055';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100055").val();
                    var catatan = $("#catatanPRO100055").val();
                    var jenis_variant = $("#jenis_variantPRO100055").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100055").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100055").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="159">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100056">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/VICO-CAPSULE.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/VICO-CAPSULE.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">HERBAL</div>
            <div class="h3 col-xs-b25">Vico Capsule SR12</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp55,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100056</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM TR173304931</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100056" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100056" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100056");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100056").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100056").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100056").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100056").attr("min");
                      var max = $("#product-vqty3PRO100056").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100056").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100056").val(max);
                      } else {
                        $("#product-vqty3PRO100056").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/vico-capsule-sr12">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100056").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100056').click(function() {
                    var kode_produk = 'PRO100056';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100056").val();
                    var catatan = $("#catatanPRO100056").val();
                    var jenis_variant = $("#jenis_variantPRO100056").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100056").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100056").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="160">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100057">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/EXCLUSIVE-COMPACT-POWDER-NATURAL.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/EXCLUSIVE-COMPACT-POWDER-NATURAL.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">PERSONAL CARE</div>
            <div class="h3 col-xs-b25">COMPACT POWDER NATURAL</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp100,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100057</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18181200465</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100057" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100057" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100057");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100057").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100057").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100057").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100057").attr("min");
                      var max = $("#product-vqty3PRO100057").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100057").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100057").val(max);
                      } else {
                        $("#product-vqty3PRO100057").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/compact-powder-natural">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100057").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100057').click(function() {
                    var kode_produk = 'PRO100057';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100057").val();
                    var catatan = $("#catatanPRO100057").val();
                    var jenis_variant = $("#jenis_variantPRO100057").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100057").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100057").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="161">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100058">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/EXCLUSIVE-COMPACT-POWDER-SHEERPINK.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/EXCLUSIVE-COMPACT-POWDER-SHEERPINK.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">PERSONAL CARE</div>
            <div class="h3 col-xs-b25">COMPACT POWDER SHEER PINK</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp100,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100058</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18181200467</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100058" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100058" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100058");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100058").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100058").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100058").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100058").attr("min");
                      var max = $("#product-vqty3PRO100058").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100058").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100058").val(max);
                      } else {
                        $("#product-vqty3PRO100058").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/compact-powder-sheer-pink">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100058").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100058').click(function() {
                    var kode_produk = 'PRO100058';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100058").val();
                    var catatan = $("#catatanPRO100058").val();
                    var jenis_variant = $("#jenis_variantPRO100058").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100058").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100058").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="162">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100059">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/HAND-GEL-APPLE60ml.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/HAND-GEL-APPLE60ml.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">PERSONAL CARE</div>
            <div class="h3 col-xs-b25">HAND GEL APPLE 60.ml</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp25,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100059</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18200101831</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100059" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100059" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100059");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100059").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100059").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100059").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100059").attr("min");
                      var max = $("#product-vqty3PRO100059").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100059").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100059").val(max);
                      } else {
                        $("#product-vqty3PRO100059").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/hand-gel-apple-60ml">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100059").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100059').click(function() {
                    var kode_produk = 'PRO100059';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100059").val();
                    var catatan = $("#catatanPRO100059").val();
                    var jenis_variant = $("#jenis_variantPRO100059").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100059").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100059").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="163">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100060">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/HAND-GEL-APPLE.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/HAND-GEL-APPLE.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">PERSONAL CARE</div>
            <div class="h3 col-xs-b25">HAND GEL APPLE 100.ml</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp35,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100060</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18200101831</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100060" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100060" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100060");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100060").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100060").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100060").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100060").attr("min");
                      var max = $("#product-vqty3PRO100060").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100060").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100060").val(max);
                      } else {
                        $("#product-vqty3PRO100060").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/hand-gel-apple-100ml">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100060").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100060').click(function() {
                    var kode_produk = 'PRO100060';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100060").val();
                    var catatan = $("#catatanPRO100060").val();
                    var jenis_variant = $("#jenis_variantPRO100060").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100060").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100060").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="164">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100061">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/LIP-CARE-CHERRY.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/LIP-CARE-CHERRY.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">PERSONAL CARE</div>
            <div class="h3 col-xs-b25">LIP CARE CHERRY</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp25,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100061</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18191306477</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100061" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100061" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100061");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100061").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100061").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100061").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100061").attr("min");
                      var max = $("#product-vqty3PRO100061").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100061").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100061").val(max);
                      } else {
                        $("#product-vqty3PRO100061").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/lip-care-cherry">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100061").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100061').click(function() {
                    var kode_produk = 'PRO100061';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100061").val();
                    var catatan = $("#catatanPRO100061").val();
                    var jenis_variant = $("#jenis_variantPRO100061").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100061").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100061").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="165">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100062">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/LIP-CARE-NATURAL.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/LIP-CARE-NATURAL.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">PERSONAL CARE</div>
            <div class="h3 col-xs-b25">LIP CARE NATURAL</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp25,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100062</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18191305977</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100062" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100062" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100062");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100062").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100062").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100062").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100062").attr("min");
                      var max = $("#product-vqty3PRO100062").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100062").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100062").val(max);
                      } else {
                        $("#product-vqty3PRO100062").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/lip-care-natural">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100062").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100062').click(function() {
                    var kode_produk = 'PRO100062';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100062").val();
                    var catatan = $("#catatanPRO100062").val();
                    var jenis_variant = $("#jenis_variantPRO100062").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100062").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100062").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="166">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100063">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/LIP-CREAM-SR01.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/LIP-CREAM-SR01.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">PERSONAL CARE</div>
            <div class="h3 col-xs-b25">LIP CREAM SR01</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp100,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100063</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18181302881</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100063" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100063" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100063");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100063").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100063").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100063").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100063").attr("min");
                      var max = $("#product-vqty3PRO100063").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100063").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100063").val(max);
                      } else {
                        $("#product-vqty3PRO100063").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/lip-cream-sr01">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100063").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100063').click(function() {
                    var kode_produk = 'PRO100063';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100063").val();
                    var catatan = $("#catatanPRO100063").val();
                    var jenis_variant = $("#jenis_variantPRO100063").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100063").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100063").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="167">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100064">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/LIP-CREAM-SR04.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/LIP-CREAM-SR04.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">PERSONAL CARE</div>
            <div class="h3 col-xs-b25">LIP CREAM SR04</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp100,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100064</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18181392880</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100064" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100064" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100064");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100064").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100064").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100064").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100064").attr("min");
                      var max = $("#product-vqty3PRO100064").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100064").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100064").val(max);
                      } else {
                        $("#product-vqty3PRO100064").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/lip-cream-sr04">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100064").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100064').click(function() {
                    var kode_produk = 'PRO100064';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100064").val();
                    var catatan = $("#catatanPRO100064").val();
                    var jenis_variant = $("#jenis_variantPRO100064").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100064").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100064").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="168">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100065">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/LIP-CREAM-SR13.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/LIP-CREAM-SR13.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">PERSONAL CARE</div>
            <div class="h3 col-xs-b25">LIP CREAM SR13</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp100,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100065</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA1818302879</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100065" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100065" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100065");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100065").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100065").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100065").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100065").attr("min");
                      var max = $("#product-vqty3PRO100065").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100065").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100065").val(max);
                      } else {
                        $("#product-vqty3PRO100065").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/lip-cream-sr13">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100065").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100065').click(function() {
                    var kode_produk = 'PRO100065';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100065").val();
                    var catatan = $("#catatanPRO100065").val();
                    var jenis_variant = $("#jenis_variantPRO100065").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100065").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100065").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="169">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100066">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/LIP-MATTE-CREAM-CHERISH-ME.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/LIP-MATTE-CREAM-CHERISH-ME.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">PERSONAL CARE</div>
            <div class="h3 col-xs-b25">LIP MATTE CREAM CHERISH ME</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp100,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100066</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18191306826</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100066" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100066" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100066");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100066").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100066").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100066").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100066").attr("min");
                      var max = $("#product-vqty3PRO100066").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100066").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100066").val(max);
                      } else {
                        $("#product-vqty3PRO100066").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/lip-matte-cream-cherish-me">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100066").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100066').click(function() {
                    var kode_produk = 'PRO100066';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100066").val();
                    var catatan = $("#catatanPRO100066").val();
                    var jenis_variant = $("#jenis_variantPRO100066").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100066").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100066").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="170">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100067">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/LIP-MATTE-CREAM-NUDE-BERRY.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/LIP-MATTE-CREAM-NUDE-BERRY.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">PERSONAL CARE</div>
            <div class="h3 col-xs-b25">LIP MATTE CREAM NUDE BERRY</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp100,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100067</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18191306999</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100067" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100067" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100067");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100067").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100067").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100067").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100067").attr("min");
                      var max = $("#product-vqty3PRO100067").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100067").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100067").val(max);
                      } else {
                        $("#product-vqty3PRO100067").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/lip-matte-cream-nude-berry">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100067").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100067').click(function() {
                    var kode_produk = 'PRO100067';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100067").val();
                    var catatan = $("#catatanPRO100067").val();
                    var jenis_variant = $("#jenis_variantPRO100067").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100067").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100067").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="171">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100068">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/LIP-MATTE-CREAM-SWEET-PINK.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/LIP-MATTE-CREAM-SWEET-PINK.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">PERSONAL CARE</div>
            <div class="h3 col-xs-b25">LIP MATTE CREAM SWEET PINK</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp100,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100068</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18191306998</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100068" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100068" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100068");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100068").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100068").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100068").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100068").attr("min");
                      var max = $("#product-vqty3PRO100068").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100068").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100068").val(max);
                      } else {
                        $("#product-vqty3PRO100068").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/lip-matte-cream-sweet-pink">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100068").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100068').click(function() {
                    var kode_produk = 'PRO100068';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100068").val();
                    var catatan = $("#catatanPRO100068").val();
                    var jenis_variant = $("#jenis_variantPRO100068").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100068").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100068").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="172">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100069">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/TONER-CHAMOMILLE.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/TONER-CHAMOMILLE.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE CARE</div>
            <div class="h3 col-xs-b25">TONER CHAMOMILLE</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp60,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100069</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18191234978</p>

              <p>Netto&nbsp;60ml</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100069" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100069" min="1" max="1000" style="width:30%;">

                <script type="text/javascript" charset="utf-8">
                  function createValidator(element) {
                    return function() {
                      var maximal = '1000';
                      var min = parseInt(element.getAttribute("min")) || 1;
                      var max = parseInt(element.getAttribute("max")) || maximal;

                      var value = parseInt(element.value) || min;
                      element.value = value; // make sure we got an int

                      if (value < min) element.value = min;
                      if (value > max) element.value = max;
                    }
                  }

                  var elm = $("#product-vqty3PRO100069");
                  //elm.onkeyup = createValidator(elm);

                  $(document).ready(function() {
                    $("#product-vqty3PRO100069").keypress(function(data) {
                      if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                        return false;
                      }
                    });

                    $("#product-vqty3PRO100069").keyup(function(data) {
                      var qty = $("#product-vqty3PRO100069").val();
                      var maximal = '1000';
                      var min = $("#product-vqty3PRO100069").attr("min");
                      var max = $("#product-vqty3PRO100069").attr("max");

                      var value = parseInt(qty);
                      if (value < min) {
                        $("#product-vqty3PRO100069").val(min);
                      } else if (value > max) {
                        $("#product-vqty3PRO100069").val(max);
                      } else {
                        $("#product-vqty3PRO100069").val(qty);
                      }
                      //alert(empty(value));
                    });
                  });
                </script>
              </div>
            </div>
            <div class="row m5 col-xs-b40">
              <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/toner-chamomille">
                  <span class="button-wrapper">
                    <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
                    <span class="text">add to cart</span>
                  </span>
                </a>
              </div>

              <!-- javascript -->
              <script type="text/javascript">
                $(document).ready(function() {

                  var x = document.getElementById("snackbar");

                  $("#qtyPRO100069").keypress(function(data) {
                    if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
                      return false;
                    }
                  });

                  $('#tbl_keranjangPRO100069').click(function() {
                    var kode_produk = 'PRO100069';
                    var tipe = '1';
                    var qty = $("#product-vqty3PRO100069").val();
                    var catatan = $("#catatanPRO100069").val();
                    var jenis_variant = $("#jenis_variantPRO100069").val();

                    if (jenis_variant) {
                      var variant = jenis_variant;
                    } else {
                      var variant = '0';
                    }

                    //alert(kategori);

                    // $.LoadingOverlay("show");
                    // document.getElementById("cartadd").submit();
                    // }else if(!value){
                    var value_qty = $("#product-vqty3PRO100069").val();

                    if (!value_qty) {
                      alert("Maaf, quantity tidak boleh kosong");
                      $("#product-vqty3PRO100069").focus();
                      return (false);
                    }

                    $.ajax({
                      type: "POST",
                      url: "https://sr12herbalskincare.co.id/cart/add",
                      data: "kode_produk=" + kode_produk +
                        "&qty=" + qty +
                        "&catatan=" + catatan,
                      beforeSend: function() {
                        // setting a timeout
                        // $.LoadingOverlay("show");
                        x.className = "show";
                        setTimeout(function() {
                          x.className = x.className.replace("show", "");
                        }, 2000);
                      },
                      success: function(msg) {

                        //getcart
                        $.ajax({
                          type: "POST",
                          url: "https://sr12herbalskincare.co.id/cart/getcart",
                          data: "no_pemesanan=",
                          beforeSend: function() {
                            // setting a timeout
                          },
                          success: function(msg) {
                            $('#getcart').html(msg);
                          }

                        });
                        //getcart

                        if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
                        $('.popup-wrapper, .popup-content').removeClass('active');
                        $('html').removeClass('overflow-hidden');
                        return false;

                      }
                    });

                  });

                });
              </script>
              <!-- javascript -->

              <div class="col-sm-6">
              </div>
            </div>

          </div>
          </form>
        </div>
      </div>
      <div class="button-close"></div>
    </div>
  </div>

  <div class="popup-content" data-rel="173">
    <div class="layer-close"></div>
    <div class="popup-container size-2">
      <div class="popup-align">
        <div class="row">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <form action="https://sr12herbalskincare.co.id/cart/add" id="cartadd" name="cartadd" method="post">
              <input type="hidden" name="kode_produk" id="kode_produk" value="PRO100070">
              <div class="main-product-slider-wrapper swipers-couple-wrapper">
                <div class="swiper-container swiper-control-top">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-lazy-preloader"></div>
                      <div class="product-big-preview-entry swiper-lazy" data-background="https://sr12herbalskincare.co.id/store/uploads/BULUS-SOAP.jpg"></div>
                    </div>
                  </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                  <div class="swiper-button-prev hidden"></div>
                  <div class="swiper-button-next hidden"></div>
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="product-small-preview-entry">
                        <img src="https://sr12herbalskincare.co.id/store/uploads/BULUS-SOAP.jpg" alt="" style="width: 80px;" />
                      </div>
                    </div>


                  </div>
                </div>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="simple-article size-3 grey col-xs-b5">FACE WASH</div>
            <div class="h3 col-xs-b25">SABUN BULUS</div>
            <div class="row col-xs-b25">
              <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">Rp25,000</span></div>
              </div>
              <!-- <div class="col-sm-6 col-sm-text-right">
                    <div class="rate-wrapper align-inline">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">PRO100070</span></div>
              </div>
              <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">
                    258000 </span></div>
              </div>
            </div>
            <div class="simple-article size-3 col-xs-b30">
              <p>BPOM NA18170500214</p>

              <p>Netto 60 g</p>
            </div>
            <div class="h6 detail-data-title size-1">catatan:</div>
            <div class="simple-article size-3 col-xs-b30">
              <textarea class="form-control" rows="5" name="catatan" id="catatanPRO100070" placeholder="warna, ukuran dan lain-lain"></textarea>
            </div>
            <div class="row col-xs-b40">
              <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
              </div>
              <div class="col-sm-9">
                <input type="number" value="1" class="form-control" name="qty" id="product-vqty3PRO100070" min="1" max="1000" style="width:30%;">