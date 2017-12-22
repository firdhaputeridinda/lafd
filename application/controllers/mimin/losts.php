<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');
/**
* Model : mimin/losts_model
* Views : mimin/losts
* Controller : mimin/losts_controller
 */
class Losts extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('mimin/losts_model');
    $this->load->helper('url_helper');
  }

  public function index()
  {
    $data['losts'] = $this->losts_model->get_losts();
    $data['title'] = 'Data Kehilangan';

    $this->load->view('mimin/template/header', $data);
    $this->load->view('mimin/template/sidebar', $data);
    $this->load->view('mimin/losts/index', $data);
    $this->load->view('mimin/template/footer', $data);
  }

  public function view($id=NULL)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['losts_item'] = $this->losts_model->get_losts($id);
    $data['title'] = 'Detail Kehilangan';

    if (empty($data['losts_item']))
       {
               // Whoops, we don't have a page for that!
               show_404();
       }

       $this->load->view('mimin/template/header',$data);
       $this->load->view('mimin/losts/view', $data);
       $this->load->view('mimin/template/footer',$data);
  }

  public function create()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add losts';

    $this->form_validation->set_rules('idLosts','idLosts','required');
    $this->form_validation->set_rules('stuffName','stuffName','required');
    $this->form_validation->set_rules('stuffPhotos','stuffPhotos','required');
    $this->form_validation->set_rules('specificLocation','specificLocation','required');
    $this->form_validation->set_rules('lostTime','lostTime','required');

    if ($this->form_validation->run() === FALSE)
    {
      $this->load->view('mimin/template/header',$data);
      $this->load->view('mimin/losts/create');
      $this->load->view('mimin/template/footer');
    }
    else {
      $this->losts_model->set_losts();
      $this->load->view('mimin/losts/success');
    }
  }

  public function update($id = NULL)
  {

  }
}

 ?>
