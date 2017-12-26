<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');

class Category_model extends CI_Model
{
    public function __construct()
    {
        //parent::__construct();
        $this->load->database();
        $this->load->helper('url_helper');
    }

    public function get_category($id = FALSE)
    {
        if ($id === FALSE) 
        {
            // select * from category
            $query = $this->db->get('category');
            return $query->result_array();
        }

        $query = $this->db->get_where('category', array('idCategory' => $id));
        return $query->row_array();
    }

    public function set_category($id = FALSE)
    {
        if ($id === FALSE) {
            $data = array(
                'idCategory' => $this->input->post(sha1('')),
                'categoryName' => $this->input->post('name')    
            );
    
            return $this->db->insert('category', $data);
        }
        
        $data = array(
            'categoryName' => $this->input->post('name')
        );
        $this->db->where('idCategory', $id);
        $this->db->update('category', $data);
    }

    public function get_row_total()
    {
        $query = $this->db->get('category');
        return $query->num_rows();
    }
}


?>