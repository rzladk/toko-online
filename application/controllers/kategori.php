<?php
class Kategori extends CI_Controller
{
    public function smart_home()
    {
        $data['smart_home'] = $this -> model_kategori->data_smart_home()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('smart_home', $data);
        $this->load->view('templates/footer');
    }
    public function smart_office()
    {
        $data['smart_office'] = $this -> model_kategori->data_smart_office()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('smart_office', $data);
        $this->load->view('templates/footer');
    }
    public function smart_hotel()
    {
        $data['smart_hotel'] = $this -> model_kategori->data_smart_hotel()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('smart_hotel', $data);
        $this->load->view('templates/footer');
    }
    public function smart_classroom()
    {
        $data['smart_classroom'] = $this -> model_kategori->data_smart_classroom()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('smart_classroom', $data);
        $this->load->view('templates/footer');
    }
    public function smart_building()
    {
        $data['smart_building'] = $this -> model_kategori->data_smart_building()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('smart_building', $data);
        $this->load->view('templates/footer');
    }
}