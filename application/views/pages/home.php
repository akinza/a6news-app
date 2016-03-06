<!DOCTYPE html>
<html>
  <head>
    <title>f8news :: Home</title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body class="">
    <?php $this->load->view('include/header'); ?>
        <div class="container f8-sec-main">
          <section class="f8-sec-top">
            <div class="banner-image-container">
              <img src="<?php echo base_url(IMAGES.'/banner-1.jpg'); ?>">
            </div>
          </section>
          <section class="f8-sec-body">
            <div class="f8-sec-blocks">
              <div class="f8-block f8-block-highlight row">
                <!-- <div class="f8-block-highlight-main col-lg-6 col-md-6">

                  <div class="news-item-highlight" data-target="">
                    <div class="news-item-highlight-image">
                      <img class="news-img" src="<?php echo base_url(IMAGES.'/space.jpg'); ?>">
                      <div class="news-item-overlay">
                        <div class="news-item-highlight-text" data-target=""></div>
                      </div>
                    </div>
                  </div>

                </div> -->
                <div class="f8-block-highlight-grid col-lg-12 col-md-12">
                  <div class="f8-grid-inner row">
                    <div class="f8-block-heading col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <h4>
                        News Headlines
                        <a href="<?php echo base_url('news') ;?>" class="pull-right">View All</a>
                      </h4>
                    </div>
                    <?php for( $i = 0; $i<3; $i++ ) { ?>
                      <div class="f8-block-highlight-grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="news-item-grid" data-target="">
                          <div class="news-item-image">
                            <img class="news-img" src="<?php echo base_url(IMAGES.'/news-'.($i+1).'.jpg'); ?>">
                            <!-- <div class="news-item-overlay"></div> -->
                          </div>
                          <div class="news-item-text" data-target="">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.
                          </div>
                        </div>
                      </div>
                    <?php }?>
                  </div>
                </div>
              </div>
              <div class="f8-block f8-block-news-national row">
                <div class="f8-block-heading col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h4>
                    National
                    <a href="#more" class="pull-right">View All</a>
                  </h4>
                </div>
                <?php for( $i = 0; $i<4; $i++ ) { ?>
                  <div class="f8-block-highlight-grid-item col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="news-item" data-target="">
                      <div class="news-item-image">
                        <img class="news-img" src="<?php echo base_url(IMAGES.'/news-'.($i+1).'.jpg'); ?>">
                        <!-- <div class="news-item-overlay"></div> -->
                      </div>
                      <div class="news-item-slug" data-target="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.
                      </div>
                    </div>
                  </div>
                <?php }?>
              </div>
              <div class="f8-block f8-block-gallery row">
                <div class="f8-block-heading col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h4>
                    Image Galleries
                    <a href="<?php echo base_url('gallery/view'); ?>" class="pull-right">View All Galleries</a>
                  </h4>
                </div>
                <div class="f8-block-title col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
              </div>
              <div class="f8-block f8-block-news-regional row"></div>
              <div class="f8-block f8-block-news-sports row"></div>
              <div class="f8-block f8-block-news-local row"></div>
              <div class="f8-block f8-block-weather row"></div>
              <div class="f8-block f8-block-video-highlight row"></div>
            </div>
          </section>
        </div>
        <?php $this->load->view('include/footer'); ?>

    </div>
    <?php $this->load->view('include/templates'); ?>
    <?php $this->load->view('include/js_common'); ?>
  </body>
</html>
