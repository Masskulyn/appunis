<?php 
#[\AllowDynamicProperties]
class Fakultas extends CI_Controller {
     public function __construct() {
        parent::__construct();
        $this->load->model('M_fakultas');
    }
    public function index(){
        $data['title']= 'Daftar Fakultas';
        $data['fakultas'] = $this->M_fakultas->get_all();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/fakultas');
        $this->load->view('template/footer');
    }
   
    public function tambahfakultas() {
        $data['title'] = 'Tambah Data Fakultas';
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('fakultas', 'Nama Fakultas', 'required');
        $this->form_validation->set_rules('prodi', 'Program Studi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('admin/tambahfakultas');
            $this->load->view('template/footer');
        } else {
            // Proses simpan data
            $this->M_fakultas->tambahdatafakultas();
            $this->session->set_flashdata('success', 'Data fakultas berhasil ditambahkan.');
            redirect('administrator/fakultas');
        }
    }
    public function edit($id) {
        $data['title'] = 'Edit Data Fakultas';
        $data['fakultas'] = $this->M_fakultas->getFakultasById($id);

        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('fakultas', 'Nama Fakultas', 'required');
        $this->form_validation->set_rules('prodi', 'Program Studi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('admin/editfakultas', $data);
            $this->load->view('template/footer');
        } else {
            // Proses update data
            $this->M_fakultas->ubahDataFakultas($id);
            $this->session->set_flashdata('success', 'Data fakultas berhasil diubah.');
            redirect('administrator/fakultas');
        }
    }
    public function hapus($id) {
        $this->M_fakultas->hapusDataFakultas($id);
        $this->session->set_flashdata('success', 'Data fakultas berhasil dihapus.');
        redirect('administrator/fakultas');
    }

}