<!DOCTYPE html>
<html>
<head>
  <title>bharatbhutan | Image video</title>
  <?php $this->load->view('include/css_common'); ?>
</head>
<body class="">
  <?php $this->load->view('include/header'); ?>
  <div class="f8-sec-main container">
    <section class="f8-sec-top"></section>
    <section class="f8-sec-body">
      <div class="row f8-sec-body-inner">
        <div class="f8-sec-main-col col-lg-9 col-md-9 col-sm-8 col-xs-12">
          <div class="f8-block-heading">
            <h4>Watch</h4>
            <?php echo $video_info->video_name; ?>
          </div>

          <div class="video-grid">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="video-item">
                    <iframe width="720" height="540" src="<?php echo $video_info->video_link ; ?>" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div class="video-caption">
                    <h5><?php echo $video_info->video_name; ?></h5>
                  </div>
                  <div class="video-description">
                    <?php echo $video_info->description; ?>
                  </div>
                </div>

            </div>
          </div>

        </div>
        <div class="f8-sec-sidebar-col col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <?php foreach($ads_infos as $ad_info): ?>
            <div class="well well-sm f8-sec-sidebar-block">
              <img src="<?php echo base_url(UPLOADS  .  explode(',', $ad_info->images)[0]) ; ?>" width="100%">
              <h4><?php echo $ad_info->ad_name ; ?></h4>
              <p><?php echo $ad_info->description ; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </div>
  <?php $this->load->view('include/footer'); ?>
  <?php $this->load->view('include/templates'); ?>
  <?php $this->load->view('include/js_common'); ?>
</body>
</html>
