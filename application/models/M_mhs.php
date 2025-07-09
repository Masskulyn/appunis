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
}
