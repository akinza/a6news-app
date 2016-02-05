<!DOCTYPE html>
<html>
  <head>
    <title>f8news-Admin</title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body>
    <?php $this->load->view('include/header'); ?>
    <div class="f8-sec-main">
      <div class="f8-admin-container row">
        <section class="f8-sec-admin-sidebar  col-lg-2 col-md-3 col-sm-4 col-xs-12">
          <?php $this->load->view('admin/sidebar_menu'); ?>
        </section>
        <section class="f8-sec-admin-body  col-lg-10 col-md-9 col-sm-8 col-xs-12">
          <?php
          if(!empty($sub_view)){
              $this->load->view($sub_view);
          }
          ?>
        </section>
      </div>
    </div>
    <?php $this->load->view('include/footer'); ?>
    <?php $this->load->view('include/templates'); ?>
    <?php $this->load->view('include/js_common'); ?>
  </body>
</html>
