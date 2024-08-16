<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_jadwal extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        // cek login
        if(empty($this->session->userdata['data_admin']))
        {
            redirect('login');
        } 
    }

    public function index()
    {
        $this->load->model('Admjadwal');
        $data['jadwal'] = $this->Admjadwal->getJadwal();

        $this->load->view('adminjadwal', $data);
    }

    public function hapus()
    {
        $this->load->model('Admjadwal');
        $this->Admjadwal->batalpesan();

        redirect('admin_jadwal');
    }

    public function konfirmasi()
    {
        $this->load->model('Admjadwal');
        $this->Admjadwal->konfirmasipesan();

        redirect('admin_jadwal');
    }
}
?>