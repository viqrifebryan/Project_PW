<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class User extends CI_Controller{
		public function index(){
			$id = $this->input->get('id');
			
			$this->load->model('m_user');
			$data['response'] = $this->m_user->get($id);
			echo var_dump($data);
		}
	}
?>