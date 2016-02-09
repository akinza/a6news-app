<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $news['title']; ?></title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body class="drawer drawer--left drawer--navbarTopGutter">
    <?php $this->load->view('include/header'); ?>
    <div class="f8-sec-main">
      <section class="f8-sec-top">

      </section>
      <section class="f8-sec-body">
        <div class="f8-sec-blocks">
          <h2><?php echo $news['title']; ?></h2>
          <div>
            <?php echo $news['news_full']; ?>
          </div>
        </div>
      </section>
    </div>
    <?php $this->load->view('include/footer'); ?>
    <?php $this->load->view('include/templates'); ?>
    <?php $this->load->view('include/js_common'); ?>
  </body>
</html>
