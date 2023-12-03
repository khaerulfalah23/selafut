<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['usersesion'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header',$data);
		$this->load->view('home');
		$this->load->view('templates/footer');
	}
}
