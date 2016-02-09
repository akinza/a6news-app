<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title; ?></title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body class="drawer drawer--left drawer--navbarTopGutter">
    <?php $this->load->view('include/header'); ?>
    <div class="f8-sec-main">
      <section class="f8-sec-top"></section>
      <section class="f8-sec-body">
        <?php foreach ($news as $news_item): ?>
          <h3><?php echo $news_item['title']; ?></h3>
          <div class="main">
                  <?php echo $news_item['news_short']; ?>
          </div>
          <p><a href="<?php echo base_url('news/'.urlencode($news_item['slug'])); ?>">View article</a></p>
        <?php endforeach; ?>
      </section>
    </div>
    <?php $this->load->view('include/footer'); ?>
    <?php $this->load->view('include/templates'); ?>
    <?php $this->load->view('include/js_common'); ?>
  </body>
</html>
