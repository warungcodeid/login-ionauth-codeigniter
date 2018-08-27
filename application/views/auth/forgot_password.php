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

  <body class="text-center">
  <?php echo form_open("auth/forgot_password","class='form-signin'");?>
      <img class="mb-8" src="<?php echo base_url();?>dist/img/icon.png" alt="" width="64" height="72">
      <h1><?php echo lang('forgot_password_heading');?></h1>
      <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

      <?php if ($message) { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $message;?></div>
      <?php } ?>
      <label for="inputEmail" class="sr-only"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label>
      <?php echo form_input($identity);?>
      <br>
      <?php echo form_submit('submit', lang('forgot_password_submit_btn'),"class='btn btn-lg btn-primary btn-block'");?>

      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
  <?php echo form_close();?>
  </body>
</html>
