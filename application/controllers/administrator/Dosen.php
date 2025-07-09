<?php 
#[\AllowDynamicProperties]
class Dosen extends CI_Controller {
    public function index(){
        $data['title']= 'Data Dosen';
         // load library database
        $this->load->database();
        // query langsung di controller
        $data['dosen'] = $this->db->get('dosen')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/dosen', $data);
        $this->load->view('template/footer');
    }
}