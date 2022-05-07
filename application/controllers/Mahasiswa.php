<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('M_mahasiswa','',TRUE);	
	}	

	public function index() {
		$data['mahasiswa']=$this->M_mahasiswa->tampil_data_mahasiswa();
		$this->load->view('v_tampil_mahasiswa',$data);	
	}
	

}
?>
