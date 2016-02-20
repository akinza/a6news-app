<!DOCTYPE html>
<html>
  <head>
    <title>f8news-Admin</title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body class="">
    <?php $this->load->view('include/header'); ?>

      <div class="f8-admin-container container">
        <section class="f8-sec-admin-sidebar  col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <?php $this->load->view('admin/inc/sidebar_menu'); ?>
        </section>
        <section class="f8-sec-admin-body  col-lg-9 col-md-9 col-sm-8 col-xs-12">
          <div class="f8-sec-inner-block  col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="f8-sec-heading">
              Add New Users
            </div>
            <p><?php echo lang('create_user_subheading');?></p>
            <div id="infoMessage"><?php echo $message;?></div>
            <?php echo form_open(uri_string());?>
              <div class="form-group">
                <label for="input-first-name" class="col-sm-4 control-label">First Name</label>
                <div class="col-sm-8">

                  <?php
                  $attribs_firstname = array('name' => "first_name", 'type'=> "text", 'class' => "form-control", 'id' => "input-first-name", 'placeholder' => "First Name");
                  echo form_input($first_name, '', $attribs_firstname);
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label for="input-last-name" class="col-sm-4 control-label">Last Name</label>
                <div class="col-sm-8">
                  <?php
                  $attribs_lastname = array('name' => "last_name", 'type'=> "text", 'class' => "form-control", 'id' => "input-last-name", 'placeholder' => "Last Name");
                  echo form_input($last_name, '', $attribs_lastname);
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label for="input-email" class="col-sm-4 control-label">Email</label>
                <div class="col-sm-8">
                  <?php
                  $attribs_email  = array('type'=> "email", 'class' => "form-control", 'id' => "input-email", 'placeholder' => "Email ID");
                  echo form_input($email, '', $attribs_email);
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label for="input-phone" class="col-sm-4 control-label">Phone/ Mobile</label>
                <div class="col-sm-8">
                  <?php
                  $attribs  = array('name' => "phone", 'type'=> "text", 'class' => "form-control", 'id' => "input-phone", 'placeholder' => "Phone / Mobile Number");
                  echo form_input($phone, '', $attribs);
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label for="input-secret" class="col-sm-4 control-label">Password</label>
                <div class="col-sm-8">
                  <?php
                  $attribs_pass  = array('name' => "password", 'type'=> "password", 'class' => "form-control", 'id' => "input-secret", 'placeholder' => "Password");
                  echo form_input($password, '', $attribs_pass);
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label for="input-secret" class="col-sm-4 control-label">Confirm Password</label>
                <div class="col-sm-8">
                  <?php
                  $attribs_pass_confirm  = array('name' => "password_confirm", 'type'=> "password", 'class' => "form-control", 'id' => "input-secret", 'placeholder' => "Confirm Password");
                  echo form_input($password_confirm, '', $attribs_pass_confirm);
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-4">Groups</label>
                <div class="col-sm-8">
                  <?php if ($this->ion_auth->is_admin()): ?>
                      <?php foreach ($groups as $group):?>
                          <label class="checkbox">
                          <?php
                              $gID=$group['id'];
                              $checked = null;
                              $item = null;
                              foreach($currentGroups as $grp) {
                                  if ($gID == $grp->id) {
                                      $checked= ' checked="checked"';
                                  break;
                                  }
                              }
                          ?>
                          <input type="checkbox" class="checkbox" name="groups[]" value="<?php echo $group['id'];?>" <?php echo $checked;?>>
                          <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                          </label>
                      <?php endforeach?>
                  <?php endif ?>

                  <?php echo form_hidden('id', $user->id);?>
                  <?php echo form_hidden($csrf); ?>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-8 pull-right">
                  <button type="submit" class="btn btn-warning btn-lg">Update User Details</button>
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
