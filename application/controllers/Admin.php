<!-- <error_reporting(E_ALL);
ini_set('display_errors', 1); -->

<?php 
#[\AllowDynamicProperties]
class Admin extends CI_Controller {
    public function index(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/index');
        $this->load->view('template/footer');
    }
    public function mhs(){
        // load library database
        $this->load->database();
        // query langsung di controller
        $data['mhs'] = $this->db->get('mhs')->result_array();
        // load view dan kirim data
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/mhs',$data);
        $this->load->view('template/footer');
    }
    public function dosen(){
        // load library database
        $this->load->database();
        // query langsung di controller
        $data['dosen'] = $this->db->get('dosen')->result_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/dosen', $data);
        $this->load->view('template/footer');
    }
    public function jadwal(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/jadwal');
        $this->load->view('template/footer');
    }
    public function fakultas(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/jadwal');
        $this->load->view('template/footer');
    }
}
