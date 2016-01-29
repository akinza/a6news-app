<!DOCTYPE html>
<html>
  <head>
    <title>f8news :: Home</title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body>
    <?php $this->load->view('include/header'); ?>
    <div class="container f8-sec-main">
      <section class="f8-sec-body">
        <div class="f8-sec-blocks">
          <div class="f8-block f8-block-highlight row"></div>
          <div class="f8-block f8-block-news-national row"></div>
          <div class="f8-block f8-block-news-regional row"></div>
          <div class="f8-block f8-block-news-sports row"></div>
          <div class="f8-block f8-block-news-local row"></div>
          <div class="f8-block f8-block-weather row"></div>
          <div class="f8-block f8-block-video-highlight row"></div>
        </div>
      </section>
    </div>
    <?php $this->load->view('include/footer'); ?>
    <?php $this->load->view('include/templates'); ?>
    <?php $this->load->view('include/js_common'); ?>
  </body>
</html>
