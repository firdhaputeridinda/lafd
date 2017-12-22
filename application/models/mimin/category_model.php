<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');

class Category_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_category($id = false)
    {
        if ($id === FALSE) 
        {
            $query = $this->db->get('category');
            return $query->result_array();
        }

        $query = $this->db->get_where('category', array('idCategory' => $id));
        return $query->row_array();
    }

    public function set_category($id = false)
    {
        $this->load->helper('url_helper');

        if ($id === FALSE) {
            $data = array(
                'idCategory' => $this->input->post(''),
                'categoryName' => $this->input->post('name')
            );
    
            return $this->db->insert('category', $data);
        }
        
        $data = $this->input->post('name');
        $query = $this->db->update('category', $data, array('id' => $id));
    }
}


?>