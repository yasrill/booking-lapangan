<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

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
        $this->load->model('User_model');
        $data['jadwal'] = $this->User_model->getJadwal();
        $data['title'] = 'Dashboard';

        $this->load->view('main', $data);
    }

    public function keranjang()
    {
        $this->load->model('User_model');
        $this->User_model->booking();

        redirect('User');
    }
}
?>