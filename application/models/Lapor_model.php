<?php
class Lapor_model extends CI_Model
{
    public function tampil_lapor()
    {
        $query= $this->db->query("SELECT * FROM komentar ORDER BY id_comment ASC")->result_array();
        return $query;
    }

    public function tampil_lengkap($idkom)
    {
        $this->db->select('*');
        $this->db->from('komentar');
        $this->db->where('id_comment', '$idkom');
    }
}
