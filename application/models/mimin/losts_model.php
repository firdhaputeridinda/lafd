<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');
/**
 * Model : mimin/losts_model
 * Views : mimin/losts
 * Controller : mimin/losts_controller
 */
class Losts_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
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

  public function set_losts()
  {
    $this->load->helper('url');
    $id = url_title($this->input->post('idLost'),'dash',TRUE);
    /*
    $data = array(
            'idLost' => $this->input->post('idLost'),
            'stuffName' => $this->input->post('stuffName'),
            'stuffPhotos' => $this->input->post('stuffPhotos'),
            'specificLocation' => $this->input->post('specificLocation'),
            'status' => $this->input->post('status'),
            'nik' => $this->input->post('nik')
          );*/

    return $this->db->insert('losts', $data);
  }
}

 ?>
