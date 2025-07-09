<?php 
#[\AllowDynamicProperties]
class Fakultas extends CI_Controller {
    public function index(){
        $data['title']= 'Daftar Fakultas';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/fakultas');
        $this->load->view('template/footer');
    }
}