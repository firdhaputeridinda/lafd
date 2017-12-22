<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');
/**
* Model : mimin/students_model
* Views : mimin/students
* Controller : mimin/students_controller
 */
class Students extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('mimin/students_model');
    $this->load->helper('url_helper');
  }

  public function index()
  {
    $data['students'] = $this->students_model->get_students();
    $data['title'] = 'Data Students';

    $this->load->view('mimin/template/header', $data);
    $this->load->view('mimin/template/sidebar', $data);
    $this->load->view('mimin/students/index', $data);
    $this->load->view('mimin/template/footer', $data);
  }

  public function view($id=NULL)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['students_item'] = $this->students_model->get_students($id);
    $data['title'] = 'Detail Students';

    if (empty($data['students_item']))
       {
               // Whoops, we don't have a page for that!
               show_404();
       }

       $this->load->view('mimin/template/header',$data);
       $this->load->view('mimin/students/view', $data);
       $this->load->view('mimin/template/footer',$data);
  }

  public function create()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add students';

    $this->form_validation->set_rules('nik','Nik','required');
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('gender','Gender','required');
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('password','Password','required');

    if ($this->form_validation->run() === FALSE)
    {
      $this->load->view('mimin/template/header',$data);
      $this->load->view('mimin/students/create');
      $this->load->view('mimin/template/footer');
    }
    else {
      $this->students_model->set_students();
      $this->load->view('mimin/students/success');
    }
  }

  public function update($id = NULL)
  {

  }
}

 ?>
