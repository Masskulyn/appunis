<?php 
// menghitung jumlah fakultas
class M_fakultas extends CI_Model {
    public function hitungJumlah() {
        return $this->db->query("SELECT COUNT(*) as total FROM fakultas")->row()->total;
    }
}
?>