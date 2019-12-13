<?php

class Tampilan2 extends CI_Controller
{
    public function index()
    {
        $this->load->view('tampilan2');
    }

    public function kirimKomen()
    {
        $komentar = $this->input->post('komentar');
        $this->db->query("insert into lapor values ('$komentar')");
        redirect('', 'refresh');
    }
}
