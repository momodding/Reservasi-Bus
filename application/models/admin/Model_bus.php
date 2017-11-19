<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bus extends CI_Model{

  public function getDataBus()
  {
    $this->db->from('bus');
    $query = $this->db->get();
    return $query->result();
  }

  public function getJadwalBus()
  {
    $hasil = $this->db->get('jadwal');
    return $hasil;
  }

  public function getTrayekBus()
  {
    $hasil = $this->db->get(' trayek');
    return $hasil;
  }

  public function getJadwalJoinBus($key)
  {
    $this->db->where('id_bus', $key);
    $query = $this->db->get('bus');
    if ($query->num_rows()>0) {
      foreach ($query->result() as $row) {
        $hasil = $row->nopol_bus;
      }
    } else {
      $hasil = '';
    }
    return $hasil;
  }
  public function getInsert($data)
  {
    $this->db->insert('bus', $data);
    return $this->db->insert_id();
  }

  public function getBusId($key)
  {
    $this->db->from('bus');
    $this->db->where('id_bus', $key);
    $query = $this->db->get();
    return $query->row();
  }
  public function delById($key)
  {
    $this->db->where('id_bus', $key);
    $this->db->delete('bus');
  }

}
