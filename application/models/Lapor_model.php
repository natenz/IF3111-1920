<?php
class Lapor_model extends CI_Model
{
    public function tampil_lapor()
    {
        $data = $this->db->query("SELECT * FROM `komentar` ORDER BY `komentar`.`id_comment` ASC");
        return $data->result_array();
    }

    public function tampil_lengkap($idkom)
    {
        $this->db->select('*');
        $this->db->from('komentar');
        $this->db->where('id_comment', '$idkom');
    }
}
