<!DOCTYPE html>
<html>
<head>
  <title>BHARATBHUTAN-Create Ads</title>
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
        <div class="f8-sec-inner-block">
          <div class="f8-sec-heading">Create Image ad</div>
          <?php if(isset($message)) { echo $message; } ?>
          <?php echo form_open_multipart(base_url("ads/create")); ?>

            <div class="form-group">
              <label for="ad-name" class="control-label">Ad Name</label>
              <?php echo form_input($ad_name);?>
            </div>
            <div class="form-group">
              <label for="ad-desc" class="control-label">Description</label>
              <?php echo form_input($ad_description);?>
            </div>
            <div class="form-group">
              <label for="input-category-name" class="control-label">Select Images</label>
              <?php echo form_input($input_ad_image);?>
              <p class="help">Please select one or more images jpg, jpeg, gif , png. Max Allowed Size 2MB.</p>
            </div>
            <div class="form-group">
              <div class="">
                <button type="submit" class="btn btn-primary">Create Image ad</button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
  <?php $this->load->view('include/footer'); ?>
  <?php $this->load->view('include/templates'); ?>
  <?php $this->load->view('include/js_common'); ?>
</body>
</html>
