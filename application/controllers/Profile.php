<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$data['usersesion'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/header',$data);
    $this->load->view('profile');
    $this->load->view('templates/footer');
  }

  public function edit()
  {
    $data['usersesion'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', [
        'required' => 'Nama tidak Boleh Kosong'
    ]);

    if ($this->form_validation->run() == false) {
        $this->load->view('templates/header',$data);
        $this->load->view('form_ubah_profile');
        $this->load->view('templates/footer');
    } else {
        $nama = $this->input->post('nama', true);
        $email = $this->input->post('email', true);

        //jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['upload_path'] = './assets/images/profile/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '3000';
            $config['max_width'] = '1024';
            $config['max_height'] = '1000';
            $config['file_name'] = 'img' . time();

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $gambar_lama = $data['usersesion']['image'];
                if ($gambar_lama != 'default.jpg') {
                  unlink(FCPATH . 'assets/images/profile/' . $gambar_lama);
                }
                $gambar_baru = $this->upload->data('file_name');
                $this->db->set('image', $gambar_baru);
            } else {  }
        }

        $this->db->set('nama', $nama);
        $this->db->where('email', $email);
        $this->db->update('user');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>');
        redirect('profile');
    }
  }
}