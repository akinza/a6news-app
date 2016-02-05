<!DOCTYPE html>
<html>
<head>
	<title>f8news-Admin</title>
	<?php $this->load->view('include/css_common'); ?>
</head>
<body>
	<?php $this->load->view('include/header'); ?>
	<div class="f8-sec-main">
		<div class="f8-admin-container row">
			<section class="f8-sec-admin-sidebar  col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<?php $this->load->view('admin/sidebar_menu'); ?>
			</section>
			<section class="f8-sec-admin-body  col-lg-10 col-md-9 col-sm-8 col-xs-12">
				<div class="f8-sec-inner-block">
					<div class="f8-sec-heading">
						<?php echo lang('index_heading');?>
					</div>
					<!-- <p><?php echo lang('index_subheading');?></p> -->

					<div id="infoMessage"><?php echo $message;?></div>

					<table class="table table-default">
						<thead>
							<tr>
								<th><?php echo lang('index_fname_th');?></th>
								<th><?php echo lang('index_lname_th');?></th>
								<th><?php echo lang('index_email_th');?></th>
								<th><?php echo lang('index_groups_th');?></th>
								<th><?php echo lang('index_status_th');?></th>
								<th><?php echo lang('index_action_th');?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($users as $user):?>
								<tr>
									<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
									<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
									<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
									<td>
										<?php foreach ($user->groups as $group):?>
											<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
										<?php endforeach?>
									</td>
									<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
									<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
					<hr>
					<p><?php echo anchor(base_url('auth/create_user'), lang('index_create_user_link'))?> | <?php echo anchor(base_url('auth/create_group'), lang('index_create_group_link'))?></p>
				</div>
			</section>
		</div>
	</div>
	<?php $this->load->view('include/footer'); ?>
	<?php $this->load->view('include/templates'); ?>
	<?php $this->load->view('include/js_common'); ?>
</body>
</html>
