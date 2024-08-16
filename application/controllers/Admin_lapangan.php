<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_lapangan extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Admlapangan');
        $data['lapangan'] = $this->Admlapangan->getLapangan();

        $this->load->view('adminlapangan', $data);
    }
}
?>