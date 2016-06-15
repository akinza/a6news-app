<!DOCTYPE html>
<html>
<head>
  <title>BHARATBHUTAN-Create ad</title>
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
          <div class="f8-sec-heading">Manage Ads</div>
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
              <?php foreach ($ads as $ad): ?>
              <tr>
                <td style="width:120px;padding-top:20px;"><img src="<?php echo base_url(UPLOADS  .  explode(',', $ad->images)[0]) ; ?>" height="" width="100px"></td>
                <td>
                  <div>
                    <h6><?php echo $ad->ad_name; ?></h6>
                    <div class="help"><?php echo $ad->description; ?></div>
                    <div>
                      <a href="#">Edit</a> |
                      <a href="<?php echo base_url('ads/delete/' . $ad->ad_id); ?>" onclick="return confirm('Do you really want to delete this ad?');">Delete</a> |
                      <!-- <a href="#">Unpublish</a> | -->
                      <a href="<?php echo base_url('ads/view/' . $ad->ad_id); ?>">View ad</a>
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
  </div>
  <?php $this->load->view('include/footer'); ?>
  <?php $this->load->view('include/templates'); ?>
  <?php $this->load->view('include/js_common'); ?>
</body>
</html>
