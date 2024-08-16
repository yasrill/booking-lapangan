<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        $this->load->library('session');
    }
	
	public function index()
	{
        $this->load->view('login');
        if(!empty($this->session->userdata['data_admin']))
        {
            redirect('/admin');
        }
    }

    public function masuk()
    {
        $this->load->model('Login_model');
        $login_admin = $this->Login_model->lihat_data();

        if($login_admin == 'Gagal'){
            redirect('/login');
        }else{
            $this->session->set_userdata('data_admin', $login_admin);
            redirect('/admin');
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('data_admin');
        $this->session->sess_destroy();

        redirect('/login');
    }
}