<?php 

class Loginuser_model extends CI_model{

    public function cek_data()
    {
        // koneksi database
        $this->load->database();

        // tangkap data
        $username = $this->input->post('username');
        $passwd = $this->input->post('password');
        
        // query login
        $sql = "SELECT * FROM user_pelanggan WHERE username='$username' AND passwd='$passwd'";

        // ekseskusi query
        $hasil = $this->db->query($sql);

        // cek

        if($hasil->num_rows() == 1){
          $data = $hasil->result_array();
        }else{
            $this->session->set_flashdata('info','<div class="alert alert-danger">Login gagal, pastikan username dan password yang di masukkan benar!</a>');
            redirect ('loginuser');
        }

        return $data;
    }

    public function daftar(){
        // koneksi database
        $this->load->database();

        // tangkap data
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $passwd = $this->input->post('password');

        // query
        $sql = "INSERT INTO user_pelanggan(nama, username, passwd) VALUES('$nama', '$username', '$passwd')";

        // ekseskusi query
        $hasil = $this->db->query($sql);
        return;
    }
}