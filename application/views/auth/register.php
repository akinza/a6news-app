<!DOCTYPE html>
<html>
<head>
  <title>f8news :: Sign Up</title>
  <?php $this->load->view('include/css_common'); ?>
</head>
<body>
  <?php $this->load->view('include/header'); ?>
  <div class="container f8-sec-main">
    <section class="f8-sec-register-main Absolute-Center">
      <div class="f8-register-header">
        Register
      </div>
      <div class="f8-register-container">
        <form>
          <div class="form-group">
            <label for="inputFirstName">First Name</label>
            <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-lg btn-primary btn-block">Sign In ...</button>
          <hr>
          <div class="form-group">
            <p>Already registered? <a class="btn btn-link" href="<?php echo base_url("auth/login"); ?>">Login</a></p>
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
