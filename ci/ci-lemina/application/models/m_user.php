<?php
class m_user extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get($id = null){
		if($id != null){
			$perintah = $this->db->get_where('users', ['id'=>$id]);
			return $perintah->result_array();
		}
		$perintah = $this->db->get('users');
		return $perintah->result_array();
	}
}
?>