<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelFutsal extends CI_Model
{
  public function validasi($where,$table){
		$this->db->SELECT('tanggal','jam_main','selesai');
		$this->db->FROM($table);
		$this->db->WHERE($where);
		return $this->db->get();
	}

  public function insert_data($data_transaksi,$table){
		$this->db->INSERT($table,$data_transaksi);
	}

  public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}	

  public function insert_data_lapangan($data_lapangan,$table){
		$this->db->INSERT($table,$data_lapangan);
	}
}
