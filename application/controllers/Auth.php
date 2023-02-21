<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_auth', 'm_auth');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('dashboard');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Sparklens';

            $this->load->view('partials/auth/header', $data);
            $this->load->view('auth/login');
            $this->load->view('partials/auth/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->m_auth->cekEmail($email);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];

                $this->session->set_userdata($data);

                if ($user['role_id'] == 1) {
                    redirect('dashboard');
                } elseif ($user['role_id'] == 2) {
                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('gagal', 'Password Yang Anda Masukkan Salah !');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('gagal', 'Username Tidak Terdaftar !');
            redirect('login');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Email Tidak Boleh Kosong !',
            'is_unique' => 'Email Sudah Terdaftar !',
            'valid_email' => 'Email Tidak Valid !'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'required' => 'Password Tidak Boleh Kosong !',
            'min_length' => 'Password Terlalu Pendek !',
            'matches' => 'Password Tidak Cocok !'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'matches' => 'Password Tidak Cocok !'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register Sparklens';

            $this->load->view('partials/auth/header', $data);
            $this->load->view('auth/register', $data);
            $this->load->view('partials/auth/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
            ];

            $this->m_auth->register($data);

            $this->session->set_flashdata('berhasil', 'Anda Sudah Berhasil Mendaftar, Silahkan Login Terlebih Dahulu !');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('berhasil', 'Anda Sudah Berhasil Keluar !');
        redirect('login');
    }
}
