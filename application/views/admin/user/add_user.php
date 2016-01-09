<div class="f8-sec-inner-block">
  <div class="f8-sec-heading">
    Add New Users
  </div>
<?php echo validation_errors(); ?>
<?php echo form_open('news/create'); ?>
  <!-- <form class="form-horizontal" method="post" action="#"> -->
    <div class="form-group">
      <label for="input-first-name" class="col-sm-2 control-label">First Name</label>
      <div class="col-sm-10">
        <input name="first_name" type="text" class="form-control" id="input-first-name" placeholder="First Name">
      </div>
    </div>
    <div class="form-group">
      <label for="input-last-name" class="col-sm-2 control-label">Last Name</label>
      <div class="col-sm-10">
        <input name="last_name" type="text" class="form-control" id="input-last-name" placeholder="Last Name">
      </div>
    </div>
    <div class="form-group">
      <label for="input-email" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-10">
        <input name="email_id" type="eamil" class="form-control" id="input-email" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="input-secret" class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
        <input name="secret" type="password" class="form-control" id="input-secret" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <label for="select-role" class="col-sm-2 control-label">Role</label>
      <div class="col-sm-10">
        <select name="role_id" class="form-control">
          <option value="-1">Select User Role</option>
          <option value="1">Beta</option>
          <option value="2">Gamma</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary btn-lg">Add User</button>
      </div>
    </div>
  </form>
</div>
