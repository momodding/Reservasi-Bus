<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trayek extends CI_Controller{

  function index()
  {
    $this->admin_login->getSecurity();
    $this->load->model('admin/model_bus');
    $isi = array ('title' => 'Halaman Dashboard Admin - Bus',
                  'judul' => 'Bus',
                  'sub_judul' => '<li class="active"> Trayek Bus</li>',
                  'content' => 'admin/bus/trayek_bus',
                  'data' => $this->model_bus->getTrayekBus());
    $this->load->view('admin/tampilan_dashboard', $isi);
  }

}
