<?php

defined('BASEPATH') OR  exit("direct access not allowed");

class User extends CI_Controller
{

    function index(){
        $this->load->model('UserModel');
        $data['users']=$this->UserModel->getAll();
        $this->load->view('list',$data);
    }



    function create()
    {
        $this->load->model('UserModel');
        $this->form_validation->set_rules("name","name","required");
        $this->form_validation->set_rules("email","email","required|valid_email");

        if($this->form_validation->run() === true){
                $formarray=[];
                $formarray["name"]=$this->input->post('name');
                $formarray["email"]=$this->input->post('email');
                $formarray["created_at"]=date('Y-m-d');
                $this->UserModel->create($formarray);

                redirect("user/index");
        }else{

            $this->load->view('create');
        }
    }

    function edit($userid){
        $this->load->model('UserModel');
        $data['user']=$this->UserModel->getuser($userid);

        $this->load->view('edit',$data);
    }

    function update($userId)
    {
       $updateinfo=array();
       $updateinfo['name']=$this->input->post('name');
       $updateinfo['email']=$this->input->post('email');
        $this->load->model('UserModel');
        $this->UserModel->updateUser($userId,$updateinfo);
        redirect('user/index');
    }

    function delete($userid)
    {
        $this->load->model('UserModel');
        $this->UserModel->deleteuser($userid);
        redirect('user/index');
    }
  
}




?>