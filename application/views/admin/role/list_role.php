<div class="f8-sec-inner-block">
  <table class="table table-default">
    <thead>
      <tr>
        <th class="col-sm-1">Role ID</th>
        <th>Role</th>
      </tr>
    </thead>

    <?php foreach ($roles as $role) { ?>
      <tr>
        <td><?php echo $role->role_id; ?></td>
        <td><?php echo $role->role_name; ?></td>
      </tr>
    <?php } ?>
  </table>
</div>
