<?php

class Viewlapor extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Lapor_model');
    }

    public function index()
    {
        $ambil = array('data' => $this->Lapor_model->tampil_lapor());
        $this->load->view('viewLapor', $ambil);
    }

    public function getLaporbyId($idkom)
    {
        $ambil = array('data' => $this->Lapor_model->tampil_lengkap($idkom));
        $this->load->view('viewLapor', $ambil);
    }

    public function hapus($idkom)
    {
        $delete = $this->Lapor_model->hapus($idkom);
        if (!$delete) {
            echo "Sukses";
        } else {
            echo "Tidak Sukses";
        }
    }

    public function ubah($idkom)
    {
        $this->load->model('Lapor_model');
        $data = array(
            'komentar' => $this->input->post('komentar'),
            'lampiran' => $this->input->post('lampiran'),
            'waktu' => date('Y-m-d 00:00:00', strtotime($this->input->post('waktu'))),
            'aspek' => $this->input->post('aspek'),
        );

        if ($this->input->post('ubah')) {
            if ($this->Lapor_model->validation("update")) {
                $this->Lapor_model->ubah($idkom);
                redirect('komentar');
            }
        }
        $this->load->view('layout', $data);
    }
}
