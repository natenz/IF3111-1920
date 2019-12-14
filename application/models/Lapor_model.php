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
    public function ambil(){
        return $this->db->get('keyword');
    }
    public function get_cari($keyword){
        $cari=$this->input->GET('cari',TRUE);
        $data2=$this->db->query("SELECT*from komentar where komentar like '%cari '");
        return $data2->lapor();
        
    }
        
}
