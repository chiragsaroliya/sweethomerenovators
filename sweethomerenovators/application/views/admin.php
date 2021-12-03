
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/admin.css">
</head>
<body>
<div class="container">
 <?php echo $this->session->flashdata('msg'); ?>
 <?php echo $this->session->flashdata('msg1'); ?>
 <?php echo $this->session->flashdata('msg2'); ?>
 <?php echo $this->session->flashdata('msg3'); ?>
<section id="content">
    
    <?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'admin/login/', $fattr); ?>
	<h1>HSH Login</h1>
    <div class="form-group">
      <?php echo form_input(array(
	      'type'=>'email',
	      'pattern'=>'[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}',
          'name'=>'email', 
          'id'=> 'email', 
          'placeholder'=>'Email', 
          'required'=>'required', 
          'class'=>'form-control', 
          'value'=> set_value('email'))); ?>
      <?php echo form_error('email') ?>
    </div>
    <div class="form-group">
      <?php echo form_password(array(
          'name'=>'password', 
          'id'=> 'password', 
          'placeholder'=>'Password', 
          'class'=>'form-control', 
		  'required'=>'required', 
          'value'=> set_value('password'))); ?>
      <?php echo form_error('password') ?>
    </div>
    <div>
    <?php echo form_submit(array('value'=>'Let me in!', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
	</div>
	<?php echo form_close(); ?>
    

</section><!-- content -->
</div>
</body>
</html>