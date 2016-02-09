<!DOCTYPE html>
<html>
  <head>
    <title>f8news-Admin</title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body class="drawer drawer--left drawer--navbarTopGutter">
    <?php $this->load->view('include/header'); ?>
    <div class="f8-sec-main">
      <div class="f8-admin-container row">
        <section class="f8-sec-admin-sidebar  col-lg-2 col-md-3 col-sm-4 col-xs-12">
          <?php $this->load->view('admin/sidebar_menu'); ?>
        </section>
        <section class="f8-sec-admin-body  col-lg-10 col-md-9 col-sm-8 col-xs-12">
          <div class="f8-sec-inner-block  col-lg-6 col-md-6 col-sm-8 col-xs-12">
            <div class="f8-sec-heading">
              <?php echo lang('edit_group_heading');?>
            </div>
            <p><?php echo lang('edit_group_subheading');?></p>
            <div id="infoMessage"><?php echo $message;?></div>
            <?php echo form_open(current_url());?>
              <div class="form-group">
                <label for="group_name" class="col-sm-3 control-label" style="text-align:left !important;">Group Name</label>
                <div class="col-sm-8">
                  <?php echo form_input($group_name);?>
                </div>
              </div>
              <div class="form-group">
                <label for="input-last-name" class="col-sm-3 control-label"  style="text-align:left !important;">Description</label>
                <div class="col-sm-8">
                  <?php echo form_input($group_description);?>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-11">
                  <button type="submit" class="btn btn-warning btn-block">Update Group</button>
                </div>
              </div>
              <?php echo form_close();?>
          </div>
        </section>
      </div>
    </div>
    <?php $this->load->view('include/footer'); ?>
    <?php $this->load->view('include/templates'); ?>
    <?php $this->load->view('include/js_common'); ?>
    <script>
      $(document).ready(function(){
        $('form').addClass("form-horizontal");
      });
    </script>
  </body>
</html>
