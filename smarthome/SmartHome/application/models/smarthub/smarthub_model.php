<?php
class smarthub_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('cookie');
        $this->load->library('core/user');
    }
    public function getDate($timestamp){
    	$datetime = new DateTime(gmdate("Y-m-d\TH:i:s\Z", $timestamp));
    	$la_time = new DateTimeZone("Asia/Bangkok");
    	$datetime->setTimezone($la_time);
    	return $datetime->format('l, F j, Y');
    }
    public function getTime($timestamp){
    	$datetime = new DateTime(gmdate("Y-m-d\TH:i:s\Z", $timestamp));
    	$la_time = new DateTimeZone("Asia/Bangkok");
    	$datetime->setTimezone($la_time);
    	return $datetime->format('H:i A');
    }
    
    public function loadHub($limit, $offset, $content ){   
    		$this->db->select("*");
    		$this->db->from('smh_user_hub');
    		$this->db->join('smh_smarthub', 'smh_smarthub.MessageId = smh_user_hub.MessageId');
    		if($content != null){
    			$this->db->like('smh_smarthub.MessageContent', "{$content}", 'both');    		 
    		}else{
    			$this->db->limit($limit,$offset);
    		}
    		$this->db->where('smh_user_hub.user', get_cookie('smr_username'));
    		$this->db->order_by("DateTime", "desc"); 
    		$query = $this->db->get();
     		$array_message = $query->result_array();
    		$i=0;
    		$id = time();
    		$data = Array();
    		foreach($array_message as $message){ 
    			$data[$i]['DateTime'] = $message['DateTime'];
    			$data[$i]['Time'] = $this->getTime($message['DateTime']);
    			$data[$i]['Date'] = $this->getDate($message['DateTime']);
    			$data[$i]['MessageId'] = $message['MessageId'];
    			$data[$i]['MessageContent'] = $message['MessageContent']; 
    			$data[$i]['IconMessage'] = $message['IconMessage']; 
    			$data[$i]['Title'] = $message['Title'];
    			$data[$i]['Reference'] = $message['Reference'];
    			$data[$i]['status'] = $message['status']; 
    			$i = $i + 1;
    		}
    		return $data;
    }  
    
	public function creatNotification($messeage, $icon, $title, $reference){
		$this->db->select('*');
		$this->db->from('smh_user');
		//$this->db->join('smh_user', 'smh_user.username = smh_messenger.user');
		$query = $this->db->get();
		$array_user = $query->result_array();
		$id = time(); 
		if($messeage == "" ){
			
		}
		$data['MessageId'] = $id;
		$data['Title'] = $title;
		$data['MessageContent'] = $messeage;
		$data['IconMessage'] = $icon;
		$data['DateTime'] = $id;	
		$data['Reference'] = $reference;
		$this->db->insert('smh_smarthub', $data);
		foreach($array_user as $user){
			$data_user['MessageId'] = $id;
			$data_user['status'] = '0';
			$data_user['user'] = $user['username'] ;
			$this->db->insert('smh_user_hub', $data_user);
		}
		 
	}
	public function deleteNotification($messeageId){
		$this->db->where('MessageId', $messeageId);
		$this->db->delete('smh_user_hub');
		return true;
	}
	public function setRead($messeageId){
		$data = array( 
				'status' => '1'
		);  
		$this->db->update('smh_user_hub', $data, array('MessageId' => $messeageId, 'user' => get_cookie('smr_username')));
 		return true;
	}
}
