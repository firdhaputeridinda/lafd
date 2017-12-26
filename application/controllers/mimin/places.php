<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');

class Places extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mimin/places_model');
        $this->load->helper(array('url_helper','form'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['places'] = $this->places_model->get_places();
        $data['title'] = 'Data Tempat';

        $this->load->view('mimin/template/header', $data);
        $this->load->view('mimin/template/sidebar', $data);
        $this->load->view('mimin/places/index', $data);
        $this->load->view('mimin/template/footer', $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah data Tempat';

        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() === false)
        {
            $this->load->view('mimin/template/header', $data);
            $this->load->view('mimin/template/sidebar');
            $this->load->view('mimin/places/create');
            $this->load->view('mimin/template/footer');
        }
        else {
            $this->places_model->set_places();
            redirect('mimin/places');
        }
    }

    public function view($id=NULL)
    { 
      $data['places_item'] = $this->places_model->get_places($id);
      $data['title'] = 'Detail Tempat';
  
      if (empty($data['places_item']))
         {
                 // Whoops, we don't have a page for that!
                 show_404();
         }
  
         $this->load->view('mimin/template/header',$data);
         $this->load->view('mimin/places/view', $data);
         $this->load->view('mimin/template/footer',$data);
    }

    public function update($id = NULL)
    {
        $this->form_validation->set_rules('name', 'Name', 'required|alpha_numeric_spaces|max_length[50]');

        if ($this->form_validation->run() === false)
        {
            //validation here
        }
        else {
            $this->places_model->set_places($id);
            redirect('mimin/places');
        }
    }
}


?>