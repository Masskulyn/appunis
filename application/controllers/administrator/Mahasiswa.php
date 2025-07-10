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
            // Proses simpan data
            $this->M_mhs->tambahdatamahasiswa();            
            $this->session->set_flashdata('success', 'Data mahasiswa berhasil ditambahkan.');   
            redirect('administrator/mahasiswa');
        }
        
    }

    public function hapus($id) {
        $this->M_mhs->hapusDataMahasiswa($id);
        $this->session->set_flashdata('success', 'Data mahasiswa berhasil dihapus.');
        redirect('administrator/mahasiswa');
    }
    
    public function edit($id) {
        $data['title'] = 'Edit Data Mahasiswa';
        $data['mhs'] = $this->M_mhs->getMahasiswaById($id);

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
            $this->load->view('admin/editmhs',$data);
            $this->load->view('template/footer');
        } else {
            $this->M_mhs->ubahDataMahasiswa($id);
            $this->session->set_flashdata('success', 'Data mahasiswa berhasil diubah.');
            redirect('administrator/mahasiswa');
        }
    }
}