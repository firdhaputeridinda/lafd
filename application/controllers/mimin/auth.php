<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mimin/auth_model');
        $this->load->helper(array('url_helper','form'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Login Administrator';
        $this->load->view('mimin/login', $data);
    }

    public function login()
    {
       $data['nik'] = $this->form_validation->set_rules('nik','NIK','required|interger|exact_length[16]');
       $data['password'] = $this->form_validation->set_rules('password','Password','required|max_length[60]');

       if ($this->form_validation->run() == FALSE)
       {
            $this->load->view('myform');
       }
       else
       {
            $this->auth_model->login($data);
       }
    }

    public function logout()
    {
        $this->load->view('');
    }
}

?>