<?php
class getdata extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function listall(){
        $query = $this->db->get("smh_room");
        return $query->result_array();
        
    }
    public function getDevice(){
        $query = $this->db->get("smh_device");
        return $query->result_array();
    }
    public function getDeviceById($room_id){
        $query = $this->db->get_where('smh_device', array('RoomId' => $room_id));
        return $query->result_array();
    }
}