<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class smarthubController extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index(){ 
		$this->load->model('smarthub/smarthub_model');
		$data['messages'] = $this->smarthub_model->loadHub(20,0);
		$this->load->view('smarthub/index', $data);
	}
	public function setRead(){
		$this->load->library('core/user');
		if(!$this->user->isLogin()){die;}
		if(!isset($_POST['messagesId'])){die;}
		$this->load->model('smarthub/smarthub_model');
		$MessageId = $_POST['messagesId'];
		$this->smarthub_model->setRead($MessageId);
		echo 'success';
	}
	public function loadData(){
		$this->load->model('smarthub/smarthub_model');
		$data['messages'] = $this->smarthub_model->loadHub(20,0, null);
		$this->load->view('smarthub/reload', $data);
	}
	public function seachHub(){
		if(isset($_POST['seachvalue'])){
			$content = $_POST['seachvalue'];
		$this->load->model('smarthub/smarthub_model');
		$data['messages'] = $this->smarthub_model->loadHub(20,0, $content);
		$this->load->view('smarthub/reload', $data);
 
		} 
	} 
	public function add($message, $icon){ 
		 $this->load->library('core/user');
         var_dump($this->user->getRealName('admin'));
		$this->load->model('smarthub/smarthub_model');
		$this->smarthub_model->creatNotification('demo message', 'ion-ionic', 'demo title', "hgfdfg");
	}
	 
}
