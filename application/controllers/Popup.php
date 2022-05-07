<?php

class Popup extends CI_Controller {

    public function __construct() {
        parent::__construct();
    	$this->load->model('M_mahasiswa','',TRUE);
	}
	
	public function ba_beasiswa() {
	$data['detail_mahasiswa']=$this->M_mahasiswa->detail_mahasiswa($this->uri->segment(3));
	$this->load->view('v_popup_ba_beasiswa',$data);
	}
	
}

?>
