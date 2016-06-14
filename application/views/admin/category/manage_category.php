<!DOCTYPE html>
<html>
<head>
  <title>BHARATBHUTAN-Admin</title>
  <?php $this->load->view('include/css_common'); ?>
</head>
<body>
  <?php $this->load->view('include/header'); ?>
  <div class="f8-admin-container container-fluid">
    <div class="row">
      <section class="f8-sec-admin-sidebar  col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <?php $this->load->view('admin/inc/sidebar_menu'); ?>
      </section>
      <section class="f8-sec-admin-body  col-lg-9 col-md-9 col-sm-8 col-xs-12">
        <div class="f8-sec-inner-block">
          <div class="f8-sec-heading">
            Manage News Category
          </div>
          <?php
            if(isset($message)){
                echo $message;
            }
          ?>
          <table class="table table-default table-hover" style="border-bottom: 2px solid #eee;">
            <thead>
              <tr style="background: #2196F3; color:#fff;">
                <!-- <th>#</th> -->
                <th>Category Name</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($categories as $category): ?>
                <tr>
                  <!-- <td><?php echo $category->category_id; ?></td> -->
                  <td><b><?php echo $category->category_name; ?></b></td>
                  <td><?php echo $category->description; ?></td>
                  <td><a href="<?php echo base_url('article/edit_category/'.$category->category_id);?>">Edit</a></td>
                  <td><a onclick="return confirm('Are you sure you want to delete this record?');" href="<?php echo base_url('article/delete_category/'.$category->category_id);?>">Delete</a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <p><a class="btn btn-primary" href="<?php echo base_url('article/create_category');?>">Add More News Category</a></p>
        </div>
      </section>
    </div>
  </div>
<?php $this->load->view('include/footer'); ?>
<?php $this->load->view('include/templates'); ?>
<?php $this->load->view('include/js_common'); ?>
</body>
</html>
