<?php 
// menghitung jumlah fakultas
class M_fakultas extends CI_Model {
    public function __construct() {
        parent::__construct(); // 
    }
    public function get_all() {
        return $this->db->get('fakultas')->result_array();
    }
    public function tambahdatafakultas() {
        $data = [
            "id"                => $this->input->post('id', true),
            "fakultas"          => $this->input->post('fakultas', true),
            "prodi"             => $this->input->post('prodi', true),
        ];

        $this->db->insert('fakultas', $data);
    }
    // Ambil data 1 fakultas
    public function getFakultasById($id) {
        return $this->db->get_where('fakultas', ['id' => $id])->row_array();
    }
    // Proses update data fakultas
    public function ubahDataFakultas($id) {
        $data = [
            "id"            => $this->input->post('id', true),
            "fakultas"          => $this->input->post('fakultas', true),
            "prodi"         => $this->input->post('prodi', true),
        ];
        $this->db->where('id', $id);
        $this->db->update('fakultas', $data);
    }
    // Hapus data fakultas
    public function hapusDataFakultas($id) {
        $this->db->delete('fakultas', ['id' => $id]);
    }
    // Hitung jumlah fakultas
    public function hitungJumlah() {
        return $this->db->query("SELECT COUNT(*) as total FROM fakultas")->row()->total;
    }
    public function get_all_dosen() {
    $this->db->distinct();
    $this->db->select('nama_dosen');
    $this->db->from('jadwal_kuliah');
    return $this->db->get()->result();
    }

}
?>