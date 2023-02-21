<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk', 'm_produk');
    }

    public function index()
    {
        $data['title'] = 'Produk - Produk Sparklens';

        $config['base_url'] = $this->config->item('base_url') . 'products';
        $config['total_rows'] = $this->m_produk->countDataProduct();
        $config['per_page'] = 6;

        $this->pagination->initialize($config);

        $offset = $this->uri->segment(2);
        $data['products'] = $this->m_produk->getAllProduk($config['per_page'], $offset);

        $this->load->view('partials/landing/header', $data);
        $this->load->view('partials/landing/navbar');
        $this->load->view('landing/produk/index', $data);
        $this->load->view('partials/landing/footer');
    }

    public function detailProduk($id)
    {
        $data['product'] = $this->m_produk->detailProduk($id);

        $this->load->view('partials/landing/header', $data);
        $this->load->view('partials/landing/navbar', $data);
        $this->load->view('landing/produk/detail', $data);
        $this->load->view('partials/landing/footer');
    }
}
