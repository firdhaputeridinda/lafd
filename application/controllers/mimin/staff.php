<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');
/**
* Model : mimin/staff_model
* Views : mimin/staff
* Controller : mimin/staff_controller
 */
class Staff extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('mimin/staff_model');
    $this->load->helper('url_helper');
  }

  public function index()
  {
    $data['staff'] = $this->staff_model->get_staff();
    $data['title'] = 'Data Pengguna';

    $this->load->view('mimin/template/header', $data);
    $this->load->view('mimin/template/sidebar', $data);
    $this->load->view('mimin/staff/index', $data);
    $this->load->view('mimin/template/footer', $data);
  }

  public function view($id=NULL)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['staff_item'] = $this->staff_model->get_staff($id);
    $data['title'] = 'Detail Pengguna';

    if (empty($data['staff_item']))
       {
               // Whoops, we don't have a page for that!
               show_404();
       }

       $this->load->view('mimin/template/header',$data);
       $this->load->view('mimin/staff/view', $data);
       $this->load->view('mimin/template/footer',$data);
  }

  public function create()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add staff';

    $this->form_validation->set_rules('nik','Nik','required');
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('gender','Gender','required');
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('password','Password','required');

    if ($this->form_validation->run() === FALSE)
    {
      $this->load->view('mimin/template/header',$data);
      $this->load->view('mimin/staff/create');
      $this->load->view('mimin/template/footer');
    }
    else {
      $this->staff_model->set_staff();
      $this->load->view('mimin/staff/success');
    }
  }

  public function update($id = NULL)
  {

  }
}

 ?>
