<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>dist/offcanvas.css" rel="stylesheet">

  </head>
<body>
<main role="main" class="container">
      <div class="  align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
				<div class="row">
					<div class="col-md-10">
						<img class="mr-3" src="<?php echo base_url();?>dist/img/icon.png" alt="" width="42" height="48">
		        <div class="lh-100">
		          <h6 class="mb-0 text-white lh-100">Warungcode</h6>
		          <small>Belajar pemograman bersama kami</small>

		        </div>
					</div>
					<div class="col-md-2">
							<a href="<?php echo base_url('index.php/');?>auth/logout"><button  class="btn btn-primary float-right" type="submit">Logout</button></a>
					</div>
				</div>


      </div>
			<?php if ($message) { ?>
			<div class="alert alert-danger" role="alert">
			  <?php echo $message;?></div>
			<?php } ?>
      <div class="my-3 p-3 bg-white rounded shadow-sm">
				<h1><?php echo lang('index_heading');?></h1>
				<p><?php echo lang('index_subheading');?></p>
				<table cellpadding=0 cellspacing=10  class="table table-striped">
					<tr>
						<th><?php echo lang('index_fname_th');?></th>
						<th><?php echo lang('index_lname_th');?></th>
						<th><?php echo lang('index_email_th');?></th>
						<th><?php echo lang('index_groups_th');?></th>
						<th><?php echo lang('index_status_th');?></th>
						<th><?php echo lang('index_action_th');?></th>
					</tr>
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
							<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link'),'class="btn text-white bg-success"') : anchor("auth/activate/". $user->id, lang('index_inactive_link'),'class="btn text-white bg-danger"');?></td>
							<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
						</tr>
					<?php endforeach;?>
				</table>
				<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>

      </div>


    </main>
</body>
</html>
