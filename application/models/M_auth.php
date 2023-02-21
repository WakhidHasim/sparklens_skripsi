<?php

class M_auth extends CI_Model
{
    public function register($data)
    {
        return $this->db->insert('user', $data);
    }

    public function cekEmail($email)
    {
        return $this->db->get_where('user', ['email' => $email])->row_array();
    }
}
