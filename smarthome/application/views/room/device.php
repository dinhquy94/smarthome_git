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
        <ul class="list">       

        <?php if(count($device)== 0) echo 'No Device in this Room' ; ?> 
        <?php foreach($device as $item ): ?>       
            <li class="item item-toggle">
            <?php echo $item['DeviceName']; ?>
                <label class="toggle toggle-balanced ">
                    <input id="<?php echo $item['IdPort']; ?>" type="checkbox"  onchange="turnOnDevice('<?php echo $item['IdPort']; ?>')">
                    <div class="track">
                         <div class="handle"></div>
                    </div>
                </label>
            </li> 
        <?php endforeach; ?>
        </ul>  
    </ion-content>
</ion-view>
