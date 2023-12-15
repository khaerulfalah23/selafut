<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyewaan extends CI_Controller {
	public function __construct()
  {
      parent::__construct();
      cek_login();
  }

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
			$nama = htmlspecialchars($this->input->post('nama', true));
			$email = htmlspecialchars($this->input->post('email', true));
			$tanggal = htmlspecialchars($this->input->post('tgl', true));
			$selesai = htmlspecialchars($this->input->post('selesai', true));
			$jam_main = htmlspecialchars($this->input->post('jam_main', true));
			$lapangan = htmlspecialchars($this->input->post('j_lapangan', true));
			$lama_main = $selesai - $jam_main;
			$harga_sewa = $lama_main*30000;
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

			$data = [
				'kode_sewa' => $kode_sewa,
				'nama_pemesan' => $nama,
				'email' => $email,
				'tanggal' => $tanggal,
				'jam_main' => $jam_main,
				'selesai' => $selesai,
				'lama_main' => $lama_main,
				'status' => "Proses"
			];

			$whereTanggal = ['tanggal' => $tanggal];
			$whereJamMain = ['jam_main' => $jam_main];
			$whereJamSelasai = ['selesai' => $selesai];
			$validasiTanggal = $this->ModelFutsal->validasiJamMain($whereTanggal,'transaksi')->num_rows();

			if ($data['lama_main'] > 0) {
				if ($validasiTanggal > 0) {
					if ($lapangan == "Matras") {
						$validasiJamMain = $this->ModelFutsal->validasiJamMain($whereJamMain,'lapangan_matras')->num_rows();
						$validasiJamSelesai = $this->ModelFutsal->validasiJamSelesai($whereJamSelasai,'lapangan_matras')->num_rows();
						if ($validasiJamMain || $validasiJamSelesai > 0) {
								$this->session->set_flashdata('alert',' Maaf Sudah ada yang Booking Silahkan lihat jadwal terlebih dahulu sebelum memesan');
								redirect('penyewaan');
						} else {
								$this->ModelFutsal->insert_transaksi($data_transaksi,'transaksi');
								$this->ModelFutsal->insert_data($data,'lapangan_matras');
								$where=['email' => $email];
								$data['bukti']=$this->ModelFutsal->edit_data($where,'transaksi')->result_array();
								$this->load->view('bukti_pemesanan',$data);
						}
					} elseif ($lapangan == "Sintetis") {
						$validasiJamMain = $this->ModelFutsal->validasiJamMain($whereJamMain,'lapangan_sintetis')->num_rows();
						$validasiJamSelesai = $this->ModelFutsal->validasiJamSelesai($whereJamSelasai,'lapangan_sintetis')->num_rows();
						if ($validasiJamMain || $validasiJamSelesai > 0) {
								$this->session->set_flashdata('alert',' Maaf Sudah ada yang Booking Silahkan lihat jadwal terlebih dahulu sebelum memesan');
								redirect('penyewaan');
						} else {
								$this->ModelFutsal->insert_transaksi($data_transaksi,'transaksi');
								$this->ModelFutsal->insert_data($data,'lapangan_sintetis');
								$where=['email' => $email];
								$data['bukti']=$this->ModelFutsal->edit_data($where,'transaksi')->result_array();
								$this->load->view('bukti_pemesanan',$data);
						}
					}
				} else {
					if ($lapangan == "Matras") {
							$this->ModelFutsal->insert_transaksi($data_transaksi,'transaksi');
							$this->ModelFutsal->insert_data($data,'lapangan_matras');
							$where=['email' => $email];
							$data['bukti']=$this->ModelFutsal->edit_data($where,'transaksi')->result_array();
							$this->load->view('bukti_pemesanan',$data);
					} elseif ($lapangan == "Sintetis") {
							$this->ModelFutsal->insert_transaksi($data_transaksi,'transaksi');
							$this->ModelFutsal->insert_data($data,'lapangan_sintetis');
							$where=['email' => $email];
							$data['bukti']=$this->ModelFutsal->edit_data($where,'transaksi')->result_array();
							$this->load->view('bukti_pemesanan',$data);
					}
				}
			} else {
					$this->session->set_flashdata('alert','Waktu yang anda masukan salah!');
					redirect('penyewaan');
			}
		}
	}
}