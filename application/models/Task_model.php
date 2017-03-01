<?php
/**
 * Created by PhpStorm.
 * User: Viktorija
 * Date: 2017-02-27
 * Time: 20:39
 */

class Task_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

    public function add_task(){
        //$userID = $this->input->post('userList');
       // $query = $this->db->query("Select userID from users where email = $userEmail");
        //$q = $query->result();

        $string = array(
            'task'=> $this->input->post('taskText'),
            'taskTopic'=> $this->input->post('taskTopic'),
            'created' => date('Y-m-d'),
            'deadline' => $this->input->post('deadline'),
            'taskStatus' => $this->taskStatus[0],
            'userID' => $this->input->post('userList')
        );
        $this->db->insert('tasks', $string);

        if($this->db->affected_rows() != 1){
            return false;
        } else {
            return true;
        }

    }
    public function get_tasks(){
        return $this->db->query("SELECT taskID, userID, taskStatus, email, name, created, deadline, taskTopic FROM tasks
                                JOIN users on tasks.userID = users.id");
    }
    public function get_uniq_task($id){
        return $this->db->query("select deadline, taskStatus, taskTopic, task, email, id from tasks join users on tasks.userID = users.id where taskID = $id");
    }

    public function update_task($id){
        $string = array(
            'task'=> $this->input->post('newTaskText'),
            'taskTopic'=> $this->input->post('newTaskTopic'),
            'userID' => $this->input->post('newUserList'),
            'deadline' => $this->input->post('newDeadline')
            //dadeti tai ko dar nera (deadline) ir pns.
        );

        $this->db->where('taskID', $id );
        $this->db->update('tasks', $string);
        if($this ->db->affected_rows() != 1){
            return false;
        }else
            return true;
    }
    public function delete_task($id){

        //$id = $this->input->post('taskID');
        $this->db->where('taskID', $id);
        $this->db->delete('tasks');
        if($this->db->affected_rows() != 1){
            return false;
        }else
            return true;
    }
    public function change_task_status($id){
        $query = $this->Task_model->get_uniq_task($id);
        foreach($query->result() as $row){
        }
        if($row->taskStatus == 'completed') {
            $this->db->set('taskStatus', 'published');
            $this->db->where('taskID', $id);
            $this->db->update('tasks');
        }else{
            $this->db->set('taskStatus', 'completed');
            $this->db->where('taskID', $id);
            $this->db->update('tasks');
        }
        if($this->db->affected_rows() != 1){
            return false;
        }else
            return true;
    }


}