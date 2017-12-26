<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');

class Auth_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function login()
    {
        $this->db->select('nik,password');
        $this->db->from('staff');
        $this->db->where('nik', $nik);
        $this->db->where('password', $password);
    }
}
?>