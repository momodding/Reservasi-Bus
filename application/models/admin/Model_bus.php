<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bus extends CI_Model{

  public function getDataBus()
  {
    $hasil = $this->db->get('bus');
    return $hasil;
  }

  public function getJadwalBus()
  {
    $hasil = $this->db->get('jadwal');
    return $hasil;
  }

  public function getTrayekBus()
  {
    $hasil = $this->db->get('trayek');
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

  public function getUpdate($key,$data)
  {
    $this->db->where('id_bus', $key);
    $this->db->update('bus', $data);
  }

  public function getInsert($data)
  {
    $this->db->insert('bus', $data);
  }

}
