 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class remoteController extends CI_Controller {
     function __construct(){    
        parent::__construct();
    }
    public function index()
    {
    	$this->load->view('remote/remote_view');
    }
}
 