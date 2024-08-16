<?php

class User_model extends CI_model{

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

    public function booking()
    {
        // buat koneksi
        $this->load->database();

        // tangkap data
        $nama = $this->session->userdata['data_user'][0]['nama'];
        $id_user = $this->session->userdata['data_user'][0]['id_user'];
        $lapangan = $this->input->get('id_lapangan');
        $tanggal= $this->input->get('tanggal');
        $jam= $this->input->get('jam');

        // query
        $sql = "INSERT INTO keranjang(id_user, nama, id_lapangan, tanggal, jam, harga)
                VALUES('$id_user', '$nama', '$lapangan', '$tanggal', '$jam', 'Rp. 40.000')";

        // eksekusi query
        $hasil = $this->db->query($sql);
        
        // insert data pesanan ke detail_pesanan
        $sql1 = "INSERT INTO detail_pembayaran(id_user, nama, id_lapangan, tanggal, jam)
                    VALUES('$id_user', '$nama', '$lapangan', '$tanggal', '$jam')";
        $hasil1 = $this->db->query($sql1);
    }
}