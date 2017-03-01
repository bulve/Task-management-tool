<h1>All task's are here</h1>



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

                    echo '<tr>';
                    echo '<td>'.$row->created.'</td>';
                    echo '<td>'.$row->taskTopic.'</td>';
                    echo '<td id="status"><p>'.strtoupper($row->taskStatus).'</p></td>';
                    echo '<td>'.$row->email.'</td>';
                    echo '<td>'.$row->deadline.'</td>';
                    echo '<td><a class="btn btn-info" href="'.site_url('/admin/up/'.$row->taskID).'">Manage</a></td>';
                    echo '<td><a class="btn btn-danger" href="'.site_url('/admin/task/'.$row->taskID).'">Delete task</a></td>';

                }
                ?>



            </tbody>
        </table>
    </div>
