<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        // cek login
        if(empty($this->session->userdata['data_user']))
        {
            redirect('loginuser');
        }
    }

    public function index()
    {
        $this->load->model('Keranjang_model');
        $data['keranjang'] = $this->Keranjang_model->getKeranjang();

        $this->load->view('keranjang', $data);
    }

    public function batal()
    {
        $this->load->model('Keranjang_model');
        $data['keranjang'] = $this->Keranjang_model->hapus();

        redirect('keranjang');
    }
}