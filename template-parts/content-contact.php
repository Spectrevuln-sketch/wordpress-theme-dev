<?php

/**
 *  Page about-us template
 *
 * @package Ecommerce_theme
 */
get_header();
?>

<!-- head contact -->
<?php get_template_part('template-parts/components/global/entry-head'); ?>
<!-- End head contact -->
<!-- address -->
<?php get_template_part('template-parts/components/contact/entry-address'); ?>
<!-- End address -->
<!-- gmaps -->
<?php get_template_part('template-parts/components/contact/entry-gmaps'); ?>
<!-- End gmaps -->




<!-- 
<div class="container">
  <h4 class="h4 text-center col-xs-b25">have a questions?</h4>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <form class="contact-form">
        <div class="row m5">
          <div class="col-sm-6">
            <input class="simple-input col-xs-b20" type="text" value="" placeholder="Name" name="nama" id="nama" />
          </div>
          <div class="col-sm-6">
            <input class="simple-input col-xs-b20" type="text" value="" placeholder="Email" id="email" type="email" />
          </div>
          <div class="col-sm-12">
            <input class="simple-input col-xs-b20" type="text" value="" placeholder="Subject" name="subjek" id="subjek" />
          </div>
          <div class="col-sm-12">
            <textarea class="simple-input col-xs-b20" placeholder="Your message" name="pesan" id="pesan"></textarea>
          </div>
          <div class="col-sm-12">
            <div class="text-center">
              <div class="button size-2 style-3">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-4.png" alt=""></span>
                  <span class="text">send message</span>
                </span>
                <input type="button" id="kirim_pesan" />
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div> -->

<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>

<!-- <script type="text/javascript">
  $(document).ready(function() {
    //alert('tes');
    $("#kirim_pesan").click(function() {

      var nama = $("#nama").val();
      var email = $("#email").val();
      var telepon = $("#telepon").val();
      var subjek = $("#subjek").val();
      var pesan = $("#pesan").val();

      if (nama == 0) {
        alert('Maaf, nama tidak boleh kosong');
        $("#nama").focus();
        return false();
      }

      if (email == 0) {
        alert('Maaf, email tidak boleh kosong');
        $("#email").focus();
        return false();
      }

      if (telepon == 0) {
        alert('Maaf, telepon tidak boleh kosong');
        $("#telepon").focus();
        return false();
      }

      if (subjek == 0) {
        alert('Maaf, subjek tidak boleh kosong');
        $("#subjek").focus();
        return false();
      }

      if (pesan == 0) {
        alert('Maaf, pesan tidak boleh kosong');
        $("#pesan").focus();
        return false();
      }

      // response = grecaptcha.getResponse(widget1);
      // if(response){

      $.ajax({
        type: "POST",
        url: "https://sr12herbalskincare.co.id/kontak/insert",
        data: "nama=" + nama +
          "&email=" + email +
          "&telepon=" + telepon +
          "&subjek=" + subjek +
          "&pesan=" + pesan,
        beforeSend: function() {
          // setting a timeout
          $.LoadingOverlay("show");
        },
        success: function(msg) {
          alert('Pesan berhasil dikirim');
          document.location.href = "https://sr12herbalskincare.co.id/contact";
        }
      });
      // }else {
      //      alert('Captcha tidak boleh kosong!');
      // }


    });

  });
</script> -->

<?php get_footer(); ?>