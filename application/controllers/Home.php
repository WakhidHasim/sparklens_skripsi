<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_home', 'm_home');
    }

    public function index()
    {
        $data['title'] = 'SparkLens AR Shopping';
        $data['new_produk'] = $this->m_home->getProduk();

        $this->load->view('partials/landing/header', $data);
        $this->load->view('partials/landing/navbar');
        $this->load->view('landing/home/index', $data);
        $this->load->view('partials/landing/footer');
    }
}
