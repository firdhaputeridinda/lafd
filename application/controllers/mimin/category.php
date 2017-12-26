<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mimin/category_model');
        $this->load->helper(array('url_helper','form'));
        $this->load->library(array('form_validation','pagination'));
    }

    public function index()
    {
        $data['category'] = $this->category_model->get_category();
        $data['title'] = 'Data Kategori Barang';

        // Pagination not done
        $config['base_url'] = 'category';
        $config['total_rows'] = $this->category_model->get_row_total();
        $config['per_page'] = 8;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('mimin/template/header', $data);
        $this->load->view('mimin/template/sidebar', $data);
        $this->load->view('mimin/category/index', $data);
        $this->load->view('mimin/template/footer', $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah data Kategori';

        $this->form_validation->set_rules('name', 'Name', 'required|alpha_numeric_spaces|max_length[50]');

        if ($this->form_validation->run() === false)
        {
            $this->load->view('mimin/template/header', $data);
            $this->load->view('mimin/template/sidebar');
            $this->load->view('mimin/category/create');
            $this->load->view('mimin/template/footer');
        }
        else {
            $this->category_model->set_category();
            redirect('mimin/category');
        }
    }

    public function view($id = NULL)
    {
      $data['category_item'] = $this->category_model->get_category($id);
      $data['title'] = 'Detail Kategori';
  
      if (empty($data['category_item']))
         {
                 // Whoops, we don't have a page for that!
                 show_404();
         }
  
         $this->load->view('mimin/template/header',$data);
         $this->load->view('mimin/category/view', $data);
         $this->load->view('mimin/template/footer');
    }

    public function update($id = NULL)
    {
        $this->form_validation->set_rules('name', 'Name', 'required|alpha_numeric_spaces|max_length[50]');

        if ($this->form_validation->run() === false)
        {
            //validation here

        }
        else {
            $this->category_model->set_category($id);
            redirect('mimin/category');
        }
    }
}
?>