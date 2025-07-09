<?php 
#[\AllowDynamicProperties]
class Jadwal extends CI_Controller {
    public function index(){
        $data['title']= 'Jadwal Perkuliahan';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/jadwal');
        $this->load->view('template/footer');
    }
}