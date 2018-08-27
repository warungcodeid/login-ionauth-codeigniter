<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo lang('create_group_heading');?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>dist/form-validation.css" rel="stylesheet">

  </head>

  <body class="bg-light">

   <div class="container">
     <div class="py-5 text-center">
       <img class="d-block mx-auto mb-4" src="<?php echo base_url();?>dist/img/icon.png" alt="" width="64" height="72">
       <h2><?php echo lang('deactivate_heading');?></h2>
       <p class="lead"><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
     </div>
     <div class="row">

       <div class="col-md-8 order-md-1">
         <?php echo form_open("auth/deactivate/".$user->id,"class='needs-validation'");?>


             <div class="mb-3">
               <label for="firstName">  <?php echo lang('deactivate_confirm_y_label', 'confirm');?></label>
              <input type="radio" name="confirm" value="yes" checked="checked" />
            
               <label for="lastName"><?php echo lang('deactivate_confirm_n_label', 'confirm');?></label>
               <input type="radio" name="confirm" value="no" />
             </div>



             <?php echo form_hidden($csrf); ?>
             <?php echo form_hidden(array('id'=>$user->id)); ?>
           <hr class="mb-4">
           <?php echo form_submit('submit', lang('deactivate_submit_btn'),' class="btn btn-primary btn-lg btn-block"');?>

        <?php echo form_close();?>
       </div>
     </div>


   </div>
 </body>
 </html>
