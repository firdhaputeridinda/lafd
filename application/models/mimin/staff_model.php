<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');
/**
 * Model : mimin/staff_model
 * Views : mimin/staff
 * Controller : mimin/staff_controller
 */
class Staff_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function get_staff($id = FALSE)
  {
        if ($id === FALSE)
        {
                $query = $this->db->get('staff');
                return $query->result_array();
        }

        $query = $this->db->get_where('staff', array('nik' => $id));
        return $query->row_array();
  }

  public function set_staff()
  {
    $this->load->helper('url');
    $id = url_title($this->input->post('nik'),'dash',TRUE);
    $data = array(
            'nik' => $this->input->post('nik'),
            'name' => $this->input->post('name'),
            'gender' => $this->input->post('gender'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
          );

    return $this->db->insert('staff', $data);
  }

  public function login($user, $pw)
  {
    $this->load->helper('url');
  }
}

 ?>
