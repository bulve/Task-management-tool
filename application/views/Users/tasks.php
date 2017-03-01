<ul class="nav nav-tabs nav-justified" >
    <li><a href="<?php echo site_url()?>/main/logout/">Log out</a></li>
</ul>
</div>

<div class="panel-body">
<h3>All task's for user <?php echo $email?></h3>

<div class="table">
    <table class="table">
        <thead>
        <tr>
            <th>Created</th>
            <th>Topic</th>
            <th>Status</th>
            <th>Responsible</th>
            <th>Deadline</th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach($tasks->result() as $row){
            if($id == $row->userID) {
                echo '<tr>';
                echo '<td>' . $row->created . '</td>';
                echo '<td>'.$row->taskTopic.'</td>';
                echo '<td>' . strtoupper($row->taskStatus) . '</td>';
                echo '<td>' . $row->email . '</td>';
                echo '<td>' . $row->deadline . '</td>';
                echo '<td><a class="btn btn-info" href="'.site_url('/main/lookup/'.$row->taskID).'">View task</a></td>';
                if($row->taskStatus == 'published') {
                    echo '<td><a class="btn btn-success" href="'.site_url('/main/done/'.$row->taskID).'">Done</a></td>';
                }else{
                    echo '<td><a class="btn btn-success" href="'.site_url('/main/done/'.$row->taskID).'">Undone</a></td>';
                }
                echo '</tr>';
            }
        }
        ?>


        </tbody>
    </table>
</div>