<!DOCTYPE html>
<html>
  <head>
    <title>f8news-Admin</title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body>
    <?php $this->load->view('include/header'); ?>
    <div class="container">
      <div class="f8-admin-container row">
        <section class="f8-sec-admin-sidebar  col-lg-2 col-md-3 col-sm-4 col-xs-12">
          <div class="f8-sec-admin-menus">
            <div class="list-group f8-menu">
              <a class="list-group-item active" href="<?php echo base_url('admin/users/list');?>">Show Users</a>
              <a class="list-group-item" href="<?php echo base_url('admin/users/add');?>">Add User</a>
              <a class="list-group-item" href="<?php echo base_url('admin/users/update');?>">Update User</a>
              <a class="list-group-item" href="<?php echo base_url('admin/roles/list');?>">Show User Roles</a>
              <a class="list-group-item" href="<?php echo base_url('admin/roles/add');?>">Add User Role</a>
              <a class="list-group-item" href="<?php echo base_url('admin/roles/update');?>">Update User Role</a>
              <a class="list-group-item" href="<?php echo base_url('admin/posts/list');?>">Show All Posts</a>
              <a class="list-group-item" href="<?php echo base_url('admin/posts/add');?>">Add Post</a>
              <a class="list-group-item" href="<?php echo base_url('admin/posts/update');?>">Update Post</a>
            </div>
          </div>
        </section>
        <section class="f8-sec-admin-body  col-lg-10 col-md-9 col-sm-8 col-xs-12">
          <?php
          if(!empty($sub_view)){
              $this->load->view($sub_view);
          }
          ?>
        </section>
      </div>
    </div>
    <?php $this->load->view('include/footer'); ?>
    <?php $this->load->view('include/templates'); ?>
    <?php $this->load->view('include/js_common'); ?>
  </body>
</html>
