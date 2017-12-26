<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');

class Losts_model extends CI_Model
{
    public function __construct()
    {
        //parent::__construct();
        $this->load->database();
        $this->load->helper('url_helper');
    }

    public function get_losts($id = FALSE)
    {
        if ($id === FALSE) 
        {
            $query = $this->db->get('losts');
            return $query->result_array();
        }

        $query = $this->db->get_where('losts', array('idLost' => $id));
        return $query->row_array();
    }

    public function set_losts($id = FALSE)
    {
        if ($id === FALSE) {
            $data = array(
                'idlosts' => $this->input->post(sha1('')),
                'lostsName' => $this->input->post('name')    
            );
    
            return $this->db->insert('losts', $data);
        }
        
        $data = array(
            'lostsName' => $this->input->post('name')
        );
        $this->db->where('idlosts', $id);
        $this->db->update('losts', $data);
    }

    public function get_row_total()
    {
        $query = $this->db->get('losts');
        return $query->num_rows();
    }
}


?>