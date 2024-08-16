<?php

class Admjadwal extends CI_model{

    public function getJadwal()
    {
        // buat koneksi
        $this->load->database();

        // buat query       
        $id_lapangan = $this->input->post('id_lapangan');
        $tanggal= $this->input->post('tanggal');
        $sql = "SELECT * FROM jadwal WHERE id_lapangan='$id_lapangan' AND tanggal='$tanggal'";

        // eksekusi query
        $hasil = $this->db->query($sql);

        // jabarkan hasil query
        $data = $hasil->result_array();
        return $data;
    }
    public function batalpesan()
    {
        // buat koneksi
        $this->load->database();

        // tangkap data
        $id_lapangan = $this->input->get('id_lapangan');
        $jam = $this->input->get('jam');

        // buat query
        $sql = "UPDATE jadwal SET stat='Kosong' WHERE id_lapangan='$id_lapangan' AND jam='$jam'";

        // eksekusi query
        $hasil = $this->db->query($sql);
    }

    public function konfirmasipesan()
    {
        // buat koneksi
        $this->load->database();

        // tangkap data
        $id_lapangan = $this->input->get('id_lapangan');
        $jam = $this->input->get('jam');

        // buat query
        $sql = "UPDATE jadwal SET stat='Terbooking' WHERE id_lapangan='$id_lapangan' AND jam='$jam'";

        // eksekusi query
        $hasil = $this->db->query($sql);
    }
}