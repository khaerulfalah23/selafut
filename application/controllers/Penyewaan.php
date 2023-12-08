<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyewaan extends CI_Controller {

	public function index()
	{

		$data['usersesion'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
			'required' => 'Nama Belum diis!!'
		]);
		$this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', [
				'valid_email' => 'Email Tidak Benar!!',
				'required' => 'Email Belum diisi!!',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header',$data);
			$this->load->view('penyewaan');
			$this->load->view('templates/footer');
		} else {
			$kode=$this->input->post('kode');
			$nama=$this->input->post('nama');
			$email=$this->input->post('email');
			$lapangan=$this->input->post('j_lapangan');
			$jam_main=$this->input->post('jam_main');
			$selesai=$this->input->post('selesai');
			$tanggal=$this->input->post('tgl');
			$lama_main=$selesai-$jam_main;
			$harga_sewa=$lama_main*30000;
      $kode_sewa = time();

			$data_transaksi=[
				'nama_pemesan' => $nama,
				'lapangan' => $lapangan,
				'email' => $email,
				'tanggal' => $tanggal,
				'jam_main' => $jam_main,
				'selesai' => $selesai,
				'lama_main' => $lama_main,
				'harga_sewa' => $harga_sewa,
				'status' => "Proses",
				'kode_sewa' => $kode_sewa
			];

			$where=[
				'tanggal' => $tanggal,
				'jam_main' => $jam_main,
				'selesai' => $selesai
			];

			if ($this->ModelFutsal->validasi($where,'transaksi')->num_rows() > 0) {
				$this->session->set_flashdata('alert',' Maaf Sudah ada yang Booking Silahkan lihat jadwal terlebih dahulu sebelum memesan');
				redirect('penyewaan');
			} else {
				$this->ModelFutsal->insert_data($data_transaksi,'transaksi');

				$where=['email' => $email];
				$data['bukti']=$this->ModelFutsal->edit_data($where,'transaksi')->result_array();
				$this->load->view('bukti_pemesanan',$data);

				if ($lapangan == "Matras") {

					$data_lapangan=[
						'nama_pemesan' => $nama,
						'email' => $email,
						'tanggal' => $tanggal,
						'jam_main' => $jam_main,
						'selesai' => $selesai,
						'lama_main' => $lama_main,
						'status' => "Proses",
            'kode_sewa' => $kode_sewa
					];

					$this->ModelFutsal->insert_data_lapangan($data_lapangan,'lapangan_matras');
				} else if ($lapangan == "Sintetis") {

					$data_lapangan=[
						'nama_pemesan' => $nama,
						'email' => $email,
						'tanggal' => $tanggal,
						'jam_main' => $jam_main,
						'selesai' => $selesai,
						'lama_main' => $lama_main,
						'status' => "Proses",
            'kode_sewa' => $kode_sewa
					];

					$this->ModelFutsal->insert_data_lapangan($data_lapangan,'lapangan_sintetis');
				}
			}
		}
	}
}