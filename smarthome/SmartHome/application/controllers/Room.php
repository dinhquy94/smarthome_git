<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {
     function __construct(){    
        parent::__construct();
    }
	public function index()
	{
       echo 'thiss ';
       return 0;
	}
	
	public function room()
	{
        $this->load->model('getdata');        
        $my_data['rooms'] = $this->getdata->listall();             
		$this->load->view('room/room', $my_data);
	}
	
    public function device($room_id)
	{
        $this->load->model('getdata');
        $data['device'] = $this->getdata->getDeviceById($room_id);
        $data['RoomId'] =  $room_id;
		$this->load->view('room/device', $data);
	}
    public function getDemo(){          
        $this->load->library('gethardware');
        $this->load->model('process');        
        echo json_encode($this->process->status());   
    }
    
    public function updatedata(){          
	    $this->load->library('gethardware');
	    $this->load->model('process');        
	    echo json_encode($this->process->updatedata());   
    }
    public function updateTemmp(){
    	$this->load->library('maincontrol');
    	$this->maincontrol->sendCommand('updateTemp');
    	echo 'success';
    }
    public function switch_device($idport, $value){
    	$this->load->library('maincontrol');
    	if($value == 'On'){
    		$this->maincontrol->sendCommand('?relay'.$idport.'On');
    	}else{
    		$this->maincontrol->sendCommand('?relay'.$idport.'Off');
    	} 
    	echo 'success';
    }
    
    
    public function ipcamera(){          
	    $this->load->view('room/ipcamera');
       }
    
    public function home()
	{
		$this->load->view('room/home');
	}
}
