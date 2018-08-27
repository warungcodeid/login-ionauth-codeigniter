<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>dist/css/signin.css" rel="stylesheet">

  </head>
  <body class="text-center">
  <?php echo form_open("auth/login","class='form-signin'");?>
      <img class="mb-8" src="<?php echo base_url();?>dist/img/icon.png" alt="" width="64" height="72">
      <h1 class="h3 mb-3 font-weight-normal"><?php echo lang('login_heading');?></h1>
      <?php if ($message) { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $message;?></div>
      <?php } ?>
      <label for="inputEmail" class="sr-only">  <?php echo lang('login_identity_label', 'identity');?></label>
      <?php echo form_input($identity);?>
      <label for="inputPassword" class="sr-only"><?php echo lang('login_password_label', 'password');?></label>
      <?php echo form_input($password);?>
      <div class="checkbox mb-3">
        <label>
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>   <?php echo lang('login_remember_label', 'remember');?>
        </label>
        <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
      </div>
      <?php echo form_submit('submit', lang('login_submit_btn'),"class='btn btn-lg btn-primary btn-block'");?>

      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
  <?php echo form_close();?>
  </body>
</html>
