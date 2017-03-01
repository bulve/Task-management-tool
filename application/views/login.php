</div>
<div class="panel-body">
<div class="col-lg-4 col-lg-offset-4">
    <h2>Please login</h2>
    <?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'/main/login/', $fattr); ?>
    <div class="form-group">
      <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
      <?php echo form_error('email') ?>
    </div>
    <div class="form-group">
      <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value'=> set_value('password'))); ?>
      <?php echo form_error('password') ?>
    </div>
    <?php echo form_submit(array('value'=>'Log in', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>
    <h4 style="text-align: center"> or </h4>
    <a class='btn btn-lg btn-primary btn-block' href="<?php echo site_url();?>/main/register">Sing up</a></p>

    
</div>
