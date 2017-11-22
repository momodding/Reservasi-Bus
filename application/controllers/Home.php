<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $this->load->view('tampilan_home');
  }

  public function result()
  {
    $this->load->view('tampilan_result');
  }

}
