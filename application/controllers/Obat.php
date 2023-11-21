<?php

class obat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ObatModel');
    }

    public function index()
    {
        $data['title'] = 'Data Obat';
        $data['obat'] = $this->ObatModel->get_obat();
        $this->load->view('templates/header', $data);
        $this->load->view('obat/v_obat', $data);
        $this->load->view('templates/footer', $data);
    }

}