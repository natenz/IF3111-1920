<?php

class Createlapor extends CI_Controller
{
    public function index()
    {
        $this->load->view('createLapor');
    }

    function __construct()
    {
        parent::__construct();
        $this->load->model('Lapor_model');
    }

    public function kirimKomen()
    {
        $data = array(
            'komentar' => $this->input->post('komentar'),
            'lampiran' => $this->input->post('lampiran'),
            'waktu' => date('Y-m-d 00:00:00', strtotime($this->input->post('waktu'))),
            'aspek' => $this->input->post('aspek'),
        );
        $this->load->view('createLapor', $data);
    }

    public function aksikirimKomen()
    {
        $this->load->model('Lapor_model');
        $this->Lapor_model->tambah($data);
        redirect(base_url() . 'index.php/Createlapor');
    }
}
