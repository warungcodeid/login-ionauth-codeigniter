<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo lang('edit_user_heading');?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>dist/form-validation.css" rel="stylesheet">

  </head>

  <body class="bg-light">

   <div class="container">
     <div class="py-5 text-center">
       <img class="d-block mx-auto mb-4" src="<?php echo base_url();?>dist/img/icon.png" alt="" width="64" height="72">
       <h2><?php echo lang('edit_user_heading');?></h2>
       <p class="lead"><?php echo lang('edit_user_subheading');?>.</p>
     </div>
      <?php if ($message) { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $message;?></div>
      <?php } ?>
     <div class="row">

       <div class="col-md-8 order-md-1">
         <?php echo form_open(uri_string(),"class='needs-validation'");?>
        
           <div class="row">
             <div class="col-md-6 mb-3">
               <label for="firstName"><?php echo lang('edit_user_fname_label', 'first_name');?></label>
              <?php echo form_input($first_name);?>
             </div>
             <div class="col-md-6 mb-3">
               <label for="lastName">  <?php echo lang('edit_user_lname_label', 'last_name');?></label>
               <?php echo form_input($last_name);?>
             </div>
           </div>

           <div class="mb-3">
             <label for="company"><?php echo lang('edit_user_company_label', 'company');?></label>
            <?php echo form_input($company);?>
          </div>
          <div class="mb-3">
            <label for="email"><?php echo lang('edit_user_email_label', 'email');?></label>
           <?php echo form_input($company);?>
         </div>
         <div class="mb-3">
           <label for="phone">  <?php echo lang('edit_user_phone_label', 'phone');?></label>
          <?php echo form_input($phone);?>
         </div>
         <div class="mb-3">
           <label for="phone">  <?php echo lang('edit_user_password_label', 'password');?></label>
          <?php echo form_input($password);?>
         </div>
         <div class="mb-3">
           <label for="phone">  <?php echo lang('edit_user_phone_label', 'password_confirm');?></label>
          <?php echo form_input($password_confirm);?>
         </div>
         <?php if ($this->ion_auth->is_admin()): ?>

             <h3><?php echo lang('edit_user_groups_heading');?></h3>
             <?php foreach ($groups as $group):?>
                 <label class="checkbox">
                 <?php
                     $gID=$group['id'];
                     $checked = null;
                     $item = null;
                     foreach($currentGroups as $grp) {
                         if ($gID == $grp->id) {
                             $checked= ' checked="checked"';
                         break;
                         }
                     }
                 ?>
                 <input type="checkbox"  name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                 <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                 </label>
             <?php endforeach?>

         <?php endif ?>

         <?php echo form_hidden('id', $user->id);?>
         <?php echo form_hidden($csrf); ?>
           <hr class="mb-4">
           <?php echo form_submit('submit', lang('edit_user_submit_btn'),' class="btn btn-primary btn-lg btn-block"');?>

        <?php echo form_close();?>
       </div>
     </div>


   </div>

 </body>
 </html>
