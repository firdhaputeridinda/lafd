<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');
/**
 * Model : mimin/students_model
 * Views : mimin/students
 * Controller : mimin/students_controller
 */
class Students_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function get_students($id = FALSE)
  {
        if ($id === FALSE)
        {
                $query = $this->db->get('students');
                return $query->result_array();
        }

        $query = $this->db->get_where('students', array('nim' => $id));
        return $query->row_array();
  }

  public function set_students()
  {
    $this->load->helper('url');
    $id = url_title($this->input->post('nim'),'dash',TRUE);
    $data = array(
            'nim' => $this->input->post('nim'),
            'name' => $this->input->post('name'),
            'gender' => $this->input->post('gender'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'mobilePhone' => $this->input->post('mobilePhone')
          );

    return $this->db->insert('students', $data);
  }
}

 ?>
