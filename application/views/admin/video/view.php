<!DOCTYPE html>
<html>
<head>
  <title>BHARATBHUTAN-Create Gallery</title>
  <?php $this->load->view('include/css_common'); ?>
</head>
<body>
  <?php $this->load->view('include/header'); ?>
  <div class="f8-admin-container container-fluid">
    <div class="row">
      <section class="f8-sec-admin-sidebar  col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <?php $this->load->view('admin/inc/sidebar_menu'); ?>
      </section>
      <section class="f8-sec-admin-body  col-lg-9 col-md-9 col-sm-8 col-xs-12">
        <div class="f8-sec-inner-block">
          <div class="f8-sec-heading"><?php echo $ad_info->ad_name ; ?></div>
          <?php if(isset($message)) { echo $message; } ?>
          <div class="ads-detail-container row">
            <div class="f8-ad-image col-md-4">
              <img src="<?php echo base_url(UPLOADS  .  explode(',', $ad_info->images)[0]) ; ?>" width="200px">
            </div>
            <div class="f8-ads-details col-md-8">
              <h4><?php echo $ad_info->ad_name ; ?></h4>
              <p><?php echo $ad_info->description ; ?></p>
              <p>
                <?php
                $date = date_create($ad_info->created_on);
                echo "<em>Created on ". date_format($date, 'l g:ia \, jS F Y') . "</em>";
                ?>
              </p>
              <a href="<?php echo base_url("ads/create"); ?>" class="btn btn-primary">Create More Ads</a>
              <a href="<?php echo base_url("ads/manage"); ?>" class="btn btn-primary">View all Ads</a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <?php $this->load->view('include/footer'); ?>
  <?php $this->load->view('include/templates'); ?>
  <?php $this->load->view('include/js_common'); ?>
</body>
</html>
