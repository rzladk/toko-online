<?php
class Model_kategori extends CI_Model
{
    public function data_smart_home()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'Smart Home'));
    }
    public function data_smart_office()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'Smart Office'));
    }
    public function data_smart_hotel()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'Smart Hotel'));
    }
    public function data_smart_classroom()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'Smart Classroom'));
    }
    public function data_smart_building()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'Smart Building'));
    }
}