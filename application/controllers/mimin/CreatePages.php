<?php
defined('BASEPATH') OR exit('No Redirect script access allowed');
/**
 * Controller : CreatePages
 * View : CreatePages
 * Class to create lost data
 */
class CreatePages extends CI_Controller
{

  public function create()
  {
    $this->load->view('Create');
  }
}

 ?>
