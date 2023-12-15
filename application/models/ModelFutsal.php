<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelFutsal extends CI_Model
{
  public function insert_data($data,$table){
		$this->db->INSERT($table,$data);
	}

	public function insert_transaksi($data_transaksi,$table){
		$this->db->insert($table,$data_transaksi);
	}

  public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	
	public function validasiTanggal($where,$table){
		$this->db->select('tanggal');
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}

	public function validasiJamMain($where,$table){
		$this->db->select('jam_main');
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}

	public function validasiJamSelesai($where,$table){
		$this->db->select('selesai');
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}

  public function insert_data_lapangan($data_lapangan,$table){
		$this->db->INSERT($table,$data_lapangan);
	}
}