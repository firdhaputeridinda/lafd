<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');

class Places_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url_helper');
    }

    public function get_places($id = false)
    {
        if ($id === FALSE) 
        {
            $query = $this->db->get('places');
            return $query->result_array();
        }

        $query = $this->db->get_where('places', array('idPlaces' => $id));
        return $query->row_array();
    }

    public function set_places($id = false)
    {
        if ($id === FALSE) {
            $data = array(
                'idPlaces' => $this->input->post(''),
                'placesName' => $this->input->post('name')
            );
    
            return $this->db->insert('places', $data);
        }
        
        $data = array(
            'placesName' => $this->input->post('name')
        );
        $this->db->where('idPlaces', $id);
        $this->db->update('places', $data);
    }
}


?>