<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trayek extends CI_Controller{

  function index()
  {
    $this->load->model('admin/model_bus');
    //$this->model_security->getSecurity();
    $isi = array ('title' => 'Halaman Dashboard Admin - Bus',
                  'judul' => 'Bus',
                  'sub_judul' => 'Trayek Bus',
                  'content' => 'admin/bus/trayek_bus',
                  'data' => $this->model_bus->getTrayekBus());
    $this->load->view('admin/tampilan_dashboard', $isi);
  }

}
