<!DOCTYPE html>
<html>
<head>
  <title>bharatbhutan | Image Gallery</title>
  <?php $this->load->view('include/css_common'); ?>
  <link rel="stylesheet" href="<?php echo base_url(COMPONENTS."/lightgallery/dist/css/lightgallery.min.css"); ?>">
</head>
<body class="">
  <?php $this->load->view('include/header'); ?>
  <div class="f8-sec-main container">
    <section class="f8-sec-top"></section>
    <section class="f8-sec-body">
      <div class="row f8-sec-body-inner">
        <div class="f8-sec-main-col col-lg-9 col-md-9 col-sm-8 col-xs-12">
          <div class="f8-block-heading">
            <h4>Image Galleries</h4>
          </div>

          <div class="gallery-grid">
            <div class="row">
              <?php
                foreach($gallery_infos as $gallery_info):
                $images = explode(',' , $gallery_info->images);
              ?>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <div class="gallery-item">
                    <a href="<?php echo base_url('gallery/view/'. $gallery_info->gallery_id); ?>" >
                      <img width="100%" src="<?php echo base_url('assets/uploads/' . $images[0]) ; ?>">
                    </a>
                  </div>
                  <div class="gallery-caption">
                    <?php echo $gallery_info->gallery_name; ?>
                  </div>
                  <div class="gallery-description">
                    <?php echo $gallery_info->description; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

        </div>
        <div class="f8-sec-sidebar-col col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <?php for( $i = 0; $i<3; $i++ ) { ?>
            <div class="well well-sm f8-sec-sidebar-block">
              <img width="100%" class="" src="<?php echo base_url(IMAGES.'/news-'.($i+1).'.jpg'); ?>">
            </div>
          <?php }?>
        </div>
      </div>
    </section>
  </div>
  <?php $this->load->view('include/footer'); ?>
  <?php $this->load->view('include/templates'); ?>
  <?php $this->load->view('include/js_common'); ?>
  <script src="<?php echo base_url( COMPONENTS."/lightgallery/dist/js/lg-thumbnail.min.js" );?>"></script>
  <script src="<?php echo base_url( COMPONENTS."/lightgallery/dist/js/lg-fullscreen.min.js" );?>"></script>
  <script src="<?php echo base_url( JS."/custom-gallery.js" );?>"></script>
</body>
</html>
