<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $news['title']; ?></title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body class="">
    <?php $this->load->view('include/header'); ?>
    <div class="f8-sec-main container">
      <section class="f8-sec-top">

      </section>
      <section class="f8-sec-body">
        <div class="row f8-sec-body-inner">
          <div class="f8-sec-main-col col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="f8-sec-blocks">
              <div class="f8-news-single">
                <div class="news-title"><?php echo $news['title']; ?></div>
                <div class="news-time-author">
                  <span class="news-date-time"><?php echo $news['created']; ?></span>
                  <span class="news-author">By <?php echo $this->ion_auth->getUserName($news['author']); ?></span>
                </div>
                <div class="news-image-gallery">
                  <div id="carousel-news-image-gallery" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <?php
                        $images = explode(',', $news['images']);
                        $count = count($images);
                        $i = 0; foreach ($images as $image):
                      ?>
                      <!-- <li data-target="#carousel-news-image-gallery" data-slide-to="<?php echo $i; ?>" class="<?php if($i === 0 ) echo 'active'; ?>"></li> -->
                      <?php $i++; endforeach; ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <?php
                        $i = 0; foreach ($images as $image):
                      ?>
                        <div class="item <?php if($i === 0 ) echo 'active'; ?>">
                          <img src="<?php echo base_url(UPLOADS  .  $image); ?>" alt="...">
                          <div class="carousel-caption">
                             Caption Goes HereCaption Goes HereCaption Goes HereCaption Goes HereCaption Goes HereCaption Goes Here
                          </div>
                        </div>
                      <?php $i++; endforeach; ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-news-image-gallery" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-news-image-gallery" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <div class="news-body">
                  <?php echo $news['news_full']; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="f8-sec-sidebar-col col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <!--TODO: Show Related Articles & Ads-->
            <div class="f8-sec-sidebar-blocks">

            </div>
          </div>
        </div>
      </section>
    </div>
    <?php $this->load->view('include/footer'); ?>
    <?php $this->load->view('include/templates'); ?>
    <?php $this->load->view('include/js_common'); ?>
  </body>
</html>
