<?php 
class D_dosen extends CI_Model {
    public function __construct() {
        parent::__construct(); // 
    }

    public function get_all() {
        return $this->db->get('dosen')->result_array();
    }
    public function tambahdatadosen() {
        $data = [
            "nidn"          => $this->input->post('nidn', true),
            "nama"          => $this->input->post('nama', true),
            "pendidikan"    => $this->input->post('pendidikan', true),
            "agama"         => $this->input->post('agama', true),
            "asalpt"        => $this->input->post('asalpt', true),
            "email"         => $this->input->post('email', true),
            "alamat"        => $this->input->post('alamat', true),
        ];

        $this->db->insert('dosen', $data);
    }
    // Ambil data 1 dosen
    public function getDosenById($id) {
        return $this->db->get_where('dosen', ['id' => $id])->row_array();
    }
    // Proses update data dosen
    public function ubahDataDosen($id) {
        $data = [
            "nidn"          => $this->input->post('nidn', true),
            "nama"          => $this->input->post('nama', true),
            "pendidikan"    => $this->input->post('pendidikan', true),
            "agama"         => $this->input->post('agama', true),
            "asalpt"        => $this->input->post('asalpt', true),
            "email"         => $this->input->post('email', true),
            "alamat"        => $this->input->post('alamat', true),
        ];
        $this->db->where('id', $id);
        $this->db->update('dosen', $data);
    }

    // Hapus data dosen
    public function hapusDataDosen($id) {
        $this->db->delete('dosen', ['id' => $id]);
    }

    // Hitung jumlah dosen
    public function hitungJumlah() {
        return $this->db->query("SELECT COUNT(*) as total FROM dosen")->row()->total;
    }
}
