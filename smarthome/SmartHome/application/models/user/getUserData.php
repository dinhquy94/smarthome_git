<?php
class getUserData extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function loadAllUser(){   
    		$this->db->select('*');
    		$this->db->from('smh_user');
    		//$this->db->join('smh_user', 'smh_user.username = smh_messenger.user');
    		$query = $this->db->get();
    		$array_user = $query->result_array(); 
       	return  $array_user;    
    } 
   // public function getRealName($u){
    	
    //}
}
