<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');
/**
 * Default Controller mimin
 */
class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //$this->load->model('mimin/losts_model');
    $this->load->helper('url_helper');
  }

  public function index()
  {
    $data['title'] = "Dashboard";

    $this->load->view('mimin/template/header', $data);
    $this->load->view('mimin/template/sidebar');
    $this->load->view('mimin/dashboard');
    $this->load->view('mimin/template/footer');
  }
}

 ?>
