<script>
    $( function() {
        $( "#newDeadline" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );
</script>
<?php

$list = [];
$raw = $uniqTask->row();
    $list[$raw->id] = $raw->email;

foreach($users->result() as $row){
$list[$row->id] = $row->email;
}
?>


<h1>Here you can manage task: <?php echo $raw->taskTopic;?></h1>





    <?php echo form_open(); ?>
    <div class="form-group">
        <?php echo form_label('Task topic');?>
        <?php echo form_input(array('name' => 'newTaskTopic', 'id'=>'newTaskTopic','value'=>$raw->taskTopic,'placeholder'=>'Task topic', 'class'=>'form-control'));?>
        <?php echo form_error('newTaskTopic')?>
        <br>
    </div>
    <div class="form-group">
        <!--Task text-->
        <?php echo form_textarea(array('name' => 'newTaskText', 'id'=>'newTaskText','value'=>$raw->task,'placeholder'=>'Task', 'rows'=>'5', 'cols'=>'150', 'class'=>'form-control'));?>
        <?php echo form_error('newTaskText')?>
    </div>

    <div class="form-group">
        <?php echo form_label('Select from users:');?>
        <?php echo form_dropdown(array('name' => 'newUserList', 'id'=>'newUserList', 'value'=>$raw->email, 'class'=>'form-control'), $list);?>
        <?php echo form_error('newUserList')?>
        <br>
    </div>
    <div class="form-group">
        <?php echo form_label('Task dead line')?>
        <?php echo form_input(array('name' => 'newDeadline', 'id'=>'newDeadline','value'=>$raw->deadline, 'placeholder'=>'Dead line', 'class'=>'form-control'));?>
        <?php echo form_error('deadline')?>
        <br>
    </div>


<?php echo form_submit(array('name' => 'submit', 'value' => 'Update','class'=>'btn btn-lg btn-primary btn-block'));?>
<?php echo form_close(); ?>