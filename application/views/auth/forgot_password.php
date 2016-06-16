


<!DOCTYPE html>
<html>
<head>
  <title>BHARATBHUTAN :: Login</title>
  <?php $this->load->view('include/css_common'); ?>
</head>
<body class="">
  <?php $this->load->view('include/header'); ?>
  <div class="container f8-sec-main">
    <section class="f8-sec-login-main"  style="display:table; height: auto !important;">
      <div class="f8-login-header">
        Forgot Password
      </div>
      <div class="f8-login-container">
        <?php echo form_open("auth/forgot_password");?>

        <div class="forn-group">
          <label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
          <?php echo form_input($identity);?>
        </div>
        <div class="forn-group">
          <br>
          <button class="btn btn-primary" type="submit">Send reset email</button>
        </div>
        <?php echo form_close();?>
      </div>
    </section>
  </div>
  <?php $this->load->view('include/footer'); ?>
  <?php $this->load->view('include/templates'); ?>
  <?php $this->load->view('include/js_common'); ?>
</body>
</html>
