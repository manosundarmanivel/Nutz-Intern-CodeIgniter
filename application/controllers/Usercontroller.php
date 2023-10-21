<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller 
{
    public function  __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('user_model');
    }

    public function index()
    {
        $data['users'] = $this->user_model->get_users();
        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        if ($this->input->post('save'))
        {
            $data['Name'] = $this->input->post('username');
            $data['Email'] = $this->input->post('email');
            $data['Password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            $data['IsActive'] = true;

            $response = $this->user_model->saverecords($data);

            if ($response == true)
            {
                echo "Successfully Inserted";
            }
            else
            {
                echo "Failed to insert";
            }
        }
       
        redirect('user');
    }

    public function edit($userID)
{
    $data['user'] = $this->user_model->get_user_by_id($userID);

    if ($this->input->post('change'))
    {
      
        $newName = $this->input->post('username');
        $this->user_model->update_user_name($userID, $newName);
       
        redirect('user');
    }
    
    $this->load->view('user_edit', $data);
}

    public function delete($userID)
    {
        $this->user_model->deactivate_user($userID);
       
        redirect('user');
    }
}
