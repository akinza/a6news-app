<!DOCTYPE html>
<html>
<head>
  <title>bharatbhutan | Image video</title>
  <?php $this->load->view('include/css_common'); ?>
  <style>
    .video-item, .video-details{
      padding: 15px 0;
    }
  </style>
</head>
<body class="">
  <?php $this->load->view('include/header'); ?>
  <div class="f8-sec-main container">
    <section class="f8-sec-top"></section>
    <section class="f8-sec-body">
      <div class="row f8-sec-body-inner">
        <div class="f8-sec-main-col col-lg-9 col-md-9 col-sm-8 col-xs-12">
          <div class="f8-block-heading">
            <h4>Videos</h4>
          </div>

          <div class="video-grid">

              <?php
                foreach($video_infos as $video_info):
              ?>
              <div class="row" style="background:#fff;margin-bottom:15px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                      <div class="video-item">
                        <a href="<?php echo base_url('video/view/'. $video_info->video_id); ?>" >
                        <img width="100%" src="https://img.youtube.com/vi/<?php echo $video_info->youtube_video_id ; ?>/0.jpg">
                        <!-- <iframe width="600" height="400" src="<?php echo $video_info->video_link ; ?>" frameborder="0" allowfullscreen></iframe> -->
                      </a>
                      </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                      <div class="video-details" style="background:#fff;padding:8px;">
                      <div class="video-caption h5">
                        <a href="<?php echo base_url('video/view/'. $video_info->video_id); ?>" >
                          <?php echo $video_info->video_name; ?>
                        </a>
                      </div>
                      <div class="video-description">
                        <?php echo $video_info->description; ?>
                      </div>
                    </div>
                    </div>
                  </div>



                </div>
              </div>
            <hr>
            <?php endforeach; ?>
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
