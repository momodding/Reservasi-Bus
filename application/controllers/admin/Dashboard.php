<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  function index()
  {
    //$this->model_security->getSecurity();
    $isi = array ('title' => 'Halaman Dashboard Admin',
                  'judul' => 'Dashboard',
                  'sub_judul' => '',
                  'content' => 'admin/dashboard/content_dashboard');
    $this->load->view('admin/tampilan_dashboard', $isi);
  }

}