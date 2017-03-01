<?php echo form_open('main/CHANGE THIS'); ?>



<div class="form-group">
    <!--Deadline for task-->
    <?php echo form_input(array('name' => 'deadline', 'id'=>'deadline','placeholder'=>'Deadline', 'type'=>'date'));?>
    <?php echo form_error('deadline')?>
    <br>
</div>
<div class="form-group">
    <!--Chose user-->
    <?php echo form_input(array('name' => 'user', 'id'=>'user', 'placeholder'=>'User to chose from'));?>
    <?php echo form_error('user')?>
    <br>
</div>
<?php echo form_submit(array('name' => 'submit', 'value' => 'Create'));?>
<?php echo form_close(); ?>