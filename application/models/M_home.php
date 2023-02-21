<?php

class M_home extends CI_Model
{
    public function getProduk()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->limit(6);
        $this->db->order_by('id_produk', 'DESC');

        return $this->db->get()->result_array();
    }
}
