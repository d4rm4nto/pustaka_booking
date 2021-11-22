<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Web extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('v-header',$data);
        $this->load->view('v-index',$data);
        $this->load->view('v-footer',$data);
    }
    public function about()
    {
    $data['judul'] = "Halaman About";
    $this->load->view('v-header', $data);
    $this->load->view('v-about', $data);
    $this->load->view('v-footer', $data);
    }
}

