<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan extends CI_Controller {
	public function __construct()
  {
      parent::__construct();
      cek_login();
  }

	public function sintetis()
	{
		$data['lapangan'] = $this->ModelLapangan->getDataLapangan('lapangan_sintetis')->result_array();
		$data['usersesion'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header',$data);
		$this->load->view('lapangan_sintetis');
		$this->load->view('templates/footer');
	}
	public function matras()
	{
		$data['lapangan'] = $this->ModelLapangan->getDataLapangan('lapangan_matras')->result_array();
		$data['usersesion'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header',$data);
		$this->load->view('lapangan_matras');
		$this->load->view('templates/footer');
	}
}