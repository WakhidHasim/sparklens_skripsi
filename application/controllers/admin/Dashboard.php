<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_masuk();
        $this->load->model('M_dashboard', 'm_dashboard');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Sparklens';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['count_product'] = $this->m_dashboard->getCountProduct();
        $data['count_order'] = $this->m_dashboard->getCountOrder();

        $this->load->view('partials/dashboard/header', $data);
        $this->load->view('partials/dashboard/sidebar', $data);
        $this->load->view('partials/dashboard/topbar', $data);
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('partials/dashboard/footer');
    }
}
