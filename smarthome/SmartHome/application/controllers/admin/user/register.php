<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
     function __construct(){     
     	
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('core/user');      
        $this->load->model('admin/checklogin'); 
    } 
	public function createnew()
		{
			$username = $_POST['username'];
			$password = base64_encode( $_POST['password'] );
			$email = $_POST['email'];
			$fullname = $_POST['fullname'];
			if($this->user->isLogin()){
				$data = Array('username' => $username, 'password' => $password, 'Email' => $email, 'FullName' => $fullname );
				$this->checklogin->add($data);
				echo 'success';
			}else echo 'fail';
		}
		public function manageAccount()
		{  
			$this->load->model('user/getUserData');
			$data['datauser'] = $this->getUserData->loadAllUser();
		//	var_dump($data['datauser']); exit;
		//	var_dump($data); exit;
			$this->load->view('user/manageaccount', $data );
		}
	public function index()
	{		
		$this->load->view('user/register');
	}
	
	 
}
