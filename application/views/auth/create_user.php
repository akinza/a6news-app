<!DOCTYPE html>
<html>
  <head>
    <title>f8news-Admin</title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body class="">
    <?php $this->load->view('include/header'); ?>
    <div class="f8-sec-main">
      <div class="f8-admin-container row">
        <section class="f8-sec-admin-sidebar  col-lg-2 col-md-3 col-sm-4 col-xs-12">
          <?php $this->load->view('admin/sidebar_menu'); ?>
        </section>
        <section class="f8-sec-admin-body  col-lg-10 col-md-9 col-sm-8 col-xs-12">
          <div class="f8-sec-inner-block  col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="f8-sec-heading">
              Add New Users
            </div>
            <p><?php echo lang('create_user_subheading');?></p>
            <div id="infoMessage"><?php echo $message;?></div>
            <?php echo form_open("auth/create_user");?>
              <div class="form-group">
                <label for="input-first-name" class="col-sm-4 control-label">First Name</label>
                <div class="col-sm-8">
                  <input name="first_name" type="text" class="form-control" id="input-first-name" placeholder="First Name">
                </div>
              </div>
              <div class="form-group">
                <label for="input-last-name" class="col-sm-4 control-label">Last Name</label>
                <div class="col-sm-8">
                  <input name="last_name" type="text" class="form-control" id="input-last-name" placeholder="Last Name">
                </div>
              </div>
              <div class="form-group">
                <label for="input-email" class="col-sm-4 control-label">Email</label>
                <div class="col-sm-8">
                  <input name="email" type="eamil" class="form-control" id="input-email" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="input-phone" class="col-sm-4 control-label">Phone/ Mobile</label>
                <div class="col-sm-8">
                  <input name="phone" type="text" class="form-control" id="input-phone" placeholder="Phone">
                </div>
              </div>
              <div class="form-group">
                <label for="input-secret" class="col-sm-4 control-label">Password</label>
                <div class="col-sm-8">
                  <input name="password" type="password" class="form-control" id="input-secret" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <label for="input-secret" class="col-sm-4 control-label">Confirm Password</label>
                <div class="col-sm-8">
                  <input name="password_confirm" type="password" class="form-control" id="input-secret" placeholder="Confirm Password">
                </div>
              </div>
              <!-- <div class="form-group">
                <label for="select-role" class="col-sm-4 control-label">Role</label>
                <div class="col-sm-8">
                  <select name="role_id" class="form-control">
                    <option value="-1">Select User Role</option>
                    <option value="1">Beta</option>
                    <option value="2">Gamma</option>
                  </select>
                </div>
              </div> -->

              <div class="form-group">
                <div class="col-sm-8 pull-right">
                  <button type="submit" class="btn btn-primary btn-lg">Add User</button>
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
