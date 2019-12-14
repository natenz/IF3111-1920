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

   
}
