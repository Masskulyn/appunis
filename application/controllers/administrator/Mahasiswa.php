<?php 
#[\AllowDynamicProperties]
class Mahasiswa extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_mhs');
    }

    public function index(){
        $data['title']= 'Data Mahasiswa';
        // load library database
        $this->load->database();
        // query langsung di controller
        $data['mhs'] = $this->db->get('mhs')->result_array();
        // load view dan kirim data
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/mhs',$data);
        $this->load->view('template/footer');
    }

    // metode tambah data
    public function tambahmhs(){
         $data['title']= 'Data Mahasiswa';
        // load view dan kirim data
        $this->form_validation->set_rules('nim','NIM','required');
        $this->form_validation->set_rules('nama','NAMA','required');
        $this->form_validation->set_rules('alamat','ALAMAT','required');
        $this->form_validation->set_rules('jk','Jenis Kelamin','required');
        $this->form_validation->set_rules('agama','AGAMA','required');
        $this->form_validation->set_rules('sekolah_asal','SEKOLAH ASAL','required');
        $this->form_validation->set_rules('email','EMAIL','required');  

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('admin/tambahmhs',$data);
            $this->load->view('template/footer');
        }
        else{
            // echo "Data Disimpan";
            $this->M_mhs->tambahdatamahasiswa();
                
            redirect('administrator/mahasiswa');
        }
        
    }
}