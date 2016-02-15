<!DOCTYPE html>
<html>
<head>
  <title>f8news-Admin</title>
  <?php $this->load->view('include/css_common'); ?>
</head>
<body>
  <?php $this->load->view('include/header'); ?>
  <div class="f8-admin-container container">
    <section class="f8-sec-admin-sidebar  col-lg-3 col-md-3 col-sm-4 col-xs-12">
      <?php $this->load->view('admin/sidebar_menu'); ?>
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
        <table class="table table-default table-stripped">
          <thead>
            <tr>
              <td>#</th>
              <th>Category Name</th>
              <th>Description</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($categories as $category): ?>
              <tr>
                <td><?php echo $category->category_id; ?></td>
                <td><?php echo $category->category_name; ?></td>
                <td><?php echo $category->description; ?></td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <p><a class="btn btn-sm btn-primary" href="<?php echo base_url('article/create_category');?>">Add More News Category</a></p>
      </div>
    </section>
  </div>
<?php $this->load->view('include/footer'); ?>
<?php $this->load->view('include/templates'); ?>
<?php $this->load->view('include/js_common'); ?>
</body>
</html>
