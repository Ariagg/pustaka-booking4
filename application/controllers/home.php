<?php

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'judul' => "Katalog Buku",  
            'buku' => $this->ModelBuku->getBuku()->result(),
        ];


    //Login condition

        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

            $data['user'] = $user['nama']; //cek user sudah login

            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('buku/daftarbuku', $data);
            $this->load->view('templates/templates-user/footer', $data);
        } else {
            $data['user'] = 'Pengunjung'; //cek user sebagai random

            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('buku/daftarbuku', $data);
            $this->load->view('templates/templates-user/footer', $data);
        }
    }
}