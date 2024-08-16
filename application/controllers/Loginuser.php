<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginuser extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        $this->load->library('session');
    }
	
	public function index()
	{
        $this->load->view('loginuser');
        if(!empty($this->session->userdata['data_user']))
        {
            redirect('user');
        }
    }

    public function login()
    {
        $this->load->model('Loginuser_model');
        $login_user = $this->Loginuser_model->cek_data();

        if($login_user == 'Gagal'){
            redirect('/loginuser');
        }else{
            $this->session->set_userdata('data_user', $login_user);
            redirect('user');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('data_user');
        $this->session->sess_destroy();

        redirect('/loginuser');
    }

    public function register()
    {
        $this->load->model('Loginuser_model');
        $this->Loginuser_model->daftar();

        redirect('loginuser');
    }
}