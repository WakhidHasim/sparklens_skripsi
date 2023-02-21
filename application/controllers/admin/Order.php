<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // cek_masuk();
        // $this->load->model('M_dashboard', 'dashboard');
    }

    public function index()
    {
        $data['title'] = 'Pesanan Sparklens';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('partials/dashboard/header', $data);
        $this->load->view('partials/dashboard/sidebar', $data);
        $this->load->view('partials/dashboard/topbar', $data);
        $this->load->view('admin/pesanan/index');
        $this->load->view('partials/dashboard/footer');
    }
}
