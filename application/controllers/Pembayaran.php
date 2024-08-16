<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller{

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
        $this->load->model('Pembayaran_model');
        $data['keranjang'] = $this->Pembayaran_model->getKeranjang();

        $this->load->view('pembayaran', $data);
    }

    public function batal()
    {
        $this->load->model('Pembayaran_model');
        $data['keranjang'] = $this->Pembayaran_model->hapus();

        redirect('pembayaran');
    }

    public function bayar_book()
    {
        $this->load->model('Pembayaran_model');
        $data['keranjang'] = $this->Pembayaran_model->bayar();

        redirect('user');
    }
}