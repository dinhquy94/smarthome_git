<?php
class category_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getCategory(){
        $query = $this->db->get("smh_category"); 
        return $query->result_array();
        
    } 
    public function isEmptyDevice($CategoryId, $room){    	
    $this->db->select('*');
    $this->db->from('smh_category');
    $this->db->join('smh_device', 'smh_device.DeviceCatagory = smh_category.CategoryId');  
    $this->db->join('smh_room', 'smh_device.RoomId = smh_room.RoomId');
    $this->db->where(array('CategoryId' => $CategoryId, 'smh_device.RoomId'=> $room));
    $query = $this->db->get();
    $array_message = $query->result_array();
    return count($array_message);  
    }
   
}
