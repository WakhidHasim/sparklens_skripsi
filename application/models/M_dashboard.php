<?php

class M_dashboard extends CI_Model
{
    public function getCountProduct()
    {
        return $this->db->from("produk")->count_all_results();
    }

    public function getCountOrder()
    {
        return $this->db->from("transaksi")->count_all_results();
    }
}
