<?php

class Keranjang_model extends CI_model{

    public function getKeranjang()
    {
        // buat koneksi
        $this->load->database();

        // buat query       
        $nama = $this->session->userdata['data_user'][0]['nama'];
        $sql = "SELECT * FROM keranjang WHERE nama='$nama'";

        // eksekusi query
        $hasil = $this->db->query($sql);

        // jabarkan hasil query
        $data = $hasil->result_array();

        // echo '<pre>'; print_r($data); echo '</pre>';die;
        return $data;
    }

    public function hapus()
    {
        // buat koneksi
        $this->load->database();

        // tangkap data
        $nama = $this->session->userdata['data_user'][0]['nama'];
        $id_lapangan = $this->input->get('id_lapangan');
        $jam = $this->input->get('jam');

        // buat query
        $sql = "DELETE FROM keranjang WHERE id_lapangan='$id_lapangan' AND jam='$jam' AND nama='$nama'";

        // eksekusi query
        $hasil = $this->db->query($sql);
        
        // query untuk menghapus pesanan jika pesanan di batalkan
        $sql1 = "DELETE FROM detail_pembayaran WHERE id_lapangan='$id_lapangan' AND jam='$jam' AND nama='$nama'";

        // eksekusi query
        $hasil1 = $this->db->query($sql1);
    }
}