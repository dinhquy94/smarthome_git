<ion-view title="Fire Alarm">
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
    <div class="card">
  <div class="item item-text-wrap">
   		There are all of zone 's your home, please check the alarm!    
   		<div style="margin: 5px ;  float: right;">
	   		<br>
	   		<button class="button button-outline button-energized">
	 		 	Set all are safety
			</button>
		
		</div>
  </div>

</div>
		 <div class="list"> 
			<?php foreach($rooms as $room): ?>
			<button id="alarm-<?php echo $room['RoomId']?>" class="button button-full  button-positive">
					<i style="float: left; " class="icon <?php echo $room['icon'] ?>">
                    <label style="margin-left: 15px;" ><?php echo $room['RoomName']?></label>
					<label>-</label>
					<label id="notice-<?php echo $room['RoomId']?>">Safety </label>                        
					</i>			
			</button>
			<?php endforeach;?>
		</div>
    </ion-content>
</ion-view>
