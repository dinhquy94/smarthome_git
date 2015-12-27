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
	public function getInfo($username){
	$query = $this->db->get_where('smh_user', array('username' => $username));
	$data = $query->result_array();
	if(is_array($data)){
		return	$data ;
	}else return false;		
	}
	 
	public function add($info){ 
		$this->db->insert('smh_user', $info);
		return true;
	}
	 
}