<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_masuk();
        $this->load->model('M_produk', 'm_produk');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Produk Sparklens';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->m_produk->getProduk();

        $this->load->view('partials/dashboard/header', $data);
        $this->load->view('partials/dashboard/sidebar', $data);
        $this->load->view('partials/dashboard/topbar', $data);
        $this->load->view('admin/produk/index', $data);
        $this->load->view('partials/dashboard/footer');
    }

    public function addProduk()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
        $this->form_validation->set_rules('stok', 'Stok', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($this->form_validation->run() == false) {
            redirect('produk');
        } else {
            $foto_produk = $_FILES['foto_produk']['name'];

            if ($foto_produk) {
                $config['upload_path']   = './assets/images/produk/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '5000';
                $config['file_name']     = $foto_produk;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_produk')) {
                    $foto_produk = $this->upload->data('file_name');
                }
            }

            $data = [
                "nama" => $this->input->post('nama', true),
                "harga" => $this->input->post('harga', true),
                "stok" => $this->input->post('stok', true),
                "deskripsi" => $this->input->post('deskripsi', true),
                "foto_produk" => $foto_produk
            ];

            $this->m_produk->addProduk($data);
            $this->session->set_flashdata('message', 'Ditambahkan !');
            redirect('produk');
        }
    }

    public function editProduk($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
        $this->form_validation->set_rules('stok', 'Stok', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($this->form_validation->run() == false) {
            redirect('produk');
        } else {
            $foto_produk = $_FILES['foto_produk']['name'];

            if ($foto_produk) {
                $config['upload_path']   = './assets/images/produk/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '5000';
                $config['file_name']     = $foto_produk;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_produk')) {
                    $old_foto_produk = $this->input->post('foto_produk');

                    if ($old_foto_produk) {
                        unlink(FCPATH . 'assets/images/produk/' . $old_foto_produk);
                    }

                    $new_foto_produk = $this->upload->data('file_name');
                    $this->db->set('foto_produk', $new_foto_produk);
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $new_foto_produk = $this->input->post('foto_produk');;
            }

            $data = [
                "nama" => $this->input->post('nama', true),
                "harga" => $this->input->post('harga', true),
                "stok" => $this->input->post('stok', true),
                "deskripsi" => $this->input->post('deskripsi', true),
                "foto_produk" => $new_foto_produk
            ];

            $this->m_produk->editProduk($id, $data);
            $this->session->set_flashdata('message', 'Diedit !');
            redirect('produk');
        }
    }

    public function deleteProduk($id)
    {
        $foto_produk = $this->input->post('foto_produk');

        unlink(FCPATH . 'assets/images/produk/' . $foto_produk);
        $this->m_produk->deleteProduk($id);
        $this->session->set_flashdata('message', 'Dihapus !');
        redirect('produk');
    }
}
