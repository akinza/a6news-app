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
            <!--Top Latest News-->
            <div class="well top-latest-news">
              <div class="row">
                <div class="col-sm-6 top-latest-news-image">
                  <?php ?>
                </div>
                <div class="col-sm-6 top-latest-news-desc">
                  <?php ?>
                </div>
              </div>
            </div>
            <!--/Top Latest News-->

            <?php foreach ($news as $news_item): ?>
              
            <?php endforeach; ?>

            <?php foreach($categories as $news_category):?>
              <div class="panel panel-default">
                <div class="panel-heading"><?php echo $news_category->category_name; ?></div>
                <div class="panel-body">
                  <?php foreach($all_news[$news_category->category_name] as $news_group_item):?>
                    <a class="news-title" href="<?php echo base_url('news/'.urlencode($news_group_item->slug)); ?>">
                      <?php echo $news_group_item->title; ?>
                    </a>
                  <?php endforeach; ?>
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
