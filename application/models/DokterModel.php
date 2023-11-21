<?php
class DokterModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_dokter()
    {
        return $this->db->get('subairi_dokter')->result();
    }


    public function get_dokter_options() {
        return $this->db->get('subairi_dokter')->result_array();
    }
}