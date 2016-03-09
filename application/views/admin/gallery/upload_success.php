<!DOCTYPE html>
<html>
<head>
  <title>f8news-Create Gallery</title>
  <?php $this->load->view('include/css_common'); ?>
</head>
<body>
  <?php $this->load->view('include/header'); ?>
  <div class="f8-admin-container container">
    <div class="row">
      <section class="f8-sec-admin-sidebar  col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <?php $this->load->view('admin/inc/sidebar_menu'); ?>
      </section>
      <section class="f8-sec-admin-body  col-lg-9 col-md-9 col-sm-8 col-xs-12">
        <div class="f8-sec-inner-block">
          <div class="f8-sec-heading">Customize Your Gallery - <?php echo $gallery_info['gallery_name'] ; ?></div>
          <?php if(isset($message)) { echo $message; } ?>

        </div>
      </section>
    </div>
  </div>
  <?php $this->load->view('include/footer'); ?>
  <?php $this->load->view('include/templates'); ?>
  <?php $this->load->view('include/js_common'); ?>
</body>
</html>
