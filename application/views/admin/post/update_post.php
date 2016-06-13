<!DOCTYPE html>
<html>
  <head>
    <title>BHARATBHUTAN-Admin</title>
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
            <!--Content comes here-->
          </section>
        </div>
      </div>
    <?php $this->load->view('include/footer'); ?>
    <?php $this->load->view('include/templates'); ?>
    <?php $this->load->view('include/js_common'); ?>
  </body>
</html>
