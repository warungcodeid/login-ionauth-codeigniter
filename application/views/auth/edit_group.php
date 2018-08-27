<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo lang('edit_group_heading');?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>dist/form-validation.css" rel="stylesheet">

  </head>

  <body class="bg-light">

   <div class="container">
     <div class="py-5 text-center">
       <img class="d-block mx-auto mb-4" src="<?php echo base_url();?>dist/img/icon.png" alt="" width="64" height="72">
       <h2><?php echo lang('edit_group_heading');?></h2>
       <p class="lead"><?php echo lang('edit_group_subheading');?>.</p>
     </div>
<?php if ($message) { ?>
<div class="alert alert-danger" role="alert">
  <?php echo $message;?></div>
<?php } ?>
     <div class="row">

       <div class="col-md-8 order-md-1">
         <?php echo form_open(current_url(),"class='needs-validation'");?>


             <div class="mb-3">
               <label for="firstName">  <?php echo lang('edit_group_name_label', 'group_name');?></label>
              <?php echo form_input($group_name);?>
             </div>
             <div class=" mb-3">
               <label for="lastName"> <?php echo lang('edit_group_desc_label', 'description');?></label>
               <?php echo form_input($description);?>
             </div>




           <hr class="mb-4">
           <?php echo form_submit('submit', lang('edit_group_submit_btn'),' class="btn btn-primary btn-lg btn-block"');?>

        <?php echo form_close();?>
       </div>
     </div>


   </div>
 </body>
 </html>
