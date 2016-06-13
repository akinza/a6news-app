<!DOCTYPE html>
<html>
  <head>
    <title>BHARATBHUTAN-Admin</title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body class="">
    <?php $this->load->view('include/header'); ?>
      <div class="f8-admin-container container">
        <section class="f8-sec-admin-sidebar  col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <?php $this->load->view('admin/inc/sidebar_menu'); ?>
        </section>
        <section class="f8-sec-admin-body  col-lg-9 col-md-9 col-sm-8 col-xs-12">
          <div class="f8-sec-inner-block">
            <div class="f8-sec-heading">
              <?php echo lang('change_password_heading');?>
            </div>
            <p><?php echo lang('change_password_subheading');?></p>
            <div id="infoMessage" class="text-warning"><?php echo $message;?></div>
            <?php echo form_open("auth/change_password");?>
              <div class="form-group">
                <label for="old" class="col-sm-3 control-label" >Old Password</label>
                <div class="col-sm-6">
                  <?php echo form_input($old_password);?>
                </div>
              </div>
              <div class="form-group">
                <label for="new" class="col-sm-3 control-label">New Password</label>
                <div class="col-sm-6">
                  <?php echo form_input($new_password);?>
                  <p class="text-muted" style="margin: 0;"><small>Password must be atleast 8 character long.</small></p>
                </div>

              </div>
              <div class="form-group">
                <label for="new" class="col-sm-3 control-label">Confirm New Password</label>
                <div class="col-sm-6">
                  <?php echo form_input($new_password_confirm);?>
                </div>
              </div>
              <br>
              <?php echo form_input($user_id);?>
              <div class="form-group">
                <div class="col-sm-6 text-right">
                  <button type="submit" class="btn btn-warning">Change Password</button>
                </div>
              </div>
              <?php echo form_close();?>
          </div>
        </section>
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
