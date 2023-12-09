<?php

function cek_login()
{
    $ci = get_instance();
    
    if (!$ci->session->userdata('email') ) {
        $ci->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Akses ditolak. <br/> Anda belum login!!</div>');
        redirect('autentifikasi');
    }
}