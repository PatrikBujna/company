<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

    function index()
    {
        $data['title'] = 'CodeIgniter Simple Login Form With Sessions';
        $this->load->view("template/login", $data);
    }

    function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run())
        {
            //true
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //model function
            $this->load->model('Login_m');
            if($this->Login_m->can_login($username, $password))
            {
                $session_data = array(
                    'username'     =>     $username
                );
                $this->session->set_userdata($session_data);
                redirect(base_url() . 'index.php/Home/index');
            }
            else
            {
                $this->session->set_flashdata('error', 'Zlé meno alebo heslo');
                redirect(base_url());
            }
        }
        else
        {
            //false
            $this->index();
        }
    }

    function enter(){
        if($this->session->userdata('username') != '')
        {
            echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';
            echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';
        }
        else
        {
            redirect(base_url() . 'main/login');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('username');
        redirect(base_url());
    }
}