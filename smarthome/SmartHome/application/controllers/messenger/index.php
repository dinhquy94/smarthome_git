<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {
     function __construct(){   
     	parent::__construct(); 
        $this->load->model('messenger/model_messenger');
     	$this->load->library('core/user');
     	if(!$this->user->isLogin()){die;}
    } 
	public function index()
		{
			$this->load->view('messenger/view_messenger');
		}
	public function sendMessage(){
	 
		if($this->user->isLogin()){
			$message = $_POST['message'];
			$data = Array('user' => $this->user->getUsername(), 'message' => $message, 'MessageType' => 'text', 'status' => 'unread', 'send_date' => date("Y-m-d H:i:s") );
			$this->model_messenger->sendMessage($data);		 
			echo 'success';
			
			$this->load->model('smarthub/smarthub_model'); 
			$this->smarthub_model->creatNotification($message, 'ion-email-unread', $this->user->getRealName($this->user->getUsername()), 'messenger');
		}else echo 'fail';		
	}	
	public function loadMessage($reciever, $page){
		if($this->user->isLogin()){
			$message = $this->model_messenger->loadMessage($this->user->getUsername(), $reciever ,$page );
			echo  json_encode($message);
		}else echo 'fail'; 
	}
	public function loadCurrenUser(){
		if($this->user->isLogin()){
			$data  = Array();
			$data = $this->user->getUserData($this->user->getUsername());			 
			echo  json_encode($data);
		}else echo 'fail';
	}
 
	public function loadNewMessage($reciever){
		if($this->user->isLogin()){
			$message = $this->model_messenger->loadNewMessage($this->user->getUsername(), $reciever );
			echo  json_encode($message);
		}else echo 'fail';
	} 
	public function setRead($Message_Id){
		if($this->user->isLogin()){
			$status = $this->model_messenger->setRead($Message_Id );
			echo  json_encode($status);
		}else echo 'fail';
	}
}
