<?php 
class M_mhs extends CI_Model {
    public function __construct() {
        parent::__construct(); // 
    }

    public function get_all() {
        return $this->db->get('mhs')->result_array();
    }
    public function tambahdatamahasiswa() {
        $data = [
            "nim"           => $this->input->post('nim', true),
            "nama"          => $this->input->post('nama', true),
            "alamat"        => $this->input->post('alamat', true),
            "jk"            => $this->input->post('jk', true),
            "agama"         => $this->input->post('agama', true),
            "sekolah_asal"  => $this->input->post('sekolah_asal', true),
            "email"         => $this->input->post('email', true),
        ];

        $this->db->insert('mhs', $data);
    }
    // Ambil data 1 mahasiswa
    public function getMahasiswaById($id) {
        return $this->db->get_where('mhs', ['id' => $id])->row_array();
    }
    // Proses update data
    public function ubahDataMahasiswa($id) {
        $data = [
            "nim"           => $this->input->post('nim', true),
            "nama"          => $this->input->post('nama', true),
            "alamat"        => $this->input->post('alamat', true),
            "jk"            => $this->input->post('jk', true),
            "agama"         => $this->input->post('agama', true),
            "sekolah_asal"  => $this->input->post('sekolah_asal', true),
            "email"         => $this->input->post('email', true),
        ];
        $this->db->where('id', $id);
        $this->db->update('mhs', $data);
    }

    // Hapus data
    public function hapusDataMahasiswa($id) {
        $this->db->delete('mhs', ['id' => $id]);
    }
    // Hitung jumlah mahasiswa
    public function hitungJumlah() {
        return $this->db->query("SELECT COUNT(*) as total FROM mhs")->row()->total;
    }
}
