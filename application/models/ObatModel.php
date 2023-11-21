<?php
class ObatModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_obat()
    {
        return $this->db->get('subairi_obat')->result();
    }


    public function get_obat_options() {
        return $this->db->get('subairi_obat')->result_array();
    }
}