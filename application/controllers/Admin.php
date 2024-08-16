<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

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
        $this->load->view('admin');
    }
}
?>