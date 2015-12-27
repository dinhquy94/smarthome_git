<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
     function __construct(){  
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('core/user');
    }
	public function setLogin()
		{
			$username = $_POST['username'];
			$password = base64_encode($_POST['mk_password']);
			if($this->user->login($username,$password )){
				$this->load->model('smarthub/smarthub_model');
				$this->smarthub_model->creatNotification("{$this->user->getRealName($username)} đã đăng nhập vào hệ thống!", 'ion-person', 'EZSmarthome', "home");
				echo 'success';
			}else{
				echo 'fail';
				die;
			}
		} 

		public function login()
		{
			$this->load->view('login/login');
		}
		
	public function logout(){
			$this->user->logout();			
			header('Location:'.base_url().'index.php/');
		}
}
