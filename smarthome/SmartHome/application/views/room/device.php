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

        <?php if(count($device)== 0) echo '<div style="text-align: center;   margin-top: 50px;"><img style = "width: 64px; height: 64px;" src="'.base_url().'application/views/template/img/app-icon.png">
				          		 <br>No device in this room  </div>' ; ?> 
        <?php foreach($device as $item ): ?>       
            <li class="item item-toggle">
            <i style="float: left; margin-right: 10px; color: SandyBrown; font-size: 25px;" class="icon <?php echo $item['icon']; ?>"></i>
            <?php echo $item['DeviceName']; ?>
                <label class="toggle toggle-balanced "> 
                    <input id="<?php echo $item['IdPort']; ?>" type="checkbox"  onchange="turnOnDevice('<?php echo $item['IdPort']; ?>', this)">
                 	<div class="track">
                         <div class="handle"></div>
                    </div>
                </label> 
            </li> 
            <?php if($item['DeviceType'] == 'custom'): ?>
             <div  style="display:none" id="<?php echo 'custom'.$item['IdPort'] ?>"  class="item range range-positive"  >             
				    <i  class="icon ion-arrow-left-b" ></i>
				    <input type="range" name="volume" min="0" max="100" value="33"  onchange="demo()" >
				    <i class="icon ion-arrow-right-b"></i>
				  </div> 
			<?php endif ; ?>
        <?php endforeach; ?>
        </ul>  
    </ion-content>
</ion-view>
