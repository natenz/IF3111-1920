<?php
class Lapor extends CI_Controller{
    function beranda(){
        $this->load->view('beranda.php');
    }
    function masuk(){
		$this->load->view('login');
	}
}