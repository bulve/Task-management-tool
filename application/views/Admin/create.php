<h2>Here you can create new task</h2>
<script>
    $( function() {
        $( "#deadline" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );
</script>
<?php
$list = [];

foreach($users->result() as $row){

    $list[$row->id] = $row->email;


}
?>

<?php echo form_open('admin/create'); ?>
<div class="form-group">
    <?php echo form_label('Task topic');?>
    <?php echo form_input(array('name' => 'taskTopic', 'id'=>'taskTopic', 'placeholder'=>'Task topic', 'class'=>'form-control'));?>
    <?php echo form_error('taskTopic')?>
<br>
</div>
<div class="form-group">
    <!--Task text-->
    <?php echo form_label('Task');?>
    <?php echo form_textarea(array('name' => 'taskText', 'id'=>'taskText','placeholder'=>'Task', 'rows'=>'5', 'cols'=>'150', 'class'=>'form-control'));?>
    <?php echo form_error('taskText')?>
</div>


<div class="form-group">
    <?php echo form_label('Select users:');?>
    <?php echo form_dropdown(array('name' => 'userList', 'id'=>'userList', 'class'=>'form-control'), $list);?>
    <?php echo form_error('userList')?>
    <br>
</div>
<div class="form-group">
    <?php echo form_label('Task dead line')?>
    <?php echo form_input(array('name' => 'deadline', 'id'=>'deadline', 'placeholder'=>'Dead line', 'class'=>'form-control'));?>
    <?php echo form_error('deadline')?>
    <br>
</div>


<?php echo form_submit(array('name' => 'submit', 'value' => 'Create new task', 'class'=>'btn btn-lg btn-primary btn-block'));?>
<?php echo form_close(); ?>
