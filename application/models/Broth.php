<?php
/**
 *
 */
class Broth extends CI_Model
{

  function edit_data($table,$where)
  {
    return $this->db->get_where($table,$where);
  }
  function get_data($table)
  {
    return $this->db->get($table);
  }
  function cek_data($nota)
  {
    $nota = "'".$nota."'";
    return $this->db->query("SELECT barang.status FROM barang WHERE barang.nota = $nota");
  }
  function tambah($nota)
  {
    $nota = "'".$nota."'";
    $query = $this->db->query("INSERT INTO barang(barang.nota) VALUES ($nota)");
  }
  function ubah_status($nota)
  {
    $nota = "'".$nota."'";

    $query = $this->db->query("SELECT barang.status FROM barang WHERE barang.nota = $nota");
    $result = $query->row_array();
    if ($result['status'] == 0) {
      $query = $this->db->query("UPDATE barang SET barang.status = 1 WHERE barang.nota = $nota");
    }
    else {
      $query = $this->db->query("UPDATE barang SET barang.status = 0 WHERE barang.nota = $nota");
    }
    }

  function data_barang()
  {
    $query = $this->db->query("SELECT nota,DATE_FORMAT(barang.waktu_masuk, '%d-%m-%Y') AS waktu_masuk,status FROM barang");
    return $query->result_array();
  }

}




 ?>
