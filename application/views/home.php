<!DOCTYPE html>
<html>
  <head>
    <title>f8news :: Home</title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body>
    <?php $this->load->view('include/header'); ?>
    <div class="container f8-sec-main">
      <section class="f8-sec-top">
      </section>
      <section class="f8-sec-body">
        <div class="f8-sec-body-row row">
          <div class="f8-sec-col-1 col-lg-5 col-md-5 col-sm-4 col-xs-12">
            <div class="f8-block-heading"><h5>Heading LG</h5></div>
            <div class="f8-article-container" id="article-container-sm">
              <?php for($i = 0; $i<10; $i++) {?>
              <article class="post post-sm" id="post-yyyy-mm-dd-blah">
                <div class="post-image-block">
                  <a class="post-img-span" href="#">
                    <img src="<?php echo base_url(IMAGES.'/Thumb.jpg'); ?>">
                  </a>
                </div>
                <div class="post-content-block">
                  <p><a class="post-slug">A Sample Post Slug of news content</a></p>
                  <p><span class="post-date">December 25, 2016</span></p>
                </div>
              </article>
              <?php }?>
            </div>
          </div>
          <div class="f8-sec-col-2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="f8-block-heading"><h5>Heading MD</h5></div>
            <div class="f8-article-container" id="article-container-sm">
              <?php for($i = 0; $i<10; $i++) {?>
              <article class="post post-md" id="post-yyyy-mm-dd-blah">
                <div class="post-image-block">
                  <a class="post-img-span" href="#">
                    <img src="<?php echo base_url(IMAGES.'/h1.jpg'); ?>">
                  </a>
                </div>
                <div class="post-content-block">
                  <p><a class="post-slug">A Sample Post Slug of news content</a></p>
                  <p><span class="post-date">December 25, 2016</span></p>
                </div>
              </article>
              <?php }?>
            </div>
          </div>
          <div class="f8-sec-col-3 col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <div class="f8-block-heading"><h5>Headign SM</h5></div>
            <div class="f8-article-container" id="article-container-sm">
              <?php for($i = 0; $i<10; $i++) {?>
              <article class="post post-sm" id="post-yyyy-mm-dd-blah">
                <div class="post-image-block">
                  <a class="post-img-span" href="#">
                    <img src="<?php echo base_url(IMAGES.'/Thumb.jpg'); ?>">
                  </a>
                </div>
                <div class="post-content-block">
                  <p><a class="post-slug">A Sample Post Slug of news content</a></p>
                  <p><span class="post-date">December 25, 2016</span></p>
                </div>
              </article>
              <?php }?>
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
