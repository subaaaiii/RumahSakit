<?php

class PasienModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_pasien()
    {
        // $sql = "SELECT * FROM subairi_pasien";
        // $data = $this->db->query($sql);
        // return $data->result();
        return $this->db->get('subairi_pasien')->result();
    }
    function insert_pasien($data)
    {
        // $sql = "INSERT INTO subairi_pasien VALUES(?,?,?,?,?,?,?)";
        // $this->db->query($sql, array($data['no'], $data['nama'], $data['jenis_kelamin'], $data['umur'], $data['tekanan_darah'], $data['efek_samping'], time()));
        $data_insert = array(
            // 'no' => $data['no'],
            'nama' => $data['nama'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'umur' => $data['umur'],
            'tekanan_darah' => $data['tekanan_darah'], 
            'efek_samping' => $data['efek_samping'], 
            'tanggal_check_in' => time(),
            'id_dokter' => $data['id_dokter'],
            'no_obat' => $data['no_obat']
        );
        $this->db->insert('subairi_pasien', $data_insert);
        return $this->db->affected_rows();
    }

    function get_no($no_antrian)
    {
        // $sql = "SELECT * FROM subairi_pasien WHERE no_antrian =?";
        // $data = $this->db->query($sql, array($no_antrian));
        // return $data->result();

        // return $this->db->get_where('subairi_pasien', array('no_antrian'=> $no_antrian))->result();

        $this->db->where('no_antrian', $no_antrian);
        return $this->db->get('subairi_pasien')->result();
    }

    function update_pasien($data)
    {
        // $sql = "UPDATE  subairi_pasien SET nama=?, jenis_kelamin=?, umur=?, tekanan_darah=?, efek_Samping=? WHERE no_antrian=? ";
        // $this->db->query($sql, array($data['nama'], $data['jenis_kelamin'], $data['umur'], $data['tekanan_darah'], $data['efek_samping'], $data['no_antrian']));
    
        $data_update = array(
            'nama' => $data['nama'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'umur' => $data['umur'],
            'tekanan_darah' => $data['tekanan_darah'], 
            'efek_samping' => $data['efek_samping'],
            'id_dokter' => $data['id_dokter'],
            'no_obat' => $data['no_obat']
        );

        $this->db->where('no_antrian', $data['no_antrian']);
        $this->db->update('subairi_pasien', $data_update);

    }

    function delete($no_antrian)
    {
        // $sql = "DELETE FROM subairi_pasien WHERE no_antrian =?";
        // $this->db->query($sql, array($no_antrian));

        $this->db->delete('subairi_pasien', array('no_antrian' => $no_antrian));
    }
}
