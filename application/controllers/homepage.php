<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');

class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('homepage_model','mimin/places_model'));
        $this->load->helper(array('url_helper','form'));
        $this->load->library(array('form_validation','pagination'));
    }

    public function index()
    {
        $data['homepage'] = $this->homepage_model->get_homepage();
        $data['places'] = $this->places_model->get_places();
        $data['title'] = 'Lost and Found';

        $config['base_url'] = 'homepage';
        $config['total_rows'] = $this->homepage_model->get_row_total();
        $config['per_page'] = 8;
        
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('template/header', $data);
        $this->load->view('homepage', $data);
        $this->load->view('template/footer', $data);
    }


    public function view($id = NULL)
    {
      $data['homepage_item'] = $this->homepage_model->get_homepage($id);
      $data['title'] = 'Lost and Found';
  
      if (empty($data['homepage_item']))
         {
                 // Whoops, we don't have a page for that!
                 show_404();
         }
  
         $this->load->view('template/header',$data);
         $this->load->view('homepage/view', $data);
         $this->load->view('template/footer');
         //$this->load->view('places');
    }
}
?>