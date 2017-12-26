<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');

class Homepage_model extends CI_Model
{
    public function __construct()
    {
        //parent::__construct();
        $this->load->database();
        $this->load->helper('url_helper');
    }

    public function get_homepage($id = FALSE)
    {
        if ($id === FALSE) 
        {
            // select * from losts
            $query = $this->db->get('losts');
            return $query->result_array();
        }

        $query = $this->db->get_where('losts', array('idLost' => $id));
        return $query->row_array();
    }

    public function set_homepage($id = FALSE)
    {
        if ($id === FALSE) {
            $data = array(
                'idLost' => $this->input->post(sha1('')),
                'stuffName' => $this->input->post('name')    
            );
    
            return $this->db->insert('losts', $data);
        }
        
        $data = array(
            'stuffName' => $this->input->post('name')
        );
        $this->db->where('idLost', $id);
        $this->db->update('losts', $data);
    }

    public function get_row_total()
    {
        $query = $this->db->get('losts');
        return $query->num_rows();
    }
}


?>