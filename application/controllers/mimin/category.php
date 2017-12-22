<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mimin/category_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['category'] = $this->category_model->get_category();
        $data['title'] = 'Data Kategori Barang';

        $this->load->view('mimin/template/header', $data);
        $this->load->view('mimin/template/sidebar', $data);
        $this->load->view('mimin/category/index', $data);
        $this->load->view('mimin/template/footer', $data);
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Tambah data Kategori';

        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() === false)
        {
            $this->load->view('mimin/template/header', $data);
            $this->load->view('mimin/template/sidebar', $data);
            $this->load->view('mimin/category/create', $data);
            $this->load->view('mimin/template/footer', $data);
        }
        else {
            $this->category_model->set_category();
            // redirect ke index
        }
    }

    public function view($id=NULL)
    {
      $this->load->helper('form');
      $this->load->library('form_validation');
  
      $data['category_item'] = $this->category_model->get_category($id);
      $data['title'] = 'Detail Categori';
  
      if (empty($data['category_item']))
         {
                 // Whoops, we don't have a page for that!
                 show_404();
         }
  
         $this->load->view('mimin/template/header',$data);
         $this->load->view('mimin/category/view', $data);
         $this->load->view('mimin/template/footer',$data);
    }
}


?>