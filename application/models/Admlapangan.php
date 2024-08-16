<?php

class Admlapangan extends CI_model{

    public function getLapangan()
    {
        // buat koneksi
        $this->load->database();

        // buat query       
        $sql = "SELECT * FROM lapangan";

        // eksekusi query
        $hasil = $this->db->query($sql);

        // jabarkan hasil query
        $data = $hasil->result_array();
        return $data;
    }
}