<?php

/**
 * Template for post entry content section
 *
 * @package Ecommerce_theme
 */

$community1 = get_meta_key_like('community_');
foreach ($community1 as $com) {
  $post_id = $com->post_id;
}
$get_meta_data = get_post_meta($post_id);

?>


<?php if (!empty($get_meta_data)) : ?>
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
                    <div class="simple-article size-2 uppercase color col-xs-b5"><?= $get_meta_data['community_title'][0]; ?></div>
                    <h5 class="h5 col-xs-b5"><?= $get_meta_data['community_subtitle'][0]; ?></h5>
                    <div class="simple-article size-2"><?= $get_meta_data['community_desc'][0]; ?></div>
                  </div>
                  <div class="empty-space col-xs-b30 col-sm-b60"></div>
                </div>
                <div class="col-sm-6" style="height:180px;">
                  <div class="col-xs-text-center col-sm-text-left">
                    <div class="simple-article size-2 uppercase color col-xs-b5"><?= $get_meta_data['community_title'][1]; ?></div>
                    <h5 class="h5 col-xs-b5"><?= $get_meta_data['community_subtitle'][1]; ?></h5>
                    <div class="simple-article size-2"><?= $get_meta_data['community_desc'][1]; ?></div>
                  </div>
                  <div class="empty-space col-xs-b30 col-sm-b60"></div>
                </div>
                <div class="col-sm-6" style="height:180px;">
                  <div class="col-xs-text-center col-sm-text-left">
                    <div class="simple-article size-2 uppercase color col-xs-b5"><?= $get_meta_data['community_title'][2]; ?></div>
                    <h5 class="h5 col-xs-b5"><?= $get_meta_data['community_subtitle'][2]; ?></h5>
                    <div class="simple-article size-2"><?= $get_meta_data['community_desc'][2]; ?></div>
                  </div>
                  <div class="empty-space col-xs-b30 col-sm-b60"></div>
                </div>
                <div class="col-sm-6" style="height:180px;">
                  <div class="col-xs-text-center col-sm-text-left">
                    <div class="simple-article size-2 uppercase color col-xs-b5"><?= $get_meta_data['community_title'][3]; ?></div>
                    <h5 class="h5 col-xs-b5"><?= $get_meta_data['community_subtitle'][3]; ?></h5>
                    <div class="simple-article size-2"><?= $get_meta_data['community_desc'][3]; ?></div>
                  </div>
                  <div class="empty-space col-xs-b30 col-sm-b60"></div>
                </div>
                <div class="col-sm-6" style="height:180px;">
                  <div class="col-xs-text-center col-sm-text-left">
                    <div class="simple-article size-2 uppercase color col-xs-b5"><?= $get_meta_data['community_title'][4]; ?></div>
                    <h5 class="h5 col-xs-b5"><?= $get_meta_data['community_subtitle'][4]; ?></h5>
                    <div class="simple-article size-2"><?= $get_meta_data['community_desc'][4]; ?></div>
                  </div>
                  <div class="empty-space col-xs-b30 col-sm-b60"></div>
                </div>
                <div class="col-sm-6" style="height:180px;">
                  <div class="col-xs-text-center col-sm-text-left">
                    <div class="simple-article size-2 uppercase color col-xs-b5"><?= $get_meta_data['community_title'][5]; ?></div>
                    <h5 class="h5 col-xs-b5"><?= $get_meta_data['community_subtitle'][5]; ?></h5>
                    <div class="simple-article size-2"><?= $get_meta_data['community_desc'][5]; ?></div>
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

<?php endif; ?>