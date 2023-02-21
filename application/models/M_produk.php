<?php

class M_produk extends CI_Model
{
    // Dashboard
    public function getProduk()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->order_by('id_produk', 'ASC');
        return $this->db->get()->result_array();
    }

    public function addProduk($data)
    {
        $this->db->insert('produk', $data);
        return $this->db->affected_rows();
    }

    public function editProduk($id, $data)
    {
        $this->db->update('produk', $data, array('id_produk' => $id));
        return $this->db->affected_rows();
    }

    public function deleteProduk($id)
    {
        $this->db->delete('produk', array('id_produk' => $id));
        return $this->db->affected_rows();
    }

    // Landing
    public function getAllProduk($limit, $offset)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->limit($limit, $offset);
        $this->db->order_by('id_produk', 'DESC');

        return $this->db->get()->result_array();
    }

    public function detailProduk($id)
    {
        return $this->db->get_where('produk', ['id_produk' => $id])->row_array();
    }

    public function countDataProduct()
    {
        return $this->db->get('produk')->num_rows();
    }
}
