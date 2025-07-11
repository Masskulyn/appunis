<?php 
class M_jadwal extends CI_Model {
    public function hitungJumlah() {
        return $this->db->query("SELECT COUNT(*) as total FROM jadwal_kuliah")->row()->total;
    }
} 
?>