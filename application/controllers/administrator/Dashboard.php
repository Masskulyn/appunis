<?php 
#[\AllowDynamicProperties]
class Dashboard extends CI_Controller {
    public function index(){
        $data['title']= 'Dashboard Akademik';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/index');
        $this->load->view('template/footer');
    }
}