<!DOCTYPE html>
<html>
<head>
  <title>BHARATBHUTAN-Admin</title>
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
          <div class="f8-sec-heading">
            Add News Category
          </div>
          <?php
            if(isset($message)){
                echo $message;
            }
          ?>
          <?php echo form_open("article/create_category");?>
            <div class="form-group">
              <label for="input-category-name" class="control-label">Category Name</label>
              <input name="news_category_name" type="text" class="form-control" id="input-category-name" placeholder="Category">
            </div>
            <div class="form-group">
              <label for="input-category-desc" class="control-label">Description</label>
              <input name="news_category_desc" type="text" class="form-control" id="input-category-desc" placeholder="Description">
            </div>
            <div class="form-group">
              <div class="">
                <button type="submit" class="btn btn-warning">Create News Category</button>
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
