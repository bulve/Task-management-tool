<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Viktorija
 * Date: 2017-03-01
 * Time: 16:10
 */

class Admin extends CI_Controller{


    public $roles;


    function __construct()
    {
        parent::__construct();

        $this->load->model('User_model', 'user_model', TRUE);
        $this->load->model('Task_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->roles = $this->config->item('roles');
		$this->taskStatus = $this->config->item('taskStatus');

    }
    public function index() //redirecting to right place
    {
        if(empty($this->session->userdata['email'])){
            redirect(site_url().'/main/login/');
        }
        /*front page*/
        if($this->session->userdata['role'] == 'admin'){

            redirect(site_url().'/admin/tasks/');

        }else{
            redirect(site_url().'/main/tasks/');
        }

    }


    public function create()    //new task create
    {
        if (empty($this->session->userdata['email'])) {
            redirect(site_url() . '/main/login/');
        }
        $this->form_validation->set_rules('taskTopic', 'Task topic', 'required');
        $this->form_validation->set_rules('taskText', 'Task', 'required');
        $this->form_validation->set_rules('deadline', 'Dead line date format', 'trim|required|callback_validate_date');

        $data['users']= $this->user_model->get_only_users();
        $data['userList'] = $this->input->post('userList');

        if ($this->session->userdata['role'] == $this->roles[1]) {
            if($this->form_validation->run() == FALSE) {
                $this->load->view('header');
                $this->load->view('Admin/navbar',$data);
                $this->load->view('Admin/create');
                $this->load->view('footer');
            }else{
                $query = $this->Task_model->add_task();
                if($query){
                    $this->session->set_flashdata('flash_message', 'Success');
                }else{
                    $this->session->set_flashdata('flash_message', 'Failed');
                }
                redirect(site_url() . '/admin/create');

            }
        }else{
            redirect(site_url() . '/main/');
        }
    }
    public function tasks() //task list for admin
    {
        if (empty($this->session->userdata['email'])) {
            redirect(site_url() . '/main/login/');
        }


        if ($this->session->userdata['role'] ==  $this->roles[1]) {

            $data['tasks'] = $this->Task_model->get_tasks();

            $this->load->view('header');
            $this->load->view('Admin/navbar');
            $this->load->view('Admin/tasks', $data);
            $this->load->view('footer');

        }else{
                redirect(site_url('main/tasks'));
            }

    }
    public function task($id) //onclick delete task from task list
    {
        if (empty($this->session->userdata['email'])) {
            redirect(site_url() . '/main/login/');
        }
        if ($this->session->userdata['role'] == $this->roles[1]) {
            $query = $this->Task_model->delete_task($id);
            if($query){
                $this->session->set_flashdata('flash_message', 'Success');
            }else{
                $this->session->set_flashdata('flash_message', 'Failled');
            }
            redirect(site_url('/admin/tasks'));

        }else
            redirect(site_url('/main/'));


    }


        public function up($id){
        if (empty($this->session->userdata['email'])) {
            redirect(site_url() . '/main/login/');
        }
        $this->form_validation->set_rules('newTaskTopic', 'Task topic', 'required');
        $this->form_validation->set_rules('newTaskText', 'Task', 'required');
		$this->form_validation->set_rules('newDeadline', 'Dead line date format', 'trim|required|callback_validate_date');

        $data['id'] = $id;
        $data['uniqTask'] = $this->Task_model->get_uniq_task($id);
        $data['users']= $this->user_model->get_only_users();
        //$data['userList'] = $this->input->post('newUserList');

        if ($this->session->userdata['role'] == $this->roles[1]) {
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('header');
                $this->load->view('Admin/navbar');
                $this->load->view('Admin/update', $data);
                $this->load->view('footer');

            } else {

                $query = $this->Task_model->update_task($id);

                if ($query) {
                    $this->session->set_flashdata('flash_message', 'Success');
                } else {
                    $this->session->set_flashdata('flash_message', 'Failed');
                }
                redirect(site_url() . '/admin/tasks');
            }
        }else{
            redirect(site_url() . '/main/');
        }
    }



    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url().'/main/login/');
    }
	
	function validate_date($str){
        if (preg_match("/^((((19|[2-9]\d)\d{2})\-(0[13578]|1[02])\-(0[1-9]|[12]\d|3[01]))|(((19|[2-9]\d)\d{2})\-(0[13456789]|1[012])\-(0[1-9]|[12]\d|30))|(((19|[2-9]\d)\d{2})\-02\-(0[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))\-02\-29))$/g",$str)) //yes it's YYYY-MM-DD
        {
            $this->form_validation->set_message('validate_date', 'The {field} has not a valid date format');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }



}

