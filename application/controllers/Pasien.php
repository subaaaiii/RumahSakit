<?php

class pasien extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('PasienModel');
        $this->load->model('DokterModel');
        $this->load->model('ObatModel');
    }

    public function index(){
        $data['title'] = 'Data Pasien';
        $data['pasien'] = $this->PasienModel->get_pasien();
        // $data['dokter'] = $this->DokterModel->get_dokter();
        $this->load->view('templates/header',$data);
        $this->load->view('pasien/v_pasien',$data);
        $this->load->view('templates/footer',$data);          
    }

    public function insert(){
        if($this->input->post()){
            $data_insert = $this->input->post();
            $result = $this->PasienModel->insert_pasien($data_insert);
            if($result>0){
                $this->session->set_flashdata('msg', '<div class="col-6 alert alert-success" role="alert">
                 Success!
              </div>');
            }else{
                $this->session->set_flashdata('msg', '<div class="col-6 alert alert-danger" role="alert">
                Error
              </div>');
            }
            redirect('pasien');
        }else{
            $data['title'] = 'Form Input Data Pasien';
            $data['dokter_options'] = $this->DokterModel->get_dokter_options();
            $data['obat_options'] = $this->ObatModel->get_obat_options();
            $this->load->view('templates/header',$data);
            $this->load->view('pasien/v_formPasien',$data); 
            $this->load->view('templates/footer',$data);          
        }
    }
    
    public function update($no_antrian=null){
        if($this->input->post()){
            $data_update = $this->input->post();
            $this->PasienModel->update_pasien($data_update);
            redirect('pasien');
        }else{
            $data['title'] = 'Form Update Data Pasien';
            $data['pasien'] = $this->PasienModel->get_no($no_antrian);
            $data['dokter_options'] = $this->DokterModel->get_dokter_options();
            $data['obat_options'] = $this->ObatModel->get_obat_options();
            $this->load->view('templates/header',$data);          
            $this->load->view('pasien/v_formUpdate',$data);          
            $this->load->view('templates/footer',$data);          
        }
    }
    
    public function delete($no_antrian){
        $data['pasien'] = $this->PasienModel->delete($no_antrian);
        redirect('pasien');
    }
}