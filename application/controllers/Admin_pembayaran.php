<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pembayaran extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Admpembayaran');
        $data['pembayaran'] = $this->Admpembayaran->getPembayaran();

        $this->load->view('adminpembayaran', $data);
    }
}
?>