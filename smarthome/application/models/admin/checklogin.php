<?php

class checklogin extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	} 
	public function isLogin($username, $password){
		$query = $this->db->get_where('smh_user', array('username' => $username, 'password' => $password));
		if($query->result_array()){
			return true;
		}else{
			return false;
		}
	}
}