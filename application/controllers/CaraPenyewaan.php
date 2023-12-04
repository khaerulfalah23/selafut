<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CaraPenyewaan extends CI_Controller {
  public function index()
  {
    $data['usersesion'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/header',$data);
    $this->load->view('cara_penyewaan');
    $this->load->view('templates/footer');
  }
}