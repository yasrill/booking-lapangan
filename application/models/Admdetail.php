<?php

class Admdetail extends CI_model{

    public function getDetailPembayaran()
    {
        // buat koneksi
        $this->load->database();

        // buat query       
        $sql = "SELECT * FROM detail_pembayaran";

        // eksekusi query
        $hasil = $this->db->query($sql);

        // jabarkan hasil query
        $data = $hasil->result_array();
        return $data;
    }
}