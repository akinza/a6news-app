<!DOCTYPE html>
<html>
<head>
  <title>f8news :: Login</title>
  <?php $this->load->view('include/css_common'); ?>
</head>
<body>
  <?php $this->load->view('include/header'); ?>
  <div class="container f8-sec-main">
    <section class="f8-sec-login-main Absolute-Center">
      <div class="f8-login-header">
        Login
      </div>
      <div class="f8-login-container">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember
            </label>
          </div>
          <br>
          <button type="submit" class="btn btn-lg btn-primary btn-block">Sign In ...</button>
          <hr>
          <div class="form-group">
            <p>Don't have account? <a class="btn btn-link" href="<?php echo base_url("auth/register"); ?>">Register</a></p>
          </div>
        </form>
      </div>
    </section>
  </div>
  <?php $this->load->view('include/footer'); ?>
  <?php $this->load->view('include/templates'); ?>
  <?php $this->load->view('include/js_common'); ?>
</body>
</html>
