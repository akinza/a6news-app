<!DOCTYPE html>
<html>
<head>
  <title>f8news-Create Gallery</title>
  <?php $this->load->view('include/css_common'); ?>
</head>
<body>
  <?php $this->load->view('include/header'); ?>
  <div class="f8-admin-container container">
    <section class="f8-sec-admin-sidebar  col-lg-3 col-md-3 col-sm-4 col-xs-12">
      <?php $this->load->view('admin/inc/sidebar_menu'); ?>
    </section>
    <section class="f8-sec-admin-body  col-lg-9 col-md-9 col-sm-8 col-xs-12">
      <div class="f8-sec-inner-block">
        <div class="f8-sec-heading">Create Image Gallery</div>
        <?php if(isset($message)) { echo $message; } ?>
        <?php          echo form_open("gallery/create");        ?>

          <div class="form-group">
            <label for="input-category-name" class="control-label">Select Images</label>
            <?php echo form_input($input_gallery_image);?>
          </div>
          <div class="form-group">
            <div class="">
              <button type="submit" class="btn btn-primary">Create Image Gallery</button>
            </div>
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
