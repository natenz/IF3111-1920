<?php
class Lapor_model extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('komentar', $data);
    }

    public function tampil_lapor()
    {
        $data = $this->db->query("SELECT * FROM `komentar` ORDER BY `komentar`.`id_comment` ASC");
        return $data->result_array();
    }

    public function tampil_lengkap($idkom)
    {
        $this->db->select('*');
        $this->db->from('komentar');
        $this->db->where('id_comment', $idkom);
        $data = $this->db->get();
        return $data->result_array();
    }

    public function hapus($idkom)
    {
        $this->db->select('*');
        $this->db->from('komentar');
        $this->db->where('id_comment', $idkom);
        $this->db->delete('komentar');
    }

    public function ubah($data, $idkom)
    {
        $this->db->select('*');
        $this->db->from('komentar');
        $this->db->where('id_comment', $idkom);
        $this->db->update('komentar', $data);
    }
}
