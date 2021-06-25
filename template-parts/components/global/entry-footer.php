<?php

/**
 * Template for post entry Footer
 *
 * @package Ecommerce_theme
 */
$footer_global = get_name_like('global-section-footer');
?>
<?php if (!empty($footer_global)) : ?>
  <div class="empty-space col-xs-b35 col-md-b70"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6">
        <div class="cell-view simple-banner-height text-center">
          <div class="empty-space col-sm-b35"></div>
          <div class="simple-article grey uppercase size-5 col-xs-b5"><span class="color"><?php get_alt_text_thumbnail($footer_global[0]->ID); ?></span> for subscribers</div>
          <h3 class="h3 col-xs-b15"><?php the_post_thumbnail_caption($footer_global[0]->ID); ?></h3>
          <div class="simple-article size-3 col-xs-b25 col-sm-b50"><?= ecommerce_custom_thumbnail($footer_global[0]->ID)->post_content; ?></div>
          <!-- <div class="single-line-form">
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
          </div> -->
          <div class="empty-space col-xs-b35"></div>
        </div>
      </div>
    </div>
    <div class="row-background left hidden-xs">
      <?php
      the_post_custom_thumbnail(
        $footer_global[0]->ID,
        'featured-thumbnail'
      );
      ?>
    </div>
  </div>
  </div>
<?php endif; ?>