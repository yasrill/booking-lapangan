<?php

class Pembayaran_model extends CI_model{

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
        $sql = "DELETE FROM keranjang WHERE (nama='$nama' AND id_lapangan='$id_lapangan') AND jam='$jam'";

        // eksekusi query
        $hasil = $this->db->query($sql);
        return;
    }

    public function bayar()
    {
        $this->load->database();

        // tangkap data
        $nama = $this->session->userdata['data_user'][0]['nama'];
        $id_user = $this->session->userdata['data_user'][0]['id_user'];
        $tanggal = $this->input->post('tanggal');
        $telepon = $this->input->post('telepon');
        // echo '<pre>';
        // var_dump($tanggal);
        // echo '</pre>';
        // die();
        $keterangan = $this->input->post('keterangan');
        // $gambar = $this->input->post('foto');
        $foto = $_FILES['gambar']['name'];
        
        // S : Upload Foto
        $this->load->helper('form');
        // config Upload:
        $config['upload_path'] = './bukti/';
        $config['allowed_types'] = 'gif|png|jpg';
        // Masukkan config ke librari:
        $this->load->library('upload', $config);
        // upload gambar
        $this->upload->do_upload('gambar');
        // E : Upload Foto

        // buat query
        $sql = "INSERT INTO pembayaran(id_user, nama,  telepon, keterangan, tanggal, bukti)
                VALUES('$id_user', '$nama', '$telepon', '$keterangan', '$tanggal', '$foto')";

        // eksekusi query
        $hasil = $this->db->query($sql);
    }
}