<ion-view title="Rooms">
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
            <div class="list">
                    <?php foreach($rooms as $room): ?>
                      <a class="item item-icon-left item-icon-right" href="#tab/device<?php echo $room['RoomId'] ?>">
                        <i class="icon <?php echo $room['icon'] ?>"></i>
                        <?php echo $room['RoomName'] ?>
                        <i class="icon ion-ios-settings-strong"></i>
                      </a>                     
                    <?php endforeach; ?>
            </div>
    </ion-content>
</ion-view>
