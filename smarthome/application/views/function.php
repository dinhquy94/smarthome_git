

 <ion-view id = "devicec" title="Device">
          <?php 
			$CI =& get_instance();
			$CI->load->library('core/user');
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
    <ion-content class="padding">
         <div class="list card">
                
                <a href="#" class="item item-icon-left">
                <i class="icon ion-home"></i>
                Enter home
                </a>
                
                <a href="#" class="item item-icon-left">
                <i class="icon ion-ios-telephone"></i>
                Door manage
                </a>
                
                <a href="#" class="item item-icon-left">
                <i class="icon ion-wifi"></i>
                View server status
                </a> 
                <a href="" class="item item-icon-left">
                <i class="icon ion-card"></i>
               About this app
                </a>
                <a href='<?php echo base_url().'index.php/'.'admin/login/logout/'?> 'class="item item-icon-left">
                <i class="icon ion-log-out"></i>
                Logout / Switch user
                </a>
        </div>
    </ion-content>
</ion-view>
