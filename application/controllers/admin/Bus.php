<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends CI_Controller{


  function index()
  {
    $this->load->model('admin/model_bus');
    //$this->model_security->getSecurity();
    $isi = array ('title' => 'Halaman Dashboard Admin - Bus',
                  'judul' => 'Bus',
                  'sub_judul' => 'Data Bus',
                  'content' => 'admin/bus/data_bus',
                  'data' => $this->model_bus->getDataBus());
    $this->load->view('admin/tampilan_dashboard', $isi);
  }

  public function tambah()
  {
    $this->load->model('admin/model_bus');
    //$this->model_security->getSecurity();
    $isi = array ('title' => 'Halaman Dashboard Admin - Bus',
                  'judul' => 'Bus',
                  'sub_judul' => 'Tambah Data Bus',
                  'content' => 'admin/bus/tambah_databus',
                  'idbus' => $this->model_bus->getDataBus(),
                  'idtrayek' => $this->model_bus->getTrayekBus());
    $this->load->view('admin/tampilan_dashboard', $isi);
  }

  public function simpan()
  {
    $this->load->model('admin/model_bus');
    //$this->model_security->getSecurity();

    $data = array ('id_bus' => $this->input->post('bus'),
                  'id_trayek' => $this->input->post('trayek'),
                  'nopol_bus' => $this->input->post('nopol'),
                  'kelas' => $this->input->post('kelas'),
                  'tarif' => $this->input->post('tarif'),
                  'total_seat' => $this->input->post('seat'));
    $insert = $this->model_bus->getInsert($data);
    echo json_encode(array("status" => true));

  }

}
