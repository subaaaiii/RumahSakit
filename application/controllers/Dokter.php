<?php

class dokter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('DokterModel');
    }

    public function index()
    {
        $data['title'] = 'Data Dokter';
        $data['dokter'] = $this->DokterModel->get_dokter();
        $this->load->view('templates/header', $data);
        $this->load->view('dokter/v_dokter', $data);
        $this->load->view('templates/footer', $data);
    }

}
