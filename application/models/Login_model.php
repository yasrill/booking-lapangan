<?php 

class Login_model extends CI_model{

    public function lihat_data()
    {
        // koneksi database
        $this->load->database();

        // tangkap data
        $uname = $this->input->post('username');
        $passwd = $this->input->post('password');
        
        // query login
        $sql = "SELECT * FROM user_admin WHERE username='$uname' AND passwd='$passwd'";

        // ekseskusi query
        $hasil = $this->db->query($sql);

        // cek

        if($hasil->num_rows() == 1){
          $data = $hasil->result_array();
        }else{
            $this->session->set_flashdata('info','<div class="alert alert-danger">Login gagal, pastikan username dan password yang di masukkan benar!</a>');
            redirect ('/login');
        }

        return $data;
    }
}