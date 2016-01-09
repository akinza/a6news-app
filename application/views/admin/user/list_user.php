<div class="f8-sec-inner-block">
  <table class="table table-default">
    <tr>
      <td>UID</td>
      <td>Name</td>
      <td>Email ID</td>
      <td>Role</td>
    </tr>
    <?php foreach ($users as $user) { ?>
      <tr>
        <td><?php echo $user->uid; ?></td>
        <td><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></td>
        <td><?php echo $user->email_id; ?></td>
        <td><?php echo $user->role_id; ?></td>
      </tr>
    <?php } ?>
  </table>
</div>
