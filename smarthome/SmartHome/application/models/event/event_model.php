<?php
class event_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getSomething(){
        $query = $this->db->get("smh_eventCollection");
        return $query->result_array();
        
    }
   
}
