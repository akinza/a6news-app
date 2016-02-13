<!DOCTYPE html>
<html>
  <head>
    <title>f8news-Admin</title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body class="">
    <?php $this->load->view('include/header'); ?>
    <div class="f8-sec-main">
      <div class="f8-admin-container row">
        <section class="f8-sec-admin-sidebar  col-lg-2 col-md-3 col-sm-4 col-xs-12">
          <?php $this->load->view('admin/sidebar_menu'); ?>
        </section>
        <section class="f8-sec-admin-body  col-lg-10 col-md-9 col-sm-8 col-xs-12">
          <div class="f8-sec-inner-block  col-lg-6 col-md-6 col-sm-8 col-xs-12">
            <div class="f8-sec-heading">
              <?php echo lang('create_group_heading');?>
            </div>
            <p><?php echo lang('create_group_subheading');?></p>
            <div id="infoMessage"><?php echo $message;?></div>
            <?php echo form_open("auth/create_group");?>
              <div class="form-group">
                <label for="group_name" class="col-sm-3 control-label" style="text-align:left !important;">Group Name</label>
                <div class="col-sm-8">
                  <input name="group_name" type="text" class="form-control" id="group_name" placeholder="Group Name">
                </div>
              </div>
              <div class="form-group">
                <label for="input-last-name" class="col-sm-3 control-label"  style="text-align:left !important;">Description</label>
                <div class="col-sm-8">
                  <input name="description" type="text" class="form-control" id="description" placeholder="Description">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-11">
                  <button type="submit" class="btn btn-warning btn-block">Create Group</button>
                </div>
              </div>
              <?php echo form_close();?>
          </div>
        </section>
      </div>
    </div>
    <?php $this->load->view('include/footer'); ?>
    <?php $this->load->view('include/templates'); ?>
    <?php $this->load->view('include/js_common'); ?>
    <script>
      $(document).ready(function(){
        $('form').addClass("form-horizontal");
      });
    </script>
  </body>
</html>
