<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/model_bus');
  }

  function index()
  {    
    //$this->model_security->getSecurity();
    $isi = array ('title' => 'Halaman Dashboard Admin - Bus',
                  'judul' => 'Bus',
                  'sub_judul' => 'Data Bus',
                  'sub_judul2' => '',
                  'content' => 'admin/bus/data_bus',
                  'data' => $this->model_bus->getDataBus(),
                  'idtrayek' => $this->model_bus->getTrayekBus());
    $this->load->view('admin/tampilan_dashboard', $isi);
  }


  public function simpan()
  {
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

  public function edit($key)
  {
    $data = $this->model_bus->getBusId($key);
    echo json_encode($data);
  }

  public function delete($key)
  {
    $this->model_bus->delById($key);
    echo json_encode(array("status" => true));
  }

  public function update()
  {
    $data = array ('id_bus' => $this->input->post('bus'),
                  'id_trayek' => $this->input->post('trayek'),
                  'nopol_bus' => $this->input->post('nopol'),
                  'kelas' => $this->input->post('kelas'),
                  'tarif' => $this->input->post('tarif'),
                  'total_seat' => $this->input->post('seat'));
    $this->model_bus->getupdate(array('id_bus' => $this->input->post('bus')), $data);
    echo json_encode(array("status" => true));
  }

}
