<?php
class model_messenger extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function sendMessage($data){
    	$this->db->insert('smh_messenger', $data);
    	return true;
    }
    public function loadMessage($user, $recieve, $page){ 
    	$limit = 50;
    	$offset = $limit * ($page - 1);
    	if($user == null){
    		$this->db->select(Array('user', 'RealName','profileImg', 'message', 'send_date', 'Message_Id'));
    		$this->db->from('smh_messenger');
    		$this->db->join('smh_user', 'smh_user.username = smh_messenger.user');
    		$this->db->limit($limit,$offset);
    		$this->db->order_by("send_date", "desc");
    		$this->db->where(array('recieveId' => null));
    		$query = $this->db->get();
    		//$query = $this->db->order_by("send_date", "desc")->get_where('smh_messenger', array('recieveId' => null), $limit, $offset) ;
    		$array_message = $query->result_array();
    	}else{
    		$this->db->select(Array('user','RealName', 'profileImg', 'Message_Id','message', 'send_date'));
    		$this->db->from('smh_messenger');
    		$this->db->join('smh_user', 'smh_user.username = smh_messenger.user');
    		$this->db->limit($limit,$offset);
    		$this->db->order_by("send_date", "desc");
    		$this->db->where(array('recieveId' => null)); 
    		$query = $this->db->get();
    		//$query = $this->db->order_by("send_date", "desc")->get_where('smh_messenger', array( 'recieveId' => null), $limit, $offset) ;
    		$array_message = $query->result_array();
    	}   
       	return array_reverse($array_message);
    }
    public function setRead($Message_Id){
    	$this->db->where('Message_Id', $Message_Id)->update('smh_messenger', array('status' => 'read'));
    	$query = $this->db->get_where('smh_messenger', array('status' => 'read', 'Message_Id' => $Message_Id));
    	return $query->result_array(); 
    }
}
