<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_detail extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Admdetail');
        $data['detail'] = $this->Admdetail->getDetailPembayaran();

        $this->load->view('admindetail', $data);
    }
}
?>