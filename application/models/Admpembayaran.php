<?php

class Admpembayaran extends CI_model{

    public function getPembayaran()
    {
        // buat koneksi
        $this->load->database();

        // buat query       
        $sql = "SELECT * FROM pembayaran";

        // eksekusi query
        $hasil = $this->db->query($sql);

        // jabarkan hasil query
        $data = $hasil->result_array();
        return $data;
    }
}