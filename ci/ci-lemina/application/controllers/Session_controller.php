<?php
class Session_controller extends CI_Controller{
	public function index(){
		//load library, biar sessi
		$this->load->library('session');
		//set sessi
		$this->session->set_userdata('name','anjas');
		
		$this->load->view('session_view');
	}
	public function unset_setting_data(){
		//load library lagi
		$this->load->library('session');
		//unset sessi
		$this->session->unset_userdata('name');
		
		$this->load->view('session_view');
	}
}
?>