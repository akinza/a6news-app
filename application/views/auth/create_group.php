<!DOCTYPE html>
<html>
  <head>
    <title>BHARATBHUTAN-Admin</title>
    <?php $this->load->view('include/css_common'); ?>
  </head>
  <body class="">
    <?php $this->load->view('include/header'); ?>
      <div class="f8-admin-container container">
        <section class="f8-sec-admin-sidebar  col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <?php $this->load->view('admin/inc/sidebar_menu'); ?>
        </section>
        <section class="f8-sec-admin-body  col-lg-9 col-md-9 col-sm-8 col-xs-12">
          <div class="f8-sec-inner-block">
            <div class="f8-sec-heading">
              <?php echo lang('create_group_heading');?>
            </div>
            <p><?php echo lang('create_group_subheading');?></p>
            <div id="infoMessage"><?php echo $message;?></div>
            <?php echo form_open("auth/create_group");?>
              <div class="form-group">
                <label for="group_name" class="col-sm-3 control-label" >Group Name</label>
                <div class="col-sm-6">
                  <input name="group_name" type="text" class="form-control" id="group_name" placeholder="Group Name">
                </div>
              </div>
              <div class="form-group">
                <label for="input-last-name" class="col-sm-3 control-label">Description</label>
                <div class="col-sm-6">
                  <input name="description" type="text" class="form-control" id="description" placeholder="Description">
                </div>
              </div>
              <br>
              <div class="form-group">
                <div class="col-sm-9 text-right">
                  <button type="submit" class="btn btn-warning">Create Group</button>
                </div>
              </div>
              <?php echo form_close();?>
          </div>
        </section>
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
