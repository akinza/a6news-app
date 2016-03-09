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
        <div class="f8-sec-heading">Manage Gallery</div>
        <?php if(isset($message)) { echo $message; } ?>
        <?php if(isset($error)) { echo $error->message; } ?>
        <table class="table table-default table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($galleries as $gallery): ?>
            <tr>
              <td style="width:120px;padding-top:20px;"><img src="<?php echo base_url(UPLOADS  .  explode(',', $gallery->images)[0]) ; ?>" height="" width="100px"></td>
              <td>
                <div>
                  <h6><?php echo $gallery->gallery_name; ?></h6>
                  <div class="help"><?php echo $gallery->description; ?></div>
                  <div>
                    <a href="#">Edit</a> |
                    <a href="<?php echo base_url('gallery/delete/' . $gallery->gallery_id); ?>" onclick="return confirm('Do you really want to delete this gallery?');">Delete</a> |
                    <a href="#">Unpublish</a> |
                    <a href="<?php echo base_url('gallery/view/' . $gallery->gallery_id); ?>">View Gallery</a>
                  </div>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
          </thead>
        </table>
      </div>
    </section>
  </div>
  <?php $this->load->view('include/footer'); ?>
  <?php $this->load->view('include/templates'); ?>
  <?php $this->load->view('include/js_common'); ?>
</body>
</html>
