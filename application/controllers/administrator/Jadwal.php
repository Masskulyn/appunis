<?php
#[\AllowDynamicProperties]
class Jadwal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_jadwal');
    }

    public function index() {
        $data['title'] = 'Pencarian Jadwal';
        $data['prodi_list'] = $this->M_jadwal->get_all_prodi();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        
       

        $prodi = $this->input->get('prodi');
        if ($prodi) {
            $data['jadwal'] = $this->M_jadwal->get_jadwal_by_prodi($prodi);
            $data['selected_prodi'] = $prodi;
        } else {
            $data['jadwal'] = [];
            $data['selected_prodi'] = '';
        }

        $this->load->view('admin/jadwal', $data);
         $this->load->view('template/footer');
    }
    public function tambahjadwal() {
        $data['title'] = 'Tambah Jadwal';
        $this->form_validation->set_rules('prodi', 'Program Studi', 'required');
        $this->form_validation->set_rules('mk', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('nama', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required');

        if ($this->form_validation->run() == false) {
            $data['prodi_list'] = $this->M_jadwal->get_all_prodi();
            $data['dosen_list'] = $this->db->get('dosen')->result(); // ambil data dosen
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('admin/tambahjadwal');
            $this->load->view('template/footer');
        } else {
            // Proses simpan data
            $this->M_jadwal->tambahdatajadwal();
            $this->session->set_flashdata('success', 'Data jadwal berhasil ditambahkan.');
            redirect('administrator/jadwal');
        }
    }
    public function edit($id) {
        $data['title'] = 'Edit Jadwal';
        $data['jadwal'] = $this->M_jadwal->getJadwalById($id);
        $data['prodi_list'] = $this->M_jadwal->get_all_prodi();
        $data['dosen_list'] = $this->db->get('dosen')->result(); // ambil data dosen
        $this->form_validation->set_rules('prodi', 'Program Studi', 'required');
        $this->form_validation->set_rules('mk', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('nama', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('admin/editjadwal', $data);
            $this->load->view('template/footer');
        } else {
            // Proses update data
            $this->M_jadwal->ubahDataJadwal($id);
            $this->session->set_flashdata('success', 'Data jadwal berhasil diubah.');
            redirect('administrator/jadwal'); // jika controller tidak di dalam folder administrator

        }
    }
    public function hapus($id) {
        $this->M_jadwal->hapusDataJadwal($id);
        $this->session->set_flashdata('success', 'Data jadwal berhasil dihapus.');
        redirect('administrator/jadwal');
    }

}