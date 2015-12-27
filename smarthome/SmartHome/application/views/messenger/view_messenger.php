 <ion-view style="padding-bottom: 139px;  " title="Chat with home"> 
         <?php
			$CI =& get_instance();
			$CI->load->library('core/user');
			$CI->load->model('messenger/model_messenger');
			$CI->load->model('admin/checklogin');
			if($CI->user->isLogin()){
			}else{
				echo ' <ion-content class="padding">
      						  <ul class="list">   
									<a href="#/tab/welcome" class="button icon-right ion-chevron-right button-calm">Please login to home</a>
					 		  </ul>
						</ion-content>
					'; 
				exit;
			}
		?> 
   <div class="padding" id="scroll-top" style="border:1px solid black;width:100%;height:100%;overflow:auto; margin-top: 40px; margin-bottom: 100px;"  >  
    	<div id="main-message"  >
    <!-- 	<?php $messages = $CI->model_messenger->loadMessage(null, 'null', 1) ?>
	    <?php foreach ($messages as $message): ?>
	    	<?php if($message['user'] != $this->user->getUsername()):?>
	    <div>
	     <div style = "float: left; font-size: 12px; margin-left: 60px; color: #BBBBBB; font-style: italic;"><?php echo $message['user'].' - '.$message['send_date']; ?></div>
	    </div>
	     <br>
	      <div  id="<?php echo 'message'.$message['Message_Id']; ?>" style="width: 100%; height: 100%; padding: 5px; float: left">
	     	 <img style=" border-radius: 50%; height: 40px; width: 40px ; margin-left: 8px;  margin-right: 8px;float: left;" src="<?php echo base_url()."application/views/template/img/messenger/". $CI->checklogin->getInfo($message['user'])[0]['profileImg'] ?> ?>">	
	     	<div style="float: left; max-width: 70%" class="alert alert-success" role="alert"><?php echo $message['message']; ?></div>
	     </div>
	     <br>
	     <?php else: ?>
	     <div>
	     <div style = "float: right; font-size: 12px; margin-left: 60px; color: #BBBBBB; font-style: italic;"><?php echo $message['user'].' - '.$message['send_date']; ?></div>
	    </div>
	     <br>
	      <div  id="<?php echo 'message'.$message['Message_Id']; ?>" style="width: 100%; height: 100%; padding: 5px; float: right">
	     	 <img style=" border-radius: 50%; height: 40px; width: 40px ; margin-left: 8px;  margin-right: 8px;float: right;" src="<?php echo base_url()."application/views/template/img/messenger/". $CI->checklogin->getInfo($message['user'])[0]['profileImg'] ?> ?>">	
	     	<div style="float: right; max-width: 70%" class="alert alert-info" role="alert"><?php echo $message['message']; ?></div>
	     </div>
	     <br>
	       <?php endif; ?>
	    <?php endforeach; ?>
	     -->
	   </div>
	 
	    </div>
	   
	  
</ion-view>
<div class="bar bar-footer"  style=" margin-bottom: 56px;">
   <div  class="bar bar-header item-input-inset  ">		  
		  <label class="item-input-wrapper">
		    <i class="icon  ion-paper-airplane"></i>
		    <input id="new_message" onkeypress="uniCharCode(event)" type="search" placeholder="Enter some text">
		  </label>
		  <button class="button button-clear"  onclick="send_messageAction()">
		    Send
		  </button>
		</div> 
</div>
