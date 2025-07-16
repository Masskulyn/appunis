<?php 
#[\AllowDynamicProperties]
class Dashboard extends CI_Controller {
    public function index(){
        $data['title']= 'Dashboard Akademik';
        $data['jumlah_mhs'] = $this->M_mhs->hitungJumlah();
        $data['jumlah_dosen'] = $this->D_dosen->hitungJumlah();
        $data['jumlah_fakultas'] = $this->M_fakultas->hitungJumlah();
        // $data['jumlah_jadwal'] = $this->M_jadwal->hitungJumlah();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/index');
        $this->load->view('template/footer');
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('M_mhs');
        $this->load->model('D_dosen');
        // $this->load->model('M_jadwal');
        $this->load->model('M_fakultas');
    }
}