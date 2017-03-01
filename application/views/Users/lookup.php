<ul class="nav nav-tabs nav-justified" >
    <li><a href="<?php echo site_url()?>/main/tasks/">Back to list</a></li>
</ul>
</div>
<div class="panel-body">
    <?php $row = $uniqTask->row();?>
    <br>
    <h4 style="text-align: center"><?php echo $row->taskTopic;?></h4>

 <h4 style="text-indent:2.2cm"><?php echo $row->task;?></h4>
    <h4>Dead line: <?php echo $row->deadline;?></h4>

