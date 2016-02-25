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
