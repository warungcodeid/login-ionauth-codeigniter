<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo lang('create_user_heading');?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>dist/form-validation.css" rel="stylesheet">

  </head>

  <body class="bg-light">

   <div class="container">
     <div class="py-5 text-center">
       <img class="d-block mx-auto mb-4" src="<?php echo base_url();?>dist/img/icon.png" alt="" width="64" height="72">
       <h2><?php echo lang('create_user_heading');?></h2>
       <p class="lead"><?php echo lang('create_user_subheading');?>.</p>
     </div>
<?php if ($message) { ?>
<div class="alert alert-danger" role="alert">
  <?php echo $message;?></div>
<?php } ?>
     <div class="row">

       <div class="col-md-8 order-md-1">
         <?php echo form_open("auth/create_user","class='needs-validation'");?>

           <div class="row">
             <div class="col-md-6 mb-3">
               <label for="firstName"><?php echo lang('create_user_fname_label', 'first_name');?></label>
              <?php echo form_input($first_name);?>
             </div>
             <div class="col-md-6 mb-3">
               <label for="lastName">  <?php echo lang('create_user_lname_label', 'last_name');?></label>
               <?php echo form_input($last_name);?>
             </div>
           </div>


             <?php
             if($identity_column!=='email') {
                 echo '<div class="mb-3">';
                 echo lang('create_user_identity_label', 'identity');
                 echo '<br />';
                 echo form_error('identity');
                 echo form_input($identity);
                 echo ' </div>';
             }
             ?>


           <div class="mb-3">
             <label for="company"><?php echo lang('create_user_company_label', 'company');?></label>
            <?php echo form_input($company);?>
          </div>
          <div class="mb-3">
            <label for="email"><?php echo lang('create_user_email_label', 'email');?></label>
           <?php echo form_input($email);?>
         </div>
         <div class="mb-3">
           <label for="phone">  <?php echo lang('create_user_phone_label', 'phone');?></label>
          <?php echo form_input($phone);?>
         </div>
         <div class="mb-3">
           <label for="phone">  <?php echo lang('create_user_password_label', 'password');?></label>
          <?php echo form_input($password);?>
         </div>
         <div class="mb-3">
           <label for="phone">  <?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
          <?php echo form_input($password_confirm);?>
         </div>
           <hr class="mb-4">
           <?php echo form_submit('submit', lang('create_user_submit_btn'),' class="btn btn-primary btn-lg btn-block"');?>

        <?php echo form_close();?>
       </div>
     </div>


   </div>
 </body>
 </html>
