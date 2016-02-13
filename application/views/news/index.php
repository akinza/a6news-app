  <!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title; ?></title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body class="">
    <?php $this->load->view('include/header'); ?>
    <div class="f8-sec-main container">
      <section class="f8-sec-top"></section>
      <section class="f8-sec-body">
        <div class="row f8-sec-body-inner">
          <div class="f8-sec-main-col col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <?php foreach ($news as $news_item): ?>
              <div class="f8-news-item">
                <div class="news-thumb" data-img-url="http://graph.facebook.com/1745217960/picture?height=120&width=120px"></div>
                <div class="news-content">
                  <a class="news-title"
                      href="<?php echo base_url('news/'.urlencode($news_item['slug'])); ?>">
                    <?php echo $news_item['title']; ?>
                  </a>
                  <div class="news-time"><?php echo $news_item['created']; ?></div>
                  <div class="news-text">
                    <?php echo $news_item['news_short']; ?>
                  </div>
                  <p><a href="<?php echo base_url('news/'.urlencode($news_item['slug'])); ?>">View article</a></p>
                </div>
              </div>
            <?php endforeach; ?>
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
  </body>
</html>
