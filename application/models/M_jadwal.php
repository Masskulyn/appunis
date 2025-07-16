<?php
class M_jadwal extends CI_Model {

    // Ambil daftar prodi dari tabel fakultas
    public function get_all_prodi() {
        $this->db->distinct();
        $this->db->select('prodi');
        $this->db->from('fakultas');
        return $this->db->get()->result();
    }
    //tambah data jadwal
    public function tambahDataJadwal() {
        $data = [
            "prodi"          => $this->input->post('prodi', true),
            "mk"             => $this->input->post('mk', true),
            "semester"       => $this->input->post('semester', true),
            "hari"           => $this->input->post('hari', true),
            "jam"            => $this->input->post('jam', true),
            "nama"           => $this->input->post('nama', true),
            "ruangan"        => $this->input->post('ruangan', true),
        ];

        $this->db->insert('jadwal_kuliah', $data);
    }
    //edit data jadwal
    public function ubahDataJadwal($id) {
        $data = [
            "prodi"        => $this->input->post('prodi', true),
            "mk"           => $this->input->post('mk', true),
            "semester"     => $this->input->post('semester', true),
            "hari"         => $this->input->post('hari', true),
            "jam"          => $this->input->post('jam', true),
            "nama"   => $this->input->post('nama', true),
            "ruangan"      => $this->input->post('ruangan', true),
        ];
        $this->db->where('id', $id);
        $this->db->update('jadwal_kuliah', $data);
    }   
    //hapus data jadwal
    public function hapusDataJadwal($id) {
        $this->db->delete('jadwal_kuliah', ['id' => $id]);
    }

    // Ambil data jadwal berdasarkan prodi
    public function get_jadwal_by_prodi($prodi) {
        $this->db->where('prodi', $prodi);
        return $this->db->get('jadwal_kuliah')->result();
    }
    // Hitung jumlah jadwal
    public function hitungJumlah() {
        return $this->db->query("SELECT COUNT(*) as total FROM jadwal_kuliah")->row()->total;
    }
    public function getJadwalById($id) {
    return $this->db->get_where('jadwal_kuliah', ['id' => $id])->row(); // kembalikan sebagai objek
}

}