<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller{

  function index()
  {
    $this->load->model('admin/model_bus');
    //$this->model_security->getSecurity();
    $isi = array ('title' => 'Halaman Dashboard Admin - Bus',
                  'judul' => 'Bus',
                  'sub_judul' => 'Jadwal Bus',
                  'content' => 'admin/bus/jadwal_bus',
                  'data' => $this->model_bus->getJadwalBus());
    $this->load->view('admin/tampilan_dashboard', $isi);
  }

}
