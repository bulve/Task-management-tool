</div>
<div class="panel-body">
<div class="col-lg-4 col-lg-offset-4">
    <h2>Hello There</h2>
    <h5>Please enter the required information below.</h5>     
<?php 
    $fattr = array('class' => 'form-signin');
    echo form_open('/main/register', $fattr); ?>
    <div class="form-group">
      <?php echo form_input(array('name'=>'userName', 'id'=> 'userName', 'placeholder'=>'First Name', 'class'=>'form-control', 'value' => set_value('userName'))); ?>
      <?php echo form_error('userName');?>
    </div>
    <div class="form-group">
      <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
      <?php echo form_error('email');?>
    </div>

    <?php echo form_submit(array('value'=>'Sign up', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>
</div>