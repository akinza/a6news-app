<!DOCTYPE html>
<html>
<head>
  <title>BHARATBHUTAN-Show videos</title>
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
              <?php foreach ($videos as $video): ?>
              <tr>
                <td style="width:200px;padding-top:20px;">
                  <img width="200" height="150" src="https://img.youtube.com/vi/<?php echo $video->youtube_video_id ; ?>/0.jpg">
                  <!-- <iframe width="200" height="150" src="<?php echo $video->video_link ; ?>" frameborder="0" allowfullscreen></iframe> -->
                </td>
                <td>
                  <div>
                    <h6><?php echo $video->video_name; ?></h6>
                    <div class="help"><?php echo $video->description; ?></div>
                    <div class="h6"><b><?php echo $video->video_link ; ?></b></div>
                    <div>
                      <a href="#">Edit</a> |
                      <a href="<?php echo base_url('video/delete/' . $video->video_id); ?>" onclick="return confirm('Do you really want to delete this video?');">Delete</a> |
                      <!-- <a href="#">Unpublish</a> | -->
                      <a href="<?php echo base_url('video/view/' . $video->video_id); ?>">View video</a>
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
