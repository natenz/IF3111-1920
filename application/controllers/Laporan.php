<?php

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lapor_model');
    }
    public function index()
    {
        $data=array('data'=>$this->Lapor_model->tampil_lapor());
        $this->load->view('lapor',$data);
    }
    public function cari(){
        $this->load->view('lapor');
    }
    public function search(){
        $dicari=array('data'=>$this->lapor_model->get_cari());
        $this->load->view('lapor',$dicari);
    }
   
}
