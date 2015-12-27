<?php
class process extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function status(){
         $this->load->library('gethardware');
         $html = $this->gethardware->getData(hubdata);
         preg_match_all("/<relay(.*?)>(.*?)<\/relay(.*?)>/i", $html, $result );
         $_status = $result[2];
         $_port = $result[1];
         $port_result = Array();
         foreach($_status as $i=>$status_detail){  
            $port_result[] = Array( 'port' => $_port[$i], 'status' => $status_detail );
         }
         return $port_result;
    }
    public function updatedata(){
    	$this->load->library('maincontrol');
    	$this->maincontrol->sendCommand('updateTemp');
         $this->load->library('gethardware');
         $this->load->library('thicalculator');         
         $html = $this->gethardware->getData(hubdata);     
         preg_match("/<temp>(.*?)<\/temp>/i", $html, $result );                
         preg_match("/<humidity>(.*?)<\/humidity>/i", $html, $result_humid ); 
        $this->load->helper('date'); 
        $date = date('l, F j, Y');
        $time = date('H:i A');
        $weather = "Underfine"; 
        if($result[1] < 20){
            $weather = "Cloud - Not raining";
        }else{
            $weather = "Hot - Not raining";
        }
        $CI =& get_instance();  
        $CI->load->model('weather/weather_model');  
		$saved = $CI->weather_model->load();
		$country = $saved[0]['LocationCountry'];
		$state = $saved[0]['LocationState'];
        $location = $state.', '.$country ; 
        $thi = $this->thicalculator->calculator($result[1], $result_humid[1] );
        $judge = $this->thicalculator->judge($thi );
        $json[] = Array('humidity'=> $result_humid[1],
        				'weather' =>$weather, 
        				'temp'=> $result[1], 
        				'datetime'=>  $date, 
        				'time'=> $time, 
        				"location"=> $location,
        				"thi" => $thi,
        				"judge" => $judge 
        		); 
        return $json;
    }
}