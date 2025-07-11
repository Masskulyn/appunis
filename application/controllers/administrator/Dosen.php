<?php 
#[\AllowDynamicProperties]
class Dosen extends CI_Controller {
    // Constructor untuk memuat model D_dosen
    // dan menginisialisasi controller
    public function __construct(){
        parent::__construct();
        $this->load->model('D_dosen');
    }

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

    // metode tambah data
    public function tambahdosen(){
        $data['title']= 'Tambah Data Dosen';
        // load view dan kirim data
        $this->form_validation->set_rules('nidn','NIDN','required');
        $this->form_validation->set_rules('nama','NAMA','required');
        $this->form_validation->set_rules('pendidikan','PENDIDIKAN','required');
        $this->form_validation->set_rules('agama','AGAMA','required');
        $this->form_validation->set_rules('asalpt','ASAL PT','required');
        $this->form_validation->set_rules('email','EMAIL','required');  
        $this->form_validation->set_rules('alamat','ALAMAT','required');  

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('admin/tambahdosen', $data);
            $this->load->view('template/footer');
        } else {
            // Proses simpan data
            $this->D_dosen->tambahdatadosen();
            $this->session->set_flashdata('success', 'Data dosen berhasil ditambahkan.');   
            redirect('administrator/dosen');
        }
    }

    public function hapus($id) {
        $this->D_dosen->hapusDataDosen($id);
        $this->session->set_flashdata('success', 'Data dosen berhasil dihapus.');
        redirect('administrator/dosen');
    }

    public function edit($id) {
        $data['title'] = 'Edit Data Dosen';
        $data['dosen'] = $this->D_dosen->getDosenById($id);
        $data['agama'] = ['Islam', 'Kristen', 'Hindu', 'Budha', 'Kong Hu Cu'];
        $data['pendidikan'] = ['SMA/SMK (SEDERAJAT)', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3'];

        $this->form_validation->set_rules('nidn','NIDN','required');
        $this->form_validation->set_rules('nama','NAMA','required');
        $this->form_validation->set_rules('pendidikan','PENDIDIKAN','required');
        $this->form_validation->set_rules('agama','AGAMA','required');
        $this->form_validation->set_rules('asalpt','ASAL PT','required');
        $this->form_validation->set_rules('email','EMAIL','required');  
        $this->form_validation->set_rules('alamat','ALAMAT','required');  

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('admin/editdosen', $data);
            $this->load->view('template/footer');
        } else {
            // Proses update data
            $this->D_dosen->ubahDataDosen($id);
            $this->session->set_flashdata('success', 'Data dosen berhasil diubah.');   
            redirect('administrator/dosen');
        }
    }
}