<!DOCTYPE html>
<html>
  <head>
    <title>f8news :: Admin</title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body>
    <?php $this->load->view('include/header'); ?>
    <div class="container f8-admin-container">
      <section class="f8-sec-admin-sidebar">

      </section>
      <section class="f8-sec-admin-body">
        <?php
        if(!empty($sub_view)){
            $this->load->view($sub_view);
        }
        ?>
      </section>
    </div>
    <?php $this->load->view('include/footer'); ?>
    <?php $this->load->view('include/templates'); ?>
    <?php $this->load->view('include/js_common'); ?>
  </body>
</html>
