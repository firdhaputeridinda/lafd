<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');

class Places_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
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
        $this->load->helper('url_helper');

        if ($id === FALSE) {
            $data = array(
                'idPlaces' => $this->input->post(''),
                'placesName' => $this->input->post('name')
            );
    
            return $this->db->insert('places', $data);
        }
        
        $data = $this->input->post('name');
        $query = $this->db->update('places', $data, array('idPlaces' => $id));
    }
}


?>